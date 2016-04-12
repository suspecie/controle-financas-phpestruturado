<?php
/* Smarty version 3.1.29, created on 2016-04-12 06:02:49
  from "C:\wamp64\www\controle-financas-phpestruturado\atualizardescricao.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570c8f89cdc449_94071035',
  'file_dependency' => 
  array (
    'badb0e7a672355561b7ec2c3929980286f2897ff' => 
    array (
      0 => 'C:\\wamp64\\www\\controle-financas-phpestruturado\\atualizardescricao.tpl',
      1 => 1460440963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./comum/topo.tpl' => 1,
    'file:./comum/base.tpl' => 1,
  ),
),false)) {
function content_570c8f89cdc449_94071035 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: <?php echo $_COOKIE['login'];?>
</p>

<hr>

<form id="contactForm" action="cadastrodescricao.php?" method="POST">
    <h4>ATUALIZAR DESCRIÇÃO</h4><br>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group" >
                <input type="hidden" name="acao_post" id="acao_post" value="editar" />
                <input type="hidden" name="id" size="45"id="id"  value="<?php echo $_smarty_tpl->tpl_vars['idDescricao']->value;?>
">
            </div>
            <div class="form-group" >
                <input type="text"  class="form-control"  placeholder="Descrição" name="descricao" id="descricao" value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['descricao'];?>
">
                <p class="help-block text-danger"></p>
            </div>
        </div>
    </div>
    <input type="submit"  class="page-scroll btn btn-warning" value="Atualizar">

</form>



<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
