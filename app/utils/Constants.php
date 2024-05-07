<?php
$config = parse_ini_file(dirname(dirname(__FILE__)) . '/resources/config.ini');
define('ROUTE_APP', dirname(dirname(__FILE__)));
define('ROUTE_PUBLIC', dirname(dirname(dirname(__FILE__))));
define('ROUTE_URL', $config['ROUTE_URL']);
define('NAME_WEB', 'SITIO_WEB');
define('DATIME_FORMAT', 'Y-m-d H:i:s');