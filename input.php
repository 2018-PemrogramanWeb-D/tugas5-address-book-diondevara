<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
</head>
<body>
</body>
<?php
include("connect.php");
$sql="INSERT INTO AddressBook 
(
nama,kota,alamat,nomortelepon,email
)
VALUES
(
'".$_POST["nama"]."','".$_POST["kota"]."','".$_POST["alamat"]."','".$_POST["nomor"]."','".$_POST["email"]."'
);";
else echo "Error";
header("Location: mainpage.php");
?>
</html>