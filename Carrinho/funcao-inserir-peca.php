<?php
	include('../funcoes.php');
	$conexao = conexao(); 

	$tamanho=$_POST['tamanho'];
	$id_produto=$_POST['id_produto'];
	$id_carrinho=$_POST['id_carrinho'];

	/*echo '<br> Tamanho ->'; echo $tamanho;
	echo '<br> Produto ->'; echo $id_produto;
	echo '<br> Carrinho ->'; echo $id_carrinho;*/

$insert_peca = "
INSERT IGNORE INTO carrinho_peca (id_carrinho, id_peca)
SELECT $id_carrinho, id_peca
FROM peca, tamanho, carrinho
WHERE peca.id_produto = '$id_produto'
  AND peca.id_tamanho = tamanho.id_tamanho
  AND tamanho = '$tamanho'
";

/*echo '<br>'; echo $insert_peca;*/

$inserirbd = mysqli_query($conexao, $insert_peca);

if ($inserirbd) 
{
	redireciona(
    "../Carrinho/index.php?id_produto=$id_produto&id_carrinho=$id_carrinho&tamanho=$tamanho",
    "",
    0
);
}
else 
{
	echo"<script> alert(\"Produto não disponível!\") </script>";
	redireciona("../Catálogo/index.php", "", 0);
}

?>
