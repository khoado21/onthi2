<?php
function selectxe(){
    include 'connection.php';
    $stmt = $conn->query("select * from xe");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //$json = json_encode($result);
    return $result;
}

function addxe()
{
    include 'connection.php';
    if(isset($_POST['HANGXE']))
    {
        $MAKHACHHANG = $_POST['MAKHACHHANG'];
        $SOXE = $_POST['SOXE'];
        $HANGXE = $_POST['HANGXE'];
        $NAMSX = $_POST['NAMSX'];
        $result = $conn->prepare("INSERT INTO xe (SOXE, HANGXE, NAMSX, MAKHACHHANG) VALUES (:SOXE, :HANGXE, :NAMSX ,:MAKHACHHANG)");
        $result->bindParam(':MAKHACHHANG', $MAKHACHHANG);
        $result->bindParam(':SOXE', $SOXE);
        $result->bindParam(':HANGXE', $HANGXE);
        $result->bindParam(':NAMSX', $NAMSX);
        $result->execute();
        echo 'success';
    }
}