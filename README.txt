Ajustar o App/config.example.php renomeando para config.php:
____________________________________________________________

// 1)- Conexão
define('DB',[
	'HOST' => 'meu_host',
	'USUARIO' => 'meu_user',
	'SENHA' => '12345678',
	'BANCO' => 'meu_banco'
	]);

// 3) Url do Projeto
define('URL','http://meu_host/minha_pasta/minha_subpasta');


Ajustar o path do .htaccess na pasta Public:
____________________________________________

<ifModule mod_rewrite.c>
Options -Multiviews
RewriteEngine On
RewriteBase /meu_path/Public         <==========
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]
</ifModule>
