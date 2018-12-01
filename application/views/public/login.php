<?= $this->session->flashdata('auth');?>


<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="/beer-ecommerce/home">Home</a><span>|</span></li>
				<li>Entrar ou Criar Conta</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
		<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<?php foreach($dados as $dado){ ?>
							<li><a href="/beer-ecommerce/categoria/<?= $dado['id_categoria'] ?>"><?= $dado['descricao_categoria'] ?></a></li>
						<?php } ?>
					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
<!-- login -->
		<div class="w3_login">
			<h3>Entrar ou Criar Conta</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Click Me</div>
				  </div>
				  <div class="form">
					<h2>Já sou cliente</h2>
					<form action="\beer-ecommerce/public/login/logar" method="post">
					  <input type="text" name="cpf" placeholder="CPF" required>
					  <input type="password" name="senha" placeholder="Senha" required>
						<input type = "hidden" name = "tipo_auth" value = "user">
					  <input type="submit" value="Entrar">
					</form>
				  </div>
				  <div class="form">
					<h2>Criar Conta</h2>
					<form action="#" method="post">
					  <input type="text" name="Username" placeholder="Usuario" required=" ">
					  <input type="password" name="Password" placeholder="Senha" required=" ">
					  <input type="email" name="Email" placeholder="Email" required=" ">
					  <input type="text" name="Phone" placeholder="Telefone" required=" ">
					  <input type="submit" value="Criar">
					</form>
				  </div>
				  <div class="cta"><a href="#">Esqueceu a senha?</a></div>
				</div>
			</div>
			<script>
				$('.toggle').click(function(){
				  // Switches the Icon
				  $(this).children('i').toggleClass('fa-pencil');
				  // Switches the forms  
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
			</script>
		</div>
<!-- //login -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- newsletter-top-serv-btm -->
	<div class="newsletter-top-serv-btm">
		<div class="container">
			<div class="col-md-4 wthree_news_top_serv_btm_grid">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-shopping-cart" aria-hidden="true"></i>
				</div>
				<h3>Compre sem sair de casa</h3>
				<p>Comodidade e facilidade para adquirir sua bebida preferida,
				sem precisar sai do conforto da sua casa.</p>
			</div>
			<div class="col-md-4 wthree_news_top_serv_btm_grid">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-bar-chart" aria-hidden="true"></i>
				</div>
				<h3>Melhores Preços</h3>
				<p>Os menores preço do mercado online e lojas fisicas.
					.</p>
			</div>
			<div class="col-md-4 wthree_news_top_serv_btm_grid">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-truck" aria-hidden="true"></i>
				</div>
				<h3>Entrega</h3>
				<p>O prazo de entrega se inicia após o pedido ser entregue para a transportadora.
					Você será informado via e-mail o passo-a-passo de liberação de sua compra e despacho para transporte até seu endereço.
					Caso tenha alguma dúvida, por favor entre em contato através da nossa Central de Atendimentos..</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter-top-serv-btm -->