<!-- tamanho col.tela gde , tela média , centralizar, espaçãmento-->
<div class="container p-3">

	<form name="cadastrar" method="POST" action="<?=URL?>/Veiculos/cadastrar" class="mt-4">
<!--.--------------------------------------------------------------.-->
		<div class= "row">
			<div class="p-3 col-sm-8">
				<h2>Cadastro Inicial do Veículo</h2>
			</div>

			<div class="col-sm-8">
				<label for="nome">Nome: <sup class= "text-danger">* Obrigatório *</sup></label>
				<input type="text" name="nome" id="nome" value="<?=$dados['nome']?>" class="form-control is-valid">
			</div>

			<div class="col">
				<label for="nome">Celular: <sup class= "text-danger"></sup></label>
				<input type="text" name="celular"  placeholder="Ex.: 21912341234" id="celular" value="<?=$dados['celular']?>" class="form-control is-valid">
			</div>

		</div>
<!--.--------------------------------------------------------------.-->
		<div class= "row">
			<div class="col">
				<label for="nome">Placa: <sup class= "text-danger">* Obrigatório *</sup></label>
				<input type="text" name="placa" id="placa" value="<?=$dados['placa']?>" class="form-control is-valid">
			</div>

			<div class="col">
				<label for="nome">Veículo: <sup class= "text-danger"></sup></label>
				<input type="text" name="veiculo" id="veiculo" value="<?=$dados['veiculo']?>" class="form-control is-valid">
			</div>

			<div class="col">
				<label for="nome">Prisma: <sup class= "text-danger"></sup></label>
				<input type="number" min="0" max="6" name="prisma" id="prisma" value="<?=$dados['prisma']?>" class="form-control is-valid">
			</div>	

		</div>
<!--.--------------------------------------------------------------.-->
		<div class= "row">

			<div class="col">
				<label for="nome">Km: <sup class= "text-danger"></sup></label>
				<input type="text" name="km" id="km" value="<?=$dados['km']?>" class="form-control is-valid">
			</div>


			<div class="col">
				<label for="nome">Combustível: <sup class= "text-danger"></sup></label>
				<input type="text" name="combustivel" id="combustivel" value="" class="form-control is-valid">
			</div>



			<div class="col">
				<label for="nome">Ano: <sup class= "text-danger"></sup></label>
				<input type="number" min="2010" max="2030"name="ano" id="ano" value="<?=$dados['ano']?>" class="form-control is-valid">
			</div>

			<div class="col">
				<label for="nome">Cor: <sup class= "text-danger"></sup></label>
				<input type="text" name="cor" id="cor" value="<?=$dados['cor']?>" class="form-control is-valid">
			</div>

		</div>
<!--.--------------------------------------------------------------.-->
		<div class= "row">

			<div class="col">
				<label for="nome">Irregularidade: <sup class= "text-danger"></sup></label>
				<textarea  name="irregularidade" id="irregularidade" class="form-control is-valid"><?=$dados['irregularidade']?></textarea>
			</div>
		</div>

<!--.--------------------------------------------------------------.-->
		<div class= "row">

			<div class="p-3 col-sm-12">
				<h2>Diagnóstico Técnico</h2>
			</div>

			<div class="col-sm-6">
					<label for="nome">Diagnóstico: <sup class= "text-danger"></sup></label>
					<textarea  name="diagnostico" id="diagnostico" class="form-control is-valid"></textarea>
			</div>

			<div class="col-sm-6">
					<label for="nome">Pecas Necessárias: <sup class= "text-danger"></sup></label>
					<textarea  name="pecnec" id="pecnec" class="form-control is-valid"></textarea>
			</div>

			
			<div class="col-sm-6">
				<label for="nome">Mecânico Responsável: <sup class= "text-danger"></sup></label>
				<input type="text" name="mecrespd" id="mecrespd" value="" class="form-control is-valid">
			</div>


		</div>
<!--.--------------------------------------------------------------.-->
		<div class= "row">

			<div class="p-3 col-sm-12">
				<h2>Execução do Serviço</h2>
			</div>

			<div class="col-sm-6">
					<label for="nome">Observações: <sup class= "text-danger"></sup></label>
					<textarea  name="obs" id="obs" class="form-control is-valid"></textarea>
			</div>

			
			<div class="col-sm-6">
				<label for="nome">Mecânico Responsável: <sup class= "text-danger"></sup></label>
				<input type="text" name="mecresps" id="mecresps" value="" class="form-control is-valid">
			</div>

		</div>

<!--.--------------------------------------------------------------.-->

		<div class="p-3 col-sm-6">

				<p>Selecione o status:</p>

				<div>
					<input type="radio" id="aguardando" name="status" value="AGUARDANDO"
					checked>
					<label for="aguardando">Aguardando</label>
				</div>

				<div>
					<input type="radio" id="execucao" name="status" value="EXECUÇÃO">
					<label for="execucao">Execução</label>
				</div>

				<div>
					<input type="radio" id="liberado" name="status" value="LIBERADO">
					<label for="liberado">Liberado</label>
				</div>

		</div>
<!--.--------------------------------------------------------------.-->

		<div class="btn-toolbar p-5">
			<div class="col-md-4">
				<input type="submit" value="Cadastrar" class="btn btn-info btn-lg">
			</div>


		</div>

	</form>

</div>
<div class="card p-5">
</div>