<?php require_once 'includes/header.php';?>
<?php require_once 'includes/barraLateral.php'; ?>
<?php require_once 'includes/helpers.php'; ?>

<!-- contenido principal -->
<div id="principal">
	<h1> </h1>

	<?php 
			$entradas=conseguirent($conexion);
			if (!empty($entradas)):
			while ($entrada=mysqli_fetch_assoc($entradas)): ?>


	<article class="entrada">
		<a href="entrada.php?id=<?=$entrada['id']?>">
			<h2><?=$entrada['titulo'] ?> </h2>
			<span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha']  ?> </span>
			<p>
				<?=substr($entrada['descripcion'],0,300).'...'  ?> 
			</p>
		</a>
	</article>


	<?php 
	endwhile;
	endif;
	?>
	

</div><!-- fin principal -->

<?php require_once 'includes/foot.php'; ?>