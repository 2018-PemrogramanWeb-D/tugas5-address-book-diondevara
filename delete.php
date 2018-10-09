<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
</head>
<body>
<?php
include("connect.php");
$sql="DELETE FROM AddressBook WHERE no=".$_POST["nodelete"];
else echo "error";
header("Location: mainpage.php");
?>
</html>