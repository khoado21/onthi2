<?php
    include 'connection.php';
    $SOXE = $_POST['SOXE'];
    $stmt = $conn->query("select HOTENKH from xe XE, khachhang KH where SOXE = '{$SOXE}' and XE.MAKHACHHANG = KH.MAKHACHHANG");
    $stmt = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $result = $stmt[0];

    $json = json_encode($result);
    echo $json;
