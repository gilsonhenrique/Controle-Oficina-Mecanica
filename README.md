# projeto-Gerenciar-Oficina

Aplicação desenvolvida para agilizar o operacional e controle de uma oficina mecânica, que anteriormente utilizava controle em papel.
Foi desenvolvida utilizando um microfremwork de 
php e bootstrap.

## Configurações necessárias

Ajustar o App/config.example.php renomeando para config.php:

```php
// Conexão
define('DB',[
	'HOST' => 'meu_host',
	'USUARIO' => 'meu_user',
	'SENHA' => 'minha_senha',
	'BANCO' => 'meu_banco'
	]);

// Url do Projeto
define('URL','http://meu_host/minha_pasta/minha_subpasta');
```

Crie um Banco de dados , e importe o arquivo veiculos.sql
> Obs: Este arquivo contém a estrutura da tabela usada no Banco de dados


Crie um .htaccess dentro pasta Public, com o path da aplicação:

```php
<ifModule mod_rewrite.c>
Options -Multiviews
RewriteEngine On
RewriteBase /meu_path/Public         <==========
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]
</ifModule>
```

> Nota: Login: **oficina** / Senha: **003-9** definidos em:\App\Models\Usuario.php    

## Melhorias a serem implementadas

- [ ] Sistema de autenticação  

## Créditos

Micro framework - Ronaldo Aires

https://youtube.com/playlist?list=PL0N5TAOhX5E-NZ0RRHa2tet6NCf9-7B5G
