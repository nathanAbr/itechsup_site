<hr class="featurette-divider">
<?php foreach($presentation as $pres){ ?>
    
        <div class="container-content">
            <h3><?php echo $pres->titre_presentation; ?></h3>
            <p class="text-justify"><?php echo $pres->text_presentation; ?></p>
        </div>
    
<?php } ?>