<!DOCTYPE html>
<html>
<head>
	<title>Reservas de Hotel</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="script.js"></script>
</head>
<body>
	<header>
		<h1>Reservas de Hotel</h1>
		<?php echo '<p> aijdsioasjdasio </p>'; ?>
	</header>
	<main>
		<form>
			<label for="check-in">Check-in:</label>
			<input type="date" id="check-in">
			<label for="check-out">Check-out:</label>
			<input type="date" id="check-out">
			<label for="num-quartos">Número de Quartos:</label>
			<input type="number" id="num-quartos" min="1" max="10">
			<button type="submit" id="search-button">Pesquisar</button>
		</form>
		<div id="results"></div>
	</main>
	<footer>
		<p>&copy; 2023 Reservas de Hotel</p>
	</footer>
</body>
</html>