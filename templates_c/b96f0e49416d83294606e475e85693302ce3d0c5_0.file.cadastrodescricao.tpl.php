<?php
/* Smarty version 3.1.29, created on 2016-04-09 23:35:50
  from "/var/www/html/SUELLYN_PESSOAL/controle-financas-phpestruturado/cadastrodescricao.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5709bc0669f022_99714407',
  'file_dependency' => 
  array (
    'b96f0e49416d83294606e475e85693302ce3d0c5' => 
    array (
      0 => '/var/www/html/SUELLYN_PESSOAL/controle-financas-phpestruturado/cadastrodescricao.tpl',
      1 => 1460255735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./comum/topo.tpl' => 1,
    'file:./comum/base.tpl' => 1,
  ),
),false)) {
function content_5709bc0669f022_99714407 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: <?php echo $_COOKIE['usuario'];?>
</p>
<a  href="cadastrodescricao.php?acao=voltar"> HOME </a>

<hr>

<form action="cadastrodescricao.php" method="POST">

    <h4>CADASTRO DE DESCRICAO</h4>
    <br>
    <label for="descricao">Descricao: </label>
    <input type="text" name="descricao" size="45"id="descricao"  value="">
    <br>
   <input type="submit" value="Salvar">


</form>



<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
