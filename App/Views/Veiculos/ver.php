<!-- tamanho col.tela gde , tela média , centralizar, espaçãmento-->
<div class="container p-2">

		<div class="p-3 col-sm-8">
		<h1 class="text-primary text-center">Relatório do Veículo</h1>
		</div>

		<div class= "row">

			<div class="col-12 col-sm-12 p-3">
				<h2>Cadastro Inicial</h2>
			</div>

			<div class="col-9">
				<label for="nome">Nome: <sup class= "text-danger"></sup></label>
				<input type="text" name="nome" id="nome" value="<?=$dados['veiculos']->nome?>" class="form-control is-valid">
			</div>
			<div class="col-3">
				<label for="nome">Prisma: <sup class= "text-danger"></sup></label>
				<input type="text" name="prisma" id="prisma" value="<?= $dados['veiculos']->prisma?>" class="form-control is-valid">
			</div>	
			<div class="col-6 col-sm-3">
				<label for="nome">Celular: <sup class= "text-danger"></sup></label>
				<input type="text" name="celular"  placeholder="Ex.: 21912341234" id="celular" value="<?=$dados['veiculos']->celular?>" class="form-control is-valid">
			</div>
			<div class="col-6 col-sm-3">
				<label for="nome">Placa: <sup class= "text-danger"></sup></label>
				<input type="text" name="placa" id="placa" value="<?=$dados['veiculos']->placa?>" class="form-control is-valid">
			</div>
			<div class="col-6 col-sm-3">
				<label for="nome">Veículo <sup class= "text-danger"></sup></label>
				<input type="text" name="veiculo" id="veiculo" value="<?= $dados['veiculos']->veiculo?>" class="form-control is-valid">
			</div>
			<div class="col-6 col-sm-3">
				<label for="nome">Cor: <sup class= "text-danger"></sup></label>
				<input type="text" name="cor" id="cor" value="<?= $dados['veiculos']->cor?>" class="form-control is-valid">
			</div>
			<div class="col-6 col-sm-3">
				<label for="nome">Km: <sup class= "text-danger"></sup></label>
				<input type="text" name="km" id="km" value="<?= $dados['veiculos']->km?>" class="form-control is-valid">
			</div>
			<div class="col-6 col-sm-3">
				<label for="nome">Combustível: <sup class= "text-danger"></sup></label>
				<input type="text" name="combustivel" id="combustivel" value="<?= $dados['veiculos']->combustivel?>" class="form-control is-valid">
			</div>
			<div class="col-4 col-sm-2">
				<label for="nome">Ano/Fabricação: <sup class= "text-danger"></sup></label>
				<input type="number" name="fabricacao" id="fabricacao" value="<?= $dados['veiculos']->fabricacao?>" class="form-control is-valid">
			</div>

			<div class="col-4 col-sm-2">
				<label for="nome">Ano/Modelo: <sup class= "text-danger"></sup></label>
				<input type="number" name="modelo" id="modelo" value="<?= $dados['veiculos']->modelo?>" class="form-control is-valid">
			</div>

			<div class="col-4 col-sm-2">
				<label for="nome">Cilindrada: <sup class= "text-danger"></sup></label>
				<input type="number" name="cilindrada" id="cilindrada" value="<?= $dados['veiculos']->cilindrada?>" class="form-control is-valid">
			</div>
			<div class="col">
				<label for="nome">Irregularidade: <sup class= "text-danger"></sup></label>
				<textarea  name="irregularidade" id="irregularidade" class="form-control is-valid"><?= $dados['veiculos']->irregularidade?></textarea>
			</div>			

		</div>
<!--.--------------------------------------------------------------.-->

		<div class= "row">

			<div class="col-12 col-sm-12 p-3">
				<h2>Diagnóstico Técnico</h2>
			</div>
			<div class="col-12 col-sm-12">
					<label for="nome">Diagnóstico: <sup class= "text-danger"></sup></label>
					<textarea  name="diagnostico" id="diagnostico" class="form-control is-valid"><?= $dados['veiculos']->diagnostico?></textarea>
			</div>
			<div class="col-12 col-sm-12">
					<label for="nome">Pecas Necessárias: <sup class= "text-danger"></sup></label>
					<textarea  name="pecnec" id="pecnec" class="form-control is-valid"><?= $dados['veiculos']->pecnec?></textarea>
			</div>
			<div class="col-sm-4">
				<label for="nome">Mecânico Responsável: <sup class= "text-danger"></sup></label>
				<input type="text" name="mecrespd" id="mecrespd" value="<?= $dados['veiculos']->mecrespd?>" class="form-control is-valid">
			</div>

		</div>
<!--.--------------------------------------------------------------.-->

		<div class= "row">

			<div class="col-sm-12 p-3">
				<h2>Execução do Serviço</h2>
			</div>

			<div class="col-12 col-sm-12">
					<label for="nome">Observações: <sup class= "text-danger"></sup></label>
					<textarea  name="obs" id="obs" class="form-control is-valid"><?= $dados['veiculos']->obs?></textarea>
			</div>

			
			<div class="col-sm-4">
				<label for="nome">Responsável: <sup class= "text-danger"></sup></label>
				<input type="text" name="mecresps" id="mecresps" value="<?= $dados['veiculos']->mecresps?>" class="form-control is-valid">
			</div>

		</div>


</div>