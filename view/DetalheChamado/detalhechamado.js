function init(){
   
}

$(document).ready(function(){
    var chamadoID = getUrlParameter('ID');
    $.post("../../controller/chamado.php?op=listardetalhe", { chamadoID : chamadoID }, function (data) {
        $('#lbldetalhe').html(data);
    }); 

});

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};


init();