<?php
/*
	template_name: cliente registrado
*/
$produto_nome = $_REQUEST['produto_nome'];
$produto_descricao = $_REQUEST['produto_descricao'];
$produto_preco = $_REQUEST['produto_preco'];

$style = 'cadclienteok';
$chamada = '<strong>Cliente Registrado</strong>';
include('header.php');
include('includes/pages/cadclienteok.php');
include('footer.php');
?>