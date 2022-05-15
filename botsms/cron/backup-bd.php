<?php

include __DIR__.'/../includes/includes.php';

$tlg = new Telegram ('5219403207:AAGeh2YcRtolhVTdI12FtsABaZFNaA0Ua40');

print_r ($tlg->sendDocument ([
	'chat_id' => -532887828,
	'caption' => "Backup\n@Recebsms_bot\n".date ('d/m/Y H:i:s'),
	'document' => curl_file_create (__DIR__.'/../recebersmsbot.db')
]));