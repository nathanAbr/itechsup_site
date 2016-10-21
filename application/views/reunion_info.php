<div class="row">
    <div class="col-md-8">

        <?php 
        if(!empty($reunion_info)){
        foreach($reunion_info as $ri){ 
        ?>
        
        
        <div class="col-md-12">
            <a class="event-button" data-toggle="modal" data-target="#myModal<?php echo $ri->id_reunion_information; ?>">
                <div class="event-background">
                        <h2 class="text-muted nom-formation"><?php echo $ri->titre_reunion_information; ?> </h2>
                    <div class="row date-grille">
                        <p class="text-justify"> <?php echo substr($ri->description_reunion_information, 0, 150); ?>...</p>
                    </div>
                </div>
            </a>
            <hr class="featurette-divider">
        </div>

        <!-- MODAL >>>>>> page detail du cursus selectionné -->
        <div class="modal fade" id="myModal<?php echo $ri->id_reunion_information; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-image: url(<?php echo base_url('assets/img/images_pages/developer.png'); ?>);">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><?php echo $ri->titre_reunion_information; ?></h4>
                    </div>
                    <div class="modal-body">
                        <p class="text-justify"><?php echo $ri->description_reunion_information; ?></p></br>
                        <h3>Nos prochaines dates</h3></br>
                        <?php 
                        foreach($date_reunion_info as $date){ 
                            if($date->id_reunion_information == $ri->id_reunion_information){
                            ?>
                            <li><?php echo date("d/m/Y",strtotime($date->date_reunion_information)); ?></li>
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
        
        } else {echo "<h2>Nous n'avons pas de réunions d'informations de programmées.</h2><hr class=\"featurette-divider\"> ";} ?>
    <div class="col-md-4">
        <form class="form">
            
        </form>

    </div>
    </div>
</div>