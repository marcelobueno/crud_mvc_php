# CRUD MVC PHP

![N|Solid](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white) ![N|Solid](https://img.shields.io/badge/JavaScript-323330?style=for-the-badge&logo=javascript&logoColor=F7DF1E) ![N|Solid](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white) ![N|Solid](https://img.shields.io/badge/Composer-885630?style=for-the-badge&logo=Composer&logoColor=white) 

Este CRUD foi feito em PHP no padrão MVC utilizando abstrações para sistema de rotas, banco de dados e camada de visão. As libs utilizadas serão descritas abaixo.

## Features

- Criação, listagem, edição e deleção de Produtos.
- Criação, listagem, edição e deleção de Categorias.
- Gestão de relacionamento entre Produtos e Categorias.


## Instalação

Este projeto tem como requisito [Composer](https://getcomposer.org)

Para proceder com a instalação siga estes passos.

```sh
git clone https://github.com/marcelobueno/crud_mvc_php.git
```

Após clonar acesse a pasta do projeto e execute os comandos:

```sh
$ composer install
```

Crie um banco de dados e parametrize no arquivo /src/Config.php

```
/* 
|--------------------------------------------------------------------------------------------|
| Banco de dados                                                                             |
|--------------------------------------------------------------------------------------------|
*/

define('DB_HOST','localhost'); //Endereço do host
define('DB_USER','root'); //Usuário do banco de dados
define('DB_PASSWORD',''); //Senha se houver
define('DB_DATABASE','crud_produtos'); //Nome da database criada
```

Em seguida copie o script de criação do banco de dados do arquivo script.sql e execute a query em seu banco de dados.

Ainda no Config.php, parametrize a URL do projeto seguindo o exemplo:

```
/* 
|--------------------------------------------------------------------------------------------|
| Navegação                                                                                  |
|--------------------------------------------------------------------------------------------|
*/

define("URL_BASE", "http://localhost/pasta_do_projeto");
```