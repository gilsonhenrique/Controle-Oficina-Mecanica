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
				<label for="nome">Nome: <sup class= "text-danger"></sup></label>
				<input type="text" name="nome" id="nome" value="<?=$dados['nome']?>" class="form-control is-valid">
			</div>

			<div class="col">
				<label for="nome">Celular: <sup class= "text-danger"></sup></label>
				<input type="text" name="celular"  placeholder="Ex.: 21912341234" id="celular" value="<?=$dados['celular']?>" class="form-control is-valid">
			</div>

		</div>

		<div class= "row">
			<div class="col">
				<label for="nome">Placa: <sup class= "text-danger"></sup></label>
				<input type="text" name="placa" id="placa" value="<?=$dados['placa']?>" class="form-control is-valid">
			</div>

			<div class="col">
				<label for="nome">Veículo: <sup class= "text-danger"></sup></label>
				<input type="text" name="veiculo" id="veiculo" value="<?=$dados['veiculo']?>" class="form-control is-valid">
			</div>

			<div class="col">
				<label for="nome">Prisma: <sup class= "text-danger"></sup></label>
				<input type="number" min="0" max="20" name="prisma" id="prisma" value="<?=$dados['prisma']?>" class="form-control is-valid">
			</div>	

		</div>

		<div class= "row">

			<div class="col">
				<label for="nome">Km: <sup class= "text-danger"></sup></label>
				<input type="text" name="km" id="km" value="<?=$dados['km']?>" class="form-control is-valid">
			</div>


			<div class="col">
				<label for="nome">Combustível: <sup class= "text-danger"></sup></label>
				<select name="combustivel" id="combustivel" value="" class="form-control is-valid">
				<option value="">--Selecione o combustível--</option>
				<option value="Álcool" <?php if($dados['combustivel'] == 'ÁLCOOL'){ echo 'selected';}?>>Álcool</option>
				<option value="Gasolina"<?php if($dados['combustivel'] == 'GASOLINA'){ echo 'selected';}?>>Gasolina</option>
				<option value="Flex"<?php if($dados['combustivel'] == 'FLEX'){ echo 'selected';}?>>Flex</option>
				<option value="GNV-Álcool"<?php if($dados['combustivel'] == 'GNV-ÁLCOOL'){ echo 'selected';}?>>GNV-Álcool</option>
				<option value="GNV-Gasolina"<?php if($dados['combustivel'] == 'GNV-GASOLINA'){ echo 'selected';}?>>GNV-Gasolina</option>
				</select>
			</div>


			<div class="col">
				<label for="nome">Ano: <sup class= "text-danger"></sup></label>
				<input type="number" min="1970" max="2030"name="ano" id="ano" value="<?=$dados['ano']?>" class="form-control is-valid">
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
				<select name="mecrespd" id="mecrespd" value="" class="form-control is-valid">
				<option value="">--Selecione o Nome--</option>
				<option value="Matheus" <?php if($dados['mecrespd'] == 'MATHEUS'){ echo 'selected';}?>>Matheus</option>
				<option value="Eduardo"<?php if($dados['mecrespd'] == 'EDUARDO'){ echo 'selected';}?>>Eduardo</option>
				<option value="Robson"<?php if($dados['mecrespd'] == 'ROBSON'){ echo 'selected';}?>>Robson</option>
				<option value="Jean"<?php if($dados['mecrespd'] == 'JEAN'){ echo 'selected';}?>>Jean</option>
				<option value="Outro"<?php if($dados['mecrespd'] == 'OUTRO'){ echo 'selected';}?>>Outro (ver obs.)</option>
				</select>
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
				<label for="nome">Responsável: <sup class= "text-danger"></sup></label>
				<select name="mecresps" id="mecresps" value="" class="form-control is-valid">
				<option value="">--Selecione o Nome--</option>
				<option value="Isaías Martins" <?php if($dados['mecresps'] == 'ISAíAS MARTINS'){ echo 'selected';}?>>Isaías Martins</option>
				<option value="Luiz Eduardo" <?php if($dados['mecresps'] == 'LUIZ EDUARDO'){ echo 'selected';}?>>Luiz Eduardo</option>
				<option value="Outro"<?php if($dados['mecresps'] == 'OUTRO'){ echo 'selected';}?>>Outro (ver obs.)</option>
				</select>
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
						<a class="btn btn-danger btn-lg" href="<?= URL.'/Veiculos/deletar/'.$dados['id']?>" onclick="return confirm('Tem certeza que deseja excluir este ítem?')">Excluir</a>
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