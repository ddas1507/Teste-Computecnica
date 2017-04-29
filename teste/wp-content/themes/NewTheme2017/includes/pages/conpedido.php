<!DOCTYPE HTML>

<html>
	<head>
		<title><?php bloginfo('name'); echo " - "; bloginfo('description');?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="<?php echo bloginfo('template_url');?>/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/css/ie8.css" /><![endif]-->
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	</head>
	<body <?php body_class();?>>
		<div id="page-wrapper">
				<div id="banner-wrapper">
					<div id="banner" class="box container">
						<div class="row">
							<div class="7u">								
								<p><h3>Pedidos Cadastrados</h3></p>
							</div>
						</div>
						
						<div class="row">
							<?php // LAÇO RESPONSÁVEL PELA LISTAGEM DAS DEMAIS OPÇÕES DO DROPDOWN 
								$drop_ligacao = mysql_connect("localhost", "root", ""); //conexao com o banco
								$ok = mysql_select_db("computecnica", $drop_ligacao); //escolher o banco de dados

								$drop_consulta = "select * FROM wp_pedidos ORDER BY pedido_id ASC";  //por enquanto ta ok
								$drop_resultado = mysql_query($drop_consulta, $drop_ligacao); //executar query e pegar resultados
										
							?>
									 
							<table style="border: 1px solid #efefef;" id="listagem">
								<thead>
									<tr style="font-size: 11px;">
										<th >ID</th>
										<th >CLIENTE</th>
										<th >PRODUTO</th>
										<th >A&Ccedil;&Otilde;ES</th>
									</tr>
								</thead>
								<?php
									while ($linha = mysql_fetch_array($drop_resultado))
									{
								?>
									<tr style="font-size: 11px;">
										<td style="text-align: center;"><?php echo $linha['pedido_id'];?></td>
										<td style="text-align: center;"><?php echo $linha['cliente_id'];?></td>
										<td style="text-align: center;"><?php echo $linha['produto_id'];?></td>
										<td>
											<table border="0" style="width:100%;">
												<tr>
													<td align="center"><a href="#">Alterar</a></td>
													<td align="center"><a href="#">Deletar</a></td>
												</tr>
											</table>
										</td>
									</tr>
								<?php
									}
								?>
							</table>
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