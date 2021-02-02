// Slide Barra do topo
$(document).ready(function(){
	$('.lz').loadScroll(100);
    window.addEventListener('load', function(){
        if (window.screen.width < 720){
        $('#cert-img').fadeOut('fast');}
        
    });
	window.addEventListener('scroll', function (){
		var sTop = $(window).scrollTop();
		if (window.screen.width > 500){
			if (sTop < 1){
				$('#ht').slideDown('fast');
			} else if(sTop > 1) {
				$('#ht').slideUp('fast');
			}
		} else {
			$('.header-top').fadeOut('fast');
			

		}
	}
	);
});

$(document).ready(function(){
	$(".dropdown, .btn-group").hover(function(){
		var dropdownMenu = $(this).children(".dropdown-menu");
		if(dropdownMenu.is(":visible")){
			dropdownMenu.parent().toggleClass("open");
		}
	});
});	



// for(data of myData){
// 		// Aposentadorias
// 		document.querySelector('#qtd_apo_fprev').innerText = data.qtd_aposentadorias_fprev;
// 		document.querySelector('#val_apo_fprev').innerText = format.format(data.valor_aposentadorias_fprev);
// 		document.querySelector('#qtd_apo_ffin').innerText = data.qtd_aposentadorias_ffin;
// 		document.querySelector('#val_apo_ffin').innerText = format.format(data.valor_aposentadorias_ffin);
// 		// Pensões
// 		document.querySelector('#qtd_pen_fprev').innerText = data.qtd_pensionistas_fprev;
// 		document.querySelector('#val_pen_fprev').innerText = format.format(data.valor_pensoes_fprev);
// 		document.querySelector('#qtd_pen_ffin').innerText = data.qtd_pensionistas_ffin;
// 		document.querySelector('#val_pen_ffin').innerText = format.format(data.valor_pensoes_ffin);
// 		// Total
// 		document.querySelector('#qtd_total_fprev').innerText = data.qtd_total_fprev;
// 		document.querySelector('#val_total_fprev').innerText = format.format(data.valor_total_fprev);
// 		document.querySelector('#qtd_total_ffin').innerText = data.qtd_total_ffin;
// 		document.querySelector('#val_total_ffin').innerText = format.format(data.valor_total_ffin);