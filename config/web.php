<?php

return [
    'id' => 'basic-rest',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            'parsers' => [
                'application/json' => 'yii\\web\\JsonParser',
            ],
        ],
        'user' => [
            'identityClass' => 'app\\models\\User',
            'enableAutoLogin' => false,
            'enableSession' => false,
        ],
        'db' => require __DIR__ . '/db.php',
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => true,
            'rules' => [
                ['class' => 'yii\\rest\\UrlRule', 'controller' => 'user'],
            ],
        ],
    ],
    'params' => [],
];
