$(function(){

	/*
	|--------------------------------------------------------------------------
	| Máscaras
	|--------------------------------------------------------------------------
	*/
	$('#cpf').mask('000.000.000-00');

	$('#cep, #_cep').mask('00000-000', {clearIfNotMatch: true});

	$('#contato, #telefone').mask('(00) Z0000-0000', {
				translation: {
					'Z': {
					pattern: /[9]/, optional: true
					}
				},
				clearIfNotMatch: true
	});

	$('#data').mask('AY/BY/YYYY', {clearIfNotMatch: true,
		'translation': {
			A: {pattern: /[0-3]/},
			B: {pattern: /[0-1]/},
			Y: {pattern: /[0-9]/}
		 }
	});

})