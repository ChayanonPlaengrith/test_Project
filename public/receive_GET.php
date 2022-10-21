<!DOCTYPE html>
<html>  
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="welcome.css">
        <title>ยินดีต้อนรับ</title>
    </head>
    <body >
        <div class = "wel">
        <img src="hi1.gif" width="500" height="500"><br><br>
        
<?php
    
    $user_name = $_GET["fname"];
    $pass_name = $_GET["sname"];
    echo " Hello  $user_name";
   
    
?>
<form action="main.html"><br>
<input type="submit" name ="suname" value = "เข้าสู่เว็บไซต์" class="bbatton">

</form>
</div>
</boby>
</html>