<?php
session_start();
include './../App/config.php';
include './../App/autoload.php';

$db = new Db_Connect();
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8" lang="pt-br"/>
        <meta name= "viewport" content= "width=device-width,initial scale= 1.0">
        <title> <?= APP_NOME ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=URL?>/Public/Css/estilos.css">
    </head>

    <body>

    	<?php
// Se estiver logado, carrega cabeçalho
        if(Sessao::estaLogado()){include '../App/Views/header.php';}

    	$rotas = new Rota();

// Se estiver logado, carrega rodapé
        if(Sessao::estaLogado()){include '../App/Views/footer.php';}
    	?>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="<?=URL?>/Public/Js/jquery.funcoes.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>
