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
		<legend>Traduction</legend>
		<p>Traduire de :
			<select>
				<option value="mot_FR">Français</option>
				<option value="mot_EN">Anglais</option>
				<option value="mot_EN">Espagnole</option>
			</select>
			En :
			<select>
				<option value="trad_FR">Français</option>
				<option value="trad_EN">Anglais</option>
				<option value="trad_ES">Espagnole</option>
			</select>
		</p>
		<label>Votre mot :</label>
		<input type="text" name="mot" id="mot">
		<button type="submit">Traduire</button>
		<label>Résultat</label>
		<input type="text" name="trad" id="trad" disabled>
  </fieldset>

  <fieldset>
  	<legend>Ajouter un terme dans la base de données</legend>
  	<form id="formAjouter" method="POST">
  		<label>Mot en Français : </label>
  		<input type="text" name="ajout_FR" id="ajout_FR"/>
  		<label>Mot en Anglais : </label>
  		<input type="text" name="ajout_EN" id="ajout_EN"/>
  		<label>Mot en Espagnol : </label>
  		<input type="text" name="ajout_ES" id="ajout_ES"/>
  		<button type="button" name="ajout_Trad" id="ajout_Trad">Ajouter</button>
		</form>
		<div id="retourAjout"></div>
	</fieldset>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="./utils.js"></script>
	<script src="./ajout_Trad.js"></script>
</body>
</html>