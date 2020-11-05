<?php 
$this->title ='Accueil - Site Artiste';?>
<section >
    <div class="col-12 middle">
        <h1>Bonjour , bienvenue sur le site d'arthur le moustachu !</h1>
    </div>
    <div class="col-12">
        <img src="Public/Images/auteur.jpg" alt="Arthur le moustachu !">
    </div>
    <div class="col-12 mt-5">
        <h2 class="mb-5">Voici la liste des 3 dernieres expositions :</h2>
        <?php
            foreach ($lastExpo as $expo) :
                echo "<h3 class='middle'>".$expo['nom']."</h3><br>";
                echo $expo['dateDebut']." au ";
                echo $expo['dateFin'];
                echo "<br>";
            endforeach; 
        ?>
    </div>
</section>

