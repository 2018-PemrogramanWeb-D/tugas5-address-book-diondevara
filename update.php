<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
</head>
<body>
<?php
include("connect.php");
$sql="UPDATE addressbook SET Nama='".$_POST["nama"]."' WHERE id=".$_POST["noupdate"];
$sql="UPDATE addressbook SET Kota='".$_POST["kota"]."' WHERE id=".$_POST["noupdate"];
$sql="UPDATE addressbook SET Alamat='".$_POST["alamat"]."' WHERE id=".$_POST["noupdate"];
$sql="UPDATE addressbook SET Nomor Telepon='".$_POST["nomor"]."' WHERE id=".$_POST["noupdate"];
$sql="UPDATE addressbook SET `Email`='".$_POST["email"]."' WHERE id=".$_POST["noupdate"];
else echo "failed";
header("Location: mainpage.php");
?>
</body>
</html>