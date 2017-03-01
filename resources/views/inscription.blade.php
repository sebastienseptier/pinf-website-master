
<!--
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Inscription utilisateur</title>
	<link rel="stylesheet" type="text/css" href="js/jquery-ui-1.11.4/jquery-ui.css" rel="stylesheet" media="all"/>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css" media="all"/>
	<script src="js/jquery-1.11.3.js"></script>
	<script src="js/jquery-ui-1.11.4/jquery-ui.js"></script>
	<script src="js/functions.js"></script>
</head>

<header id="header">
	<a href="index.php" id="header_input">Deconnexion</a>
	<div class="header_block">
		<nav>
			<ul>
				<li><img id="header_logo" src="ressources/logo.png"/></li>
				<li><a href="index.php">Accueil</a></li>
				<li><a href="projets.php">Projets</a></li>
				<li><a href="membres.php">Notre Equipe</a></li>
			</ul>
		</nav>
	</div>
</header>

<body> 
-->


﻿@extends('layouts.master')

@section('content')


<div id="signUp_picture"></div>

<section id="signUp_field">
		
	<form action="" method="POST">
		<label class="info3">Inscription d'un nouveau collaborateur </label> <br/> <br/>
		<!-- Ensemble de champs -->
		<label class="info2">Adresse mail: </label><input class="signUp_input" name="email" value="" /> <br/>
		<label class="info2">Nom: </label><input class="signUp_input" name="name" value="" /> <br/>
		<label class="info2">Prenom: </label><input class="signUp_input" name="firstname" value="" /> <br/>
		<label class="info2">Mot de passe: </label><input class="connection_input" type="password" name="password" value="" /> <br/>
		<label class="info2">Confirmation Mot de passe: </label><input class="connection_input" type="password" name="password2" value="" /> <br/>
		<label class="info2">Poste exercé: </label> 
		<select id="selectmenu">
			<option selected="selected">Membre</option>
			<option>Secretaire</option>
			<option>Chargé d'affaires</option>
			<option>Président</option>
			<option>Chargé de communication</option>
			<option>Trésorier / Vice Trésorier</option>
		</select> <br/> <br/>
		<label class="info4">Documents joints </label> <br/>
		<div class="SignUp_documents">
			<input type="file" name="nom" />

		</div>
		<div class="SignUp_documents_buttons">
		<input class="signUp_btn2" type="button" name="addDocs" value="Ajouter" />
		<input class="signUp_btn2" type="button" name="removeDocs" value="Supprimer la selection" /> <br/>
		</div>
		<label class="info2">Clés du bureau: </label> <input name="cles" type="checkbox"> <br/>
		<label class="info2"></label><input class="signUp_btn" type="submit" name="valider" value="Valider" /> <br/><br/><br/>
		
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		
	</form>
</section>

@stop
<!--
<footer id="footer">
	<div id="footer_container">
		<h5>Copyright© 2015-2016 Web2i. All Rights Reserved.</h5>
	</div>
</footer>
<script>
/* Génération de la barre de navigation privée */
$("#tabs").tabs();
</script>
</body>
</html>
-->

