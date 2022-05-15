#!/bin/bash

echo "Instalando dependencias nescessarias: php (modulos), sqlite3, redis..."

sudo apt-get update > /dev/null
sudo apt-get upgrade -y > /dev/null
echo "Update feito, instalação iniciada..."

sudo apt install php php-curl php-redis php-sqlite3 redis-server sqlite3 -y > /dev/null 2>&1
sudo chmod 777 *.sh

#instalando banco de dados
sqlite3 recebersmsbot.db < recebersmsbot.sql

echo "instalação finalizada, use ./iniciar.sh depois de configurar as info. do bot no arquivo /includes/dados_bot.php para iniciar os serviços :)"