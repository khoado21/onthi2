function search(SOXE) {
    $.ajax({
        url: 'search_kh.php',
        type: 'POST',
        data:{
            SOXE: SOXE
        },
        datatype: 'json',
        success: function (result) {
            console.log(result);
            let json = JSON.parse(result);
            console.log(json.HOTENKH);
            document.getElementById("result").value = json.HOTENKH;
        },
        //bỏ được
        error: function(data, errorThrown){
            alert('error: ' + errorThrown +' loi');
        }
    });
}