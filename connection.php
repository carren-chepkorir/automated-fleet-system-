<?php

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */
include("constants.php");
$mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

?>
