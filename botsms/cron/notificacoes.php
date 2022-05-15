<?php

include __DIR__.'/../includes/includes.php';

$tlg = new Telegram (TOKEN_BOT);
$bd_tlg = new bdTelegram (__DIR__.'/../recebersmsbot.db');

foreach ($bd_tlg->todosUsuarios () as $usuario){

	$msg = @$tlg->sendMessage ([
		'chat_id' => $usuario ['id_telegram'],
		'text' => "🚀 <b>Gere Números Para Receber SMS no Seu Serviço Preferido, Diminuimos Em 10% O Valor De Todos Nossos Serviços. TikTok, Whatsapp, Kwai, PicPay, Telegram, BanQi...</b>\n\n💠 É Facíl, Apenas Recarregue Sua Conta Com o Comando /recarregar e Use o Saldo Para Comprar Números, Não Se Preocupe Você Só Paga Depois Que Recebe o Sms!RECARREGUE AGORA E GANHE 15 % DE BONUS APROVEITEM,!\n\n🎃 O Mais Barato e Melhor Do Telegram. Nosso Grupo De Consultas Gratis. @NET_TURBO_VPSBR",
		'parse_mode' => 'html'	]);

	/*$msg = $tlg->forwardMessage ([
	 	'chat_id' => $usuario ['id_telegram'],
	 	'from_chat_id' => '@NET_TURBO_VPSBR',
	 	'message_id' => 42
	 ]);*/

	/* $msg = @$tlg->sendMessage ([
	 	'chat_id' => $usuario ['id_telegram'],
	 	'text' => "? Use o comando /totaladicionados para saber a quantidade de usu�rios que voc? adicionou no nosso grupo @NET_TURBO_VPSBR\n\n<u>Adicionando ".MINIMO_ADICAO." usu�rios voc? ganha R\$".number_format (BONUS_ADICAO, 2)." de saldo no bot</u>",
	 	'parse_mode' => 'html'
	 ]);*/

	if ($msg ['ok']){

		$nome = $msg ['result']['chat']['first_name'] ?? $usuario ['id'];
		echo "{$nome} enviada\n";

	}

}
