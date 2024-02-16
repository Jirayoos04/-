<?php

require('______________');


$sql = " DELETE FROM customer WHERE CustomerID = :customerID";
$stml = $conn->prepare($sql);
$stml->bindParam(":customerID", $_GET['CustomerID']);
echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

if ($stmt->execute()) {
    $message = "ลบข้อมูลสำเร็จ";
    // $message = "Successfully delete customer".$_GET['CustomerID'].".";
    echo '
        <script type="text/javascript">