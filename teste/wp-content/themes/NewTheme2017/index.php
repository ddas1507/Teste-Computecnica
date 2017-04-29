<!DOCTYPE HTML>

<html>
	<head>
		<title><?php bloginfo('name'); echo " - "; bloginfo('description');?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="<?php echo bloginfo('template_url');?>/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/css/ie8.css" /><![endif]-->
	</head>
	<body <?php body_class();?>>
		<div id="page-wrapper">

			<!-- Header -->
				<?php get_header();?>				

				<div id="banner-wrapper">
					<div id="banner" class="box container">
						<div class="row">
							<div class="7u">
								<p><?php bloginfo('name');?></p>
								<p><h3><?php bloginfo('description');?></h3></p>
							</div>
						</div>
					</div>
				</div>
				
			<!-- Features -->
				<div id="features-wrapper">
					<div class="container">
						<div class="row">
							<div class="4u 12u(medium)">
								<!-- Box 1 -->
								<section class="box feature">
									<div class="inner">
										<header>
											<h2>Cadastrar</h2>
											<p><a href="<?php echo bloginfo('url');?>/cadcliente">Cliente</a></p>
											<p><a href="<?php echo bloginfo('url');?>/cadproduto">Produto</a></p>
											<p><a href="<?php echo bloginfo('url');?>/cadpedido">Pedidos</a></p>
										</header>
									</div>
								</section>
							</div>
							<div class="4u 12u(medium)">
								<!-- Box 2 -->
								<section class="box feature">
									<div class="inner">
										<header>
											<h2>Consultar</h2>
											<p><a href="<?php echo bloginfo('url');?>/concliente">Clientes</a></p>
											<p><a href="<?php echo bloginfo('url');?>/conproduto">Produtos</a></p>
											<p><a href="<?php echo bloginfo('url');?>/conpedido">Pedidos</a></p>
										</header>
									</div>
								</section>
							</div>
							<div class="4u 12u(medium)">
								<!-- Box 3 -->
								<section class="box feature">
									<div class="inner">
										<header>
											<h2>Alterar</h2>
											<p><a href="<?php echo bloginfo('url');?>/altcliente">Clientes</a></p>
											<p><a href="<?php echo bloginfo('url');?>/altproduto">Produtos</a></p>
											<p><a href="<?php echo bloginfo('url');?>/altpedido">Pedidos</a></p>
										</header>
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
			
			<!-- Footer -->
				<?php get_footer();?>

		</div>

		<!-- Scripts -->

			<script src="<?php echo bloginfo('template_url');?>/assets/js/jquery.min.js"></script>
			<script src="<?php echo bloginfo('template_url');?>/assets/js/jquery.dropotron.min.js"></script>
			<script src="<?php echo bloginfo('template_url');?>/assets/js/skel.min.js"></script>
			<script src="<?php echo bloginfo('template_url');?>/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="<?php echo bloginfo('template_url');?>/assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?php echo bloginfo('template_url');?>/assets/js/main.js"></script>

	</body>
</html>