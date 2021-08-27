<div class="container p-2">

	<form name="cadastrar" method="POST" action="<?=URL?>/Veiculos/cadastrar" class="mt-4">

		<div class="p-3 col-sm-8">
		<h1 class="text-primary text-center">Cadastrar Veículo</h1p>
		</div>
<!--.--------------------------------------------------------------.-->
		<div class= "row">

			<div class="col-12 col-sm-12 p-3">
				<h2>Cadastro Inicial</h2>
			</div>

			<div class="col-9">
				<label for="nome">Nome: <sup class= "text-danger">*</sup></label>
				<input type="text" name="nome" id="nome" value="<?=$dados['nome']?>" class="form-control is-valid">
			</div>
			<div class="col-3">
				<label for="nome">Prisma: <sup class= "text-danger"></sup></label>
				<input type="tel" maxlength= "2" name="prisma" id="prisma" value="<?=$dados['prisma']?>" class="form-control is-valid">
			</div>
			<div class="col-6 col-sm-3">
				<label for="nome">Celular: <sup class= "text-danger">*</sup></label>
				<input type="tel" maxlength= "11" name="celular" placeholder="21912341234" id="celular" value="<?=$dados['celular']?>" class="form-control is-valid">
			</div>
			<div class="col-6 col-sm-3">
				<label for="nome">Placa: <sup class= "text-danger">*</sup></label>
				<input type="text" maxlength= "7" name="placa" placeholder="AAA9B99" id="placa" value="<?=$dados['placa']?>" class="form-control is-valid">
			</div>	
			<div class="col-6 col-sm-3">
				<label for="nome">Veículo <sup class= "text-danger"></sup></label>
				<input type="text" name="veiculo" id="veiculo" value="<?=$dados['veiculo']?>" class="form-control is-valid">
			</div>
			<div class="col-6 col-sm-3">
				<label for="nome">Cor: <sup class= "text-danger"></sup></label>
				<input type="text" name="cor" id="cor" value="<?=$dados['cor']?>" class="form-control is-valid">
			</div>
			<div class="col-6 col-sm-3">
				<label for="nome">Km: <sup class= "text-danger"></sup></label>
				<input type="tel" maxlength= "6" name="km" id="km" value="<?=$dados['km']?>" class="form-control is-valid">
			</div>
			<div class="col-6 col-sm-3">
				<label for="nome">Combustível: <sup class= "text-danger"></sup></label>
				<select name="combustivel" id="combustivel" value="" class="form-control is-valid">
				<option value="">--Selecione--</option>
				<option value="Álcool">Álcool</option>
				<option value="Gasolina">Gasolina</option>
				<option value="Diesel">Diesel</option>
				<option value="Elétrico">Elétrico</option>				
				<option value="Flex">Flex</option>
				<option value="GNV-Álcool">GNV-Álcool</option>
				<option value="GNV-Gasolina">GNV-Gasolina</option>
				</select>
			</div>
			<div class="col-4 col-sm-2">
				<label for="nome">Ano/Fabricação: <sup class= "text-danger"></sup></label>
				<input type="tel" maxlength= "4" name="fabricacao" id="fabricacao" value="<?=$dados['fabricacao']?>" class="form-control is-valid">
			</div>
			<div class="col-4 col-sm-2">
				<label for="nome">Ano/Modelo: <sup class= "text-danger"></sup></label>
				<input type="tel" maxlength= "4" name="modelo" id="modelo" value="<?=$dados['modelo']?>" class="form-control is-valid">
			</div>
			<div class="col-4 col-sm-2">
				<label for="nome">Cilindrada: <sup class= "text-danger"></sup></label>
				<input type="tel" maxlength= "4" name="cilindrada" id="cilindrada" value="<?=$dados['cilindrada']?>" class="form-control is-valid">
			</div>
			<div class="col">
				<label for="nome">Irregularidade: <sup class= "text-danger"></sup></label>
				<textarea  name="irregularidade" id="irregularidade" class="form-control is-valid"><?=$dados['irregularidade']?></textarea>
			</div>

		</div>
<!--.--------------------------------------------------------------.-->

		<div class= "row">

			<div class="col-12 col-sm-12 p-3">
				<h2>Diagnóstico Técnico</h2>
			</div>

			<div class="col-12 col-sm-12">
					<label for="nome">Diagnóstico: <sup class= "text-danger"></sup></label>
					<textarea  name="diagnostico" id="diagnostico" class="form-control is-valid"></textarea>
			</div>

			<div class="col-12 col-sm-12">
					<label for="nome">Pecas Necessárias: <sup class= "text-danger"></sup></label>
					<textarea  name="pecnec" id="pecnec" class="form-control is-valid"></textarea>
			</div>

			
			<div class="col-sm-4">
				<label for="nome">Mecânico Responsável: <sup class= "text-danger"></sup></label>
				<select name="mecrespd" id="mecrespd" value="" class="form-control is-valid">
				<option value="">--Selecione o Nome--</option>
				<option value="Matheus">Matheus</option>
				<option value="Eduardo">Eduardo</option>
				<option value="Robson">Robson</option>
				<option value="Jean">Jean</option>
				<option value="Isaías Martins">Isaías Martins</option>
				<option value="Luiz Eduardo">Luiz Eduardo</option>
				<option value="Outro">Outro (ver obs.)</option>
				</select>
			</div>
		</div>
<!--.--------------------------------------------------------------.-->

		<div class= "row">
			
			<div class="col-sm-12 p-3">
				<h2>Execução do Serviço</h2>
			</div>

			<div class="col-12 col-sm-12">
					<label for="nome">Observações: <sup class= "text-danger"></sup></label>
					<textarea  name="obs" id="obs" class="form-control is-valid"></textarea>
			</div>

			
			<div class="col-sm-4">
				<label for="nome">Responsável: <sup class= "text-danger"></sup></label>
				<select name="mecresps" id="mecresps" value="" class="form-control is-valid">
				<option value="">--Selecione o Nome--</option>
				<option value="Matheus">Matheus</option>
				<option value="Eduardo">Eduardo</option>
				<option value="Robson">Robson</option>
				<option value="Jean">Jean</option>
				<option value="Isaías Martins">Isaías Martins</option>
				<option value="Luiz Eduardo">Luiz Eduardo</option>
				<option value="Outro">Outro (ver obs.)</option>
				</select>
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
					<input type="radio" id="executando" name="status" value="EXECUTANDO">
					<label for="executando">Executando</label>
				</div>

				<div>
					<input type="radio" id="liberado" name="status" value="LIBERADO">
					<label for="liberado">Liberado</label>
				</div>
				<div>
					<input type="radio" id="Pendente" name="status" value="PENDENTE">
					<label for="Pendente">Pendente</label>
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