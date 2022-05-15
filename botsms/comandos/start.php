<?php

##################################

$saldo = (string)number_format ($user ['saldo'], 2);

##################################

$tlg->sendMessage ([
	'chat_id' => $tlg->ChatID (),
	'text' => "✨<b>Olá,</b> ".htmlentities ($tlg->FirstName ())." Seja bem-vindo (a)!\n\n😉 <em>Eu Sou Um Bot Feito Para Receber SMS's De Varios Serviços.</em>\n\n🏳️‍🌈 | <b>Pais Selecionado:</b> ".PAISES [$user ['pais']]."\n💰 | <b>Seu Saldo:</b> R\$: {$saldo}\n\n↘️ Opções Abaixo:",
	'parse_mode' => 'html',
	'reply_markup' => $tlg->buildInlineKeyboard ([[$tlg->buildInlineKeyBoardButton ('📲 Serviços', null, '/servicos')], [$tlg->buildInlineKeyBoardButton ('👤 Meu Perfil', null, '/saldo'), $tlg->buildInlineKeyBoardButton ('💵 Recarregar', null, '/recarregar')], [$tlg->buildInlineKeyBoardButton ('⚠️ Regras', null, '/sobre'), $tlg->buildInlineKeyBoardButton ('🔧 Suporte', null, '/ajuda')], [$tlg->buildInlineKeyBoardButton ('🎁 Bônus', null, '/afiliados')], [$tlg->buildInlineKeyBoardButton(" 👥 Grupo ", $url="https://t.me/Recebsms")]])
]); 

// afiliados
if (isset ($complemento) && is_numeric ($complemento) && STATUS_AFILIADO){

	$ref = $tlg->getUsuarioTlg ($complemento);

	// se usuario existir e não tiver entrado no bot por indicação de alguem e tambem não pode ser ele mesmo
	if (isset ($ref ['id']) && $bd_tlg->checkReferencia ($tlg->UserID ()) == false && $complemento != $tlg->UserID ()){

		// salva usuario atual como referencia do dono do link
		$bd_tlg->setReferencia ($complemento, $tlg->UserID ());

	}

}
