<?php 
$this->title ='Exposition - Site Artiste';?>
<section>
    <?php
        foreach ($exposition as $expo) : 
            echo "<div class='divexpo'>";
        ?>
            <a href='?action=oeuvre&id=<?=$expo['id']?>'><img src="<?=$expo['petiteImage']?>" alt="<?=$expo['titre']?>" class="imgOeuvre"></a><br> 
        <?php
            echo "<div class='contExpo'>";
            echo "<p>Nom de L'exposition : ".$expo['titre']."</p><br>"; 
            echo "<p>Année : ".$expo['annee']."</p><br>"; 
            echo "<p>Technique : ".$expo['technique']."</p><br>";
            echo "<p>Support : ".$expo['support']."</p><br>"; 
            echo "<p>Hauteur : ".$expo['hauteur']."</p><br>"; 
            echo "<p>Largeur : ".$expo['largeur']."</p><br>";  
            echo "<p>Prix : ".$expo['prix']."</p><br>"; 
            echo "</div>";
            echo "</div>";
            echo "<hr>";
        endforeach; 
        ?>
    
</section>