function init(){
}

$(document).ready(function() {

});

$(document).on("click", "#btnsuporte", function () {
        if ($('#rol_id').val()==1){
            $('#lbltitulo').html("Entrar como suporte");
            $('#btnsoporte').html("Entrar como cliente");
            $('#rol_id').val(2);
        }else{
            $('#lbltitulo').html("Entrar como cliente");
            $('#btnsoporte').html("Entrar como suporte");
            $('#rol_id').val(1);
        }
});



init();