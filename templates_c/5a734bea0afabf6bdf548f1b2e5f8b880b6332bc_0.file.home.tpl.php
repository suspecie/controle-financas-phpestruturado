<?php
/* Smarty version 3.1.29, created on 2016-04-12 06:39:32
  from "C:\wamp64\www\controle-financas-phpestruturado\home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570c982490eed7_14380225',
  'file_dependency' => 
  array (
    '5a734bea0afabf6bdf548f1b2e5f8b880b6332bc' => 
    array (
      0 => 'C:\\wamp64\\www\\controle-financas-phpestruturado\\home.tpl',
      1 => 1460443167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./comum/topo.tpl' => 1,
    'file:./comum/base.tpl' => 1,
  ),
),false)) {
function content_570c982490eed7_14380225 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<a  href="logout.php"> SAIR </a>

<hr>

  <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">CONTROLE DE GASTOS MENSAIS</h2>
                    <h3 class="section-subheading text-muted"> Usuário: <?php echo $_COOKIE['login'];?>
</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                   <a href="cadastrodescricao.php" class="service-heading" > <h4 class="service-heading">CADASTRO DE DESCRICOES</h4> </a>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa  fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="cadastro.php" class="service-heading" > <h4 class="service-heading">CADASTRO DE RECEITAS E DESPESAS</h4> </a>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="planilha.php" class="service-heading" > <h4 class="service-heading">PLANILHA</h4> </a>
                </div>
            </div>
        </div>
    </section>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
