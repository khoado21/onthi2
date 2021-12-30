<?php
include 'khachhang.php';
?>

<style>
    .border {
        border: 1px solid blue;
        width: 300px;
    }
</style>

<div class="border">
    <form action="" method="POST">
        <div>Thêm khách hàng</div>
        <br>
        <div>
            <label for="MAKH">Mã khách hàng</label>
            <input type="text" name="MAKH">
        </div>
<br>
        <div>
            <label for="TENKH">Tên khách hàng</label>
            <input type="text" name="TENKH">
        </div>
<br>
        <div>
            <label for="TENKH">Địa chỉ</label>
            <input type="text" name="DIACHI">
        </div>
<br>
        <div>
            <label for="TENKH">Điện thoại</label>
            <input type="text" name="SDT">
        </div>

        <input type="submit" value="submit">
    </form>
</div>
<?php
addkh();
?>
