<?php
require_once('index.local.php');

$config=dirname(__FILE__).'/../protected/config/main.local.sharewall.co.uk.php';

Yii::createWebApplication($config)->run();
