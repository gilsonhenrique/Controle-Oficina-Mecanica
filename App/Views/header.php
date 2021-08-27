<nav class="navbar navbar-expand-lg navbar-light bg-dark p-4">

    <div class="container-fluid">

      <a class="navbar-brand text-white" href="<?=URL?>">BMI-Home</a>

      <div class="row ml-auto">

        <div class="dropdown mr-3">
          <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Menu veículos
          </button>
          <ul class="dropdown-menu dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="<?=URL?>/Veiculos/cadastrar">Cadastrar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><h6 class="dropdown-header">Listar:</h6></li>
            <li><a class="dropdown-item" href="<?=URL?>/Veiculos/listar/todos">Todos</a></li>
<!--            <li><a class="dropdown-item" href="">/Veiculos/listar">P/ Placa</a></li>-->
            <li><a class="dropdown-item" href="<?=URL?>/Veiculos/listar/aguardando">Aguardando</a></li>
            <li><a class="dropdown-item" href="<?=URL?>/Veiculos/listar/executando">Executando</a></li>
            <li><a class="dropdown-item" href="<?=URL?>/Veiculos/listar/liberado">Liberado</a></li>
            <li><a class="dropdown-item" href="<?=URL?>/Veiculos/listar/pendente">Pendente</a></li>                        
        </div>        
<!--        <a class="col btn btn-danger" href="">Sair</a>-->

      </div>

    </div>

</nav>