<?php
    include 'connection.php';
    $SOXE = $_POST['SOXE'];
    $stmt = $conn->query("select * from xe where SOXE like '{$SOXE}'");
    $data = array();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $HOTENKH = $conn->query("select HOTENKH from khachhang where MAKHACHHANG = '{$data[0]['MAKHACHHANG']}'");
    $stmt = $HOTENKH->fetchAll(PDO::FETCH_ASSOC);
    $result = $stmt[0];
    $json = json_encode($result);
    
    echo $json;