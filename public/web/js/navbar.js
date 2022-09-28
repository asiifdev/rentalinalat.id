$(document).ready(function() {
    count();
    total_price();
});

function count(){
    var id = $('#id_user').val();
    // console.log(id);
    $.ajax({
        type:'GET',
        url:'/ajax/cart-count?user_id=' + id,
        data:'_token = <?php echo csrf_token() ?>',
        success:function(data) {
            $("#cart-total").text(data);
            // console.log($("#status").text());
        }
    });
}

function total_price(){
    if($('span[id="cart-prize"]').length == 0){
        $('#tombol_checkout').attr('hidden', true).removeClass('mt-5');
        $('.empty_cart').attr('hidden', false);
        console.log('OKAY')
    }
    else {
        $('#tombol_checkout').attr('hidden', false).addClass('mt-5');
        $('.empty_cart').attr('hidden', true);
    }
    var formatter = new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        maximumSignificantDigits: 3
    });
    var total = 0;
    $('span[id="cart-prize"]').each(function(){
        total += parseInt($(this).text().replace(/[A-Za-z$-/]/g, ""));
     });
    $('#total_price').attr('style', 'font-weight: bolder;')
    $('#total_price').text(formatter.format(total));
}
