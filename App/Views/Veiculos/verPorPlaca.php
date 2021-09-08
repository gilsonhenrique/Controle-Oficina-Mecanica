<div class="table-responsive p-4">
<table class="table table-striped">
  <thead class="table-active">
    <tr style="text-align: center">
      <th>Placa</th>
      <th style="min-width:150px">Data/Hora</th>   
      <th style="min-width:200px">Veiculo</th>
      <th>Nome</th>
      <th>Celular</th>      
      <th style="min-width:400px">Irregularidade</th>
      <th>Selecione</th>     
    </tr>
  </thead>
  <tbody>
   <?php foreach ($dados['veiculos'] as $relatorio) : ?>
    <tr style="text-align: center";>
      <td><?= $relatorio->placa?></td>
      <td><?= date('d/m/y H:i', strtotime($relatorio->criado_em))?></td>
      <td><?= $relatorio->veiculo?></td>
      <td><?= $relatorio->nome?></td>
      <td><?= $relatorio->celular?></td>     
      <td><?= $relatorio->irregularidade?></td>
      <td><div style="min-width:150px">
        <a href="<?= URL.'/veiculos/ver/'.$relatorio->id?>" class="btn btn-primary">Exibir</a>
        <a href="<?= URL.'/veiculos/editar/'.$relatorio->id?>" class="btn btn btn-warning">Editar</a>
     </div></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
</div>