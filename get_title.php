<?php
require_once('SD_Network.php');

$host = $_GET['host'];
$title = getHostTitle($host);
echo $title;
