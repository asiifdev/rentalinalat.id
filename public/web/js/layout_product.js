$(document).ready(function() {
    grid();
    var dateToday = new Date();
     // var fordate = $(".forDate").datepicker();
     // console.log(fordate);
     filterTanggal();
     $(".forDate,.toDate").change(function() {
             bacaTanggal();
     });
     hapus();
 });
function row() {
    $('#row').css('display', '');
    $('#grid').css('display', 'none');
    $('#btn-row').removeClass('btn-outline-danger').addClass('btn-danger active');
    $('#btn-grid').removeClass('btn-danger active').addClass('btn-outline-danger');
    $("#search").on("keyup", function() {
        var value = $(this).val().toLowerCase();
            $("#row #data").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    $(".filters :checkbox").click(function() {
        var centang = $(".filters :checkbox").is(':checked');
        if(centang == true){
            var value = $(this).val().toLowerCase();
            $("#row #data").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
            // console.log(value);
        }
        else{
            $("#row #data").css('display', '');
        }
    });
}

function grid() {
    $('#grid').css('display', '');
    $('#row').css('display', 'none');
    $('#btn-grid').removeClass('btn-outline-danger').addClass('btn-danger active');
    $('#btn-row').removeClass('btn-danger active').addClass('btn-outline-danger');
    $("#search").on("keyup", function() {
        var value = $(this).val().toLowerCase();
            $("#grid #data").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    $(".filters :checkbox").click(function() {
        var centang = $(".filters :checkbox").is(':checked');
        if(centang == true){
            var value = $(this).val().toLowerCase();
            $("#grid #data").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
            console.log(value);
        }
        else{
            $("#grid #data").css('display', '');
        }
    });
}
