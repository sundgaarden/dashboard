<?php
// change the following paths if necessary
$yii=dirname(__FILE__).'/../../framework/yiilite.php';
$config=dirname(__FILE__).'/../protected/config/main.www.sharewall.co.uk.php';

// include global functions
require_once dirname(__FILE__).'/../protected/global.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',false);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
