<?php
    include 'connection.php';
    $MACV = $_POST['MACV'];
    $MABD = $_POST['MABD'];
    $sql = "DELETE FROM ct_bd WHERE MABD = '{$MABD}' AND MACV = '{$MACV}'";
    $stmt = $conn->exec($sql);
    echo 'success';
    