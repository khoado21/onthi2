<?php
function addbd(){
    include 'connection.php';
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $newDate = date('Y-m-d');
        $SOXE = $_POST['SOXE'];
        $MABD = $_POST['MABD'];
        $SOKM = $_POST['SOKM'];
        $NOIDUNG = $_POST['NOIDUNG'];
        $result = $conn->prepare("INSERT INTO baoduong (SOXE, MABD, SOKM, NGAYNHAN, NOIDUNG) VALUES (:SOXE, :MABD, :SOKM, :NGAYNHAN, :NOIDUNG)");
        $result->bindParam(':SOXE', $SOXE);
        $result->bindParam(':MABD', $MABD);
        $result->bindParam(':SOKM', $SOKM);
        $result->bindParam(':NOIDUNG', $NOIDUNG);
        $result->bindParam(':NGAYNHAN', strval($newDate));
        $result->execute();
        echo 'success';
    }
}

function updatebd(){
    include 'connection.php';
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $newDate = strval(date('Y-m-d'));
        $tongtien = $_POST['tongtien'];
        $MABD = $_POST['SOXE'];
        $result = $conn->prepare("UPDATE baoduong SET THANHTIEN = :THANHTIEN, NGAYTRA = :NGAYTRA WHERE MABD = :MABD");
        $result->bindParam(':THANHTIEN', $tongtien);
        $result->bindParam(':NGAYTRA', $newDate);
        $result->bindParam(':MABD', $MABD);
        $result->execute();
        echo 'success';
    }
}