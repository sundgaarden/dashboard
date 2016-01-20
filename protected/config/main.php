<?php



// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Sharewall',
    // preloading 'log' component
    'preload' => array('log','bootstrap'),
    // set default language to en
    'language' => 'en',
    // autoloading model and component classes
    'import' => array(
        'application.components.*',
        'application.commands.*',
	  'application.classes.*',
        'application.models.*',
        'application.modules.rights.*', 
        'application.modules.rights.components.*',
        'application.validators.*',
        'application.extensions.bootstrap.widgets.*',
	  'application.extensions.yiidebugtb.*',
        //'application.modules.www.models.*',

    ),
    // changing the default controller from 'site' to 'login'
    'defaultController' => 'site',
    'aliases' => array(
        'bootstrap' => realpath(__DIR__ . '/../extensions/bootstrap'), // change this if necessary
    ),
    'modules' => array(

        'rights'=>array( 
            //'ipFilters'=>array('127.0.0.1','::1')
        ),
        'www'=>array( 
        ),
        'adm'=>array( 
     
        ),


    ),
    // application components
    'components' => array(
        'request'=>array(
            // enable cookie validation/HMAC check
            'enableCookieValidation'=>true,
            // enable CSRF validation on forms
            //'enableCsrfValidation'=>true,
        ),
        'user' => array(
// enable cookie-based authentication
            'allowAutoLogin' => false,
            'class'=>'RWebUser',
            'loginUrl'=>array('www/login/index'),
        ),
        'authManager'=>array( 
            'class'=>'RDbAuthManager',

        ),


        'errorHandler' => array(
// use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning, trace',
                ),
            // uncomment the following to show log messages on web pages
            /*
              array(
              'class'=>'CWebLogRoute',
              ),
             */
            ),
        ),
        
        'urlManager'=>array(
          'urlFormat'=>'path',
          'showScriptName'=>false,
          
          /*
          'rules'=>array(
            '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
            '<controller:\w+>/<id:\d+>/<title>'=>'<controller>/view',
                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
              'post/<id:\d+>/<title:.*?>'=>'post/view',
        		'posts/<tag:.*?>'=>'post/index',

          ),
          */
          
            'rules'=>array(
            ),
        ),
	'bootstrap'=>array(
		'class'=>'ext.bootstrap.components.Bootstrap',
	),
    ),
    // application-level parameters that can be accessed
// using Yii::app()->params['paramName']
    'params' => array(
        'emailSenderAddress' => 'noreply@sharewall.co.uk',
        'emailSenderName' => 'Sharewall',

    ),
);
