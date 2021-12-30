<?php
include 'common_helper.php';
include 'baoduong.php';
?>

<style>
    .border {
        border: 1px solid black;
        width: 300px;
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="cau3.js"></script>

<script>
    $(document).ready(function(){
        $('#search').change(function() {
            var SOXE = $('#search').val();
            search(SOXE);
        })
    });
</script>

<div>
    <table>
        <h3>Thêm bảo dưỡng</h3>
        <tr>
            <td>Số xe</td>
            <td><input type="text" name="SOXE" id="search"></td>
        </tr>
        <tr>
            <td>Họ tên khách hàng</td>
            <td><input type="text" name="HOTENKH" id="result"></td>
        </tr>
        <tr>
            <td>Mã bảo dưỡng</td>
            <td><input type="text" name="MABD"></td>
        </tr>
        <tr>
            <td>Số KM</td>
            <td><input type="text" name="SOKM"></td>
        </tr>
    </table>

</div>


<?php
    addbd();
?>