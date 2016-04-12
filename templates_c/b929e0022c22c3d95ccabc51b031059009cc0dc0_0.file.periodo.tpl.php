<?php
/* Smarty version 3.1.29, created on 2016-04-12 06:28:39
  from "C:\wamp64\www\controle-financas-phpestruturado\periodo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570c95977c1ff4_77662513',
  'file_dependency' => 
  array (
    'b929e0022c22c3d95ccabc51b031059009cc0dc0' => 
    array (
      0 => 'C:\\wamp64\\www\\controle-financas-phpestruturado\\periodo.tpl',
      1 => 1460442517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./comum/topo.tpl' => 1,
    'file:./comum/base.tpl' => 1,
  ),
),false)) {
function content_570c95977c1ff4_77662513 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\wamp64\\www\\controle-financas-phpestruturado\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: <?php echo $_COOKIE['login'];?>
</p>
<a  href="planilha.php?acao=voltar"> HOME </a>

<hr>

<form id="contactForm"  action="planilha.php" method="POST">

    <h4>ESCOLHA O PERIODO DE VISUALIZACAO</h4>
    <div class="row">
        <div class="col-md-6">
            <label for="mes_antes">Mês: </label>
            <select class="form-control" name="mes_antes" id="mes_antes" name="mes_antes">
                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['mes']->value),$_smarty_tpl);?>

            </select>
            <label for="ano_antes">Ano: </label>
            <input class="form-control"  type="text" name="ano_antes" size="45"id="ano_antes"  value="">
            <br>
            ATÉ
            <br>
            <label for="mes_depois">Mês: </label>
            <select  class="form-control"  name="mes_depois" id="mes_depois" name="mes_depois">
                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['mes']->value),$_smarty_tpl);?>

            </select>
            <label for="ano_depois">Ano: </label>
            <input  class="form-control" type="text" name="ano_depois" size="45"id="ano_depois"  value="">
            <BR>
        </div>
    </div>

    <input type="submit" class="page-scroll btn btn-warning" value="Visualizar">

</form>



<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
