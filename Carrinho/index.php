<?php
session_start();

include('../funcoes.php');
$conexao = conexao();

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Carrinho</title>
	<link type="text/css" rel="stylesheet" href="../style.css"> 
</head>

<body>
	<div class="body">
		<div class="header">
			<div></div>
			<a class="logo" href="../index.php"><img class="logo" src="../imagens/logo.png"></a>
			<div class="nav">
				<a href="../index.php">Home</a>
				<a href="../Catálogo/index.php">Catálogo</a>
				<a href="index.php" style="margin-right: 170px">Carrinho</a>
			</div>
		</div>
		<hr style="width: 100%; height: 4px; background-color: #dcdcdc">
		
		<h2 class="h2" style="font-weight: normal; font-size: 35px; margin-top: 30px; margin-bottom: 70px">Carrinho</h2>
<?php
		
	$consulta_sql = mysqli_query($conexao, "SELECT * FROM carrinho_peca, produto, peca WHERE peca.id_peca = carrinho_peca.id_peca AND peca.id_produto = produto.id_produto") or die(mysqli_error($conexao));
	
	while($auxiliar = mysqli_fetch_assoc($consulta_sql))
	{
		
		$nome = $auxiliar['nome'];
		$preco = $auxiliar['preco'];
		$imagem_url = $auxiliar['imagem_url'];
		$imagem_hover_url = $auxiliar['imagem_hover_url'];
		
		$id_peca = $auxiliar['id_peca'];
		$id_produto = $auxiliar['id_produto'];
		$id_carrinho = $auxiliar['id_carrinho'];

		/*
		echo '<br> Nome -> ' . $nome; 
		echo '<br> Preço -> ' . $preco; 
		echo '<br> Imagem -> ' . $imagem_url;
		echo '<br> Imagem Hover -> ' . $imagem_hover_url; 
		echo '<br> id_peça -> ' . $id_peca; 
		echo '<br> id_produto -> ' . $id_produto; 
		echo '<br> id_carrinho -> ' . $id_carrinho; 
		*/
		
?>		
	<hr style="width: 60%; color: #dcdcdc; margin: 50px 120px">
	<div style="margin: 20px 170px" class="carrinho">		
		<div class="img-hover" style="width: 200px">
			<img src="<?php echo $imagem_url ?>">
			<img class="img-hovered" src="<?php echo $imagem_hover_url ?>"><br>
		</div>
		<div style="margin-top: 60px">
			<h3 style="margin-left: 10px; font-size: 20px;"><?php echo $nome ?></h3>
			<p style="margin-left: 10px; margin-top: 2px; font-size: 20px"><?php echo $preco ?>&nbsp;€</p>
			<form action="funcao-remover-peca.php" method="POST">
				<input type="hidden" name="id_produto" value="<?php echo $id_produto; ?>">
				<input type="hidden" name="id_carrinho" value="<?php echo $id_carrinho; ?>">
				<input type="hidden" name="id_carrinho" value="<?php echo $id_peca; ?>">
				<button id="addCart" type="submit" class="buttoncart" style="margin-top: 80px; margin-left: 270px">
						Remover do carrinho
				</button>
			</form>
		</div>
	</div>	
		
	
<?php
	}
?>	
		<hr style="width: 100%; height: 4px; background-color: #dcdcdc">
		<div class="footer">
			<div></div>
			<div class="footer1">
				<span style="text-decoration: underline">Redes</span> <br>
				<a href="https://www.instagram.com/ucantbelikeme888/" target="_blank">https://www.instagram.com/ucantbelikeme888/</a><br>
			</div>
			<a href="index.php"><img class="logo1" src="../imagens/logo.png"></a>
			<div class="footer2">
				<span style="text-decoration: underline">Links</span> <br>
				<a href="../Catálogo/index.php">Catálogo</a><br>
				<a href="index.php">Carrinho</a>
			</div>
			<div></div>
		</div>
	</div>
</body>
</html>