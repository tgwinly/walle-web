<?php
// Uncomment to enable debug mode. Recommended for development.
defined('YII_DEBUG') or define('YII_DEBUG', false);

// Uncomment to enable dev environment. Recommended for development
defined('YII_ENV') or define('YII_ENV', 'prod');

// zh_CN.UTF-8 => 中文,  en_US.UTF-8 => English
setlocale(LC_ALL, 'zh_CN.UTF-8');
putenv('LC_ALL=zh_CN.UTF-8');

return [
    'components' => [
        'db' => [
            'dsn'       => 'mysql:host=127.0.0.1;dbname=deploy',
            'username'  => 'deploy',
            'password'  => '123456',
        ],
        'mail' => [
            'transport' => [
                'host'       => '',
                'username'   => '',
                'password'   => '',
                'port'       => '',
                'encryption' => '',
            ],
            'messageConfig' => [
                'charset' => 'UTF-8',
                'from'    => [
                  (isset($_ENV['WALLE_MAIL_EMAIL']) ? $_ENV['WALLE_MAIL_EMAIL'] : 'service@huamanshu.com') => (isset($_ENV['WALLE_MAIL_NAME']) ? $_ENV['WALLE_MAIL_NAME'] : ''),
                ],  # smtp 发件用户名(须与mail.transport.username一致)
            ],
        ],
        'request' => [
            'cookieValidationKey' => 'PdXWDAfV5-gPJJWRar5sEN71DN0JcDRV',
        ],
    ],
    'language'   => isset($_ENV['WALLE_LANGUAGE']) ? $_ENV['WALLE_LANGUAGE'] : 'zh-CN', // zh-CN => 中文,  en => English
];
