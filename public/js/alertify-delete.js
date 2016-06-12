/**
 * Created by Valdii on 25-05-16.
 */
$(".btn-delete").click(function (e) {
    e.preventDefault();
    alertify.confirm("¿Esta seguro que desea eliminar?.",
        function(){
            // alertify.success('Ok');
        },
        function(){
            //alertify.error('Cancel');
        });
});