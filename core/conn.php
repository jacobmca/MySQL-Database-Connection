<?php
require_once ('core/settings.php');
$link = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if(!$link){ die("ERROR".mysqli_connect_error());}
 ?>
