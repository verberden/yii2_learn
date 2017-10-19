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
    'components' => [
        'request' => [
            'cookieValidationKey' => 'your secret key here',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false
        ],
        'db' => require(__DIR__ . '/db.php'),
    ],];