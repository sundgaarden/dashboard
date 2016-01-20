<?php


class User extends UserBase
{

    /**
     * Returns the static model of the specified AR class.
     * @return User the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

 
    /**
     * Updates an authenticated user login.
     * @return boolean whether update/authentication succeeds.
     */
    public function updateLogin($newemail, $newpassword, $password) {

        $identity =new UserIdentity(Yii::app()->user->name,$password);
        $identity ->authenticate();

        if($identity->errorCode===UserIdentity::ERROR_NONE)
        {
            $usermodel=User::model()->findByPk((int)Yii::app()->user->id);
            if ($newemail!='') {
                $usermodel->email=$newemail;
                Yii::app()->user->name = $newemail;
            } else {
                $usermodel->email=Yii::app()->user->name;
            }
                
            if ($newpassword!='')
            {
                $usermodel->password=$newpassword;
            } else {
                $usermodel->password=$password;
            }
            return $usermodel->save();
        } else {
            return false;
        }    
    }


     /**
     * Creates a new user
     * @return integer with newly created user id
     */
    public function createUser($email, $password, $name) {
        // create user with reference to publisher
        $user = new User;
        $user -> email = $email;
        $user -> password = $password;
        $user -> name = $name;

        // save user
        if ($user->save()) {
            return $user -> id;
        } else {
            return 0;
        } 
    }



}