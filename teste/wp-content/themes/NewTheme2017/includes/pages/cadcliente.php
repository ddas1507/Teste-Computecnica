<!DOCTYPE HTML>

<html>
	<head>
		<title><?php bloginfo('name'); echo " - "; bloginfo('description');?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="<?php echo bloginfo('template_url');?>/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/css/ie8.css" /><![endif]-->
<script>

function mascara(src, mask){
	var i = src.value.length;
	var saida = mask.substring(0,1);
	var texto = mask.substring(i)
	
	if (texto.substring(0,1) != saida){
		src.value += texto.substring(0,1);
	}
} 
</script>
	</head>
	<body <?php body_class();?>>
		<div id="page-wrapper">
				<div id="banner-wrapper">
					<div id="banner" class="box container">
						<div class="row">
							<div class="7u">								
								<p><h3>Formulário de Cadastro de Clientes</h3></p>
							</div>
						</div>
						
						<div class="row">
							<form name="Cadastro" action="<?php echo bloginfo('url');?>/cadclienteok" method="POST">
								<input type="text" name="cliente_nome" size="30" placeholder="Nome do Cliente" maxlength="30"required /><br>
								<input type="email" name="cliente_email" size="30" placeholder="Email do Cliente" maxlength="50"required /><br>
								<input type="text" name="cliente_telefone" size="30" placeholder="Telefone do Cliente" maxlength="14" onkeypress="mascara(this, '##&nbsp;#&nbsp;####-####')" required /><br>
								<input type="submit" name="enviar" value="Salvar Cadastro">
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