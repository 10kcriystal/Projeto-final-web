<?php
	include('../funcoes.php');
	$conexao = conexao(); 


	$id_produto=$_POST['id_produto'];
	$id_carrinho=$_POST['id_carrinho'];
	$id_peca=$_POST['id_peca'];

	echo '<br> id_produto ->'; echo $id_produto;
	echo '<br> id_peca ->'; echo $id_peca;
	echo '<br> id_carrinho ->'; echo $id_carrinho;
?>