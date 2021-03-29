<?php
require_once 'dbconn.php';
require_once 'functions.php';

echo '<pre>';
var_dump(getSongs($db));
echo '</pre>';

