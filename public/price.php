<?php
    $price = $_GET["p"];
    $number = $_GET["x"];
    $total = $price * $number;
    $vat = $total * 0.07;
    $all = $total + $vat;

    echo "ราคาสินค้าต่อชิ้น = $price <br>";
    echo "จำนวนชิ้นที่ซื้อ = $number<br>";
    echo "ราคารวม = $total<br>";
    echo "ภาษีมูลค่าเพิ่ม = $vat<br>";
    echo "ราคาสุทธิ =  $all";
?>