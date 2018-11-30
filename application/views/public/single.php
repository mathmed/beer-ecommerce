<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="/beer-ecommerce/home">Home</a><span>|</span></li>
				<li>Item</li>
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
			<div class="w3l_banner_nav_right_banner3">
				<h3>Melhores ofertas nas melhores bebidas<span class="blink_me"></span></h3>
			</div>
			<div class="agileinfo_single">
				<h5><?= $bebida['nome_bebida']?></h5>
				<div class="col-md-4 agileinfo_single_left">
					<img id="example" src="<?= $bebida['imagens'][0]['src'] ?>" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-8 agileinfo_single_right">
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked>
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="w3agile_description">
						<h4>Descrição</h4>
						<p><?= $bebida['descricao_bebida'] ?></p>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<?php if($bebida['promocao'][0]['status'] == 'checked'){ ?>
								<h4>R$ <?= $bebida['preco_bebida'] - (($bebida['preco_bebida']/100) * $bebida['promocao'][0]['desconto']) ?> <span>R$ <?= $bebida['preco_bebida']; ?></span>
							<?php }else{ ?>
								<h4>R$ <?= $bebida['preco_bebida'] ?>
							<?php } ?>
						</div>
						<div class="snipcart-details agileinfo_single_right_details">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value=" " />
									<input type="hidden" name="item_name" value="<?= $bebida['nome_bebida']; ?>" />
									<input type="hidden" name="amount" value="<?= $bebida['preco_bebida']; ?>" />
									<?php if($bebida['promocao'][0]['status'] == 'checked'){ ?>
										<input type="hidden" name="discount_amount" value="<?= ($bebida['preco_bebida']/100) * $bebida['promocao'][0]['desconto'] ?>" />
									<?php }else{?>
										<input type="hidden" name="discount_amount" value="0" />
									<?php }?>
									<input type="hidden" name="currency_code" value="BRL" />
									<input type="hidden" name="id_bebida" value="<?= $bebida['id_bebida'] ?>" />
									<input type="hidden" name="return" value=" " />
									<input type="hidden" name="cancel_return" value=" " />
									<input type="submit" name="submit" value="Adicionar" class="button" />
								</fieldset>
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->