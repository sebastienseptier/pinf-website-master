@extends('layouts.master')

@section('content')

<section id="content">
	<h2 class="content_title">L'ensemble de nos projets.</h2>

	<!-- Affiche les infos de chaque projet -->
    <?php 
    if(isset($projects))
    	print_r($projects);
    ?>

	<!-- Partie provisoire pour générer une galerie "test" -->

	<?php for($i=0;$i<10;$i++): ?>
		<a class="element" style="<?php if($i%3 == 1){ echo 'width=60%;'; }else if($i%3 == 0){ echo 'width: 40%;';} else{ echo 'width=50%;'; }?>" href="#">
			<span class="title">Titre</span>
			<span class="desc">Ici une petite description <p>A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
			<p>A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>	
			<p>Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
		<</span>
			<span class="bg"></span>
			<img  src="ressources/galerie_projets/projet<?php echo $i%3; ?>.jpg" alt="" />
		</a>
	<?php endfor; ?>
	
</section>

@stop
