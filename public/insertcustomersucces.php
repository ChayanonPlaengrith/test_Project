<!DOCTYPE html>
<html>  
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap.min (1).css">
        <title>ความคิดเห็น</title>
    </head>
    </html>
<?php
$objConnect=mysqli_connect("localhost","root","") or die("can't connect to database");
mysqli_select_db($objConnect,"DBProduct");
mysqli_query($objConnect ,"SET NAMES utf8");

$sql_insert ="INSERT INTO Customer(Customerid,CustomerName,Locations,Email,DateOfBirth,CDate,ModDate,Postcode)
VALUES ('$_GET[Customerid]','$_GET[CustomerName]','$_GET[Locations]','$_GET[Email]','$_GET[DateOfBirth]','$_GET[CDate]','$_GET[ModDate]','$_GET[Postcode]')";

$result=mysqli_query($objConnect, $sql_insert);


if(!$result) {
echo "Can't Insert!!!<br>";
echo "<br>";
echo "<a href='selectcus.php'>"."กลับหน้าหลัก"."</a>";
} else {
echo "insertion data success <br>";
echo "<br>";
echo "<a href ='selectcus.php' >"."กลับหน้าหลัก"."</a>";
}

?>

