<?php

/* 
|--------------------------------------------------------------------------------------------|
| Introdução                                                                                 |
|--------------------------------------------------------------------------------------------|
| Neste arquivo ficam contidas as configurações iniciais da aplicação como por exemplo       |
| Timezone e configurações de acesso ao banco de dados.                                      |
|--------------------------------------------------------------------------------------------|
*/

/* 
|--------------------------------------------------------------------------------------------|
| Timezone                                                                                   |
|--------------------------------------------------------------------------------------------|
*/

date_default_timezone_set('America/Sao_Paulo');

/* 
|--------------------------------------------------------------------------------------------|
| Banco de dados                                                                             |
|--------------------------------------------------------------------------------------------|
*/

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_DATABASE','crud_produtos');

define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => DB_HOST,
    "port" => "3306",
    "dbname" => DB_DATABASE,
    "username" => DB_USER,
    "passwd" => DB_PASSWORD,
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

/* 
|--------------------------------------------------------------------------------------------|
| Navegação                                                                                  |
|--------------------------------------------------------------------------------------------|
*/

define("URL_BASE", "http://localhost/projects/crud_produtos_php");