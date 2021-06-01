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
    <link rel="stylesheet" href="../css/question.css">
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
                <li class="nav-item"><a href="../site/classement.php" class="nav-link">Classement</a></li>
                <li class="nav-item active"><a href="../site/question-and-contact.php" class="nav-link">Questions Fréquentes & Contact</a></li>
            </ul>
          </div>
        </div>
        </nav>
        <br>
        <hr>
    </header>
    <main>
    <div class="allquestion">
    <div class="question">
    <h2>Comment se déroule l'installation ?</h2>
    <p>Il n'y en réalité pas d'installation, le programme ne se compose que d'un seul executable (.exe) et fonctionne tel quel.<br> Il est à rapprocher de que l'on appelle une version "portable" d'une application. Il n'y a donc aucun souci à vous faire si vous voyez Vroom se lancer immédiatement!
    </p>
    <br>
    </div>
    <div class="question">
    <h2>Je n'ai qu'un petit ordinateur portable, puis-je tout de même utiliser votre programme ?</h2>
    <p>Vroom est conçu de façon a fonctionner chez le plus grand nombre, le but étant après tout que chacun puisse réussir son examen de code.<br>
    L'application pourra donc très bien fonctionner sur les "petites config".
    </p>
    <br>
    </div>
    <div class="question">
    <h2>Comment est calculé mon score ?</h2>
    <p>Hé bien tout dépend de la situation dans laquelle vous vous trouverez. Sachez qu'au départ, vous partirez avec le maximum de point, puis le jeu vous en enlèvera en fonction de vos erreurs.<br>
    Le nombre de points retirés dépend de la gravité de l'erreur : dites vous bien que oublier un clignotant ou griller un stop n'a pas la gravité dans la vraie vie!<br>
    C'est exactement pareil dans Vroom.
    </p>
    <br>
    </div>
    <div class="question">
    <h2>Suis-je obligé(e) de partager mon score ?</h2>
    <p>Il n'y a rien d'obligatoire, rassurez-vous. Vroom vous demanderas si vous souhaitez le faire ou non à la fin d'une série de mises en situation.<br>
    Si vous ne le souhaitez pas mettez simplement non et nous le recevrons rien.<br>Il est cependant à noter que la publication de votre score nous aide à savoir où sont les difficultés pour les joueurs,<br>
    et donc de pouvoir fournir de nouvelles mise en situations plus à même de vous aider dans votre apprentissage.
    </p>
    <br>
    </div>
    <div class="question">
    <h2>J'ai besoin de vous contacter !</h2>
    <p>Pour ça, rien de plus simple! Et en plus, vous avez l'ambarra du choix.<br>Vous pourrez retrouvez ci-dessus un formulaire pour nous demandez tout ce que vous avez envie.<br> Nous sommes aussi joignable par mail à l'addresse <a href="mailto:learningdrive.esi@gmail.com">learningdrive.esi@gmail.com</a> ainsi que sur les réseau sociaux notament <a href="https://facebook.com">Facebook</a> et <a href="https://twitter.com">Twitter</a>.
    </p>
    <br>
    </div>
    <hr>
    <div class="contact">
  	<form method="post">
        <label>Nom ou Pseudo:</label>
        <input type="text" name="nom" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Sujet:</label>
        <select id="subject" name="subject" required>
    		<option value="fonctionnement">Fonctionnement</option>
    		<option value="amelioration">Proposition d'amélioration</option>
    		<option value="bug">Rapporter un bug</option>
    		<option value="autre">Autre</option>
  		</select>
        <br>
        <label>Message:</label><br>
        <textarea name="message" required></textarea><br>
        <input type="submit" value="Envoyer" class="submit">
    </form>
    <?php
    if(isset($_POST['message'])){
    try 
    {
        $bdd = new PDO('mysql:host=localhost;dbname=PFA;charset=utf8', 'root', 'root'); 
    }
    catch (Exception $e)
    {
           die('Erreur : ' . $e->getMessage()); 
    }
    $resultat = $bdd -> query("INSERT INTO rapport VALUES(NULL, '$_POST[nom]', '$_POST[email]', '$_POST[subject]', '$_POST[message]')");
    if ($resultat)
    {
        header('Location: confirmation.php');
    }
    }
    ?>
    </div>
    <hr>
    <div class="last-report">
    <p style="margin-left: 5em; margin-right: 5em;">Voici les dernières informations qui nous été rapportées :</p>
    <?php
        try 
    {
        $bdd = new PDO('mysql:host=localhost;dbname=PFA;charset=utf8', 'root', 'root'); 
    }
    catch (Exception $e)
    {
           die('Erreur : ' . $e->getMessage()); 
    }
    $reponse = $bdd->query('SELECT * FROM rapport ORDER BY ID_Rapport DESC LIMIT 0,5');
    while ($donnees = $reponse->fetch())
    {
        echo "<div class=\"report\">";
        echo "<p>";
        echo "<strong>". $donnees['Pseudo_Apprenti'] . "</strong>";
        if ($donnees['Sujet_Rapport'] == "fonctionnement")
        {
            echo " nous pose une question sur le fontionnement de Vroom :";
        }
        elseif ($donnees['Sujet_Rapport'] == "amelioration")
        {
            echo " nous propose une amélioration de Vroom:";
        }
        elseif ($donnees['Sujet_Rapport'] == "bug")
        {
            echo " nous rapporte un bug :";
        }
        elseif ($donnees['Sujet_Rapport'] == "autre")
        {
            echo " veut nous parler d'autre chose :";
        }
        echo "</p><p>";
        echo $donnees['Message_Rapport'];
        echo "</p>";
        echo "</div>";
        echo "<br>";
    }
    ?>  
    </div>
    </main>
</body>
</html>