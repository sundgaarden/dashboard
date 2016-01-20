<?php

class AdmModule extends CWebModule {

	public $defaultController = 'login';

	// set default layout
	public $layout = 'admin';

	///
	/**
	 * @var array the IP filters that specify which IP addresses are allowed to access the module.
	 * Each array element represents a single filter. A filter can be either an IP address
	 * or an address with wildcard (e.g. 192.168.0.*) to represent a network segment.
	 * If you want to allow all IPs to access this module, you may set this property to be false
	 * (DO NOT DO THIS UNLESS YOU KNOW THE CONSEQUENCE!!!)
	 */
	public $ipFilters = false;

	/**
	 * @var array the host filters that specify which host addresses are allowed to access the module.
	 * Each array element represents a single filter.
	 * If you want to allow all hosts to access this module, you may set this property to be false
	 * (DO NOT DO THIS UNLESS YOU KNOW THE CONSEQUENCE!!!)
	 */
	public $hostFilters = false;

	public function init() {

		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components

		$this -> setImport(array(
				'adm.models.*',
				'adm.components.*',
		));

		// specify error handler view
		Yii::app() -> setComponents(array(
				'errorHandler' => array(
						'class' => 'CErrorHandler',
						'errorAction' => 'adm/site/error',
				),
				'user' => array(
						'allowAutoLogin' => false,
						'class' => 'RWebUser',
						'loginUrl' => array('adm/login/index'),
				),
		), false);

	}

	/**
	 * Performs access check.
	 * This method will check to see if user IP and domain are correct if they attempt
	 * to access actions other than "site/error".
	 * @param CController $controller the controller to be accessed.
	 * @param CAction $action the action to be accessed.
	 * @return boolean whether the action should be executed.
	 */
	public function beforeControllerAction($controller, $action) {
		if (parent::beforeControllerAction($controller, $action)) {
			// this method is called before any module controller action is performed
			// you may place customized code here
			$route = $controller -> id . '/' . $action -> id;
			$baseurl = Yii::app() -> request -> baseUrl;
			//echo $_SERVER['SERVER_NAME'];
			if ((!$this -> allowIp(Yii::app() -> request -> userHostAddress) || !$this -> allowHost($_SERVER['SERVER_NAME'])) && $route !== 'site/error')
				throw new CHttpException(403, "You are not allowed to access this page.");
			return true;
		} else
			return false;
	}

	/**
	 * Checks to see if the user IP is allowed by {@link ipFilters}.
	 * @param string $ip the user IP
	 * @return boolean whether the user IP is allowed by {@link ipFilters}.
	 */
	protected function allowIp($ip) {
		if (empty($this -> ipFilters))
			return true;
		foreach ($this->ipFilters as $filter) {
			if ($filter === '*' || $filter === $ip || (($pos = strpos($filter, '*')) !== false && !strncmp($ip, $filter, $pos)))
				return true;
		}
		return false;
	}

	/**
	 * Checks to see if the host name is allowed by {@link hostFilters}.
	 * @param string $host the host name
	 * @return boolean whether the host name is allowed by {@link hostFilters}.
	 */
	protected function allowHost($host) {
		if (empty($this -> hostFilters))
			return true;
		foreach ($this->hostFilters as $filter) {
			if ($filter === $host)
				return true;
		}
		return false;
	}

}
?>