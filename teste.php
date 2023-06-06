<?php
require "vendor/autoload.php";

$config['codigo_empresa'] = '99999';
$config['razao_social'] = 'Empresa Teste';
$config['numero_remessa'] = '2165';
$config['data_gravacao'] = date('dmy');

$arquivo = new \App\Arquivo();

$arquivo->config($config);

for ($i = 0; $i < 1; $i++) {
	$boleto['agencia'] 						= '2384';
	$boleto['agencia_dv'] 					= '0';
	$boleto['razao_conta_corrente']			= '0000';
	$boleto['conta'] 						= '0287155';
	$boleto['conta_dv'] 					= '6';
	$boleto['carteira'] 					= '009';
	$boleto['numero_controle'] 				= '5219';
	$boleto['habilitar_debito_compensacao'] = false;
	$boleto['habilitar_multa'] 				= true;
	$boleto['percentual_multa'] 			= '5';
	$boleto['nosso_numero'] 				= '61551964';
	$boleto['nosso_numero_dv'] 				= 'P';
	$boleto['desconto_dia']	 				= '0';
	$boleto['rateio'] 						= false;
	$boleto['numero_documento'] 			= '00000000';
	$boleto['vencimento'] 					= '201123'; //ddmmyy
	$boleto['valor'] 						= '120';
	$boleto['data_emissao_titulo'] 			= date('dmy'); //ddmmyy
	$boleto['valor_dia_atraso'] 			= '0';
	$boleto['data_limite_desconto'] 		= '201123'; //ddmmyy
	$boleto['valor_desconto'] 				= '1';
	$boleto['valor_iof'] 					= '0';
	$boleto['valor_abatimento_concedido'] 	= '0';
	$boleto['tipo_inscricao_pagador'] 		= 'CPF';
	$boleto['numero_inscricao'] 			= '11450826024';
	$boleto['nome_pagador'] 				= 'Nome Completo';
	$boleto['endereco_pagador'] 			= 'Rua Exemplo, sp, sp';
	$boleto['primeira_mensagem'] 			= '';
	$boleto['cep_pagador'] 					= '71676';
	$boleto['sufixo_cep_pagador'] 			= '040';
	$boleto['sacador_segunda_mensagem'] 	= '';

	//adicionando boleto
	$arquivo->add_boleto($boleto);
}

$arquivo->setFilename(__DIR__ . "/CB" . date("dmy"));

$arquivo->save();
