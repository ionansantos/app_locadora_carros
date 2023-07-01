## Configurando Projeto
 composer install
 docker compose up -d --build "se necessário use o sudo"

## Env
copie o arquivo .env-example renomeando para .env

acesse em: http://localhost

php artisan key:generate

## configuração do banco no SGBD
execute: docker inspect database | grep IPAddress
em seguida copie o valor de IPAddress no host do SGBD, 
ou no proprio phpmyadmin em : http://localhost:8080 

## rodando as migrations
php artisan migrate
