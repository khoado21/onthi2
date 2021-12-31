<style>
    .border {
        border: 1px solid black;
        width: 300px;
    }

    table,
    td,
    th {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="cau4.js"></script>

<script>
    $(document).ready(function(){
        $('#number').change(function(){
            var number = $('#number').val();
            show_table(number);
        })
    })
</script>

<input name="number" type="text" id="number">

<br>

<div>
    <table>
        <div id="result"></div>
    </table>
</div>