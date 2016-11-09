<div class="row">
    <div class="col-md-8 col-md-offset-2">

        <?php
        if(!empty($offres)){
        foreach($offres as $offre){ 
        //var_dump($offre);
        ?>
        
        <a class="event-button" data-toggle="modal" data-target="#myModal<?php echo $offre->id_offre; ?>">
            <div class="event-background bg-grey">
                <div class="row date-grille">
                    <div class="col-md-3 date">
                        <div class="date-event">
                            <h2><?php echo date("d",strtotime($offre->date_offre));?> </h2>
                            <p class="text-center"><?php echo date("F",strtotime($offre->date_offre));?>
                            <?php echo date("Y",strtotime($offre->date_offre));?> </p>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-offset-1">
                        <h2 class="text-muted nom-formation"><?php echo $offre->titre_offre; ?> </h2>
                        <p class="text-justify"> <?php echo substr($offre->description_offre, 0, 150); ?>...</p>
                    </div>
                </div>
            </div>
        </a>
        <hr class="featurette-divider">

        <!-- MODAL >>>>>> page detail du cursus selectionné -->
        <div class="modal fade" id="myModal<?php echo $offre->id_offre; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-image: url(<?php echo base_url('assets/img/images_pages/developer.png'); ?>);">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><?php echo $offre->titre_offre; ?></h4>
                    </div>
                    <div class="modal-body">
                        <p class="text-justify"><?php echo $offre->description_offre; ?></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div> 
        
        <?php }
        } else {echo "<h2>Nous n'avons pas d'offres à pourvoir .</h2><hr class=\"featurette-divider\"> ";} ?>

    </div>
</div>
</div>