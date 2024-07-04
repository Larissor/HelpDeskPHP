$.post("../../controller/categoria.php?op=combo",function(data, status){
   $('#categoriaID').html(data);
});