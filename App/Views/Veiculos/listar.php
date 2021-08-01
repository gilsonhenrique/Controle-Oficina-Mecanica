<div class="table-responsive p-4">
<table class="table table-striped">
  <thead class="table-active">
    <tr>
      <th scope="col">Prisma</th>     
      <th scope="col">Placa</th>
      <th scope="col">Nome</th>
      <th scope="col">Celular</th>      
      <th scope="col">Veiculo</th>
      <th scope="col">Irregularidade</th>
      <th scope="col">status</th>      
      <th></th>     
    </tr>
  </thead>
  <tbody>

    <?php foreach ($dados['veiculos'] as $relatorio) : ?>
    <tr>
      <td><?= $relatorio->prisma?></td>
      <td><?= $relatorio->placa?></td>
      <td><?= $relatorio->nome?></td>
      <td><?= $relatorio->celular?></td>      
      <td><?= $relatorio->veiculo?></td>
      <td><?= $relatorio->irregularidade?></td>
      <td><?= $relatorio->status?></td>      
      <td><div class="float-right">
            <a href="<?= URL.'/veiculos/ver/'.$relatorio->id?>" class="btn btn-primary float-rigth">Exibir</a>
            <a href="<?= URL.'/veiculos/editar/'.$relatorio->id?>" class="btn btn btn-warning float-rigth">Editar</a>
            </div></td>
    </tr>
    <?php endforeach ?>

  </tbody>
</table>
</div>