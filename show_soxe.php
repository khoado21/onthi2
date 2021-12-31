<?php
include 'connection.php';
$originalDate = $_POST['date'];
$NGAYNHAN = strval(date("Y-m-d", strtotime($originalDate)));
$stmt = $conn->query("select * from baoduong where NGAYNHAN = '{$NGAYNHAN}'");
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<select name="MABD" id="soxe">
<?php foreach ($result as $row) : ?>
    <option value="<?php echo $row['MABD'] ?>"><?php echo $row['SOXE'] ?></option>
<?php endforeach; ?>
</select>