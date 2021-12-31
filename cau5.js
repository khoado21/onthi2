function show_table(SOXE) {
    $.ajax({
        url: 'show_cv.php',
        type: 'POST',
        data:{
            MABD: SOXE,
        },
        success: function (result) {
            console.log(result);
            $('.table2').html(result);  
        },
        error: function(data, errorThrown){
            alert('error: ' + errorThrown +' loi');
        }
    });
}