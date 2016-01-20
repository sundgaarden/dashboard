<?php
return CMap::mergeArray(
    CMap::mergeArray(
            require(dirname(__FILE__).'/main.php'),
            require(dirname(__FILE__).'/main.dev.php')
    ),
    array(
	  'preload' => array('bootstrap',),
        'components' => array(
            'urlManager' => array(
                'rules' => array(

                    'http://dev.sharewall.co.uk/rights' => 'rights',
                    'http://dev.sharewall.co.uk/rights/<controller>/<action>' => 'rights/<controller>/<action>',

                    'http://dev.sharewall.co.uk' => 'www',
                    'http://dev.sharewall.co.uk/<controller>' => 'www/<controller>/index',
                    'http://dev.sharewall.co.uk/<controller>/<action>' => 'www/<controller>/<action>',
                    'http://dev.sharewall.co.uk/<controller>/<action>/<params:\S+>' => 'www/<controller>/<action>/<params>',
                    
                    'http://dev.adm.sharewall.co.uk' => 'adm',
                    'http://dev.adm.sharewall.co.uk/<controller>' => 'adm/<controller>/index',
                    'http://dev.adm.sharewall.co.uk/<controller>/<action>' => 'adm/<controller>/<action>',
                    'http://dev.adm.sharewall.co.uk/<controller>/<action>/<params:\S+>' => 'adm/<controller>/<action>/<params>',
           
                ),
            ),
        ),
    )
);