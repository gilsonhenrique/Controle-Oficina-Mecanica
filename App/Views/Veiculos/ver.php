<!-- tamanho col.tela gde , tela média , centralizar, espaçãmento-->
<div class="container p-2">

		<div class= "row">

			<div class="col-12 col-sm-12 p-3">
				<h2>Cadastro Inicial</h2>
			</div>

			<div class="col-9">
				<label for="nome">Nome: <sup class= "text-danger"></sup></label>
				<p class="form-control is-valid"><?=$dados['veiculos']->nome?></p> 
			</div>
			<div class="col-3">
				<label for="nome">Prisma: <sup class= "text-danger"></sup></label>
				<p class="form-control is-valid"><?= $dados['veiculos']->prisma?></p> 
			</div>	
			<div class="col-6 col-sm-3">
				<label for="nome">Celular: <sup class= "text-danger"></sup></label>
				<p class="form-control is-valid"><?=$dados['veiculos']->celular?></p>
			</div>
			<div class="col-6 col-sm-3">
				<label for="nome">Placa: <sup class= "text-danger"></sup></label>
				<p class="form-control is-valid"><?=$dados['veiculos']->placa?></p> 
			</div>
			<div class="col-6 col-sm-3">
				<label for="nome">Veículo <sup class= "text-danger"></sup></label>
				<p class="form-control is-valid"><?= $dados['veiculos']->veiculo?></p> 
			</div>
			<div class="col-6 col-sm-3">
				<label for="nome">Cor: <sup class= "text-danger"></sup></label>
				<p class="form-control is-valid"><?= $dados['veiculos']->cor?></p> 
			</div>
			<div class="col-6 col-sm-3">
				<label for="nome">Km: <sup class= "text-danger"></sup></label>
				<p class="form-control is-valid"><?= $dados['veiculos']->km?></p>
			</div>
			<div class="col-6 col-sm-3">
				<label for="nome">Combustível: <sup class= "text-danger"></sup></label>
				<p class="form-control is-valid"><?= $dados['veiculos']->combustivel?></p>
			</div>
			<div class="col-4 col-sm-2">
				<label for="nome">Ano/Fabricação: <sup class= "text-danger"></sup></label>
				<p class="form-control is-valid"><?= $dados['veiculos']->fabricacao?></p>
			</div>
			<div class="col-4 col-sm-2">
				<label for="nome">Ano/Modelo: <sup class= "text-danger"></sup></label>
				<p class="form-control is-valid"><?= $dados['veiculos']->modelo?></p>
			</div>
			<div class="col-4 col-sm-2">
				<label for="nome">Cilindrada: <sup class= "text-danger"></sup></label>
				<p class="form-control is-valid"><?= $dados['veiculos']->cilindrada?></p>
			</div>
			<div class="col">
				<label for="nome">Irregularidade: <sup class= "text-danger"></sup></label>
				<textarea readonly class="form-control is-valid"><?= $dados['veiculos']->irregularidade?></textarea>
			</div>			

		</div>
<!--.--------------------------------------------------------------.-->

		<div class= "row">

			<div class="col-12 col-sm-12 p-3">
				<h2>Diagnóstico Técnico</h2>
			</div>

			<div class="col-12 col-sm-12">
				<label for="nome">Diagnóstico: <sup class= "text-danger"></sup></label>
				<textarea readonly class="form-control is-valid"><?= $dados['veiculos']->diagnostico?></textarea>
			</div>
			<div class="col-12 col-sm-12">
				<label for="nome">Pecas Necessárias: <sup class= "text-danger"></sup></label>
				<textarea readonly class="form-control is-valid"><?= $dados['veiculos']->pecnec?></textarea>
			</div>
			<div class="col-sm-4">
				<label for="nome">Mecânico Responsável: <sup class= "text-danger"></sup></label>
				<p class="form-control is-valid"><?= $dados['veiculos']->mecrespd?></p>
			</div>

		</div>
<!--.--------------------------------------------------------------.-->

		<div class= "row">

			<div class="col-sm-12 p-3">
				<h2>Execução do Serviço</h2>
			</div>

			<div class="col-12 col-sm-12">
				<label for="nome">Observações: <sup class= "text-danger"></sup></label>
				<textarea readonly class="form-control is-valid"><?= $dados['veiculos']->obs?></textarea>
			</div>
			<div class="col-sm-4">
				<label for="nome">Responsável: <sup class= "text-danger"></sup></label>
				<p class="form-control is-valid"><?= $dados['veiculos']->mecresps?></p>
			</div>

		</div>

		<div class= "row">

			<div class="col-sm-12 p-3">
				<h2>Controle de Status</h2>
			</div>

			<div class="bg text-dark col-12 col-sm-12">
			<p><b>Entrada:  </b><?= $dados['veiculos']->aguardando_dt;?></p>
			<p><b>Execução:  </b><?=$dados['veiculos']->executando_dt;?></p>
			<p><b>Saída:  </b><?=$dados['veiculos']->liberado_dt;?></p>
			<p><b>Pendente:  </b><?=$dados['veiculos']->pendente_dt;?></p>			
			</div>

		</div>

</div>