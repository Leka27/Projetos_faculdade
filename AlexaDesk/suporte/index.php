<?php
  include_once('menu.php');
  $tituloPagina = "Pagina inicial";
?>
	<section class="wrapper"  style='margin-left:10%;'>
		<div class="inner">
			<header class="special">
				<h2>Bem vindo Suporte <?php echo $_SESSION['suporte_nome']; ?></h2>
				<p>Por favor desfrute das funcionalidades do nosso sistema.</p>
			</header>
		</div>
	</section>
			
<?php
  include_once('../rodape.php');
?>