<?php
$con = mysql_connect("localhost","root","q7zgq%dw");
if (!$con)
{
die('could not connect' . mysql_error());
}
else
echo "connect successful";
$sql = 'CREATE DATABASE PROFILE';
if (mysql_query($con, $sql)) {
    echo "Database profile created successfully\n";
}
 else {
    echo 'Error creating database: ' . mysql_error() . "\n";
}
mysql_select_db($con, "PROFILE")
or die("could not able to select");

$conn = "CREATE TABLE PROFILE(SLNO INT NOT NULL AUTO_INCREMENT UNIQUE KEY, FULLNAME VARCHAR(30) NOT NULL, EMAIL VARCHAR(30) PRIMARY KEY, USERNAME VARCHAR(30) NOT NULL UNIQUE KEY,PASSWORD VARCHAR(255) NOT NULL)";
mysqli_query($con,$conn);

?>
