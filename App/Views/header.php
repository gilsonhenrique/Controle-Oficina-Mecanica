<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-4">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="<?=URL?>">BMI-Automec</a>
    <div class ="col text-center">
      <span class="navbar-text">
        <a class="navbar-brand text-white"><?="Olá,  ".$_SESSION['usuario_nome']?></a>
        <a class="btn btn-danger" href="<?=URL?>/usuarios/sair" data-tooltip="tooltip" title="">Sair</a>
      </span>
    </div>   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="<?=URL?>">Home</a>
        </li>
   <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu Inicial
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?=URL?>/Veiculos/cadastrar">Cadastrar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><h6 class="dropdown-header">Listar:</h6></li>
            <li><a class="dropdown-item" href="<?=URL?>/Veiculos/listar/todos">Todos</a></li>
            <li><a class="dropdown-item" href="<?=URL?>/Veiculos/listar/aguardando">Aguardando</a></li>
            <li><a class="dropdown-item" href="<?=URL?>/Veiculos/listar/executando">Executando</a></li>
            <li><a class="dropdown-item" href="<?=URL?>/Veiculos/listar/liberado">Liberado</a></li>
            <li><a class="dropdown-item" href="<?=URL?>/Veiculos/listar/pendente">Pendente</a></li> 
          </ul>
        </li>
      </ul>
      <form method="post" class="d-flex" action="<?=URL?>/Veiculos/pesquisar">
        <input class="form-control me-2" type="text" name="search" placeholder="Placa ou Nome" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" value="placa" name="placa">Placa</button>
        <button class="btn btn-outline-primary" type="submit" value="nome" name="nome">Nome</button>        
      </form>
    </div>
  </div>
</nav>