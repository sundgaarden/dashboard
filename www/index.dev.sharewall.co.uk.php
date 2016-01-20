<?php
require_once('index.dev.php');

$config=dirname(__FILE__).'/../protected/config/main.dev.sharewall.co.uk.php';

Yii::createWebApplication($config)->run();
