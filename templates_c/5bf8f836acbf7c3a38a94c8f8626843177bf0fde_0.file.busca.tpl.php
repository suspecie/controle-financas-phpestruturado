<?php
/* Smarty version 3.1.29, created on 2016-04-12 06:24:59
  from "C:\wamp64\www\controle-financas-phpestruturado\busca.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570c94bb00fac3_73282105',
  'file_dependency' => 
  array (
    '5bf8f836acbf7c3a38a94c8f8626843177bf0fde' => 
    array (
      0 => 'C:\\wamp64\\www\\controle-financas-phpestruturado\\busca.tpl',
      1 => 1460442294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./comum/topo.tpl' => 1,
    'file:./comum/base.tpl' => 1,
  ),
),false)) {
function content_570c94bb00fac3_73282105 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: <?php echo $_COOKIE['login'];?>
</p>

<hr>

<form id="contactForm"  action="cadastro.php?acao=buscades&acao2=post" method="POST">

    <h4>BUSCA DESCRICAO</h4>
    <div class="row">
        <div class="col-md-6">
            <input type="hidden" name="acao_post" id="acao_post" value="buscades" />
            <label for="descricao">Descricao: </label>
            <input type="text" class="form-control" name="busca" id="busca" value="<?php echo $_smarty_tpl->tpl_vars['texto']->value;?>
" /><br>
            <input type="submit" value="Buscar" class="page-scroll btn btn-warning" name="btnbuscardes" /><br>
        </div>

    </div>

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
                    <?php ob_start();
echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['texto']->value, $tmp) < 3;
$_tmp1=ob_get_clean();
if ($_tmp1) {?>            
                    <td colspan='3'> NENHUM REGISTRO! </td>
                <?php } elseif ($_smarty_tpl->tpl_vars['linha']->value == NULL) {?>
                    <td colspan='3'> NENHUM REGISTRO! </td>
                <?php } else { ?>
                    <tr>
                        <td> <?php echo $_smarty_tpl->tpl_vars['linha']->value['id_descricao'];?>
 </td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['linha']->value['descricao'];?>
 </td>
                        <td>  <a href="<?php echo $_smarty_tpl->tpl_vars['link_retorno']->value;?>
&idDescricao=<?php echo $_smarty_tpl->tpl_vars['linha']->value['id_descricao'];?>
">Selecionar</a> 
                        </td>      
                    </tr>
                <?php }?>


                </tbody>
            </table>
        </div>
    </div>
</form>



<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
