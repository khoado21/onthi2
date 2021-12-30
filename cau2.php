<?php
include 'common_helper.php';
include 'khachhang.php';
include 'xe.php';
$list_kh = select_all_kh();
$list_xe = selectxe();
?>
<style>
    .border {
        border: 1px solid black;
        width: 300px;
    }
</style>
<div class="border">
    <form action="" method="POST">
        <div>
            <label for="TENKH">Tên khách hàng</label>
            <select name="MAKHACHHANG" id="TENKH">
                <?php foreach ($list_kh as $row) : ?>
                    <option value="<?php echo $row['MAKHACHHANG'] ?>"><?php echo $row['HOTENKH'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <br>

        <div>
            <label for="TENKH">Số xe</label>
            <input type="text" name="SOXE">
        </div>
        <br>

        <div>
            <label for="TENKH">Hãng xe</label>
            <select name="HANGXE" id="TENKH">
                <option value="Toyota">Toyota</option>
                <option value="BMW">BMW</option>
                <option value="Audi">Audi</option>
            </select>
        </div>
        <br>
        <div>
            <label for="TENKH" >Năm sản xuất</label>
            <input type="text" name="NAMSX" placeholder="2022">
        </div>
        <br>
        <input type="submit" value="thêm">
    </form>
</div>

<?php addxe() ?>