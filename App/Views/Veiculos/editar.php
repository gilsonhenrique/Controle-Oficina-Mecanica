<!-- tamanho col.tela gde , tela média , centralizar, espaçãmento-->
<div class="container p-3">

	<form name="editar" method="POST" action="<?=URL?>/Veiculos/editar/<?=$dados['id']?>" class="mt-4">

		<div class="p-3 col-sm-8">
		<h1 class="text-primary text-center">Editar Ítens</h1p>
		</div>


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

		<div class= "row">

			<div class="col">
				<label for="nome">Irregularidade: <sup class= "text-danger"></sup></label>
				<textarea  name="irregularidade" id="irregularidade" class="form-control is-valid"><?=$dados['irregularidade']?></textarea>
			</div>
		</div>



		<div class= "row">

			<div class="p-3 col-sm-12">
				<h2>Diagnóstico Técnico</h2>
			</div>

			<div class="col-sm-6">
					<label for="nome">Diagnóstico: <sup class= "text-danger"></sup></label>
					<textarea  name="diagnostico" id="diagnostico" class="form-control is-valid"><?=$dados['diagnostico']?></textarea>
			</div>

			<div class="col-sm-6">
					<label for="nome">Pecas Necessárias: <sup class= "text-danger"></sup></label>
					<textarea  name="pecnec" id="pecnec" class="form-control is-valid"><?=$dados['pecnec']?></textarea>
			</div>

			
			<div class="col-sm-6">
				<label for="nome">Mecânico Responsável: <sup class= "text-danger"></sup></label>
				<input type="text" name="mecrespd" id="mecrespd" value="<?=$dados['mecrespd']?>" class="form-control is-valid">
			</div>


		</div>





		<div class= "row">

			<div class="p-3 col-sm-12">
				<h2>Execução do Serviço</h2>
			</div>

			<div class="col-sm-6">
					<label for="nome">Observações: <sup class= "text-danger"></sup></label>
					<textarea  name="obs" id="obs" class="form-control is-valid"><?=$dados['obs']?></textarea>
			</div>

			
			<div class="col-sm-6">
				<label for="nome">Mecânico Responsável: <sup class= "text-danger"></sup></label>
				<input type="text" name="mecresps" id="mecresps" value="<?=$dados['mecresps']?>" class="form-control is-valid">
			</div>

			<div class="p-3 col-sm-6">

				<p>Selecione o status:</p>

				<div>
					<input type="radio" id="aguardando" name="status" value="AGUARDANDO"
					<?php if($dados['status'] == 'AGUARDANDO'){ echo 'checked';}?>>
					<label for="aguardando">Aguardando</label>
				</div>

				<div>
					<input type="radio" id="execucao" name="status" value="EXECUÇÃO"
					<?php if($dados['status'] == 'EXECUÇÃO'){ echo 'checked';}?>>
					<label for="execucao">Execução</label>
				</div>

				<div>
					<input type="radio" id="liberado" name="status" value="LIBERADO"
					<?php if($dados['status'] == 'LIBERADO'){ echo 'checked';}?>>
					<label for="liberado">Liberado</label>
				</div>

			</div>



		</div>
<?php if($dados['placa']):?>

			<div class= "row">
				<div class="btn-toolbar p-4">
						<div class="col-md-2">
						<input type="submit" value="Editar" class="btn btn-info btn-lg">
						</div>
				</div>

				<div class="btn-toolbar p-4">
						<div class="col-md-2">
						<a href="<?= URL.'/Veiculos/deletar/'.$dados['id']?>" class="btn btn-danger btn-lg float-rigth">Excluir</a>
						</div>
				</div>
			</div>


<?php else:?>

			<div class= "row">
						<div class="col-md-2">
						<a class="btn btn-primary btn-lg" href="<?=URL?>/Veiculos/cadastrar" role="button">Cadastrar</a>
						</div>
						<div class="col-md-2">
						<a class="btn btn-secondary btn-lg" href="<?=URL?>/Veiculos/listar" role="button">Consultar</a>
						</div>
			</div>


<?php endif ?>
			</div>



	</form>

</div>
<!-- Esta div ajusta o final da pagina acima do Rodapé -->
</div>
<div class="card p-5">
</div>