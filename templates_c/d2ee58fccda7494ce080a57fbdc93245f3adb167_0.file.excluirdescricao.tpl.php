<?php
/* Smarty version 3.1.29, created on 2016-04-09 22:24:00
  from "/var/www/html/SUELLYN_PESSOAL/controle-financas-phpestruturado/excluirdescricao.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5709ab305f5978_10850885',
  'file_dependency' => 
  array (
    'd2ee58fccda7494ce080a57fbdc93245f3adb167' => 
    array (
      0 => '/var/www/html/SUELLYN_PESSOAL/controle-financas-phpestruturado/excluirdescricao.tpl',
      1 => 1460251424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./comum/topo.tpl' => 1,
    'file:./comum/base.tpl' => 1,
  ),
),false)) {
function content_5709ab305f5978_10850885 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: <?php echo $_COOKIE['usuario'];?>
</p>

<hr>


<form action="cadastrodescricao.php?" method="POST">

    <br>
    <input type="hidden" name="acao_post" id="acao_post" value="excluir" />
       <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />     
    Tem certeza que deseja excluir o registro <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 ?

    <input type="submit" value="SIM" name="btnsim" />
    <input type="reset" value="NAO" name="btnnao" onclick="window.history.back();"/>

</form>





<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
