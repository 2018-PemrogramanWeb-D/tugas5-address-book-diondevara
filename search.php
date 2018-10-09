<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
</head>
<body>
<?php
include("connect.php");
$sql = "SELECT id,nama,kota,alamat,nomortelepon,email FROM Address_Book";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<br> ".$_POST["nama"]."','".$_POST["kota"]."','".$_POST["alamat"]."','".$_POST["nomor"]."','".$_POST["email"]."<br>";
    }
} else {
    echo "0 results";
}

?>
</html>