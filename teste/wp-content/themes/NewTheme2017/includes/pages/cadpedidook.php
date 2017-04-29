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
			<div id="banner-wrapper">
				<div id="banner" class="box container">
					<div class="row">
						<?php
						  $con = mysql_connect("localhost","root","");
						  if (!$con){die('Could not connect: ' . mysql_error());}
						  mysql_select_db("computecnica", $con);
						  $query = "INSERT INTO wp_pedidos(pedido_id, produto_id, cliente_id)
						  VALUES (NULL, '".$_REQUEST['produto_id']."', '".$_REQUEST['cliente_id']."')";
						  mysql_query($query);
						  mysql_close($con);
						?>
					</div>
					<div class="row">
						<div class="7u">
							<p><h3>Pedido Relizado com Sucesso!</h3></p>
						</div>
					</div>
				</div>
			</div>
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