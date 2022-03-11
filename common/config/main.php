<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules' => [
        'gridview' => [
            'class' => 'kartik\grid\Module'
        ],
        'employee' => [
            'class' => 'frontend\modules\employee\Module',
        ],
        'admin' => [
            'class' => 'mdm\admin\Module',
        ],
        'manage' => [
            'class' => 'frontend\modules\manage\Module',
        ],
        'cashier' => [
            'class' => 'frontend\modules\cashier\Module',
        ],
        'dashboard' => [
            'class' => 'frontend\modules\dashboard\Module',
        ],
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            //'class' => 'yii\rbac\PhpManager',
            'class' => 'yii\rbac\DbManager',
        ],
        'user' => [
            //'class' => 'mdm\admin\models\User',
            'identityClass' => 'mdm\admin\models\User',
            'loginUrl' => ['admin/user/login'],
        ]   
    ],
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'site/*',
            //'admin/*',
            'appointment-status',
            'divisions',
            'item-numbers',
            'leave-types',
            'positions',
            'position-types',
            'salary-grades',
            'salary-grades-steps',
            'salary-groups',
            'sections',
            'security',
            'status-of-appointments',
        ]
    ]
];
