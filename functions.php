<?php
require_once "dbconn.php";

$db = getDB();

/**
 * @param $db
 * @return array of songs with various information about songs
 */
function getSongs($db)
{
    $query = $db->prepare("SELECT `Title`, `Artist`, `Album Name`, `Artwork`, `Track Preview` FROM `songs`;");

    $query->execute();

    return $query->fetchall();
}

echo '<pre>';
var_dump(getSongs($db));
echo '</pre>';
