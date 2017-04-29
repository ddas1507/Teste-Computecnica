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
							<div class="7u">								
								<p><h3>Formulário de Cadastro de Pedidos</h3></p>
							</div>
						</div>
						
						<div class="row">
							<form name="Cadastro" action="<?php echo bloginfo('url');?>/cadpedidook" method="POST">
								<select name="cliente_id" required="required">
									<option value="###" >Selecione um Cliente</option>
								<?php // LAÇO RESPONSÁVEL PELA LISTAGEM DAS DEMAIS OPÇÕES DO DROPDOWN 
											$drop_ligacao = mysql_connect("localhost", "root", ""); //conexao com o banco
											$ok = mysql_select_db("computecnica", $drop_ligacao); //escolher o banco de dados

											$drop_consulta = "select * FROM wp_clientes ORDER BY cliente_nome ASC";  //por enquanto ta ok
											$drop_resultado = mysql_query($drop_consulta, $drop_ligacao); //executar query e pegar resultados

											while ($linha = mysql_fetch_array($drop_resultado)){
								?>
												<option value="<?php echo $linha['cliente_id'];?>" ><?php echo $linha['cliente_nome'];?></option>
								<?php
											}
								?>
									</select><br />
								<select name="produto_id" required="required">
									<option value="###" >Selecione um Produto</option>
								<?php // LAÇO RESPONSÁVEL PELA LISTAGEM DAS DEMAIS OPÇÕES DO DROPDOWN 
											$drop_ligacao = mysql_connect("localhost", "root", ""); //conexao com o banco
											$ok = mysql_select_db("computecnica", $drop_ligacao); //escolher o banco de dados

											$drop_consulta = "select * FROM wp_produtos ORDER BY produto_nome ASC";  //por enquanto ta ok
											$drop_resultado = mysql_query($drop_consulta, $drop_ligacao); //executar query e pegar resultados
												var_dump($drop_resultado);

											while ($linha = mysql_fetch_array($drop_resultado)){
								?>
												<option value="<?php echo $linha['produto_id'];?>" ><?php echo $linha['produto_nome'];?></option>
								<?php
											}
								?>
									</select><br />
								<input type="submit" name="enviar" value="Salvar Cadastro">
								</form>
							</form>
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