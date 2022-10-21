<!DOCTYPE html>
<html>  
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap.min (1).css">
        <title>โปรโมชั่น</title>
    </head>
    <header class="top-footer">
        <!-- <a class="menu-item" href="main-from.html">หน้าหลัก</a>
        <a class="menu-item" href="promotion.php">โปรโมชั่น</a>
        <a class="menu-item" href="pay.html">ชำระเงิน</a>
        <a class="menu-item" href="contact.html">ติดต่อเรา</a>
        <a class="menu-item" href="feedback.html">ความคิดเห็น</a>
        <a class="menu-item" href="price.html">แสดงใบเสร็จ</a>
        <a class="menu-item" href="tables.html">ตารางรายการ</a>
        <a class="menu-item" href="selectcus.php">ข้อมูลลูกค้า</a> -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand" href="main-from.html">เข้าสู่ระบบ</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="promotion.php">🎀โปรโมชั่น
                      <span class="visually-hidden">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pay.html">💵ชำระเงิน</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">📞ติดต่อเรา</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="feedback.html">🤔ความคิดเห็น</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="price.html">🧾แสดงใบเสร็จ</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="selectproduct.php">🎁หน้าสินค้า</a>
                      </li>
                  <li class="nav-item">
                    <a class="nav-link" href="selectcus.php">🤵ข้อมูลลูกค้า</a>
                  </li>
        
                </ul>
                <form class="d-flex">
                  <input class="form-control me-sm-2" type="text" placeholder="Search">
                  <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
    </header>
    </html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DBProduct";

$conn = new mysqli($servername , $username , $password , $dbname);

if($conn->connect_error)
{
    die("connection failed" . $conn->connect_error);
}

echo "<br>";
$sql = "SELECT * FROM Promotion";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){    
      echo "<br>"."<center>"."<div class='card border-primary mb-3' style='max-width: 20rem;'>".
        " ⚡รหัสโปรโมชั่น : "."<a href='editpromotion.php?PromotionId=$row[PromotionId]'>".$row["PromotionId"]."</a>"."<br>".
        "ชื่อโปรโมชั่น : ".        $row["PromotionName"]. "<br>".
        "C-Date : ".        $row["CDate"]."<br>".
        "Mod-Date : ".   $row["ModDate"]."<hr>"."<br>";
    }

}
else {
    echo "0 results"."<br>";
    }
    echo "<a class = 'btn btn-light' href='insertpromotion.php'>Add New Promotion</a>"."<br>"."<br>"."<br>"."<br>";
    echo "<a href='main.html'>กลับสู่หน้าหลัก</a>"."</center>";
    $conn->close();

?>

