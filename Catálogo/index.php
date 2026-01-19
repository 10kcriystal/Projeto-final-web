<?php
include('../funcoes.php');
$conexao = conexao();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Catálogo</title>
	<link type="text/css" rel="stylesheet" href="../style.css">
</head>

<body>
	<div class="body">
		<div class="header">
			<div></div>
			<a class="logo" href="../index.php"><img class="logo" src="../imagens/logo.png"></a>
			<div class="nav">
				<a href="../index.php">Home</a>
				<a href="index.php">Catálogo</a>
				<a href="../Carrinho/index.php" style="margin-right: 170px">Carrinho</a>
			</div>
		</div>
		<hr style="width: 100%; height: 4px; background-color: #dcdcdc">
		
		<h2 class="h2" style="font-weight: normal; font-size: 35px; margin-top: 30px">Catálogo</h2>
		
		<div class="container">
<?php

	$consulta_sql = mysqli_query($conexao, "SELECT * FROM produto") or die(mysqli_error($conexao));
	
	while($auxiliar = mysqli_fetch_assoc($consulta_sql))
	{
		$id_produto = $auxiliar['id_produto'];
		$nome = $auxiliar['nome'];
		$preco = $auxiliar['preco'];
		$imagem_url = $auxiliar['imagem_url'];
		$imagem_hover_url = $auxiliar['imagem_hover_url'];

?>		
		
			<div class="img-hover">
				<a href="../Produto/index.php?id_produto=<?php echo $id_produto?>"><img src="<?php echo $imagem_url ?>"></a>
				<a href="../Produto/index.php?id_produto=<?php echo $id_produto?>"><img class="img-hovered" src="<?php echo $imagem_hover_url ?>"></a><br>
				<a href="../Produto/index.php?id_produto=<?php echo $id_produto?>"><h3 style="margin-left: 10px;"><?php echo $nome ?></h3></a>
				<a href="../Produto/index.php?id_produto=<?php echo $id_produto?>"><p style="margin-left: 10px; margin-top: 2px; font-size: 17px"><?php echo $preco ?>&nbsp;€</p></a>
			</div>
<?php
	}
?>	
		</div>
		
		<hr style="width: 100%; height: 4px; background-color: #dcdcdc">
		<div class="footer">
			<div></div>
			<div class="footer1">
				<span style="text-decoration: underline">Redes</span> <br>
				<a href="https://www.instagram.com/ucantbelikeme888/" target="_blank">https://www.instagram.com/ucantbelikeme888/</a><br>
			</div>
			<a href="../index.php"><img class="logo1" src="../imagens/logo.png"></a>
			<div class="footer2">
				<span style="text-decoration: underline">Links</span> <br>
				<a href="index.php">Catálogo</a><br>
				<a href="../Carrinho/index.php">Carrinho</a>
			</div>
			<div></div>
		</div>
</body>
</html>