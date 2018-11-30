<!-- products-breadcrumb -->
<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="/beer-ecommerce/home">Home</a><span>|</span></li>
				<li><?= $categoria ?></li>
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
			<div class="w3l_banner_nav_right_banner9 w3l_banner_nav_right_banner_pet">
				<h4><?= $categoria ?></h4>
				<p>Boas compras</p>
				<a href="/beer-ecommerce/single">Shop Now</a>
			</div>
			<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub">
				<h3 class="w3l_fruit"><?= $categoria ?></h3>
				<div class="w3ls_w3l_banner_nav_right_grid1 w3ls_w3l_banner_nav_right_grid1_veg">
                    <?php foreach($bebidas as $item){ ?>
                        <div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asdfdfd">
                            <div class="hover14 column">
                            <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
								<?php if($item['status'] == 'checked'){ ?>
                                <div class="agile_top_brand_left_grid_pos">
                                    <img src="<?=base_url("assets/public/images/offer.png")?>" alt=" " class="img-responsive" />
								</div>
								<?php }?>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="/beer-ecommerce/single/<?= $item['id_bebida']?>"><img src="<?=$item['imagens']['src']?>" alt=" " class="img-responsive" /></a>
												<p><?= $item['nome_bebida']; ?></p>
												<?php if($item['status'] == 'checked'){ ?>
													<h4>R$ <?= $item['preco_bebida'] - (($item['preco_bebida']/100) * $item['desconto']) ?> <span>R$ <?= $item['preco_bebida']; ?></span>
												<?php }else{?>
													<h4>R$ <?= $item['preco_bebida'] ?>
												<?php }?>
												</h4>
                                            </div>
                                            <div class="snipcart-details">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="<?= $item['nome_bebida']; ?>" />
														<input type="hidden" name="amount" value="<?= $item['preco_bebida']; ?>" />
														<?php if($item['status'] == 'checked'){ ?>
															<input type="hidden" name="discount_amount" value="<?= ($item['preco_bebida']/100) * $item['desconto'] ?>" />
														<?php }else{?>
															<input type="hidden" name="discount_amount" value="0" />
														<?php }?>
														<input type="hidden" name="currency_code" value="BRL" />
														<input type="hidden" name="id_bebida" value="<?= $item['id_bebida'] ?>" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Adicionar ao carrinho" class="button" />
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                            </div>
                        </div>
                    <?php } ?>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->