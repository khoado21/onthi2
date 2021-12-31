function show_cv(SOXE) {
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

function show_soxe(date) {
    $.ajax({
        url: 'show_soxe.php',
        type: 'POST',
        data:{
            date: date
        },
        success: function (result) {
            console.log(result);
            $('#soxe').html(result);   
        },
        error: function(data, errorThrown){
            alert('error: ' + errorThrown +' loi');
        }
    });
}


function show_tongtien(SOXE) {
    $.ajax({
        url: 'thanhtien.php',
        type: 'POST',
        data:{
            MABD: SOXE,
        },
        success: function (result) {
            console.log(result);
            document.getElementById("tongtien").value = result;  
        },
        error: function(data, errorThrown){
            alert('error: ' + errorThrown +' loi');
        }
    });
}

function delete_ctbd(MABD, MACV) {
    $.ajax({
        url: 'delete_ctbd.php',
        type: 'POST',
        data:{
            MABD: MABD,
            MACV: MACV
        },
        success: function (response) {
            console.log(response);
            if(response == 'success'){
                alert('xóa thành công');
                show_cv(MABD);
                show_tongtien(MABD);
            }
        },
        error: function(data, errorThrown){
            alert('error: ' + errorThrown +' loi');
        }
    });
}