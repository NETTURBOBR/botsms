<?php

	$tlg->sendMessage ([
		'chat_id' => $tlg->ChatID (),
		'text' => "📌 <b>Contato para Suporte</b>\n\n📎 | Contato: @NET_TURBO_VPSBR\n\n⚙️ | <b>Suporte 7 Dias - 08Hrs às 23Hrs.</b>\n\n- Envie a Mensagem! \n- Aguarde o nosso retorno, responderemos assim que possível! ",
		'parse_mode' => 'html',
		'reply_markup' => $tlg->buildInlineKeyboard ([[$tlg->buildInlineKeyBoardButton("Chamar Suporte 💬", $url="@NET_TURBO_VPSBR")]])
]); 