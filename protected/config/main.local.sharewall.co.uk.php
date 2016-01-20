<?php
return CMap::mergeArray(
    CMap::mergeArray(
            require(dirname(__FILE__).'/main.php'),
            require(dirname(__FILE__).'/main.local.php')
    ),
    array(
        'preload' => array('bootstrap',),
        'components' => array(
            'preload' => array('bootstrap',),
            'urlManager' => array(
                'urlFormat'=>'path',
                'rules' => array(
                    'http://local.sharewall.co.uk/rights' => 'rights',
                    'http://local.sharewall.co.uk/rights/<controller>/<action>' => 'rights/<controller>/<action>',

                    'http://local.sharewall.co.uk' => 'www',
                    'http://local.sharewall.co.uk/<controller>' => 'www/<controller>/index',
                    'http://local.sharewall.co.uk/<controller>/<action>' => 'www/<controller>/<action>',
                    'http://local.sharewall.co.uk/<controller>/<action>/<params:\S+>' => 'www/<controller>/<action>/<params>',

                    'http://local.adm.sharewall.co.uk' => 'adm',
                    'http://local.adm.sharewall.co.uk/<controller>' => 'adm/<controller>/index',
                    'http://local.adm.sharewall.co.uk/<controller>/<action>' => 'adm/<controller>/<action>',
                    'http://local.adm.sharewall.co.uk/<controller>/<action>/<params:\S+>' => 'adm/<controller>/<action>/<params>',
                    
                ),
            ),
        ),
    )
);