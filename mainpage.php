<!DOCTYPE html>
<html lang="en">
<head>
    <title>Main Page</title>
    <meta charset="UTF-8">
<style>
body
{
    background-color: #87CEFA;
}
h1
{
    text-align: center;
}
.forminput
{
    margin: auto;
    width: 360px;
    background-color: white;
    border-style: solid;
    border-color: black;
    padding: 10px;
}
.formdelete
{
    margin: auto;
    width: 360px;
    background-color: white;
    border-style: solid;
    border-color: black;
    padding: 10px;
}
.formupdate
{
    margin: auto;
    width: 360px;
    background-color: white;
    border-style: solid;
    border-color: black;
    padding: 10px;
}
.formsearch
{
    margin: auto;
    width: 360px;
    background-color: white;
    border-style: solid;
    border-color: black;
    padding: 10px;
}
</style>
</head>
<body>
<?php
$sql = "CREATE TABLE Address_Book
(
    `id` int(10) NOT NULL,
    `nama` varchar(50) NOT NULL,
    `kota` int(20) NOT NULL,
    `alamat` varchar(100) NOT NULL,
    `nomor` int(15) NOT NULL,
    `email` varchar(100) NOT NULL
)";
?>
<form  method="POST" action="input.php">
    <div class="forminput">
        <h1>Addres Book</h1>
        Nama<br>
        <input type="text" name="nama"><br><br>
        Kota<br><input type="text" name="kota"><br><br>
        Alamat<br>
        <input type="text" name="jalan"><br><br>
        Nomor Telepon<br>
        <input type="text" name="nomor"><br><br>
        Email<br>
        <input type="text" name="email"><br><br>
        <input type="submit" name="submit "value="Submit"><br><br>
    </div>
</form>
<div class="formdelete">
    <form method="POST" action="delete.php">
        Delete Index<br><br><input type="number" name="nodelete"><br>
        <input type="submit" value="Delete">
    </form>
</div>  
<div class="formupdate" action="update.php">
    <form action="update.php" method="POST">
        Update Index<input type="number" name="noupdate"><br>
        Nama<br><input type="text" name="nama"><br>
        Kota<br><input type="text" name="kota"><br>
        Alamat<br><input type="text" name="alamat"><br>
        Nomor Telepon<br><input type="text" name="nomortelepon"><br>
        Email<br><input type="text" name="email"><br><br>
        <input type="submit" value="Update">
    </form>
</div>   
<div class="formsearch" action="search.php">
    <form action="search.php" method="POST">
        Search Index<input type="number" name="nosearch"><br>
        Nama<br><input type="text" name="nama"><br>
        Kota<br><input type="text" name="kota"><br>
        Alamat<br><input type="text" name="alamat"><br>
        Nomor Telepon<br><input type="text" name="nomortelepon"><br>
        Email<br><input type="text" name="email"><br><br>
        <input type="submit" value="Search">
    </form>
</div>   
</body>
</div>


</body>
</html>