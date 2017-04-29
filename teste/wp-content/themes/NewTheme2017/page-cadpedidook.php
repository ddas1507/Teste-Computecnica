<?php
/*
	template_name: pedido registrado
*/
$produto_id = $_REQUEST['produto_id'];
$cliente_id = $_REQUEST['cliente_id'];

$style = 'cadpedidook';
$chamada = '<strong>Pedido Registrado</strong>';
include('header.php');
include('includes/pages/cadpedidook.php');
include('footer.php');
?>