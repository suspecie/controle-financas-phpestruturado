<?php include 'comum/topo.tpl' ?>

<h1>CONTROLE DE GASTOS MENSAIS</h1>
<hr>

<form action="login.php" method="POST">
    <label for="usuario">Usuário: </label>
    <input type="text" id="usuario" name="usuario" value=""/>
    <br><br>
    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" value=""/>
    <br><br>
    <button type="submit" id="login" name="login">Login</button>
     <?php
        $erro = isset($_GET['erro']) ? $_GET['erro'] : null;

        if ($erro != null) {
            echo '<p style="color: red"> Usuário ou senha inválidos!!</p>';
        }
        ?>
</form>
<hr>

<?php include 'comum/base.tpl' ?>