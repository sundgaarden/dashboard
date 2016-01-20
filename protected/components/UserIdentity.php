<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 * 
 * @author Frederik Pedersen
 * @version 1.0
 */

class UserIdentity extends CUserIdentity {

	private $_id;

	/**
	 * Authenticates a user.
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate() {
		$username = strtolower($this -> username);
		$user = User::model() -> find('LOWER(email)=?', array($username));
		if ($user === null)
			$this -> errorCode = self::ERROR_USERNAME_INVALID;
		else if (!$user -> validatePassword($this -> password))
			$this -> errorCode = self::ERROR_PASSWORD_INVALID;
		else {
			$this -> _id = $user -> id;
			$this -> username = $user -> email;
			$this -> setState('name', $user -> name);
			$this -> setState('dashboardurl', '/dashboard');
			$this -> errorCode = self::ERROR_NONE;
			$this->setSessionParams($user->publisher);

			$roles = Rights::getAssignedRoles($user -> id, true);
			$this -> setState('isAdmin', array_key_exists("Admin",$roles)?1:0);


		}
		return $this -> errorCode == self::ERROR_NONE;
	}

	/**
	 * Returns identity id.
	 * @return integer id.
	 */
	public function getId() {
		return $this -> _id;
	}

	public function setSessionParams($publisher) {
		$this -> setState('publisherName', $publisher -> name);
		$this -> setState('publisherId', $publisher -> id);
		$this -> setState('keenProjectId', $publisher -> keenprojectid);
		$this -> setState('timezoneName', $publisher -> timezone -> name);
		$this -> setState('keenReadKey', $publisher -> keenreadkey);
		$this -> setState('scriptVersion', $publisher -> scriptversion);
		$this -> setState('enableReportingPageviews', $publisher -> enablereportingpageviews);
	}

}
