<?php
#
$serverName = 'localhost';
$username = 'root';
$password = '';
$dbName = 'hospitalMS';
#
# Create Connection...
$connection = mysqli_connect($serverName, $username,$password, $dbName);
#
# Check the connection...
if(!$connection){
    die("Connection failed: ".mysqli_connect_error());
}