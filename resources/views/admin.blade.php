@extends('layouts.master')

@section('content')






<section id="private_navig">
		<div id="section_admin">
			<div id="tabs-3">
				<h3>Gestion droits/classes</h3>
				<p>A posuere donec Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
			</div>
			
<table>
<?php
    echo '<tr><th></th>';
    foreach($rights as $right) {
        echo '<th>' . $right . '</th>';
    }
    echo '</tr>';
    foreach ($jobs as $job){
        echo '<tr>';
        foreach($job as $aa){
            echo '<td>' . $aa . '</td>';
        }
        echo '</tr>';
    }
?>
</table>
			
			
			<table class="admin">
					<tr>
					
						<th>Droits\Classes</th>
						<th>Trésorie</th>
						<th>Présidence</th>
						<th>Sécretariat</th>
						<th>Qualité</th>
						<th>Communication</th>
						<th>Prospection</th>
					</tr>
					<tr> <!-- Tr c'est la ligne et TD c'est les colonnes-->
						<td>Droit 1</td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
					</tr>
					<tr>
						<td>Droit 2</td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
					</tr>
					<tr>
						<td>Droit 3</td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						</tr>
					<tr>
						<td>Droit 4</td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						
					</tr>
					<tr>
						<td>Droit 5</td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
					</tr>
				</table>

				<table class="admin2">
					<tr>
					
						<th>Inscrits\Classes</th>
						<th>Trésorie</th>
						<th>Présidence</th>
						<th>Sécretariat</th>
						<th>Qualité</th>
						<th>Communication</th>
						<th>Prospection</th>
					</tr>
					<tr> <!-- Tr c'est la ligne et TD c'est les colonnes-->
						<td>Nom 1</td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
					</tr>
					<tr>
						<td>Nom 2</td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
					</tr>
					<tr>
						<td>Nom 3</td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						</tr>
					<tr>
						<td>Nom 4</td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						
					</tr>
					<tr>
						<td>Nom 5</td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
						<td><input type="checkbox" name="num_lignei" value="1"></td>
					</tr>
				</table>
				
				<img class="add_user" src="ressources/add_user.png" alt="Nouveau !" />
		</div>
		
		
	</div>


</section>

@stop

