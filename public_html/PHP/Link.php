<?php
$serverName = "localhost"; //serverName\instanceName
$username = "id17908676_base";
$password = ")Js#)G%$HTOr#!8]";
$conn = new mysqli($serverName, $username, $password,"id17908676_baseabandono");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>