<?php
/* Smarty version 3.1.29, created on 2016-04-12 01:53:18
  from "C:\wamp64\www\controle-financas-phpestruturado\envio.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570c550e411702_40123590',
  'file_dependency' => 
  array (
    'e80cf3e8b417218fc2abf3dbc17e7c13e536a4d7' => 
    array (
      0 => 'C:\\wamp64\\www\\controle-financas-phpestruturado\\envio.tpl',
      1 => 1460425992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./comum/topo.tpl' => 1,
    'file:./comum/base.tpl' => 1,
  ),
),false)) {
function content_570c550e411702_40123590 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h3><?php echo (($tmp = @$_smarty_tpl->tpl_vars['textSuccess']->value)===null||$tmp==='' ? '' : $tmp);?>
</h3>
<h3><?php echo (($tmp = @$_smarty_tpl->tpl_vars['textError']->value)===null||$tmp==='' ? '' : $tmp);?>
</h3>

<a href="email.php">Voltar</a>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
