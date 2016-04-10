<?php
/* Smarty version 3.1.29, created on 2016-04-09 23:44:42
  from "/var/www/html/SUELLYN_PESSOAL/controle-financas-phpestruturado/cadastro.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5709be1a9a7f69_45166102',
  'file_dependency' => 
  array (
    '498d162a24e758cf2909139d86237646c43e3050' => 
    array (
      0 => '/var/www/html/SUELLYN_PESSOAL/controle-financas-phpestruturado/cadastro.tpl',
      1 => 1460256247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./comum/topo.tpl' => 1,
    'file:./comum/base.tpl' => 1,
  ),
),false)) {
function content_5709be1a9a7f69_45166102 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: <?php echo $_COOKIE['usuario'];?>
</p>
<a  href="cadastro.php?acao=voltar"> HOME </a>

<hr>

<form action=" incluir.php" method="POST">
    
   <h4>CADASTRO DE RECEITAS E DESPESAS</h4>

    <label for="descricao">Descricao: </label>
     <input type="text" id="id_descricao" name="id_descricao" value="<?php echo $_smarty_tpl->tpl_vars['idDescricao']->value;?>
"  />
        | <a href="cadastro.php?acao=buscades">Buscar Descrições </a><br>         
    <br>
    <label for="tipo">TIpo: </label>    

    <select name="tipo" id="tipo" name="tipo">
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
     <select name="mes" id="mes" name="mes">
        <option value="0"></option>

        <?php
$_from = $_smarty_tpl->tpl_vars['linha_mes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_mes_1_saved_item = isset($_smarty_tpl->tpl_vars['mes']) ? $_smarty_tpl->tpl_vars['mes'] : false;
$_smarty_tpl->tpl_vars['mes'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['mes']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['mes']->value) {
$_smarty_tpl->tpl_vars['mes']->_loop = true;
$__foreach_mes_1_saved_local_item = $_smarty_tpl->tpl_vars['mes'];
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['mes']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['mes']->value['descricao'];?>
</option>
        <?php
$_smarty_tpl->tpl_vars['mes'] = $__foreach_mes_1_saved_local_item;
}
if ($__foreach_mes_1_saved_item) {
$_smarty_tpl->tpl_vars['mes'] = $__foreach_mes_1_saved_item;
}
?>
    </select>
    <label for="ano">Ano: </label>
    <input type="text" name="ano" size="45"id="ano"  value="">
    <br>
    <label for="valor">Valor: </label>
    <input type="text" name="valor" size="45"id="valor"  value="">
    <br>
     <input type="submit" value="Salvar">

</form>



<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
