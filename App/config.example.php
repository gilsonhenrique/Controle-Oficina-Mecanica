<?php
// Configurações do APP

// 1)- Conexão
define('DB',[
	'HOST' => 'meu_host',
	'USUARIO' => 'meu_user',
	'SENHA' => '12345678',
	'BANCO' => 'meu_banco'
	]);

// 2) Direciona a Raiz do APP
define ('APP', dirname(__FILE__));

// 3) Url do Projeto
define('URL','http://meu_host/minha_pasta/minha_subpasta');

// 4) Nome do APP
define('APP_NOME','nome do App');

// 5) Versão do APP
define('APP_VERSAO','xxxxxx';

// 6) Informações do cliente

define('CLIENTE_NOME','Oficina perfeita Combustão');
define('CLIENTE_APELIDO','Perfeita Combustão S.A.');
define('CLIENTE_TELEFONE',' (99) 12345678');
define('CLIENTE_ENDERECO',' abcdef , 1234');
define('CLIENTE_CNPJ',' 0000000/00');
?>