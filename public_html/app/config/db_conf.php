<?php
$config = Dbconnect::instance();
$config->set(array(
    'host' => 'mysql.hostinger.ru',
    'user' => 'u275252467_root',
    'pass' => '123456',
    'name' => 'u275252467_base'
));
$config->connect();

unset($config);