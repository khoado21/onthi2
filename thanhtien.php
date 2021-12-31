<?php
include 'connection.php';
$MABD = $_POST['MABD'];
$stmt = $conn->query("select * from CT_BD where MABD = '{$MABD}'");
$stmt2 = $conn->query("select * from congviec");
$ctbd = $stmt->fetchAll(PDO::FETCH_ASSOC);
$congviec = $stmt2->fetchAll(PDO::FETCH_ASSOC);

$data = array();
$tongtien = 0;

foreach ($ctbd as $row) {
    foreach ($congviec as $cv) {
        if ($row['MACV'] == $cv['MACV']) {
            $tongtien = $tongtien + intval($cv['DONGIA']);
        }
    }
}
echo $tongtien;
?>
