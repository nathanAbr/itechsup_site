<div class="row">
    <div class="col-md-8">

        <?php 
        if(!empty($portes_ouvertes)){
        foreach($portes_ouvertes as $po){ 
        //var_dump($po);
        ?>
        
        <div class="col-md-12">
            <a class="event-button" data-toggle="modal" data-target="#myModal<?php echo $po->id_porte_ouverte; ?>">
                <div class="event-background">
                        <h2 class="text-muted nom-formation"><?php echo $po->titre_porte_ouverte; ?> </h2>
                    <div class="row date-grille">
                        <p class="text-justify"> <?php echo substr($po->description_porte_ouverte, 0, 150); ?>...</p>
                    </div>
                </div>
            </a>
            <hr class="featurette-divider">
        </div>
        <hr class="featurette-divider">

        <!-- MODAL >>>>>> page detail du cursus selectionné -->
        <div class="modal fade" id="myModal<?php echo $po->id_porte_ouverte; ?>" tabindex="-1" role="dialog" apoa-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-image: url(<?php echo base_url('assets/img/images_pages/developer.png'); ?>);">
                        <button type="button" class="close" data-dismiss="modal" apoa-label="Close"><span apoa-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><?php echo $po->titre_porte_ouverte; ?></h4>
                    </div>
                    <div class="modal-body">
                        <p class="text-justify"><?php echo $po->description_porte_ouverte; ?></p></br>
                        <ul><h3>Nos prochaines dates</h3></br>
                        <?php 
                        foreach($date_porte_ouverte as $date){ 
                            if($date->id_portes_ouvertes == $po->id_porte_ouverte){
                            ?>
                            <li><?php echo date("d/m/Y", strtotime($date->date_porte_ouverte)); ?></li>
                            <?php 
                            }                        
                        } ?>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div> 
        
        <?php }
        } else {echo "<h2>Nous n'avons pas de portes ouvertes de programmées .</h2><hr class=\"featurette-divider\"> ";} ?>

    </div>
    <div class="col-md-4">
        <form class="form">
            
        </form>

    </div>
</div>