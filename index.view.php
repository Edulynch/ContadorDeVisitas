<!--
* @author = Eduardo Lynch Araya
* @twitter = twitter.com/Edulynch
* @github = https://github.com/Edulynch
* Contador de Visitas:
* Cada IP nueva es una visita.
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contador de Visitas</title>
</head>
<body align="center">
		<br />
		<br />
		<pre><h1>Su Direccion IP es:</h1></pre>
		<pre><h2><?php echo $ip_user; ?></h2></pre>
		<pre><h1>Numero de Visitas:</h1></pre>
		<pre><h2><?php echo $numeroDeVisitas ?></h2></pre>
</body>
</html>