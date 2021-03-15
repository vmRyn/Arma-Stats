<?php

$servername = "localhost";
$dBUserame = "root";
$dBPassword = "";
$dBName = "cldb_v1";

$conn = mysqli_connect($servername, $dBUserame, $dBPassword, $dBName);

if (!$conn) {
  die("Connection to Database Failed".mysqli_connect_error());
}
