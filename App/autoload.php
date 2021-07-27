<?php
//
// * autoload - Responsável pelo carregamento automatico das classes.
//
// A funcção spl_autoload_register() registra qualquer número de autoloaders, permitindo que classes e interfaces sejam automaticamente carregadas
spl_autoload_register(function($classe){
// Diretórios incluidos p/ buscar classes
	$diretorios = [
		'Libraries',
		'Helpers'
	];
// Percorre os diretórios em busca das classes
	foreach($diretorios as $diretorio):
		//A variável $arquivo é igual á ex.: 
		//App/Libraries/classe que solicitou.php.
		$arquivo = (__DIR__.DIRECTORY_SEPARATOR.$diretorio.DIRECTORY_SEPARATOR.$classe.'.php');
//  Verifica se o arquivo de classe existe
		if(file_exists($arquivo)):
//  Inclui o arquivo de classe
			require_once $arquivo;
		endif;
	endforeach;
});

?>