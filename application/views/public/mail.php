<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="/beer-ecommerce/home">Home</a><span>|</span></li>
				<li>Envie-nos</li>
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
<!-- mail -->
		<div class="mail">
			<h3>Envie-nos</h3>
			<div class="agileinfo_mail_grids">
				<div class="col-md-4 agileinfo_mail_grid_left">
					<ul>
						<li><i class="fa fa-home" aria-hidden="true"></i></li>
						<li>Endereço<span>Penedo, Caicó - RN, 59300-000</span></li>
					</ul>
					<ul>
						<li><i class="fa fa-envelope" aria-hidden="true"></i></li>
						<li>E-mail<span><a href="contato@beer.com">contato@beer.com</a></span></li>
					</ul>
					<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i></li>
						<li>Ligue pra gente<span>(+55) 99999-9999</span></li>
					</ul>
				</div>
				<div class="col-md-8 agileinfo_mail_grid_right">
					<form action="#" method="post">
						<div class="col-md-6 wthree_contact_left_grid">
							<input type="text" name="name" value="Nome*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nome*';}" required="">
							<input type="email" name="email" value="Email*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email*';}" required="">
						</div>
						<div class="col-md-6 wthree_contact_left_grid">
							<input type="text" name="telefone" value="Telefone*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telefone*';}" required="">
							<input type="text" name="sujeito" value="Sujeito*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Sujeito*';}" required="">
						</div>
						<div class="clearfix"> </div>
						<textarea  name="mensagem" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mensagem...';}" required="">Mensagem...</textarea>
						<input type="submit" value="Enviar">
						<input type="reset" value="Limpar">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //mail -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- map -->
	
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-XXqhhYh73e2NMXjerFNrkmv3FRYSxDc&callback=initMap"async defer></script>
	<div class="map" id="map">
		
	</div>
	<script>
		function initMap() {
		var myLatLng = {lat: -6.467259, lng: -37.084680};

		// Create a map object and specify the DOM element
		// for display.
		var map = new google.maps.Map(document.getElementById('map'), {
			center: myLatLng,
			zoom: 17
		});

		// Create a marker and set its position.
		var marker = new google.maps.Marker({
			map: map,
			position: myLatLng,
			title: 'UFRN'
		});
		}

	</script>
<!-- //map -->