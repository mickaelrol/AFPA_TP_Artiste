<?php 
$this->title ='Expositions - Site Artiste';?>
<section>
    <?php
        foreach ($AllExpo as $expos) :?>
            <a href='?action=exposition&id=<?=$expos['id']?>'><?=$expos['nom']?></a>;
            <?php 
            echo "<p>Lieu : ".$expos['lieu']."</p>";
            echo "<p>Adresse : ".$expos['adresse']."</p>";
        endforeach; ?>
    
</section>