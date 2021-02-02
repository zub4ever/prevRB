function somarLinhas(coluna) {
	let valores = reaisPraFloat(coluna);
	const reducer = (accumulator, currentValue) => accumulator + currentValue;
	var total = valores.reduce(reducer).toFixed(2);
	return formatter.format(total);
}



var formatter = new Intl.NumberFormat('pt-BR', {
	style: 'currency',
	currency: 'BRL',
	minimumFractionDigits: 2,
});

function reaisPraFloat(coluna) {
	var valores_gra = [];
	$(coluna).each(function () {
		valores_gra.push(parseFloat($(this).text().replace(".", "").replace(".", "").replace(",", ".").replace(" ", "").replace("R$", "")));
	});
	return valores_gra.reverse();
}

function aposPensChart() {
	// JS Chart
	var apos = [
		['2015'],
		['2016'],
		['2017'],
		['2018'],
		['2019'],
		['2020'],
	];
	var pens = [
		['2015'],
		['2016'],
		['2017'],
		['2018'],
		['2019'],
		['2020'],
	];

	var valores = reaisPraFloat('.aposentadorias_total');
	var valoresPens = reaisPraFloat('.pensoes_total');

	for (var i = 0; i < apos.length; i++) {
		apos[i].push(valores[i]);
		pens[i].push(valoresPens[i]);
	}

	var chart = JSC.chart('chartDiv', {
		debug: false,
		type: 'line',
		title_label: {
			text: 'Evolução da Folha do Fundo Previdenciário - Aposentadorias e Pensões',
			style_fontSize: 15
		},
		legend_visible: true,
		defaultAxis_defaultTick_label_style: {
			fontSize: 15
		},
		xAxis: {
			scale_type: 'auto',
			crosshair_enabled: true
		},

		series: [{
			name: 'R$ Totais em aposentadorias',
			defaultPoint_marker_visible: true,
			line: {
				width: 1,
				caps_end: {
					type: 'circle',
					size: "500%"
				}
			},
			points: apos
		},
		{
			name: 'R$ Totais em pensões',
			defaultPoint_marker_visible: true,
			line: {
				width: 1,
				caps_end: {
					type: 'circle',
					size: "500%"
				}
			},
			points: pens
		}
		],
		toolbar_visible: true
	});
}

function headerSlide() {
	var sTop = $(window).scrollTop();
	if (window.screen.width >= 600) {
		if (sTop <= 0) {
			$('#ht').slideDown();
		} else {
			$('#ht').slideUp();
		}
	} else {
		$('.header-top').fadeOut('fast');
	}
}