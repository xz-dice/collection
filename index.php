<?php
require 'dbconn.php';


$query->setFetchMode(PDO::FETCH_ASSOC);
$result = $query->fetch();

var_dump($result);
echo '</pre>';

