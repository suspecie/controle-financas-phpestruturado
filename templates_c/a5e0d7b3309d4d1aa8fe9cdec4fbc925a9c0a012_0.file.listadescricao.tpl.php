<?php
/* Smarty version 3.1.29, created on 2016-04-12 05:50:47
  from "C:\wamp64\www\controle-financas-phpestruturado\listadescricao.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570c8cb7218529_53071943',
  'file_dependency' => 
  array (
    'a5e0d7b3309d4d1aa8fe9cdec4fbc925a9c0a012' => 
    array (
      0 => 'C:\\wamp64\\www\\controle-financas-phpestruturado\\listadescricao.tpl',
      1 => 1460440237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./comum/topo.tpl' => 1,
    'file:./comum/base.tpl' => 1,
  ),
),false)) {
function content_570c8cb7218529_53071943 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<hr>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel panel-warning"></div>
  <div class="panel-body">
  


  <!-- Table -->
  <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>DESCRICAO</th>
            <th>ACAO</th>
        </tr>
    </thead>
    <tbody>


        <?php
$_from = $_smarty_tpl->tpl_vars['descricoes']->value;
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
                <td> <?php echo $_smarty_tpl->tpl_vars['linha']->value->id_descricao;?>
 </td>
                <td>   <?php echo $_smarty_tpl->tpl_vars['linha']->value->descricao;?>
 </td>
                <td> <a href='cadastrodescricao.php?acao=editar&id=<?php echo $_smarty_tpl->tpl_vars['linha']->value->id_descricao;?>
'>ALTERAR</a> | 
                    <a href='cadastrodescricao.php?acao=excluir&id=<?php echo $_smarty_tpl->tpl_vars['linha']->value->id_descricao;?>
'>EXCLUIR</a>  </td> 
                <?php
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['linha']->_loop) {
?>
                <td colspan='3'> NENHUM REGISTRO! </td>
            </tr>

        <?php
}
if ($__foreach_linha_0_saved_item) {
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_0_saved_item;
}
?>

    </tbody>
  </table>
          </div>
</div>

 <?php echo $_smarty_tpl->tpl_vars['paginador']->value;?>



<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
