<?php
return CMap::mergeArray(
    require(dirname(__FILE__).'/common.prod.php'),
    array(
        'runtimePath' => dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'runtime'.DIRECTORY_SEPARATOR.'prod',
        'components' => array(
            //'assetManager' => array(
            //    'basePath' => dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'sharewall'.DIRECTORY_SEPARATOR.'www'.DIRECTORY_SEPARATOR.'yiiassets'.DIRECTORY_SEPARATOR.'prod',
            //),
            'cache'=>array(
                'class'=>'CApcCache',
            ),
            'db' => array(
                'connectionString' => 'mysql:host=sharewall.csav7tmthh28.eu-west-1.rds.amazonaws.com;dbname=sharewall',
                'charset'=>'UTF8',
                'emulatePrepare' => true,
                'username' => 'sharewall',
                'password' => 'sharewall',
                'charset' => 'utf8',
                'tablePrefix' => '',
                //'schemaCachingDuration' => 86400
            ),
           
        ),

    )
);