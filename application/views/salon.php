<div class="row">
    <div class="col-md-8 col-md-offset-2">

        <?php
        if(!empty($salons)){
        foreach($salons as $salon){ 
        //var_dump($salon);
        ?>
        
        <a class="event-button" data-toggle="modal" data-target="#myModal<?php echo $salon->id_salon; ?>">
            <div class="event-background">
                <div class="row date-grille">
                    <div class="col-md-3 date">
                        <div class="date-event">
                            <h2><?php echo date("d",strtotime($salon->date_salon));?> </h2>
                            <p class="text-center"><?php echo date("F",strtotime($salon->date_salon));?>
                            <?php echo date("Y",strtotime($salon->date_salon));?> </p>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-offset-1">
                        <h2 class="text-muted nom-formation"><?php echo $salon->nom_salon; ?> </h2>
                        <p class="text-justify"> <?php echo substr($salon->description_salon, 0, 150); ?>...</p>
                    </div>
                </div>
            </div>
        </a>
        <hr class="featurette-divider">

        <!-- MODAL >>>>>> page detail du cursus selectionné -->
        <div class="modal fade" id="myModal<?php echo $salon->id_salon; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-image: url(<?php echo base_url('assets/img/images_pages/developer.png'); ?>);">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><?php echo $salon->nom_salon; ?></h4>
                    </div>
                    <div class="modal-body">
                        <p class="text-justify"><?php echo $salon->description_salon; ?></p>
                        <iframe src="<?php echo $salon->map_salon; ?>" style="width:100%;height:500px;" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div> 
        
        <?php }
        } else {echo "<h2>Nous n'avons pas de salons de programmées .</h2><hr class=\"featurette-divider\"> ";} ?>

    </div>
</div>