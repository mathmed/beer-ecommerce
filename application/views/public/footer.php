<!-- newsletter -->
<div class="newsletter">
		<div class="container">
			<div class="w3agile_newsletter_left">
				<h3>Assine nossa newsletter</h3>
			</div>
			<div class="w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="Inscreva-se">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 w3_footer_grid">
				<h3>Informações</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="/beer-ecommerce/about">Sobre</a></li>
					<li><a href="/beer-ecommerce/products">Produtos</a></li>
					<li><a href="/beer-ecommerce/services">Serviços</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>Informações políticas</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="/beer-ecommerce/faqs">FAQ</a></li>
					<li><a href="/beer-ecommerce/privacy">Privacidade</a></li>
					<li><a href="/beer-ecommerce/privacy">Termos de uso</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>O que vendemos</h3>
				<ul class="w3_footer_grid_list">
				<?php foreach($dados as $dado){ ?>
					<li><a href="/beer-ecommerce/categoria/<?= $dado['id_categoria'] ?>"><?= $dado['descricao_categoria'] ?></a></li>
				<?php } ?>
				</ul>
			</div>

			<div class="clearfix"> </div>
			<div class="agile_footer_grids">
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h4>Pagamento 100% seguro</h4>
						<img src="<?=base_url("assets/public/images/card.png")?>" alt=" " class="img-responsive" />
					</div>
				</div>
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h5>Nós estamos nas redes sociais</h5>
						<ul class="agileits_social_icons">
							<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="wthree_footer_copy">
				<p>© 2018 Duff Club. Todos os direitos reservados | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->

<!-- js -->
<script src="<?=base_url("assets/public/js/jquery-1.11.1.min.js")?>"></script>
<!-- easy-responsive-tabs -->    
<link rel="stylesheet" type="text/css" href="<?=base_url("assets/public/css/easy-responsive-tabs.css")?>" />
<script src="<?=base_url("assets/public/js/easyResponsiveTabs.js")?>"></script>
<!-- //easy-responsive-tabs --> 
	<script type="text/javascript">
    $(document).ready(function() {
        //Horizontal Tab
        $('#parentHorizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });
</script>
<!-- credit-card -->
		<script type="text/javascript" src="<?=base_url("assets/public/js/creditly.js")?>"></script>
        <link rel="stylesheet" href="<?=base_url("assets/public/css/creditly.css")?>" type="text/css" media="all" />

		<script type="text/javascript">
			$(function() {
			  var creditly = Creditly.initialize(
				  '.creditly-wrapper .expiration-month-and-year',
				  '.creditly-wrapper .credit-card-number',
				  '.creditly-wrapper .security-code',
				  '.creditly-wrapper .card-type');

			  $(".creditly-card-form .submit").click(function(e) {
				e.preventDefault();
				var output = creditly.validate();
				if (output) {
				  // Your validated credit card output
				  console.log(output);
				}
			  });
			});
		</script>
	<!-- //credit-card -->

<!-- //js -->
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
<!-- //script-for sticky-nav -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?=base_url("assets/public/js/move-top.js")?>"></script>
<script type="text/javascript" src="<?=base_url("assets/public/js/easing.js")?>"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->

<!-- Bootstrap Core JavaScript -->
<script src="<?=base_url("assets/public/js/bootstrap.min.js")?>"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="<?=base_url("assets/public/js/minicart.js")?>"></script>
<script>
		paypal.minicart.render();
		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;
			
			var dados_id = new Array();
			var dados_quantidade = new Array();
			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
				dados_id[i] = items[i]['_data']['id_bebida'];
				dados_quantidade[i] = items[i]['_data']['quantity'];
			}
			
			if (total < 3) {
				alert('A . Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
			$.ajax({	
				type: 'post',
				url: 'checkout.php',
				data: { 'dados_id':  dados_id, 'dados_quantidade': dados_quantidade},
			});

			// $.post(url, function(result) {
			// 	data
			// });

			// $.post('checkout.php' , {'dados_id':  dados_id, 'dados_quantidade': dados_quantidade} , function(data){
			// 	TODO : handle response
			// });
		});

	</script>

	<?php
		// $arrDados = json_decode($_POST['dados']);
		// print_r($arrDados);
		$dados_id = $_POST["dados_id"];
		$dados_quantidade = $_POST["dados_quantidade"];
		print_r($_POST);
		
		
	
	
	?>
</body>
</html>