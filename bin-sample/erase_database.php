#!/usr/bin/env php
<?php

error_reporting(-1);
ini_set('error_log', '/dev/stderr');
ini_set('max_execution_time', -1);
ini_set('memory_limit', -1);
date_default_timezone_set('UTC');

set_include_path('.' . PATH_SEPARATOR . '../lib');
require_once 'Storage.php';

$dbh = new PDO('mysql:host=127.0.0.1;dbname=gsb', 'root');
$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$storage = new Storage($dbh);

$data=array();
$storage->delete_all_data($data);
