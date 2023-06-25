<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Portfolio Louis Beghin</title>
<body>
<header>
    <a href="#" class="logo"><span></span>Louis<span></span>Beghin</a>
    <div class="menuToggle" onclick="toggleMenu();"></div>
    <ul class="navbar">
        <li><a href="#banniere" onclick="toggleMenu();">Accueil</a></li>
        <li><a href="#apropos" onclick="toggleMenu();"> À propos</a></li>
        <li><a href="#menu" onclick="toggleMenu();">Projets</a></li>
        <li><a href="#Compteur De Visites" onclick="toggleMenu();">Compteur De Visite</a></li>
        <li><a href="#contact" onclick="toggleMenu();">Contact</a></li>


    </ul>
</header>
<section class="banniere" id="banniere">
    <div class="contenu">
        <h2>Bienvenue sur mon portfolio</h2>
        <a href="#apropos" class="btn1">Qui suis-je ?</a>
    </div>
</section>
<section class="apropos" id="apropos">
    <div class="row">
        <div class="col50">
            <h2 class="titre-texte"><span>À</span> Propos de moi</h2>
            <p> Depuis septembre 2021, le Bachelor Universitaire de Technologie (BUT) devient le nouveau diplôme remplaçant le DUT.
				<br>
				Je suis Louis Beghin, étudiant en BUT réseau et télécom de l'IUT de Rouen. Durant la formation j'ai pu réaliser des projets en situation professionnelle. 
				<br>
				Ces projets consistent a nous former dans des conditions proche du milieu entreprenarial pour être préparé a des situations similaires de ma future vie professionelle
				<br>
				L'objectif de ce site est de regrouper à la manière d'un portfolio, des preuves de ce que j'ai pu accomplir durant ma formation et en dehors.
            </p>
        </div>
</section>
<section class="menu" id="menu">
    <div class="titre">
        <h2 class="titre-texte"><span>M</span>es <span>P</span>rojets</h2>
    </div>
    <div class="contenu">
        <div class="box">
            <div class="imbox">
				<a href="C:/Users/etudiant/Desktop/Article1.jpg" download="Article1.png"</a>
                <img src="./img/Article1.png" alt="">
            </div>
            <div class="text">
                <h3>Réseau</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
				<a href="./télécom.html"</a>
                <img src="./img/télécoms.jpg" alt="">
            </div>
            <div class="text">
                <h3>Télécoms</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <a href="C:/Users/etudiant/Desktop/Article3.jpg" download="Article3.jpg"</a> 
				<img src="./img/systèmes.jpg" alt="" > 
            </div>
            <div class="text" href="C:/Users/etudiant/Desktop/Article3.jpg download="Article3.jpg">
                <h3>Système</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
				<a href="C:/Users/etudiant/Desktop/Article5.jpg"</a>
                <img src="./img/image404.jpg" alt="">
            </div>
            <div class="text">
                <h3>Autres</h3>
            </div>
      
 </div>
 <section class="temoignage" id="Compteur De Visite">
    <div class="titre blanc">
        <h2 class="titre-texte"><span>C</span>ompteur De Visites</h2>
    </div>
    <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="./img/pp5.jpg" alt="">
            </div>
            <div class="text">
				<?php
if(file_exists('compteur_visites.txt'))
{
        $compteur_f = fopen('compteur_visites.txt', 'r+');
        $compte = fgets($compteur_f);
}
else
{
        $compteur_f = fopen('compteur_visites.txt', 'a+');
        $compte = 0;
}
if(!isset($_SESSION['compteur_de_visite']))
{
        $_SESSION['compteur_de_visite'] = 'visite';
        $compte++;
        fseek($compteur_f, 0);
        fputs($compteur_f, $compte);
}
fclose($compteur_f);
?>
                <p><?php echo '<strong>'.$compte.'</strong> visites.';?></p>
                <h3>Visiteurs</h3>
            </div>
            </div>
        </div>
    </div>
 </section>
 <section class="contact" id="contact">
     <div class="titre noir">
         <h2 class="titre-texte"><span>C</span>ontact</h2>
         <p>Nous sommes à votre disposition en cas de besoin n'hésitez pas à nous contacter !</p>
     </div>
     <div class="contactform">
        <center >
	<h1>Contactez-nous !</h1>
	<br>
	<form action="send.php" method="POST" class="monForm">

		<?php if(isset($_GET['error'])) {
	 		?>
	 		<div class="alert alert-danger" role="alert">
                <?php
                	$msg = "Veuillez remplir toutes les cases !";
                 	echo $msg; ?>
            </div>
            <?php } ?>
            <br>

		  <label for="name">Nom :</label><br>
  		  <input type="text" id="name" name="name"><br>

		  <label for="email">E-mail :</label><br>
		  <input type="email" id="email" name="email"><br>

		   <label for="objet">Objet :</label><br>
  		  <input type="text" id="objet" name="objet"><br>

		  <label for="msg">Message :</label><br>
		  <textarea id="msg" name="msg"></textarea><br>

		  <input type="submit" name="send" value="Envoyer">

	</form>
	<br><br>
	</center>
</body>
</html>
 <div class="copyright">
     <p>copyright 2022 <a href="#">RT2 - Elbeuf</a> Tous droits reservés</p>
 </div>
 


 <script type="text/javascript">
     window.addEventListener('scroll', function(){
         const header =document.querySelector('header');
         header.classList.toggle("sticky", window.scrollY > 0 );
     });

     function toggleMenu(){
         const tmenuToggle = document.querySelector('.menuToggle');
         const navbar = document.querySelector('.navbar');
         navbar.classList.toggle('active');
         menuToggle.classList.toggle('active');
     }
 </script>
</body>
</html>