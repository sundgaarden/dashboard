<?php


class UserBase extends CActiveRecord
{

    public $password;

	/**
	 * Returns the static model of the specified AR class.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{user}}';
	}


	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array('email, name, publisherid', 'required'),
			array('password, email, name', 'length', 'max'=>255),
            array('password, email, name','filter','filter'=>array($obj=new CHtmlPurifier(),'purify')),
            array('id, name, email, created','safe','on' => 'search'),
		);
	}


     /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'publisher' => array(self::BELONGS_TO, 'Publisher', 'publisherid'),
        );
    }


	 /**
     * Encrypts the password and generates a random salt value before saving a new user
     * to the database.
     * @return boolean true if function was called before saving the revord to the database, false otherwise
     */
    protected function beforeSave() {
        if (parent::beforeSave()) {

            if (!empty($this->password)) {
                $this->salt = $this->genRandomString(64);
                $this->setAttribute('encryptedpassword',$this->hashPassword($this->password,$this->salt));
            }
            return true;
        }
        else
            return false;
    }

    /**
     * Helper function for generating a random string.
     * @param <type> $length the length of the string to be geenrated
     * @return string
     */
    function genRandomString($length) {
        $length = $length;
        $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $string = "";

        for ($p = 0; $p < $length; $p++) {
            $string .= $characters[mt_rand(0, strlen($characters)-1)];
        }

        return $string;
    }

    /**
     * Checks if the provided password parameter corresponds with the password field of this active record.
     * @param string $password a password to validate.
     * @return boolean  true if the validation was successful, false otherwise
     */
    public function validatePassword($password) {
        return $this->hashPassword($password, $this->salt) === $this->encryptedpassword;
    }

    /**
     * Computes a SHA256 hash of the provided password concatenated with the provided salt.
     * @param string $password the password to hash
     * @param string $salt the salt to append to the provided password before hashing
     * @return string the generated hash value
     */
    public function hashPassword($password, $salt) {
        return hash("sha256", $salt . $password);
    }


    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;
        $criteria -> compare('id', $this -> id);
        $criteria -> compare('name', $this -> name, true);
        $criteria -> compare('email', $this -> email, true);
        $criteria -> compare('created', $this -> created, true);

        //$criteria -> order = 'created DESC';

        return new CActiveDataProvider(get_class($this), array('criteria' => $criteria, ));
    }
	


}