<?php
/**
 * Created by PhpStorm.
 * User: apmadmin
 * Date: 10/16/17
 * Time: 5:05 PM
 */

return [
    'id' => 'crmapp-console',
    'basePath' => dirname(__DIR__),
    'components' => [
        'db' => require(__DIR__ . '/db.php'),
    ],
];