<?php 
$this->title ='Oeuvres - Site Artiste';?>
<section>
    <?php
        foreach ($AllOeuvres as $oeuvre) :?>
            <a href='?action=oeuvre&id=<?=$oeuvre['id']?>'><img src="<?=$oeuvre['petiteImage']?>" alt="<?=$oeuvre['titre']?>"></a>
            <?php 
            echo "<p>Titre : ".$oeuvre['titre']."</p>";
            echo "<p>Année : ".$oeuvre['annee']."</p>";
            echo "<p>Prix : ".$oeuvre['prix']."</p>";
        endforeach; ?>
    
</section>