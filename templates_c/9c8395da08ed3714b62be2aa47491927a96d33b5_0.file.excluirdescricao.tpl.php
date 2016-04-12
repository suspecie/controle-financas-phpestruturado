<?php
/* Smarty version 3.1.29, created on 2016-04-12 05:57:32
  from "C:\wamp64\www\controle-financas-phpestruturado\excluirdescricao.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570c8e4c524ae9_30498716',
  'file_dependency' => 
  array (
    '9c8395da08ed3714b62be2aa47491927a96d33b5' => 
    array (
      0 => 'C:\\wamp64\\www\\controle-financas-phpestruturado\\excluirdescricao.tpl',
      1 => 1460440648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./comum/topo.tpl' => 1,
    'file:./comum/base.tpl' => 1,
  ),
),false)) {
function content_570c8e4c524ae9_30498716 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: <?php echo $_COOKIE['login'];?>
</p>

<hr>


<form id="contactForm"  action="cadastrodescricao.php?" method="POST">

    <br>
    <input type="hidden" name="acao_post" id="acao_post" value="excluir" />
       <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />     
    Tem certeza que deseja excluir o registro <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 ?

    <input type="submit" class="page-scroll btn btn-warning"value="SIM" name="btnsim" />
    <input type="reset" class="page-scroll btn btn-warning" value="NAO" name="btnnao" onclick="window.history.back();"/>

</form>





<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
