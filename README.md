## Configurando Projeto
  - composer install
  - docker compose up -d --build "se necessário use o sudo"

## Env
copie o arquivo .env-example renomeando para .env

 - php artisan key:generate

 acesse em: http://localhost

## configuração do banco no SGBD

execute:
 - docker inspect database | grep IPAddress
 em seguida copie o valor de IPAddress no DB_HOST no arquivo .env
 você pode acessar o banco no phpmyadmin colocando apenas "root" usuário em : http://localhost:8080 

## rodando as migrations

no ubuntu:
php artisan migrate

no wsl2: 
é necessario que voce entre no container
 - docker exec -t app bash 
 - php artisan migrate 

