<?php
  include("../bibliotecas/FuncoesGerais.php");
  $FuncoesGerais = new FUNCOESGERAIS();
  $FuncoesGerais->verificaSessao();
  echo "suporte:".$_SESSION['usuarioId'];

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $tituloPagina ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../front/css/main.css" />
	</head>
	<body class="is-preload">
			<header id="header">
				<a class="logo" href="#"></a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>
			<nav id="menu">
				<ul class="links">
					<li><a href="../chamados/index.php">Chamados</a></li>
					<li><a href="../duvidas/index.php">FAQ</a></li>
					<li><a href="../clientes/perfil.php">Perfil</a></li>
					<li><a href="../index.php">Log Out</a></li>
				</ul>
			</nav>