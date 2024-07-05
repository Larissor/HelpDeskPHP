function init(){
   $("#chamado_form").on("submit",function(e){
      guardareditar(e);	
  });

}

$.post("../../controller/categoria.php?op=combo",function(data, status){
   $('#categoriaID').html(data);
});

function guardareditar(e){
   e.preventDefault();
   var formData = new FormData($("#chamado_form")[0]);
   $.ajax({
      url: "../../controller/chamado.php?op=insert",
      type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(dados){
               
            }
   });
}


init();

