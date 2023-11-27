<?php

define("TITLE"      , "Log-In 😎✌️");
define("DESCRIPTION", "Sistema genérico para cadastro de usuários e controle de acessos");
define("KEYWORDS"   , "login, senha, php, sql, sistema, web, usuário, senha");
define("AUTHOR"     , "Leonardo Nolasco Gonçalves");

define("ROOT"     , "/PLog_In");
define("PATH"     , "/xampp/htdocs".ROOT);

define("ASSETS"     , ROOT."/assets");
define("MODEL"      , PATH."/src/model");
define("VIEW"       , ROOT."/src/view");
define("CONTROLLER" , ROOT."/src/controller");

//Banco de dados
define("MYSQL_SERVER", "localhost");
define("MYSQL_PORT", 3306);
define("MYSQL_DATABASE", "Log-In");
define("MYSQL_CHARSET", "utf8");
define("MYSQL_USER", "root");
define("MYSQL_PASS", "");

?>