<?php
/* Smarty version 3.1.29, created on 2016-04-12 01:14:02
  from "C:\wamp64\www\controle-financas-phpestruturado\listaplanilha.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570c4bdae43289_03382833',
  'file_dependency' => 
  array (
    'd0524bc91da651f99b83c399bad2ae2711c44916' => 
    array (
      0 => 'C:\\wamp64\\www\\controle-financas-phpestruturado\\listaplanilha.tpl',
      1 => 1460423617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./comum/topo.tpl' => 1,
    'file:./comum/base.tpl' => 1,
  ),
),false)) {
function content_570c4bdae43289_03382833 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp64\\www\\controle-financas-phpestruturado\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: <?php echo $_COOKIE['login'];?>
</p>
<hr>

 
 <a href="email.php?data_antes=<?php echo $_smarty_tpl->tpl_vars['data_antes']->value;?>
&data_depois=<?php echo $_smarty_tpl->tpl_vars['data_depois']->value;?>
">EMAIL</a>
<form role="form" action="email.php" method="POST" name="myForm" id="myForm" enctype="multipart/form-data">

<hr>
PERIODO DE: <?php echo $_smarty_tpl->tpl_vars['data_antes']->value;?>
 ATÉ: <?php echo $_smarty_tpl->tpl_vars['data_depois']->value;?>


<hr>
<table border="1">
    <thead>
        <tr>
            <th colspan="3">RECEITAS FIXAS</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->tpl_vars['receitasfixas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_linhareceitasfixas_0_saved_item = isset($_smarty_tpl->tpl_vars['linhareceitasfixas']) ? $_smarty_tpl->tpl_vars['linhareceitasfixas'] : false;
$_smarty_tpl->tpl_vars['linhareceitasfixas'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['linhareceitasfixas']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['linhareceitasfixas']->value) {
$_smarty_tpl->tpl_vars['linhareceitasfixas']->_loop = true;
$__foreach_linhareceitasfixas_0_saved_local_item = $_smarty_tpl->tpl_vars['linhareceitasfixas'];
?>
            <tr>
                <td> <?php echo $_smarty_tpl->tpl_vars['linhareceitasfixas']->value->descricao;?>
 </td>
                <td>R$ <?php echo $_smarty_tpl->tpl_vars['linhareceitasfixas']->value->valor;?>
 </td>
                <td>   <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['linhareceitasfixas']->value->data,"d/m/Y");?>
 </td>
                <?php
$_smarty_tpl->tpl_vars['linhareceitasfixas'] = $__foreach_linhareceitasfixas_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['linhareceitasfixas']->_loop) {
?>
                <td colspan='3'> NENHUM REGISTRO! </td>
            </tr>

        <?php
}
if ($__foreach_linhareceitasfixas_0_saved_item) {
$_smarty_tpl->tpl_vars['linhareceitasfixas'] = $__foreach_linhareceitasfixas_0_saved_item;
}
?>

    </tbody>

    <thead>
        <tr>
            <th colspan="3">RECEITAS VARIAVEIS</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->tpl_vars['receitasvariaveis']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_linhareceitasvariaveis_1_saved_item = isset($_smarty_tpl->tpl_vars['linhareceitasvariaveis']) ? $_smarty_tpl->tpl_vars['linhareceitasvariaveis'] : false;
$_smarty_tpl->tpl_vars['linhareceitasvariaveis'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['linhareceitasvariaveis']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['linhareceitasvariaveis']->value) {
$_smarty_tpl->tpl_vars['linhareceitasvariaveis']->_loop = true;
$__foreach_linhareceitasvariaveis_1_saved_local_item = $_smarty_tpl->tpl_vars['linhareceitasvariaveis'];
?>
            <tr>
                <td> <?php echo $_smarty_tpl->tpl_vars['linhareceitasvariaveis']->value->descricao;?>
 </td>
                <td>R$ <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['linhareceitasvariaveis']->value->valor);?>
 </td>
                <td>   <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['linhareceitasvariaveis']->value->data,"d/m/Y");?>
 </td>
                <?php
$_smarty_tpl->tpl_vars['linhareceitasvariaveis'] = $__foreach_linhareceitasvariaveis_1_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['linhareceitasvariaveis']->_loop) {
?>
                <td colspan='3'> NENHUM REGISTRO! </td>
            </tr>

        <?php
}
if ($__foreach_linhareceitasvariaveis_1_saved_item) {
$_smarty_tpl->tpl_vars['linhareceitasvariaveis'] = $__foreach_linhareceitasvariaveis_1_saved_item;
}
?>

    </tbody>
    
    <thead>
        <tr>
            <th colspan="3">TOTAL RECEITAS</th>
        </tr>
    </thead>
    <tbody>
        <td colspan='3'>R$ <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['total_receitas']->value);?>
 </td>
    </tbody>
    
    <thead>
        <tr>
            <th colspan="3">DESPESAS FIXAS</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->tpl_vars['despesasfixas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_linhadespesasfixas_2_saved_item = isset($_smarty_tpl->tpl_vars['linhadespesasfixas']) ? $_smarty_tpl->tpl_vars['linhadespesasfixas'] : false;
$_smarty_tpl->tpl_vars['linhadespesasfixas'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['linhadespesasfixas']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['linhadespesasfixas']->value) {
$_smarty_tpl->tpl_vars['linhadespesasfixas']->_loop = true;
$__foreach_linhadespesasfixas_2_saved_local_item = $_smarty_tpl->tpl_vars['linhadespesasfixas'];
?>
            <tr>
                <td> <?php echo $_smarty_tpl->tpl_vars['linhadespesasfixas']->value->descricao;?>
 </td>
                <td>R$ <?php echo $_smarty_tpl->tpl_vars['linhadespesasfixas']->value->valor;?>
 </td>
                <td>   <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['linhadespesasfixas']->value->data,"d/m/Y");?>
 </td>
                <?php
$_smarty_tpl->tpl_vars['linhadespesasfixas'] = $__foreach_linhadespesasfixas_2_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['linhadespesasfixas']->_loop) {
?>
                <td colspan='3'> NENHUM REGISTRO! </td>
            </tr>

        <?php
}
if ($__foreach_linhadespesasfixas_2_saved_item) {
$_smarty_tpl->tpl_vars['linhadespesasfixas'] = $__foreach_linhadespesasfixas_2_saved_item;
}
?>

    </tbody>
    
    <thead>
        <tr>
            <th colspan="3">DESPESAS VARIAVEIS</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->tpl_vars['despesasvariaveis']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_linhadespesasvariaveis_3_saved_item = isset($_smarty_tpl->tpl_vars['linhadespesasvariaveis']) ? $_smarty_tpl->tpl_vars['linhadespesasvariaveis'] : false;
$_smarty_tpl->tpl_vars['linhadespesasvariaveis'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['linhadespesasvariaveis']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['linhadespesasvariaveis']->value) {
$_smarty_tpl->tpl_vars['linhadespesasvariaveis']->_loop = true;
$__foreach_linhadespesasvariaveis_3_saved_local_item = $_smarty_tpl->tpl_vars['linhadespesasvariaveis'];
?>
            <tr>
                <td> <?php echo $_smarty_tpl->tpl_vars['linhadespesasvariaveis']->value->descricao;?>
 </td>
                <td>R$ <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['linhadespesasvariaveis']->value->valor);?>
 </td>
                <td>   <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['linhadespesasvariaveis']->value->data,"d/m/Y");?>
 </td>
                <?php
$_smarty_tpl->tpl_vars['linhadespesasvariaveis'] = $__foreach_linhadespesasvariaveis_3_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['linhadespesasvariaveis']->_loop) {
?>
                <td colspan='3'> NENHUM REGISTRO! </td>
            </tr>

        <?php
}
if ($__foreach_linhadespesasvariaveis_3_saved_item) {
$_smarty_tpl->tpl_vars['linhadespesasvariaveis'] = $__foreach_linhadespesasvariaveis_3_saved_item;
}
?>

    </tbody>
    
     
    <thead>
        <tr>
            <th colspan="3">TOTAL DESPESAS</th>
        </tr>
    </thead>
    <tbody>
        <td colspan='3'>R$ <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['total_despesas']->value);?>
 </td>
    </tbody>
    
     <thead>
        <tr>
            <th colspan="3">TOTAL</th>
        </tr>
    </thead>
    <tbody>
        <td colspan='3'>R$ <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['total_registros']->value);?>
 </td>
    </tbody>
    
    
</table>

</form>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
