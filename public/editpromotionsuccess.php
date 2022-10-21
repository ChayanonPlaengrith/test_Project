<!DOCTYPE html>
<html>  
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap.min (1).css">
        <title>ความคิดเห็น</title>
    </head>
    </html>
<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql_update="UPDATE Promotion SET PromotionId='$_GET[PromotionId]',PromotionName='$_GET[PromotionName]',CDate='$_GET[CDate]',
ModDate='$_GET[ModDate]' WHERE PromotionId='$_GET[PromotionId]' ";

$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo "Can't Update!!!<br>";
} else {
echo "Success <br>";
echo "<br>";
echo "<a href='promotion.php'>ย้อนกลับ</a>";
}
?>