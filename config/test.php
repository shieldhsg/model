<?php
$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

/**
 * Application configuration shared by all test types
 */
return [
    'id' => 'basic-tests',
    'name' => '童趣教育',
    'basePath' => dirname(__DIR__),
    'vendorPath'=>__DIR__ . '/../../hsg.vendor/vendor/',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@mdm/admin' => '@vendor/mdmsoft/yii2-admin',
    ],  
    'language' => 'zh-CN',
    'timeZone' => 'Asia/Shanghai',
    'components' => [
        'db' => $db,
//        'cache'=> [
//            'class'=>'yii\caching\fileCache'
//        ],
        'mailer' => [
            'useFileTransport' => true,
        ],
        'assetManager' => [            
            'basePath' => __DIR__ . '/../web/assets',
            'bundles' => [
                'dmstr\web\AdminLteAsset' => [
                    'skin' => 'skin-red',
                ],
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl'=>true,
            'enableStrictParsing'=>false,
            'showScriptName' => false,
            'suffix'=>'',
            'rules'=>[
                "<controller:\w+>/<id:\d+>"=>"<controller>/view",
                "<controller:\w+>/<action:\w+>"=>"<controller>/<action>"
            ]
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin'=> true
        ],        
        'request' => [
            'cookieValidationKey' => 'test',
            'enableCsrfValidation' => false,
            // but if you absolutely need it set cookie domain to localhost
            /*
            'csrfCookie' => [
                'domain' => 'localhost',
            ],
            */
        ],
        'tool' => [
            'class'=>'app\components\Tools',
            'property'=>'123'
        ],
        'authManager'=>[
            'class'=>'yii\rbac\DbManager',
//            'defaultRoles' => ['guest'],
        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource'
                ],
        ],],
    ],
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            //这里是允许访问的action，不受权限控制
            //controller/action
            'site/login',
            'site/logout'
        ]
    ],
    'params' => $params,
    'bootstrap' => ['gii'],
    'modules' =>[
        'gii'=> [
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['*.*.*.*','127.0.0.1', '::1'],
                ],
        'admin' => [
            'class' => 'mdm\admin\Module',
        ],
    ]
];


