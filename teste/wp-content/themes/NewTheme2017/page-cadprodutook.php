<?php
/*
	template_name: cliente registrado
*/
$produto_nome = $_REQUEST['produto_nome'];
$produto_descricao = $_REQUEST['produto_descricao'];
$produto_preco = $_REQUEST['produto_preco'];

$style = 'cadprodutook';
$chamada = '<strong>Cliente Registrado</strong>';
include('header.php');
include('includes/pages/cadprodutook.php');
include('footer.php');
?>