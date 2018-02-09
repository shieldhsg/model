<?php
$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/test_db.php';

/**
 * Application configuration shared by all test types
 */
return [
    'id' => 'basic-tests',
    'basePath' => dirname(__DIR__),
    'vendorPath'=>__DIR__ . '/../../hsg.vendor/vendor/',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],  
    'language' => 'en-US',
    'components' => [
        'db' => $db,
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
            'identityClass' => 'app\models\UserBackend',
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
        ]
    ],
    'params' => $params,
    'bootstrap' => ['gii'],
    'modules' =>[
        'gii'=> ['class' => 'yii\gii\Module',
        'allowedIPs' => ['*.*.*.*','127.0.0.1', '::1'],
            ]
    ]
];


