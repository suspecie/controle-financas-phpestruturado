<?php
/* Smarty version 3.1.29, created on 2016-04-12 01:58:48
  from "C:\wamp64\www\controle-financas-phpestruturado\home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570c56583587d6_09433414',
  'file_dependency' => 
  array (
    '5a734bea0afabf6bdf548f1b2e5f8b880b6332bc' => 
    array (
      0 => 'C:\\wamp64\\www\\controle-financas-phpestruturado\\home.tpl',
      1 => 1460426318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./comum/topo.tpl' => 1,
    'file:./comum/base.tpl' => 1,
  ),
),false)) {
function content_570c56583587d6_09433414 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: <?php echo $_COOKIE['login'];?>
</p>

<nav>
    <a href="cadastrodescricao.php">CADASTRO DE DESCRICOES</a> |
    <a href="cadastro.php">CADASTRO DE RECEITAS E DESPESAS</a> |
    <a href="planilha.php">PLANILHA</a>
  
</nav>



<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
