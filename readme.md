# Laravel PHP Framework (projeto de ajuda - Unix)

## Pré-requisitos
- PHP >= 5.5.9
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension

Composer:
```bash
$ curl -sS https://getcomposer.org/installer | php
$ sudo mv composer.phar /usr/local/bin/composer
$ sudo chmod +x /usr/local/bin/composer
$ sudo chmod -R 777 ~/.composer/cache/
$ sudo composer self-update
```

## Instalação Framework
```bash
$ composer global require "laravel/installer"
```

Exportar o path do laravel para Linux reconhecer os comandos (bash):

1. Incluir no final do arquivo ~/.bashrc: export PATH="~/.composer/vendor/bin:$PATH"

2. Depois executar: 
```bash
$ source ~/.bashrc 
```


## Criação de um projeto clean
```bash
$ laravel new nome_projeto
$ cd nome_projeto
$ php artisan serve
```

O último comando serve para testar a instalação, se em localhost:8000 aparecer LARAVEL escrito na página, tudo está ok. Ao utilizar o comando laravel new automaticamente a última versão do Laravel será baixada. Até a escrita deste documento o comando configura o Laravel 5.2. Caso deseja instalar laravel 5.1 LTS, substitua aquele primeiro comando por:
```bash
$ composer create-project --prefer-dist laravel/laravel nome-do-projeto 5.1.*
```



```bash
$ laravel new nome_projeto
$ cd nome_projeto
$ php artisan serve
$ sudo chmod -R 777 storage/
$ sudo chmod -R 777 bootstrap/cache/
```

