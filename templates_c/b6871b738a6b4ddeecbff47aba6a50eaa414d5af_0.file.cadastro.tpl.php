<?php
/* Smarty version 3.1.29, created on 2016-04-12 06:18:47
  from "C:\wamp64\www\controle-financas-phpestruturado\cadastro.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570c9347badc91_98776639',
  'file_dependency' => 
  array (
    'b6871b738a6b4ddeecbff47aba6a50eaa414d5af' => 
    array (
      0 => 'C:\\wamp64\\www\\controle-financas-phpestruturado\\cadastro.tpl',
      1 => 1460441921,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./comum/topo.tpl' => 1,
    'file:./comum/base.tpl' => 1,
  ),
),false)) {
function content_570c9347badc91_98776639 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\wamp64\\www\\controle-financas-phpestruturado\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: <?php echo $_COOKIE['login'];?>
</p>
<a  href="cadastro.php?acao=voltar"> HOME </a>

<hr>

<form id="contactForm" action="cadastro.php" method="POST">

    <h4>CADASTRO DE RECEITAS E DESPESAS</h4>
    <div class="col-md-11">

        <input type="hidden" name="usuario" size="45"id="usuario"  value="<?php echo $_COOKIE['login'];?>
">
        <label for="descricao">Descricao: </label>
        <input class="form-control" type="text" id="id_descricao" name="id_descricao" value="<?php echo $_smarty_tpl->tpl_vars['idDescricao']->value;?>
"  />
        | <a href="cadastro.php?acao=buscades">Buscar Descrições </a><br>         
        <br>
        <label for="tipo">Tipo: </label>    

        <select name="tipo" class="form-control" id="tipo" name="tipo">
            <option value="0"></option>

            <?php
$_from = $_smarty_tpl->tpl_vars['linha']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_tipo_0_saved_item = isset($_smarty_tpl->tpl_vars['tipo']) ? $_smarty_tpl->tpl_vars['tipo'] : false;
$_smarty_tpl->tpl_vars['tipo'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['tipo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tipo']->value) {
$_smarty_tpl->tpl_vars['tipo']->_loop = true;
$__foreach_tipo_0_saved_local_item = $_smarty_tpl->tpl_vars['tipo'];
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['tipo']->value['descricao'];?>
</option>
            <?php
$_smarty_tpl->tpl_vars['tipo'] = $__foreach_tipo_0_saved_local_item;
}
if ($__foreach_tipo_0_saved_item) {
$_smarty_tpl->tpl_vars['tipo'] = $__foreach_tipo_0_saved_item;
}
?>
        </select>
        <br>
        <label for="mes">Mês: </label>
        <select name="mes" class="form-control" id="mes" name="mes">
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['mes']->value),$_smarty_tpl);?>

        </select>
        <label for="ano">Ano: </label>
        <input type="text" class="form-control" name="ano" size="45"id="ano"  value="">
        <br>
        <label for="valor">Valor: </label>
        <input type="text" class="form-control" name="valor" size="45"id="valor"  value="">
        <br>
        <input type="submit" class="page-scroll btn btn-warning"value="Salvar">


    </div>



</form>



<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
