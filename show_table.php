<?php
include 'connection.php';
$originalDate = $_POST['date'];
$NGAYNHAN = strval(date("Y-m-d", strtotime($originalDate)));
$stmt = $conn->query("select * from baoduong where NGAYNHAN = '{$NGAYNHAN}'");
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>