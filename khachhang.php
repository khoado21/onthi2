<?php
function addkh(){
    include 'connection.php';
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $MAKH = $_POST['MAKH'];
        $TENKH = $_POST['TENKH'];
        $SDT = $_POST['SDT'];
        $DIACHI = $_POST['DIACHI'];
        $result = $conn->prepare("INSERT INTO khachhang (MAKHACHHANG, HOTENKH, SDT, DIACHI) VALUES (:MAKH, :TENKH, :SDT, :DIACHI)");
        $result->bindParam(':MAKH', $MAKH);
        $result->bindParam(':TENKH', $TENKH);
        $result->bindParam(':SDT', $SDT);
        $result->bindParam(':DIACHI', $DIACHI);
        $result->execute();
        echo 'success';
    }
}

function select_all_kh(){
    include 'connection.php';
    $stmt = $conn->query("select * from khachhang");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //$json = json_encode($result);
    return $result;
}

function search_kh()
{
    include 'connection.php';
    $SOXE = $_POST['SOXE'];
    $stmt = $conn->query("select * from xe where SOXE like '{$SOXE}'");
    $data = array();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $HOTENKH = $conn->query("select HOTENKH from khachhang where MAKHACHHANG = '{$data[0]['MAKHACHHANG']}'");
    $result = $HOTENKH->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($result);
    return $json;
}