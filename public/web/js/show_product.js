$(document).ready(function() {
    $('#submitcart').prop('disabled', true);
    var dateToday = new Date();
    // var fordate = $(".forDate").datepicker();
    // console.log(fordate);
    filterTanggal();
    $(".forDate,.toDate").change(function() {
        bacaTanggal();
    });
    hapus();
});
function bacaTanggal() {
    var fordate = $(".forDate").val();
    var todate = $(".toDate").val();
    var harga = $("#harga").text().replace(/[A-Za-z$-/]/g, "");
    var productId = $('#id_produk').val();
    // console.log(todate);
    days = (Date.parse(todate) - Date.parse(fordate)) / (1000 * 60 * 60 * 24);
    // Create our number formatter.
    var formatter = new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
    });
    total = days * harga;
    // console.log(total);
    // console.log('Dari Tanggal: ' + fordate + ' Sampai Tanggal: ' + todate);
    if(Date.parse(todate) < Date.parse(fordate)){
        $("#status").text('Input Tanggal tidak sesuai!');
        $("#total").val('Rp. 0');
        $("#jumlah_hari").val('0');
        $('#submitcart').prop('disabled', true);
    }
    else if(Date.parse(todate) === Date.parse(fordate)){
        $("#status").text('Minimal Order 1 Hari!');
        $("#total").val('Rp. 0');
        $("#jumlah_hari").val('0');
        $('#submitcart').prop('disabled', true);
    }
    else{
        $.ajax({
            type:'GET',
            url:'/ajax/filterdate?start_date=' + fordate + '&end_date=' + todate + '&product_id=' + productId,
            data:'_token = <?php echo csrf_token() ?>',
            success:function(data) {
                $("#status").text(data);
                // console.log($("#status").text());
                if ($("#status").text() === 'Tidak Tersedia'){
                    $("#total").val('Rp. 0');
                    $('#submitcart').prop('disabled', true);
                }
            }
        });
        $("#total").val(formatter.format(total));
        $("#jumlah_hari").val((Date.parse(todate) - Date.parse(fordate)) / (1000 * 60 * 60 * 24));
        $('#submitcart').prop('disabled', false);
    }
}

function hapus() {
    $(".forDate").click(function() {
        $(".forDate").val("");
        $(".toDate").val("");
        filterTanggal();
    });
}

function filterTanggal() {
    $(function() {
        $(".forDate").each(function() {
            $(this).datepicker({
                locale: "id",
                dateFormat: "DD, dd MM yy",
                duration: "fast",
                regional: "id",
                minDate: dateToday,
                showAnim: "show",
                showStatus: true,
                onSelect: function() {
                    $(this).each(function(){
                        getdate();
                    })
                }
            });
        })
    });
}
function getdate() {
    var dateObject = $(this).datepicker('getDate');
                    // console.log(dateObject);
    $(function() {
        $(".toDate").each(function() {
            $(this).datepicker({
                dateFormat: "DD, dd MM yy",
                duration: "fast",
                minDate: dateObject,
                showStatus: true,
                showAnim: "slide",
            });
        });
    });
}
