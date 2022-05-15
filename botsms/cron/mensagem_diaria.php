<?php

include __DIR__.'/../includes/includes.php';

$tlg = new Telegram (TOKEN_BOT);

$tlg->sendMessage ([
'chat_id' => '@NET_TURBO_VPSBR',
'text' => "<b>🤓 RECEBA SMS COM NÚMEROS NOVOS PARA CRIAR CONTAS</b>

- Telegram
- Whatsapp
- Ifood
- 99app
- Banqi
- Uber- E muitos outros...

💬 Receba os códigos no nosso bot
@Recebsms_bot

🌐 Grupo de Referências
@NET_TURBO_VPSBR
📍 Nosso Suporte
@NET_TURBO_VPSBR

*Preço e serviço incomparável com os existentes.
*Mais de 4 mil números disponíveis",
'parse_mode' => 'html'
]);