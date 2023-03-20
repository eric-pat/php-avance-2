<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>
<form action="thanks.php" method="post">
	<div>
		<label for="lastname">Nom :</label>
		<input type="text" id="lastname" name="lastname" required>
	</div>
	<div>
		<label for="firstname">Prénom :</label>
		<input type="text" id="firstname" name="firstname" required>
	</div>
	<div>
		<label for="email">Email :</label>
		<input type="email" id="email" name="email" required>
	</div>
	<div>
		<label for="phone">Téléphone :</label>
		<input type="tel" id="phone" name="phone" required>
	</div>
	<div>
		<label for="subject">Sujet :</label>
		<select id="subject" name="subject">
			<option>Problème Php</option>
			<option>Envie d'écrire</option>
			<option>Solution pour rien</option>
			<option>Pas envie de dire</option>
			<option>Exercice formulaire</option>
		</select>
	</div>
	<div>
		<label for="message">Message :</label>
		<textarea id="message" name="message" required></textarea>
	</div>
	<div class="button">
		<button type="submit" name="submit">Envoyer votre message</button>
	</div>

</form>
</body>
</html>
