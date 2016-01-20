<?php
return CMap::mergeArray(
    CMap::mergeArray(
            require(dirname(__FILE__).'/main.php'),
            require(dirname(__FILE__).'/main.prod.php')
    ),
    array(
        'components' => array(
            'urlManager' => array(
                'rules' => array(

                    'http://sharewall.co.uk/rights' => 'rights',
                    'http://sharewall.co.uk/rights/<controller>/<action>' => 'rights/<controller>/<action>',

                    'http://sharewall.co.uk' => 'www',
                    'http://sharewall.co.uk/<controller>' => 'www/<controller>/index',
                    'http://sharewall.co.uk/<controller>/<action>' => 'www/<controller>/<action>',
                    'http://sharewall.co.uk/<controller>/<action>/<params:\S+>' => 'www/<controller>/<action>/<params>',

                    'http://www.sharewall.co.uk/rights' => 'rights',
                    'http://www.sharewall.co.uk/rights/<controller>/<action>' => 'rights/<controller>/<action>',

                    'http://www.sharewall.co.uk' => 'www',
                    'http://www.sharewall.co.uk/<controller>' => 'www/<controller>/index',
                    'http://www.sharewall.co.uk/<controller>/<action>' => 'www/<controller>/<action>',
                    'http://www.sharewall.co.uk/<controller>/<action>/<params:\S+>' => 'www/<controller>/<action>/<params>',

                    'http://adm.sharewall.co.uk' => 'adm',
                    'http://adm.sharewall.co.uk/<controller>' => 'adm/<controller>/index',
                    'http://adm.sharewall.co.uk/<controller>/<action>' => 'adm/<controller>/<action>',
                    'http://adm.sharewall.co.uk/<controller>/<action>/<params:\S+>' => 'adm/<controller>/<action>/<params>',

                ),
            ),
        ),
    )
);