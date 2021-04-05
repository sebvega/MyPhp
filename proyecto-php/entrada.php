<<<<<<< HEAD
<?php require_once 'includes/conexion.php' ?>
<?php require_once 'includes/helpers.php'; ?>
<?php 
	$entradaact=conseguirentrada($conexion,$_GET['id']); 
	if (!isset($entradaact['id'])) {
		header('Location: index.php');
	}

?>
<?php require_once 'includes/header.php';?>
<?php require_once 'includes/barraLateral.php'; ?>

<!-- contenido principal -->
<div id="principal">
	<h1><?=$entradaact['titulo']?> </h1>
<a href="categoria.php?id=$entradaact['categoria_id']  ?> "><h2><?=$entradaact['categoria']?></h2></a>

	<h4><?=$entradaact['fecha']?> | <?=$entradaact['creador']?></h4>
	<p><?=$entradaact['descripcion']?></p>




<?php if ($_SESSION['usuario']['id']=$entradaact['artista']): ?>
	<a href="./editar-entrada.php?id=<?=$entradaact['id']?>" class="boton boton-naranja" >Editar entrada</a>
	<a href="./borrar-entrada.php?id=<?=$entradaact['id']?>" class="boton boton-verde" >Borrar entrada</a>
<?php endif;?>
</div><!-- fin principal -->

<?php require_once 'includes/foot.php'; ?>
=======
<?php require_once 'includes/conexion.php' ?>
<?php require_once 'includes/helpers.php'; ?>
<?php 
	$entradaact=conseguirentrada($conexion,$_GET['id']); 
	if (!isset($entradaact['id'])) {
		cheader('Location: index.php');
	}
?>
<?php require_once 'includes/header.php';?>
<?php require_once 'includes/barraLateral.php'; ?>

<!-- contenido principal -->
<div id="principal">
	<h1><?=$entradaact['titulo']?> </h1>
<a href="categoria.php?id=$entradaact['categoria_id']  ?> "><h2><?=$entradaact['categoria']?></h2></a>
	
	<h4><?=$entradaact['fecha']?></h4>
	<p><?=$entradaact['descripcion']?></p>

</div><!-- fin principal -->

<?php require_once 'includes/foot.php'; ?>
>>>>>>> 9dcfc0f53dddc2d9b6f1b5e478bd6db18ffe2428
