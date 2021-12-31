<?php
include 'common_helper.php';
include 'connection.php';
$stmt = $conn->query("select * from CT_BD where MABD = 'BD001'");
$stmt2= $conn->query("select * from congviec");
$ctbd = $stmt->fetchAll(PDO::FETCH_ASSOC);
$congviec = $stmt2->fetchAll(PDO::FETCH_ASSOC);

$data = array();
$stt = 0;

foreach($ctbd as $row)
{
    foreach($congviec as $cv)
    {
        if($row['MACV'] == $cv['MACV'])
        {
            $data[$stt] = array(
                'TENCV' => $cv['TENCV'],
                'DONGIA' => $cv['DONGIA'],
            );
        }
    }
    $stt++;
}

pre($data);
?>