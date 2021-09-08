<div class="container p-2">

	<form name="editar" method="POST" action="<?=URL?>/Veiculos/editar/<?=$dados['id']?>" class="mt-4">

		<div class="p-3 col-sm-8">
		<h1 class="text-primary text-center">Editar Veículo</h1p>
		</div>
<!--.--------------------------------------------------------------.-->
		<div class= "row">
			<div class="col-12 col-sm-12 p-3">
				<h2>Cadastro Inicial</h2>
			</div>

			<div class="col-9">
				<label for="nome">Nome: <sup class= "text-danger"></sup></label>
				<input type="text" name="nome" id="nome" value="<?=$dados['nome']?>" class="form-control is-valid">
			</div>
			<div class="col-3">
				<label for="nome">Prisma: <sup class= "text-danger"></sup></label>
				<input type="tel" maxlength= "2" name="prisma" id="prisma" value="<?=$dados['prisma']?>" class="form-control is-valid">
			</div>	
			<div class="col-6 col-sm-3">
				<label for="nome">Celular: <sup class= "text-danger"></sup></label>
				<input type="tel" maxlength= "11" name="celular" placeholder="21912341234" id="celular" value="<?=$dados['celular']?>" class="form-control is-valid">
			</div>
			<div class="col-6 col-sm-3">
				<label for="nome">Placa: <sup class= "text-danger"></sup></label>
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
				<option value="">--Selecione o combustível--</option>
				<option value="Álcool" <?php if($dados['combustivel'] == 'ÁLCOOL'){ echo 'selected';}?>>Álcool</option>
				<option value="Gasolina"<?php if($dados['combustivel'] == 'GASOLINA'){ echo 'selected';}?>>Gasolina</option>
				<option value="Flex"<?php if($dados['combustivel'] == 'FLEX'){ echo 'selected';}?>>Flex</option>
				<option value="GNV-Álcool"<?php if($dados['combustivel'] == 'GNV-ÁLCOOL'){ echo 'selected';}?>>GNV-Álcool</option>
				<option value="GNV-Gasolina"<?php if($dados['combustivel'] == 'GNV-GASOLINA'){ echo 'selected';}?>>GNV-Gasolina</option>
				<option value="Tetrafuel"<?php if($dados['combustivel'] == 'TETRAFUEL'){ echo 'selected';}?>>Tetrafuel</option>
				<option value="Diesel"<?php if($dados['combustivel'] == 'DIESEL'){ echo 'selected';}?>>Diesel</option>
				<option value="Elétrico"<?php if($dados['combustivel'] == 'ELÉTRICO'){ echo 'selected';}?>>Elétrico</option>				
				</select>
			</div>
			<div class="col-4 col-sm-2">
				<label for="nome">Ano/Fabric.: <sup class= "text-danger"></sup></label>
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
					<textarea  name="diagnostico" id="diagnostico" class="form-control is-valid"><?=$dados['diagnostico']?></textarea>
			</div>

			<div class="col-12 col-sm-12">
					<label for="nome">Pecas Necessárias: <sup class= "text-danger"></sup></label>
					<textarea  name="pecnec" id="pecnec" class="form-control is-valid"><?=$dados['pecnec']?></textarea>
			</div>
			
			<div class="col-sm-4">
				<label for="nome">Mecânico Responsável: <sup class= "text-danger"></sup></label>
				<select name="mecrespd" id="mecrespd" value="" class="form-control is-valid">
				<option value="">--Selecione o Nome--</option>
				<option value="Matheus" <?php if($dados['mecrespd'] == 'MATHEUS'){ echo 'selected';}?>>Matheus</option>
				<option value="Eduardo"<?php if($dados['mecrespd'] == 'EDUARDO'){ echo 'selected';}?>>Eduardo</option>
				<option value="Robson"<?php if($dados['mecrespd'] == 'ROBSON'){ echo 'selected';}?>>Robson</option>
				<option value="Jean"<?php if($dados['mecrespd'] == 'JEAN'){ echo 'selected';}?>>Jean</option>
				<option value="Rodrigo"<?php if($dados['mecrespd'] == 'RODRIGO'){ echo 'selected';}?>>Rodrigo</option>
				<option value="Isaías Martins" <?php if($dados['mecrespd'] == 'ISAÍAS MARTINS'){ echo 'selected';}?>>Isaías Martins</option>
				<option value="Luiz Eduardo" <?php if($dados['mecrespd'] == 'LUIZ EDUARDO'){ echo 'selected';}?>>Luiz Eduardo</option>
				<option value="Outro"<?php if($dados['mecrespd'] == 'OUTRO'){ echo 'selected';}?>>Outro (ver obs.)</option>
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
					<textarea  name="obs" id="obs" class="form-control is-valid"><?=$dados['obs']?></textarea>
			</div>

			<div class="col-sm-4">
				<label for="nome">Responsável: <sup class= "text-danger"></sup></label>
				<select name="mecresps" id="mecresps" value="" class="form-control is-valid">
				<option value="">--Selecione o Nome--</option>
				<option value="Matheus" <?php if($dados['mecresps'] == 'MATHEUS'){ echo 'selected';}?>>Matheus</option>
				<option value="Eduardo"<?php if($dados['mecresps'] == 'EDUARDO'){ echo 'selected';}?>>Eduardo</option>
				<option value="Robson"<?php if($dados['mecresps'] == 'ROBSON'){ echo 'selected';}?>>Robson</option>
				<option value="Jean"<?php if($dados['mecresps'] == 'JEAN'){ echo 'selected';}?>>Jean</option>
				<option value="Rodrigo"<?php if($dados['mecrespd'] == 'RODRIGO'){ echo 'selected';}?>>Rodrigo</option>
				<option value="Isaías Martins" <?php if($dados['mecresps'] == 'ISAÍAS MARTINS'){ echo 'selected';}?>>Isaías Martins</option>
				<option value="Luiz Eduardo" <?php if($dados['mecresps'] == 'LUIZ EDUARDO'){ echo 'selected';}?>>Luiz Eduardo</option>
				<option value="Outro"<?php if($dados['mecresps'] == 'OUTRO'){ echo 'selected';}?>>Outro (ver obs.)</option>
				</select>
			</div>

		</div>
<!--.--------------------------------------------------------------.-->

		<div class="p-3 col-sm-6">

				<p>Selecione o status:</p>

				<div>
					<input type="radio" id="aguardando" name="status" value="AGUARDANDO"
					<?php if($dados['status'] == 'AGUARDANDO'){ echo 'checked';}?>>
					<label for="aguardando">Aguardando<?php if($dados['status'] == 'AGUARDANDO'){echo ': '.$dados['aguardando_dt'];}?></label>
					<input type="hidden" id="aguardando_dt" name="aguardando_dt" value= "<?php if(isset($dados['aguardando_dt'])){echo $dados['aguardando_dt'];}?>">
				</div>

				<div>
					<input type="radio" id="executando" name="status" value="EXECUTANDO"
					<?php if($dados['status'] == 'EXECUTANDO'){ echo 'checked';}?>>
					<label for="executando">Executando<?php if($dados['status'] == 'EXECUTANDO'){echo ': '.$dados['executando_dt'];}?></label>
					<input type="hidden" id="executando_dt" name="executando_dt" value= "<?php if(isset($dados['executando_dt'])){echo $dados['executando_dt'];}?>">
				</div>

				<div>
					<input type="radio" id="liberado" name="status" value="LIBERADO"
					<?php if($dados['status'] == 'LIBERADO'){ echo 'checked';}?>>
					<label for="liberado">Liberado<?php if($dados['status'] == 'LIBERADO'){echo ': '.$dados['liberado_dt'];}?></label>
					<input type="hidden" id="liberado_dt" name="liberado_dt" value= "<?php if(isset($dados['liberado_dt'])){echo $dados['liberado_dt'];}?>">
				</div>

				<div>
					<input type="radio" id="pendente" name="status" value="PENDENTE"
					<?php if($dados['status'] == 'PENDENTE'){ echo 'checked';}?>>
					<label for="pendente">Pendente<?php if($dados['status'] == 'PENDENTE'){echo ': '.$dados['pendente_dt'];}?></label>
					<input type="hidden" id="pendente_dt" name="pendente_dt" value= "<?php if(isset($dados['pendente_dt'])){echo $dados['pendente_dt'];}?>">
				</div>

		</div>
			
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

		</div>

	</form>

</div>