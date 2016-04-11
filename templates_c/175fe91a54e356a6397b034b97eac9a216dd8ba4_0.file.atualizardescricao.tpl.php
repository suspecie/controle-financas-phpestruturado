<?php
/* Smarty version 3.1.29, created on 2016-04-09 22:17:57
  from "/var/www/html/SUELLYN_PESSOAL/controle-financas-phpestruturado/atualizardescricao.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5709a9c52d30d4_66435227',
  'file_dependency' => 
  array (
    '175fe91a54e356a6397b034b97eac9a216dd8ba4' => 
    array (
      0 => '/var/www/html/SUELLYN_PESSOAL/controle-financas-phpestruturado/atualizardescricao.tpl',
      1 => 1460251051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./comum/topo.tpl' => 1,
    'file:./comum/base.tpl' => 1,
  ),
),false)) {
function content_5709a9c52d30d4_66435227 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: <?php echo $_COOKIE['usuario'];?>
</p>

<hr>

<form action="cadastrodescricao.php?" method="POST">

    <h4>ALTERAR  DESCRICAO</h4>
    <br>
    <input type="hidden" name="acao_post" id="acao_post" value="editar" />
    <input type="hidden" name="id" size="45"id="id"  value="<?php echo $_smarty_tpl->tpl_vars['idDescricao']->value;?>
">
    <br>
    <label for="descricao">Descricao: </label>
    <input type="text" name="descricao" size="45"id="descricao"  value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['descricao'];?>
">
    <br>
    <input type="submit" value="Salvar">


</form>



<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
