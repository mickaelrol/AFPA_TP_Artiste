<?php 
$this->title ='Expositions - Site Artiste';?>
<section>
    <?php
        foreach ($AllExpo as $expos) :
            echo $expos['nom'];
            echo $expos['lieu'];
        endforeach; ?>
    
</section>