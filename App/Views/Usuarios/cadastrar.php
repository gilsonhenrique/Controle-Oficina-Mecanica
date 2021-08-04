<!-- tamanho col.tela gde , tela média , centralizar, espaçãmento-->
<div class="col-xl-4 col-md-6 mx-auto p-5">
	<div class= "card border-0">
		<div class= "card-body">
			<h2>Cadastre-se</h2>
			<p>Preencha o formulario abaixo para fazer seu cadastro</p>
			<form name="cadastrar" method="POST" action="<?=URL?>/Usuarios/cadastrar" class="mt-4">
				<!--    Nome     -->
				<div class="form-group">
					<label for="nome">Nome: <sup class= "text-danger">*</sup></label>
					<?php
					if(!isset($dados['nome_erro'])):
						?>
						<input type="text" name="nome" id="nome" value="<?=$dados['nome']?>" class="form-control is-valid">
						<div class="valid-feedback">
						</div>
						<?php
					else:?>
						<input type="text" name="nome" id="nome" value="<?=$dados['nome']?>" class="form-control is-invalid">
						<div class="invalid-feedback">
							<?= $dados['nome_erro'] ?>
						</div>
					<?php endif;?>
				</div>

				<!--    Senha     -->				
				<div class="form-group">
					<label for="senha">Senha: <sup class= "text-danger">*</sup></label>
					<?php
					if(!isset($dados['senha_erro'])):
						?>
						<input type="password" name="senha" id="senha" value="<?=$dados['senha']?>" class="form-control is-valid">
						<div class="valid-feedback">
						</div>
						<?php
					else:?>
						<input type="password" name="senha" id="senha" value="<?=$dados['senha']?>" class="form-control is-invalid">
						<div class="invalid-feedback">
							<?= $dados['senha_erro'] ?>
						</div>
					<?php endif;?>
				</div>

				<!--    Dupla coluna     -->
				<div class= "row">
					<div class="col">
						<input type="submit" value="Cadastrar" class="btn btn-info btn-block">
					</div>
					<div class="col">
						<a href="<?=URL?>/Usuarios/logar"> Voce tem uma conta? Faça Login aqui ! </a>
					</div>
				</div>

			</form>

		</div>
	</div>
</div>

