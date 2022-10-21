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

$sql = "SELECT * FROM Product WHERE ProductId='$_GET[ProductId]'";
$result =mysqli_query($objConnect ,$sql);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>  

<form method="GET" action="editsuccess.php">
<p>
<label for="ProductId">รหัสสินค้า </label>
<input type="text" name="ProductId" id="ProductId" value="<?=$data['ProductId'];?>"/>
</p>
<p>
<label for="ProductName">ชื่อสินค้า</label>
<input type="text" name="ProductName" id="ProductName" value="<?=$data['ProductName'];?>"/>
</p>
<p>
<label for="Price">ราคา</label>
<input type="Price" name="Price" id="Price" value="<?=$data['Price'];?>" />
</p>
<p>
<label for="CDate">วันผลิต</label>
<input type="date" name="CDate" id="CDate" value="<?=$data['CDate'];?>" />
</p>
<p>
<label for="ModDate">วันหมดอายุ</label>
<input type="date" name="ModDate" id="ModDate" value="<?=$data['ModDate'];?>" />
</p>
<p>
<label for="Deleted">มีสินค้านี้ไหม</label>
<input type="Int" name="Deleted" id="Deleted" value="<?=$data['Deleted'];?>" />
</p>
<p>

<p>
    <input type="submit" value="แก้ไข" >
</p>
</form>






