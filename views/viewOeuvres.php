<?php 
$this->title ='Oeuvres - Site Artiste';?>
<section>
    <?php
        foreach ($AllOeuvres as $oeuvre) :
            echo "<div class='divexpo'>";
            ?>
                <a href='?action=oeuvre&id=<?=$oeuvre['id']?>'><img src="<?=$oeuvre['petiteImage']?>" alt="<?=$oeuvre['titre']?>"></a><br> 
            <?php
                echo "<div class='contExpo'>";
                echo "<p>Titre : ".$oeuvre['titre']."</p>";
                echo "<p>Année : ".$oeuvre['annee']."</p>";
                echo "<p>Prix : ".$oeuvre['prix']."</p>";
                echo "</div>";
            echo "</div>";
            echo "<hr>";






        ?>
            
            <?php 
            
        endforeach; ?>
    
</section>