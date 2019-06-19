<?php
//$envPath = __DIR__ . '/../.env';
//if(!file_exists($envPath))throw new \Exception("env is not set.");global $_ENV;$_ENV=parse_ini_file($envPath);function env($name) {global $_ENV;return isset($_ENV[$name]) ? $_ENV[$name] : null;}

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();
