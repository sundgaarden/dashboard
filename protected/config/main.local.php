<?php
return CMap::mergeArray(
    require(dirname(__FILE__).'/common.local.php'),
    array(
        'components' => array(

            'db' => array(
                'connectionString' => 'mysql:host=sharewall.csav7tmthh28.eu-west-1.rds.amazonaws.com:3306;dbname=sharewall',
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