# Laravel PHP Framework - Blog (referência de estudos)


## O que é este projeto?
O projeto tem como objetivo disponibilizar os códigos para o curso laravel-express e ser um guia de referência/testes sobre Laravel para o autor.


## Para rodar este projeto
```bash
$ git clone https://github.com/fabiosperotto/laravel-blog
$ cd laravel-blog
$ composer install
$ php artisan serve
```
Acesssar pela url: http://localhost:8000/blog



## Pré-requisitos
- PHP >= 5.5.9
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension


## Anotações/Extras
As seções a seguir são anotações sobre o framework e podem não refletir a aplicação (blog) em desenvolvimento.


Composer:
```bash
$ curl -sS https://getcomposer.org/installer | php
$ sudo mv composer.phar /usr/local/bin/composer
$ sudo chmod +x /usr/local/bin/composer
$ sudo chmod -R 777 ~/.composer/cache/
$ sudo composer self-update
```

### Instalação Framework
```bash
$ composer global require "laravel/installer"
```

Exportar o path do laravel para Linux reconhecer os comandos (bash):

1. Incluir no final do arquivo ~/.bashrc: export PATH="~/.composer/vendor/bin:$PATH"

2. Depois executar: 
```bash
$ source ~/.bashrc 
```


### Criação de um projeto clean
```bash
$ laravel new nome_projeto
$ cd nome_projeto
$ php artisan serve
```

O último comando serve para testar a instalação, se em localhost:8000 aparecer LARAVEL escrito na página, tudo está ok. Ao utilizar o comando laravel new automaticamente a última versão do Laravel será baixada. Até a escrita deste documento o comando configura o Laravel 5.2. Caso deseja instalar laravel 5.1 LTS, substitua aquele primeiro comando por:
```bash
$ composer create-project --prefer-dist laravel/laravel nome-do-projeto 5.1.*
```

### Artisan
- Sistema de comandos do Laravel. Help em:
```bash
$ php artisan
```
- Remover arquivos de cache criado pelo Laravel:
```bash
$ php artisan clear-compiled 
```
- Colocar sistema em modo manutenção:
```bash
$ php artisan down 
```

### Tinker
- Ferramenta de interação com o projeto, objetos podem ser criados e salvos em banco de dados, ótimo para testes sem ter que criar telas:
```bash
$ php artisan tinker
```

### Estruturas importantes
- app/Http/routes.php: arquivo que define as rotas da aplicação.
- app/Http/Controllers: ficam os controllers da aplicação, o comando para gerar uma estrutura de um controlador é:
```bash
$ php artisan make:controller TestController
```
- resources: ficam as views da aplicação. Deixe imagens, CSS, JS e fontes na /public.
 
 

