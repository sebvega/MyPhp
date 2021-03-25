<?php require_once 'includes/header.php';?>
<?php require_once 'includes/barraLateral.php'; ?>
<?php require_once 'includes/helpers.php'; ?>

<!-- contenido principal -->
<div id="principal">
	<h1>ultimas entradas</h1>

	<?php 
			$entradas=conseguirultent($conexion);
			if (!empty($entradas)):
			while ($entrada=mysqli_fetch_assoc($entradas)): ?>


	<article class="entrada">
		<a href="">
			<h2><?=$entrada['titulo'] ?> </h2>
			<p>
				<?=substr($entrada['descripcion'],0,300).'...'  ?> 
			</p>
		</a>
	</article>


	<?php 
	endwhile;
	endif;
	?>
	
	<div id="ver-todas">
		<a href="">ver todas las entradas</a>
	</div>
</div><!-- fin principal -->

<?php require_once 'includes/foot.php'; ?>