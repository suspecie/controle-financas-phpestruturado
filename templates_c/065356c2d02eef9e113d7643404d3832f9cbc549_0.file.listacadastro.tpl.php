<?php
/* Smarty version 3.1.29, created on 2016-04-11 12:12:38
  from "/var/www/html/SUELLYN_PESSOAL/controle-financas-phpestruturado/listacadastro.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570bbee6d1be20_86145392',
  'file_dependency' => 
  array (
    '065356c2d02eef9e113d7643404d3832f9cbc549' => 
    array (
      0 => '/var/www/html/SUELLYN_PESSOAL/controle-financas-phpestruturado/listacadastro.tpl',
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
function content_570bbee6d1be20_86145392 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/SUELLYN_PESSOAL/controle-financas-phpestruturado/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<hr>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>DESCRICAO</th>
            <th>TIPO</th>
            <th>DATA</th>
            <th>VALOR</th>
            <th>ACAO</th>
        </tr>
    </thead>
    <tbody>


        <?php
$_from = $_smarty_tpl->tpl_vars['receitasdespesas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_linha_0_saved_item = isset($_smarty_tpl->tpl_vars['linha']) ? $_smarty_tpl->tpl_vars['linha'] : false;
$_smarty_tpl->tpl_vars['linha'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['linha']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['linha']->value) {
$_smarty_tpl->tpl_vars['linha']->_loop = true;
$__foreach_linha_0_saved_local_item = $_smarty_tpl->tpl_vars['linha'];
?>
            <tr>
                <td> <?php echo $_smarty_tpl->tpl_vars['linha']->value->id;?>
 </td>
                <td> <?php echo $_smarty_tpl->tpl_vars['linha']->value->descricao;?>
 </td>
                <td> <?php echo $_smarty_tpl->tpl_vars['linha']->value->tipo;?>
 </td>
                <td> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['linha']->value->data,"d/m/Y");?>
 </td>
                <td> R$<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['linha']->value->valor);?>
 </td>
                <td> <a href='cadastro.php?acao=excluir&id=<?php echo $_smarty_tpl->tpl_vars['linha']->value->id;?>
'>EXCLUIR</a>  </td> 
                <?php
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['linha']->_loop) {
?>
                <td colspan='6'> NENHUM REGISTRO! </td>
            </tr>

        <?php
}
if ($__foreach_linha_0_saved_item) {
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_0_saved_item;
}
?>

    </tbody>
</table>

 <?php echo $_smarty_tpl->tpl_vars['paginador']->value;?>



<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
