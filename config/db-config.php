<?php
use asbamboo\database\Connection;
use asbamboo\database\Factory;

/**
 * 数据库信息配置
 */
$sqpath             = implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'var', 'data', 'db.sqlite']);
$sqmetadata         = implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'vendor', 'asbamboo', 'openpay', 'config', 'database', 'entity']);
$sqmetadata_type    = Connection::MATADATA_YAML;
$sqdir              = dirname($sqpath);

if(!is_file($sqpath)){
    @mkdir($sqdir, 0755, true);
    @file_put_contents($sqpath, '');
}

$DbFactory          = new Factory();
$DbFactory->addConnection(Connection::create([
    'driver'    => 'pdo_sqlite',
    'path'      => $sqpath
], $sqmetadata, $sqmetadata_type));

return $DbFactory;

/********************************************************************************************************
 * 如果你使用的是mysql数据库， 你的配置文件应该像这样
 ********************************************************************************************************
 * $connection = [
 *     'driver'    => "pdo_mysql",
 *     'host'      => "XXXXXX",    // 如: 127.0.0.1
 *     'dbname'    => "XXXXXXXXX", // asbamboo
 *     'user'      => "XXXXXXXXX", // root
 *     'password'  => "XXXXXXXXX", // rootpwd
 *     'charset'   => "XXXXXXXXX", // utf8
 * ];
 * $sqmetadata         = implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'vendor', 'asbamboo', 'openpay', 'config', 'database', 'entity']);
 * $sqmetadata_type    = Connection::MATADATA_YAML;
 * $DbFactory          = new Factory();
 * $DbFactory->addConnection(Connection::create($connection, $sqmetadata, $sqmetadata_type));
 * return $DbFactory;
 ********************************************************************************************************/
