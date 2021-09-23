<div class="table-responsive p-4">
<table class="table table-striped">
  <thead class="table-active">
    <tr style="text-align: center">
      <th>Prisma</th>     
      <th>Placa</th>
      <th style="min-width:200px">Veiculo</th>
      <th style="min-width:100px">Km</th>      
      <th>Nome</th>
      <th>Celular</th>      
      <th style="min-width:400px">Irregularidade</th>
      <th>Status</th>
      <th style="min-width:150px">Data/Hora</th>      
      <th>Selecione</th>     
    </tr>
  </thead>
  <tbody>
   <?php foreach ($dados['veiculos'] as $relatorio) : ?>
    <tr style="text-align: center";>
      <td><?= $relatorio->prisma?></td>
      <td><?= $relatorio->placa?></td>
      <td><?= $relatorio->veiculo?></td>
      <td><?= $relatorio->km?></td>      
      <td><?= $relatorio->nome?></td>
      <td><?= $relatorio->celular?></td>     
      <td><?= $relatorio->irregularidade?></td>
      <td><?= $relatorio->status?></td>
      <td>
        <?php
        switch ($relatorio->status):
        case 'AGUARDANDO':
        echo $relatorio->aguardando_dt;
        break;

        case 'EXECUTANDO':
        echo $relatorio->executando_dt;
        break;

        case 'LIBERADO':
        echo $relatorio->liberado_dt; 
        break;

        case 'PENDENTE':
        echo $relatorio->pendente_dt;    
        break;

        endswitch;
        ?>
      </td>            
      <td><div style="min-width:150px">
            <a href="<?= URL.'/veiculos/ver/'.$relatorio->id?>" class="btn btn-primary btn-sm">Exibir</a>
            <a href="<?= URL.'/veiculos/editar/'.$relatorio->id?>" class="btn btn btn-warning btn-sm">Editar</a>
            </div></td>
    </tr>
    <?php endforeach ?>

  </tbody>
</table>
</div>