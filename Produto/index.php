<?php
include('../funcoes.php');
$conexao = conexao();

session_start();
$id_sessao = session_id();

$insert_sessao="INSERT INTO carrinho (id_sessao) VALUES ('$id_sessao');";

/*echo '<br>'; echo $insert_sessao;*/
	
$inserirbd = mysqli_query($conexao, $insert_sessao);

$consultaBD="SELECT * FROM carrinho";
	
		$pesquisa = mysqli_query($conexao, $consultaBD);
	
		$auxiliar=mysqli_fetch_array($pesquisa); 
		
		$id_carrinho = $auxiliar['id_carrinho'];

?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Produto</title>
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
				<a href="../Carrinho/index.php" style="margin-right: 170px">Carrinho</a>
			</div>
		</div>
		<hr style="width: 100%; height: 4px; background-color: #dcdcdc">
		<?php
	
		$id_produto=$_GET['id_produto'];
		
	
		$consultaBD="SELECT * FROM produto WHERE id_produto=$id_produto";
	
		$pesquisa = mysqli_query($conexao, $consultaBD);
	
		$auxiliar=mysqli_fetch_array($pesquisa); 
		
		$id_produto = $auxiliar['id_produto'];
		$nome = $auxiliar['nome'];
		$preco = $auxiliar['preco'];
		$imagem_url = $auxiliar['imagem_url'];
		$imagem_hover_url = $auxiliar['imagem_hover_url'];
		$look2 = $auxiliar['look2'];
		$look3 = $auxiliar['look3'];
		$look4 = $auxiliar['look4'];
	
	?>
		<div class="pagina">
			<div class="selecao">
				<img class="zoom-img" src="<?php echo $imagem_hover_url ?>">
				<img class="zoom-img" src="<?php echo $look2 ?>">
				<img class="zoom-img" src="<?php echo $look3 ?>">
				<img class="zoom-img" src="<?php echo $look4 ?>">
			</div>	
			
			<script>
			document.querySelectorAll('.zoom-img').forEach(img => {
				img.addEventListener('click', function () {

					if (this.classList.contains('zoomed')) {
						this.classList.remove('zoomed');
						return;
					}

					this.classList.add('zoomed');
				});
			});
			</script>
			
			<div class="info">
				<p style="font-size: 30px"><?php echo $nome ?></p> <br>
				<p style="font-size: 20px; margin-top: 2px"><?php echo $preco ?>&nbsp;€</p>

				<form id="formCarrinho" action="../Carrinho/funcao-inserir-peca.php" method="POST">
					<input type="hidden" name="id_produto" value="<?php echo $id_produto; ?>">
					<input type="hidden" name="id_carrinho" value="<?php echo $id_carrinho; ?>">
					<select id="tamanho" name="tamanho">
						<option value="">Size</option>
						<?php
				$consultaSQl = "SELECT tamanho FROM tamanho;";
					$sql = mysqli_query($conexao, $consultaSQl); 
					
				while($linha = mysqli_fetch_assoc($sql)) 
					{	
				?>
				<option value="<?php echo $linha['tamanho']; ?>"><?php echo $linha['tamanho']; ?></option>
				
				<?php
					}
				?>
					</select>
					<br>
					<button id="addCart" type="submit" class="buttoncart">
						Adicionar ao carrinho
					</button>
				</form>

				<script>
				const tamanho = document.getElementById("tamanho");
				const form = document.getElementById("formCarrinho");

				form.addEventListener("submit", (e) => {
					if (tamanho.value === "") {
						e.preventDefault(); 
						alert("Selecione um tamanho se quiser adicionar este item ao carrinho!");
					}
				});
				</script>
			</div>
		</div>
		
		<p style="text-align: center; font-size: 25px; text-decoration: overline; text-decoration: underline;">Sugestões</p>
		<div class="sugestoes">
			<?php

				$consulta_sql = mysqli_query($conexao, "SELECT * FROM produto ORDER BY RAND() LIMIT 5") or die(mysqli_error($conexao));

				while($auxiliar = mysqli_fetch_assoc($consulta_sql))
				{
					$id_produto = $auxiliar['id_produto'];
					$nome = $auxiliar['nome'];
					$preco = $auxiliar['preco'];
					$imagem_url = $auxiliar['imagem_url'];
					$imagem_hover_url = $auxiliar['imagem_hover_url'];

			?>		

						<div class="img-hover">
							<a href="../Produto/index.php?id_produto=<?php echo $id_produto?>"><img style="width: 200px;" src="<?php echo $imagem_url ?>"></a>
							<a href="../Produto/index.php?id_produto=<?php echo $id_produto?>"><p style="margin-left: 10px; margin-top: 7px"><?php echo $nome ?></p></a>
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
				<a href="../Catálogo/index.php">Catálogo</a><br>
				<a href="../Carrinho/index.php">Carrinho</a>
			</div>
			<div></div>
		</div>
</body>
</html>