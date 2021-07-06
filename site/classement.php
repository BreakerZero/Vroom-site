<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Content-Type"/>
	<title>Vroom</title>
	<link rel="icon" type="image/png" href="../img/favicon.png"/>
    <meta name="description" content="Téléchargez Vroom, c'est inclus avec votre code en ligne!">
    <meta name="viewport" content="width=device-width">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/classement.css">
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container-fluid">
        
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
          </button>
          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav m-auto">
                <li class="nav-item"><a href="../index.php" class="nav-link">Accueil</a></li>
                <li class="nav-item"><a href="../site/demo.php" class="nav-link">Démonstration</a></li>
                <li class="nav-item"><a href="../site/rules.php" class="nav-link">Règles & Fonctionnement</a></li>
                <li class="nav-item"><a href="../site/download.php" class="nav-link">Téléchargement</a></li>
                <li class="nav-item active"><a href="../site/classement.php" class="nav-link">Classement</a></li>
                <li class="nav-item"><a href="../site/question-and-contact.php" class="nav-link">Questions Fréquentes & Contact</a></li>
            </ul>
          </div>
        </div>
        </nav>
        <br>
        <hr>
    </header>
    <h1>Classement des 25 meilleurs joueurs, félicitations à vous !</h1>
    <br>
    <br>
    <main>
    <?php
    $n=0;
    try 
    {
    	$bdd = new PDO('mysql:host=localhost;dbname=PFA;charset=utf8', 'root', 'root');	
    }
    catch (Exception $e)
    {
           die('Erreur : ' . $e->getMessage());	
    }
	$reponse = $bdd->query('SELECT * FROM classement ORDER BY Score_Examen DESC LIMIT 0,25');
	echo "<table class=\"classement\" cellspacing=\"0\" cellpadding=\"0\">";
	echo "<thead><tr><td>Place</td><td>Pseudo</td><td>Score</td></thead>";
	while ($donnees = $reponse->fetch())
	{
	$n++;
	echo "<tr><td>";
	if ($n < 6)
	{
	echo "<img src=\"../img/place". $n .".jpg\" alt=\"Place\">";
	}
	else{
	echo $n;	
	}
	echo "</td>";
	echo "<td>";
	echo $donnees['Pseudo_Apprenti'];
	echo "</td>";
	echo "<td>";
	echo $donnees['Score_Examen'];
	echo "</td>";
	echo "</tr>";
	}
	echo "</table>";
	?>
    </main>
</body>
</html>