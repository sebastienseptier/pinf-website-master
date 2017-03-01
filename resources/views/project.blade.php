@extends('layouts.master')

@section('content')

<?php print_r($project) ?>

<div class="apropos_popup">
	<h4>A propos de ce site.</h4>
	<p>Cette page a été développée par l'équipe <bold>Web2i</bold></p>	
	<a class="apropos_input">Ok</a>
</div>

<section class="profil_content"><img class="profil_image" src="ressources/profil.jpeg" />

	<ul>
		<li><h2>Nom Prénom</h2></li>
		<li><h3>Rôle</h3></li>
		<li><h3>Adresse mail</h3></li>
		<li><h3>Numéro</h3></li>
		<span class="ui-icon ui-icon-key"></span>
	</ul>
	
	<h3 class="profil_title">Presentation</h3>
	<p>A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
	<p>A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>	
	<p>Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
<br/><br/><br/>
	<div class="profil_projects">
		<img  src="ressources/galerie_projets/projet0.jpg" alt="" />
		<img  src="ressources/galerie_projets/projet1.jpg" alt="" />
		<img  src="ressources/galerie_projets/projet2.jpg" alt="" />
	</div>

</section>
@stop
