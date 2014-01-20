<?php
// Zabbix GUI configuration file
global $DB;

$DB['TYPE']     = 'MYSQL';
$DB['SERVER']   = getenv('OPENSHIFT_MYSQL_DB_HOST');
$DB['PORT']     = getenv('OPENSHIFT_MYSQL_DB_PORT');
$DB['DATABASE'] = getenv('OPENSHIFT_APP_NAME');
$DB['USER']     = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$DB['PASSWORD'] = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');

// SCHEMA is relevant only for IBM_DB2 database
$DB['SCHEMA'] = '';

$ZBX_SERVER      = 'localhost';
$ZBX_SERVER_PORT = '10051';
$ZBX_SERVER_NAME = '';

$IMAGE_FORMAT_DEFAULT = IMAGE_FORMAT_PNG;
?>
