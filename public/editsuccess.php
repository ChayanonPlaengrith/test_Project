<!DOCTYPE html>
<html>  
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap.min (1).css">
        <title>โปรโมชั่น</title>
    </head>
    </html>
<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");



$sql_update="UPDATE Product SET ProductId='$_GET[ProductId]',ProductName='$_GET[ProductName]',Price='$_GET[Price]'
,CDate='$_GET[CDate]',ModDate='$_GET[ModDate]',Deleted='$_GET[Deleted]'

 WHERE ProductId='$_GET[ProductId]' ";


$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo "Can't Update!!!<br>";
} else {
echo "Success <br>";
echo "<br>";
echo "<a href='selectproduct.php'>กลับสู่หน้าหลัก</a>";
}

?>