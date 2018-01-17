// $(document).ready(function(){
//    $('[data-toggle="offcanvas"]').click(function(){
//        $("#navigation").toggleClass("hidden-xs");
//    });
// });

// $(document).ready(function(){
// 	$open1=false;
// 	$('#admin_usuario').click(function(){
		
// 		if($open1==false){
// 			$('#admin_usuario').addClass('active');
// 			$open1=true;
// 		}
// 		else{
// 			$('#admin_usuario').removeClass('active');
// 			$open1=false;
// 		}
//     });
// });

$(document).ready(function(){
	var uri =window.location.pathname;
	switch(uri){
		case '/admin':
			$('.menu-inicio').addClass('active');
			break;

		case '/admin/usuario':
			$('#admin_usuario').addClass('active');
			$('.usuarios-todos').addClass('active');
			break;

		case '/admin/usuario/create':
			$('#admin_usuario').addClass('active');
			$('.usuarios-crear').addClass('active');
			break;

		case '/admin/noticias':
			$('#admin_noticias').addClass('active');
			$('.noticias-todas').addClass('active');
			break;

		case '/admin/noticias/create':
			$('#admin_noticias').addClass('active');
			$('.noticias-crear').addClass('active');
			break;

		case '/admin/categorias':
			$('#admin_categorias').addClass('active');
			break;

		case '/admin/profile':
			$('#admin_profile').addClass('active');
			break;

		case '/admin/textos':
			$('#admin_textos').addClass('active');
			break;
	}

});










