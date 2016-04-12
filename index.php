<?php include 'comum/topo.tpl' ?> 

<!-- Header -->
<header>
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Seja bem-vindo!</div>
            <div class="intro-heading">CONTROLE DE FINANCAS</div>
            <form id="contactForm" action="login.php" method="POST">
                <div class="row">
                        <div class="col-md-12">
                            <div class="form-group" >
                                <input type="text" class="form-control"  placeholder="Usuario" id="usuario" name="usuario" value=""/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Senha" id="senha" name="senha" value=""/>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                
                <button type="submit" id="login" name="login" class="page-scroll btn btn-xl">Login</button>
                <?php
                $erro = isset($_GET['erro']) ? $_GET['erro'] : null;

                if ($erro != null) {
                    echo '<br><br><p style="color: yellow"> Usuário ou senha inválidos!!</p>';
                }
                ?>
            </form>

        </div>
    </div>
</header>

<?php include 'comum/base.tpl' ?>