<?php
/* Smarty version 3.1.29, created on 2016-04-11 12:12:09
  from "/var/www/html/SUELLYN_PESSOAL/controle-financas-phpestruturado/periodo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570bbec9852075_77117130',
  'file_dependency' => 
  array (
    '912693614626fbe2c08bf4167dc703a849747f87' => 
    array (
      0 => '/var/www/html/SUELLYN_PESSOAL/controle-financas-phpestruturado/periodo.tpl',
      1 => 1460387011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./comum/topo.tpl' => 1,
    'file:./comum/base.tpl' => 1,
  ),
),false)) {
function content_570bbec9852075_77117130 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/var/www/html/SUELLYN_PESSOAL/controle-financas-phpestruturado/vendor/smarty/smarty/libs/plugins/function.html_options.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: <?php echo $_COOKIE['login'];?>
</p>
<a  href="planilha.php?acao=voltar"> HOME </a>

<hr>

<form action="planilha.php" method="POST">
    
   <h4>ESCOLHA O PERIODO DE VISUALIZACAO</h4>

    
     <label for="mes_antes">Mês: </label>
    <select name="mes_antes" id="mes_antes" name="mes_antes">
         <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['mes']->value),$_smarty_tpl);?>

    </select>
    <label for="ano_antes">Ano: </label>
    <input type="text" name="ano_antes" size="45"id="ano_antes"  value="">
    <br><br>
    ATÉ
    <br><br>
     <label for="mes_depois">Mês: </label>
     <select name="mes_depois" id="mes_depois" name="mes_depois">
         <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['mes']->value),$_smarty_tpl);?>

    </select>
    <label for="ano_depois">Ano: </label>
    <input type="text" name="ano_depois" size="45"id="ano_depois"  value="">
    <BR>
     <input type="submit" value="Visualizar">

</form>



<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
