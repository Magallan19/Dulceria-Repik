var inicio = function() {

}
$(document).ready(function() {
    $(".Cantidad").keyup(function(e) {
        if ($(this).val() != '') {
            if (e.keyCode == 13) {
                var id = $(this).attr('data-Id');
                var precio = $(this).attr('data-Precio');
                var cantidad = $(this).val();
                $(this).parentsUntil('.producto').find('.subtotal').text('Subtotal: ' + (precio * cantidad));
                $.post('Php/Modificar.php', {
                    Id: id,
                    Precio: precio,
                    Cantidad: cantidad
                }, function(e) {
                    $("#total").text('Total: ' + e);
                });
            }
        }
    });
})