@extends('layouts.master')

@section('content')
<!--
<section id="data">
	<h2 class="data_title">Modification des données du site.</h2>
	<div id="accordion">
		<h3>Page d'accueil</h3>
		<ul>
			<li><h2>Paragraphe I.1</h2><textarea>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</textarea></li>
			<li><h2>Paragraphe I.2</h2><textarea>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</textarea></li>
		</ul>
		<h3>Page projets</h3>
		<ul>
			<li><h2>Paragraphe I.1</h2><textarea>Phasellus mattis tincidunt nibh.</textarea></li>
			<li><h2>Paragraphe I.2</h2><textarea>Phasellus mattis tincidunt nibh. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</textarea></li>
		</ul>
		<h3>Page membres</h3>
		<ul>
			<li><h2>Paragraphe I.1</h2><textarea>Nam dui erat, auctor a, dignissim quis.</textarea></li>
			<li><h2>Paragraphe I.2</h2><textarea>Nam dui erat, auctor a, dignissim quis. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</textarea></li>
		</ul>
	</div>
	<script type="text/javascript">
		/* Génération de l'interface "accordion" de jquery-ui*/
		$( "#accordion" ).accordion();
	</script>
</section>
-->

<section id="data">
     <table style="width:100%">
     <?php
        foreach ($texts as $text){
            echo'
                <tr>
                    <td>'.$text['textId'].'</td>
                    <td><textarea>'.$text['french'].'</textarea></td>
                </tr>
            ';
        }
     ?>
    </table> 
</section>

@stop

