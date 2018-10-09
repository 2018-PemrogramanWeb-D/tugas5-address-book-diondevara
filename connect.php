<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="AddressBook";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn) echo "Success";
else die("Connection Failed: "  .mysqli_connect_error());

?>
</body>
</html>