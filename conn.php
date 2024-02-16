<?php
//ห้ามเปลี่ยนชื่อตัวแปร บรรทัดที่ 3-6 ของอาจารย์
$sName = "localhost";
$uName = "root";
$uPass = "";
$db = "qsystem";

try {
    $conn = new PDO( "mysql:host=$serverName;dbname=$dbname;charset=UTF8",
    $userName,
    $userPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Sorry! You cannot connect to database";
}
