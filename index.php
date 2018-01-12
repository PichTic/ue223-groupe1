<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="./plugin/jquery.flexdatalist.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Réalisation d’un dictionnaire multi-langues - Groupe 1</title>
</head>

<body>
	<div class="container">
	<div class="row">
		<h4>UE 223 - Mini-projet</h4>
		<ul>
			<li>Da Silva Raphael</li>
			<li>Latouille Melissa</li>
			<li>Lombardi Marion</li>
			<li>Vincent Pichot</li>
			<li>Suarez Maxime</li>
		</ul>
	</div>
	<div class="row">
	  	<fieldset>
	  		<legend>Traduction</legend>
	  		<form>
				<p>Traduire de :
					<select name="from" id="from">
						<option value="FR">Français</option>
						<option value="EN">Anglais</option>
						<option value="ES">Espagnol</option>
					</select>
					En :
					<select name="to" id="to">
						<option value="FR">Français</option>
						<option value="EN">Anglais</option>
						<option value="ES">Espagnol</option>
					</select>
				</p>

				<label>Votre mot :</label>
				<input type="text" name="mot" id="mot" class="flexdatalist">
				<button type="submit" name="get_Trad" id="get_Trad">Traduire</button>

				<label>Résultat</label>
				<input type="text" name="trad" id="trad" disabled>
			</form>
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
				
				<div id="retourAjout"></div>
			</form>
		</fieldset>
	</div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="./plugin/jquery.flexdatalist.min.js"></script>
	<script src="./utils.js"></script>
	<script src="./ajout_Trad.js"></script>
	<script src="./get_Trad.js"></script>
	<script src="./search_Trad.js"></script>
</body>
</html>