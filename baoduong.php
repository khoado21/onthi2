<?php
function addbd(){
    include 'connection.php';
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $SOXE = $_POST['SOXE'];
        $HOTENKH = $_POST['HOTENKH'];
        $MABD = $_POST['MABD'];
        $SOKM = $_POST['SOKM'];
        $result = $conn->prepare("INSERT INTO khachhang (SOXE, HOTENKH, MABD, SOKM, NGAYNHAN) VALUES (:SOXE, :HOTENKH, :MABD, :SOKM, :NGAYNHAN)");
        $result->bindParam(':SOXE', $SOXE);
        $result->bindParam(':HOTENKH', $HOTENKH);
        $result->bindParam(':MABD', $MABD);
        $result->bindParam(':SOKM', $SOKM);
        $result->bindParam(':NGAYNHAN', date('y-m-d'));
        $result->execute();
        echo 'success';
    }
}