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

$sql = "SELECT * FROM Customer WHERE Customerid ='$_GET[Customerid]'";
$result =mysqli_query($objConnect ,$sql);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>  

<form method="GET" action="editcustomersuccess.php">
<p>
<label for="Customerid">รหัสลูกค้า</label>
<input type="text" name="Customerid" id="Customerid" value="<?=$data['Customerid'];?>"/>
</p>
<p>
<label for="CustomerName">ชื่อลูกค้า</label>
<input type="text" name="CustomerName" id="CustomerName" value="<?=$data['CustomerName'];?>" />
</p>
<p>
<label for="Locations">ที่อยู่</label>
<input type="text" name="Locations" id="Locations" value="<?=$data['Locations'];?>" />
</p>
<p>
<label for="Email">Email</label>
<input type="text" name="Email" id="Email" value="<?=$data['Email'];?>" />
</p>
<p>
<label for="DateOfBirth">วันเดือนปีเกิด</label>
<input type="date" name="DateOfBirth" id="DateOfBirth" value="<?=$data['DateOfBirth'];?>" />
</p>
<p>
<label for="CDate">C-Date</label>
<input type="date" name="CDate" id="CDate" value="<?=$data['CDate'];?>" />
</p>
<p>
<label for="ModDate">Mod-Date</label>
<input type="date" name="ModDate" id="ModDate" value="<?=$data['ModDate'];?>" />
</p>
<label for="Postcode">รหัสไปรษณีย์</label>
<input type="text" name="Postcode" id="Postcode" value="<?=$data['Postcode'];?>" />
</p>

<p>
    <input type="submit" value="บันทึก" >
</p>
</form>
