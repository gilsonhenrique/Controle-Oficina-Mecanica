<!-- Background image  / Alinhamento horizontal e vertical no centro--> 
<div class="bg-image d-flex align-content-center align-items-center"style="background-image: url('<?=URL?>/Public/Img/Oficina.jpeg');height: 100vh;">
<!-- Colunas começam com largura de 50%, em dispositivos móveis, e caem para 33.3% nos desktops -->
    <div class= "container col-7 col-md-3">

        <div class= "card border-0 align-items-center p-3" style="border-radius: 30px;">
<!-- Largura imagem 25% -->
                <div class= "card w-25 border-0">
                    <img src="<?=URL?>/Public/Img/login.jpg" class="Imagem Responsiva" alt="Imagem Responsiva">
                </div>

                <?php if($dados['alerta']): 

                    echo '<div class="alert alert-danger" role="alert">Usuário ou senha inválidos!</div>';

                endif; ?>

                <form name="logar" method="POST" action="<?=URL?>/Usuarios/logar" class="mt-2">

                    <!--    Nome     -->
                    <div class="form-group">

                        <label for="nome">Login: <sup class= "text-danger">*</sup></label>

                        <?php if(!isset($dados['nome_erro'])): ?>

                            <input type="text" name="nome" id="nome" value="<?php if($dados['nome']){ echo $dados['nome'];} ?>" class="form-control is-valid">
                            <div class="valid-feedback">
                            </div>

                        <?php else: ?>

                            <input type="text" name="nome" id="nome" value="<?php if($dados['nome']){ echo $dados['nome'];} ?>" class="form-control is-invalid">
                            <div class="invalid-feedback"><?= $dados['nome_erro'] ?>
                            </div>

                        <?php endif;?>

                    </div>

                    <!--    Senha     -->               
                    <div class="form-group">

                        <label for="senha">Senha: <sup class= "text-danger">*</sup></label>

                        <?php if(!isset($dados['senha_erro'])): ?>                  
                            <input type="password" name="senha" id="senha" value="<?php if(isset($dados['senha'])){ echo $dados['senha'];} ?>" class="form-control is-valid">
                            <div class="valid-feedback">
                            </div>

                        <?php else: ?>
                            <input type="text" name="senha" id="senha" value="<?php if(isset($dados['senha'])){ echo $dados['senha'];} ?>" class="form-control is-invalid">
                            <div class="invalid-feedback"><?= $dados['senha_erro'] ?>
                            </div>
                        <?php endif;?>

                    </div>

                    <div class="col p-3 align-center">
                    <input type="submit" value="Logar" class="btn btn-info btn-block">
                    </div>


                </form>
        </div>
    </div>
</div>