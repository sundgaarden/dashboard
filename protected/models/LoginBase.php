<?php
/**
 * LoginBase is the base class for managing user login tasks.
 * 
 * @author Frederik Pedersen
 * @version 1.0
 */

class LoginBase extends CFormModel
{
	public $email;
	public $password;
	public $rememberMe;
	protected $_identity;
	

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('email, password', 'required', 'on'=>'login'),
			// password needs to be authenticated
			array('password', 'authenticate', 'on'=>'login'),

		);
	}


	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$this->_identity=new UserIdentity($this->email,$this->password);
			if(!$this->_identity->authenticate())
				$this->addError('password','Wrong username or password');
		}
	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->email,$this->password);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration= 0; // don't use cookies
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;
	}
	

}
