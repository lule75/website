$("#datos-usuarios-link").hover(function  () {
	$('datos-usuario').addClass('mostrar').removeClass('ocultar');
},function () {
});
$('#datos-usuario-cerrar').onClick(
	$('datos-usuario').addClass('ocultar').removeClass('mostrar');
);