{include file ="./comum/topo.tpl"}

<a  href="logout.php"> SAIR </a>

<hr>

  <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">CONTROLE DE GASTOS MENSAIS</h2>
                    <h3 class="section-subheading text-muted"> Usuário: {$smarty.cookies.login}</h3>
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

{include file ="./comum/base.tpl"}