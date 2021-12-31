<?php
include 'connection.php';
$MABD = $_POST['MABD'];
$stmt = $conn->query("select * from CT_BD where MABD = '{$MABD}'");
$stmt2 = $conn->query("select * from congviec");
$ctbd = $stmt->fetchAll(PDO::FETCH_ASSOC);
$congviec = $stmt2->fetchAll(PDO::FETCH_ASSOC);

$data = array();
$stt = 0;

foreach ($ctbd as $row) {
    foreach ($congviec as $cv) {
        if ($row['MACV'] == $cv['MACV']) {
            $data[$stt] = array(
                'MACV' => $cv['MACV'],
                'TENCV' => $cv['TENCV'],
                'DONGIA' => $cv['DONGIA'],
            );
        }
    }
    $stt++;
}
?>

<tbody>
    <tr>
        <th>Tên công việc</th>
        <th>Đơn giá</th>
        <th>Chức năng</th>
    </tr>
    <?php foreach ($data as $row) : ?>
        <tr>
            <td><?php echo $row['TENCV'] ?></td>
            <td><?php echo $row['DONGIA'] ?></td>
            <td><button type="button" class="delete" value="<?php echo $row['MACV'] ?>">Xóa</button></td>
        </tr>
    <?php endforeach; ?>
</tbody>