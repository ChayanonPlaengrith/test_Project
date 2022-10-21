<!DOCTYPE html>
<html>  
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap.min (1).css">
        <title>โปรโมชั่น</title>
    </head>
    </html>
<form action="insertprosucces.php" method="GET">
<p>
<label for="ProductId">รหัสสินค้า </label>
<input type="text" name="ProductId" id="ProductId" value=""/>
</p>
<p>
<label for="ProductName">ชื่อสินค้า</label>
<input type="text" name="ProductName" id="ProductName" value=""/>
</p>
<p>
<label for="Price">ราคา</label>
<input type="text" name="Price" id="Price" value="" />
</p>
<p>
<label for="CDate">วันผลิต</label>
<input type="date" name="CDate" id="CDate" value="" />
</p>
<p>
<label for="ModDate">วันหมดอายุ</label>
<input type="date" name="ModDate" id="ModDate" value="" />
</p>
<p>
<label for="Deleted">มีสินค้านี้ไหม</label>
<input type="Int" name="Deleted" id="Deleted" value="" />
</p>
<p>
    <input type="submit">
</p>
</form>