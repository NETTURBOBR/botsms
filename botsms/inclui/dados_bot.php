<?php

define ('MODO_DESENVOLVEDOR', false); // no modo desenvolvedor só os adiministradores podem usar o bot

// TOKEN DO BOT
define ('TOKEN_BOT', '5219403207:AAGeh2YcRtolhVTdI12FtsABaZFNaA0Ua40');

// API KEY https://sms-activate.ru/en/api2
define ('KEY_SMS', '4B915019199205d7B23f86f3c51ded03');

// token do mercado pago
define ('ACCESS_TOKEN_MERCADO_PAGO','APP_USR-8408142441558488-050314-af3983979d31bb0a169119fdab50b06e-260187276');

// porcentagem de lucro sobre os valores cobrados no site, já feita a converção
define ('PORCENTAGEM_LUCRO', 125); // %

// lista de ids de adms
define ('ADMS', [532887828,]);

define ('CHAT_ID_NOTIFICACAO', '-1613726749'); // onde ir� as notifica��es de resgate de saldos (opcional)

define ('GRUPO_ID', '-1613726749'); // grupo de bot

// paises em que o bot vai atender,
// limitada a 160 paises por conta do telegram não suportar além disso
define ('PAISES', [
	'187' => '🇺🇸 EUA',
        '87' => '🇵🇾 Paraguai',
	'86' => '🇮🇹 Italia',
	'117' => '🇵🇹 Portugal',
	'73' => '🇧🇷 Brasil',
	'1' => '🇺🇦 Ucrânia',
	'2' => '🇰🇿 Cazaquistão',
	'3' => '🇨🇳 China',
	'4' => '🇵🇭 Filipinas',
	'5' => '🇲🇲 Miamar',
	'6' => '🇮🇩 Indonésia',
	'7' => '🇲🇾 Malásia',
	'8' => '🇰🇪 Quênia',
	'9' => '🇹🇿 Tanzânia',
	'10' => '🇻🇳 Viatinã',
	'13' => '🇮🇱 Israel',
	'14' => '🇭🇰 Hong Kong',
	'15' => '🇵🇱 Polônia',
	'16' => '🇬🇧 Reino Unido',
	'19' => '🇳🇪 Nigéria',
	'21' => '🇪🇬 Egito',
	'22' => '🇮🇳 Índia',
	'23' => '🇮🇪 Irlanda',
	'24' => '🇰🇭 Camboja',
	'25' => '🇱🇦 Laus',
	'26' => '🇭🇹 Haiti',
	'28' => '🇬🇲 Gambia',
	'29' => '🇷🇸 Sérvia',
	'30' => '🏳️‍🌈 Iêmen',
	'31' => '🇿🇦 Africa do Sul',
	'32' => '🇷🇴 Romênia',
	'33' => '🇨🇴 Colômbia',
	'34' => '🇪🇪 Estônia',
	'35' => '🇦🇿 Azerbaijão',
	'36' => '🇨🇦 Canadá',
	'37' => '🇲🇦 Marrocos',
	'38' => '🇬🇭 Gana',
	'39' => '🇦🇷 Argentina',
	'40' => '🇺🇿 Uzbequistão',
	'41' => '🇨🇲 Camarões',
	'43' => '🇩🇪 Alemanha',
	'44' => '🇱🇹 lituânia',
	'45' => '🇭🇷 Croácia',
	'46' => '🇸🇪 Suécia',
	'47' => '🇮🇶 Iraque',
	'48' => '🇧🇶 Paises Baixos',
	'49' => '🇱🇻 Letônia',
	'50' => '🇦🇹 Austrália',
	'52' => '🇹🇭 Tailândia',
	'53' => '🇸🇦 Arábia Saudita',
	'54' => '🇲🇽 México',
	'55' => '🇹🇼 Taiwan',
	'56' => '🇪🇸 Espanha',
	'57' => '🇮🇷 Irã',
	'60' => '🇧🇩 Bangladesh',
	'61' => '🇸🇳 Senegal',
	'62' => '🇵🇪 Peru'
]);

/*

	Quando ativado esse sistema bloqueia por X minutos o usuario que cancelar mais de X números do mesmo serviço NO MESMO PAÍS durante as proximas 12h e remove X saldo do usuário em cada bloqueio.
	Para remover o bloqueio use /removeblock (id usuario)

*/
define ('ANTI_CANCELAMENTO', true); // ativa (true) ou desativa (false) sistema de verificação de abuso de cancelamento
define ('TEMPO_BLOCK', 600); // 10 minutos
define ('CANCELAMENTO_MINIMO', 10); // quantidae minima de cancelamentos DO MESMO SERVIÇO para bloquear um usuário
define ('VALOR_DESCONTO_BLOCK', 3); // valor descontado do saldo em cada bloqueio no bot

// SISTEMA DE BONÛS

// porcentagem bonus
define ('BONUS', 10); // 10%

define ('STATUS_BONUS_ADICAO', false); // status do sistema de bonus por adicionar usuário
define ('BONUS_ADICAO', 0.50); // Bonus por adicionar usuario no nosso grupo, em reais
define ('MINIMO_ADICAO', 50); // Minimo de usuarios adicionados para ganhar bonus

// SISTEMA AFILIADOS

define ('STATUS_AFILIADO', true);
define ('BONUS_AFILIADO', 10); // 10% do valor de recarga do indicado
