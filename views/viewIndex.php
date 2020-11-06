<?php 
$this->title ='Accueil - Site Artiste';?>
<section >
    <div>
        <h1>Bonjour , bienvenue sur le site d'arthur le moustachu !</h1>
    </div>
    <div>
        <img src="Public/Images/auteur.jpg" alt="Arthur le moustachu !">
    </div>
    <div>
        <h2>Voici la liste des 3 dernieres expositions :</h2>
        <?php
            foreach ($lastExpo as $expo) :
                echo "<h3>".$expo['nom']."</h3>";
                echo $expo['dateDebut']." au ";
                echo $expo['dateFin'];
                echo "<br>";
            endforeach; 
        ?>
    </div>
</section>

