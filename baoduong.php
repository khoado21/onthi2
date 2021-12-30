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