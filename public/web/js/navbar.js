$(document).ready(function() {
    count();
    // cart();
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
// function cart(){
//     var id = $('#id_user').val();
//     // console.log(id);
//     $.get('/ajax/cart-navbar?user_id=' + id,function(data) {
//             // $("#cart-total").text(data);
//             // console.log(data);
//             $.each(data,function(){
//                 $.each(this,function(index, value){
//                     $.each(this, function(){
//                         $('li a div .col-8').text(value.name);
//                         console.log(value.name);
//                     });
//                 });
//             });
//         }
//     );
// }
