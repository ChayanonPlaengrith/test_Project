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
mysqli_select_db( $objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql = "SELECT * FROM Promotion WHERE PromotionId ='$_GET[PromotionId]'";
$result =mysqli_query($objConnect ,$sql);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>  

<form method="GET" action="editpromotionsuccess.php">
<p>
<label for="PromotionId">รหัสโปรโมชั่น</label>
<input type="text" name="PromotionId" id="PromotionId" value="<?=$data['PromotionId'];?>"/>
</p>
<p>
<label for="PromotionName">ชื่อโปรโมชั่น</label>
<input type="text" name="PromotionName" id="PromotionName" value="<?=$data['PromotionName'];?>"/>
</p>
<p>
<label for="CDate">C-date</label>
<input type="date" name="CDate" id="CDate" value="<?=$data['CDate'];?>" />
</p>
<p>
<label for="ModDate">MoD-Date</label>
<input type="date" name="ModDate" id="ModDate" value="<?=$data['ModDate'];?>" />
</p>

<p>
    <input type="submit" value="บันทึก" >
</p>
</form>