<?php 
$this->title ='Oeuvre - Site Artiste';?>
<section>
            <img src="<?=$oeuvre['grandeImage']?>" alt="<?=$oeuvre['titre']?>">
            <?php 
            echo "<p>Titre : ".$oeuvre['titre']."</p>";
            echo "<p>Année : ".$oeuvre['annee']."</p>";
            echo "<p>Prix : ".$oeuvre['prix']."</p>";
            ?>
    
</section>