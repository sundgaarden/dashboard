<?php

class WwwModule extends CWebModule {
    public $defaultController='site';
    public $layout ='backend';
    public  $params= array();
    public $viewPath = 'protected/modules/www/views';



    public function init()
    {

      // use Yii:import only for documentation purposes. Remove when in production mode.



  		// this method is called when the module is being created
  		// you may place code here to customize the module or the application
          
  		// import the module-level models and components
  		$this->setImport(array(
        'www.models.*',
        'www.components.*',
        
  		));

      Yii::app()->setComponents(array(
      'errorHandler'=>array(
        'class'=>'CErrorHandler',
        'errorAction'=>'www/site/error')), false);
    }
      

    public function beforeControllerAction($controller, $action)
    {
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
    }
        
    public function setViewPath($path)
    {
       return 'protected/modules/www/views';
    }

    public function setLayoutPath($path)
    {
       return 'application.modules.www.views.layouts';
    }

    public function setControllerPath($path)
    {
       return 'protected/modules/www/views/controllers';
    }
       
}

?>