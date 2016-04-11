<?php
/* Smarty version 3.1.29, created on 2016-04-11 12:11:43
  from "/var/www/html/SUELLYN_PESSOAL/controle-financas-phpestruturado/home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570bbeaf2d3f02_71348664',
  'file_dependency' => 
  array (
    '5c07e4fbef2d269efb2d00658a68cc614127f5dc' => 
    array (
      0 => '/var/www/html/SUELLYN_PESSOAL/controle-financas-phpestruturado/home.tpl',
      1 => 1460387500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./comum/topo.tpl' => 1,
    'file:./comum/base.tpl' => 1,
  ),
),false)) {
function content_570bbeaf2d3f02_71348664 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: <?php echo $_COOKIE['login'];?>
</p>

<nav>
    <a href="cadastrodescricao.php">CADASTRO DE DESCRICOES</a> |
    <a href="cadastro.php">CADASTRO DE RECEITAS E DESPESAS</a> |
    <a href="planilha.php">PLANILHA</a>
    <a href="">GRÁFICO</a>
    <a href="">PDF</a>
   
</nav>



<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
