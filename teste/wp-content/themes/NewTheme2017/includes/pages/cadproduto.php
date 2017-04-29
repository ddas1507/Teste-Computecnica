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
//-----------------------------------------------------    
//Funcao: MascaraMoeda
//Sinopse: Mascara de preenchimento de moeda    
//Parametro:    
//   objTextBox : Objeto (TextBox)    
//   SeparadorMilesimo : Caracter separador de milésimos    
//   SeparadorDecimal : Caracter separador de decimais    
//   e : Evento    
//Retorno: Booleano    
//Autor: Gabriel Fróes - www.codigofonte.com.br    
//   
// Alteração: Alteração para a permissão de pagar o conteúdo do componente.  
// Autor: Bruno Lins Alves - www.brunolinsalves.com  
//-----------------------------------------------------    
function MascaraMoeda(objTextBox, SeparadorMilesimo, SeparadorDecimal, e){    
    var sep = 0;    
    var key = '';    
    var i = j = 0;    
    var len = len2 = 0;    
    var strCheck = '0123456789';    
    var aux = aux2 = '';    
    var whichCode = (window.Event) ? e.which : e.keyCode;    
    if (whichCode == 13 || whichCode == 8) return true;    
    key = String.fromCharCode(whichCode); // Valor para o código da Chave    
    if (strCheck.indexOf(key) == -1) return false; // Chave inválida    
    len = objTextBox.value.length;    
    for(i = 0; i < len; i++)    
        if ((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal)) break;    
    aux = '';    
    for(; i < len; i++)    
        if (strCheck.indexOf(objTextBox.value.charAt(i))!=-1) aux += objTextBox.value.charAt(i);    
    aux += key;    
    len = aux.length;    
    if (len == 0) objTextBox.value = '';    
    if (len == 1) objTextBox.value = '0'+ SeparadorDecimal + '0' + aux;    
    if (len == 2) objTextBox.value = '0'+ SeparadorDecimal + aux;    
    if (len > 2) {    
        aux2 = '';    
        for (j = 0, i = len - 3; i >= 0; i--) {    
            if (j == 3) {    
                aux2 += SeparadorMilesimo;    
                j = 0;    
            }    
            aux2 += aux.charAt(i);    
            j++;    
        }    
        objTextBox.value = '';    
        len2 = aux2.length;    
        for (i = len2 - 1; i >= 0; i--)    
        objTextBox.value += aux2.charAt(i);    
        objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);    
    }    
    return false;    
}    

function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
}

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
								<p><h3>Formulário de Cadastro de Produtos</h3></p>
							</div>
						</div>
						
						<div class="row">
							<form name="Cadastro" action="<?php echo bloginfo('url');?>/cadprodutook" method="POST">
								<input type="text" name="produto_nome" size="30" placeholder="Nome do Produto" maxlength="30"required /><br>
								<textarea rows="4" cols="15" name="produto_descricao" placeholder="Descrição do Produto" maxlength="50"required></textarea><br>
								<input type="text" name="produto_preco" size="30" placeholder="Preço do Produto" maxlength="14" onfocus="this.style.backgroundColor='#FFEEEE'" onblur="this.style.backgroundColor='#FFFFFF'" onKeyPress="return(MascaraMoeda(this,',','.',event))" required /><br>
												
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