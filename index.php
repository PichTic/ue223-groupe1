<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Réalisation d’un dictionnaire multi-langues - Groupe 1</title>
</head>
<body>
	<p>
		<strong>UE 223 - Mini-projet</strong><br/>
		<table>
			<tr>
				<td><strong>Nom</strong></td>
				<td><strong>Prenom</strong></td>
			</tr>
			<tr>
				<td>Da Silva</td>
				<td>Raphael</td>
			</tr>
			<tr>
				<td>Latouille</td>
				<td>Melissa</td>
			</tr>
			<tr>
				<td>Lombardi</td>
				<td>Marion</td>
			</tr>
			<tr>
				<td>Pichot</td>
				<td>Vincent</td>
			</tr>
			<tr>
				<td>Suarez</td>
				<td>Maxime</td>
			</tr>
		</table>
	</p>
  <fieldset>
  	<legend>Traduire un terme</legend>
  	<form id="formTraduire" method="POST">
  		<label>Texte à traduire : </label>
  		<input type="text" name=""/>

  		<input type="submit" name="boutonTraduire" value="Traduire" />

  		<div id="resultat_traduction">
  			<p>Traduction : <br>
	  			Anglais : <span id="tradEN"></span><br>
	  			Espagnol : <span id="tradES"></span><br>
	  			Français : <span id="tradFR"></span><br>
  			</p>
  		</div>
  		
  	</form>
  </fieldset>

  <fieldset>
  	<legend>Ajouter un terme dans la base de données</legend>
  	<form id="formAjouter" method="POST">
  		<label>Mot en Français : </label>
  		<input type="text" name="ajoutFR"/>
  		<label>Mot en Anglais : </label>
  		<input type="text" name="ajoutEN"/>
  		<label>Mot en Espagnol : </label>
  		<input type="text" name="ajoutES"/>

  		<input type="submit" name="boutonAjouter" value="Ajouter">
  	</form>
  </fieldset>
</body>
</html>