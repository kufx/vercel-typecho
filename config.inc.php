<?php
// site root path
define('__TYPECHO_ROOT_DIR__', dirname(__FILE__));

// plugin directory (relative path)
define('__TYPECHO_PLUGIN_DIR__', '/usr/plugins');

// theme directory (relative path)
define('__TYPECHO_THEME_DIR__', '/usr/themes');

// admin directory (relative path)
define('__TYPECHO_ADMIN_DIR__', '/admin/');

// register autoload
require_once __TYPECHO_ROOT_DIR__ . '/var/Typecho/Common.php';

// init
\Typecho\Common::init();

// config db
$db = new \Typecho\Db('Pdo_Mysql', 'typecho_');
$db->addServer(array (
  'host' => 'gateway01.us-west-2.prod.aws.tidbcloud.com',
  'port' => 4000,
  'user' => '4Q43dq8MvueiyAX.root',
  'password' => 'BpED4EBKy6q4vVjy',
  'charset' => 'utf8mb4',
  'database' => 'kuhehe',
  'engine' => 'MyISAM',
  'sslCa' => 'isrgrootx1.pem',
  'sslVerify' => true,
), \Typecho\Db::READ | \Typecho\Db::WRITE);
\Typecho\Db::set($db);
