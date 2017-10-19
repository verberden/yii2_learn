<?php
/**
 * Created by PhpStorm.
 * User: apmadmin
 * Date: 10/16/17
 * Time: 12:10 PM
 */

return [
    'id' => 'crmapp',
    'basePath' => realpath(__DIR__ . '/../'),
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['*']
        ]
    ],
    'components' => [
        'request' => [
            'cookieValidationKey' => 'your secret key here',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false
        ],
        'db' => require(__DIR__ . '/db.php'),
    ],
    'extensions' => require(__DIR__ . '/../vendor/yiisoft/extensions.php')];