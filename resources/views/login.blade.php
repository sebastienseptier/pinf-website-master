@extends('layouts.master')

@section('content')
    <div id="login_picture"><h2 class="about_title">Connection pour les membres de MindUp</h2></div>

    <section id="connection_field">
        <form method="POST">
	        <label for="txtLogin" class="info">Mail : </label><input class="connection_input" type="text" name="email" value="" /> <br/><br/>
	        <label class="info">Mot de Passe: </label><input class="connection_input" type="password" name="password" value="" /> <br/><br/>
	        <label class="info"></label><input class="connection_btn" type="submit" name="valider" value="Se connecter" /> <br/><br/><br/>
	        
	        <input type="hidden" name="_token" value="{{ csrf_token() }}">
	        
        </form>
    </section>
@stop

