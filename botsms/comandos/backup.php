<?php

##################################
date_default_timezone_set("America/Bahia");
##################################

if (in_array ($tlg->UserID (), ADMS)){

	$id_telegram = $complemento;

	$get_usuario = $tlg->getChat ([
		'chat_id' => $id_telegram
	]);

	if (!$get_usuario ['ok']){

            $tlg->sendMessage ([
	         'chat_id' => $tlg->ChatID (),
	         'text' => "<b> Gerando Backup....⏳ </b>",
	         'parse_mode' => 'html',
	         'reply_markup' => $tlg->buildInlineKeyboard ([[$tlg->buildInlineKeyBoardButton ('Backup Gerado ✅', null, '/Backup')]])
]);
			
		$tlg->sendDocument ([
			'chat_id' => $tlg->ChatID (),
			'caption' => "📌 Backup de Usuários\n\n👨🏻‍💻 | @NET_TURBO_VPSBR\n📎 | Bot: @Recebsms_bot\n\n ⚙️ | Backup: ".date ('d/m/Y H:i:s'),
				'document' => curl_file_create (__DIR__.'/../recebersmsbot.db'),
				'parse_mode' => 'html'
			]);

	}

}