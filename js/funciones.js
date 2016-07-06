$(document).ready(function(){
    $("#header").accordion({
        collapsible:true,
        heightStyle:"content"
    });
    $("#header2").accordion({
        collapsible:true,
        heightStyle:"content"
    });
    $("#mensaje").dialog({
       autoOpen:false,
       modal:true,
       buttons:{
           Ok: function(){
               $(this).dialog("close");
           }
       }
   });
   $("#mensaje2").dialog({
       autoOpen:false,
       modal:true,
       buttons:{
           Ok: function(){
               $(this).dialog("close");
           }
       }
   });
    cargarContent();
    cargarContent2();
});
function cargarContent(){
   $.post(
        base_url+"Controlador/cargarContent",{},
        function(pagina){
            $("#paginaLogin").html(pagina);
            $("#btn_login").button().click(function(){
                botonLogin();
            });
        }
    );
}

function cargarContent2(){
   $.post(
        base_url+"Controlador/cargarContent2",{},
        function(pagina){
            $("#paginaLogin2").html(pagina);
            $("#btn_login2").button().click(function(){
                botonLogin2();
            });
        }
    );
}

function botonLogin() {
    $.post(
            base_url+"Controlador/validaLogin",
            {
                usuario: $("#nickname").val(),
                clave: $("#password").val()
            },
    function (vector) {
        if (vector.valido === false) {
            $("#mensaje").html("<p>" + vector.mensaje + "</p>");
            $("#mensaje").dialog("open");
        } else {
            $("#tablaUsuario").html('');
        }
        cargarContent();
    },
            'json'
            );
}
function botonLogin2() {
    $.post(
            base_url+"Controlador/validaLogin2",
            {
                usuario: $("#nickname2").val(),
                clave: $("#password2").val()
            },
    function (vector) {
        if (vector.valido === false) {
            $("#mensaje2").html("<p>" + vector.mensaje + "</p>");
            $("#mensaje2").dialog("open");
        } else {
            $("#tablaUsuario").html('');
        }
        cargarContent2();
    },
            'json'
            );
}