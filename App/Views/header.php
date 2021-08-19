<nav class="navbar navbar-expand-lg navbar-light bg-dark p-4">

    <div class="container-fluid">

      <a class="navbar-brand text-white" href="<?=URL?>">BMI-Home</a>

      <div class="row ml-auto">

        <div class="dropdown mr-3">
          <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Menu veículos
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="<?=URL?>/Veiculos/cadastrar">Cadastrar Ítens</a></li>
            <li><a class="dropdown-item" href="<?=URL?>/Veiculos/listar">Listar Ítens</a></li>
        </div>
        
        <a class="col btn btn-danger" href="<?=URL?>/Usuarios/sair">Sair</a>

      </div>

    </div>

</nav>