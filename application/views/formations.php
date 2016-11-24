<?php //var_dump($formations); 
        $inverse = true;
?>
<div class="row">
    <div class="col-md-8">
        <?php foreach($formations as $form){ ?>
            <?php if($inverse){ ?>
        <div class="row bg-grey">
            <h2 class="text-muted nom-formation"><?php echo $form->nom_formation; ?></h2>
            <div class="col-md-4">
                <img class="featurette-image img-responsive center-block" src="<?php echo base_url('assets/img/icones/icones_formations/'.$form->img_formation); ?>" alt="<?php echo $form->titre_formation; ?>">
            </div>
            <div class="col-md-8">
                <p class="text-justify"><?php echo $form->resume_formation; ?></p>
                <div class="row">
                    <div class="col-md-8">
                        <p class="lead titre-formation"><?php echo $form->titre_formation; ?></p>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal<?php echo $form->id_formation; ?>">
                En savoir plus
                </button>
                    </div>
                </div>
            </div>
        </div>
            <?php $inverse = false; } else { ?>
        <div class="row">
            <h2 class="text-muted nom-formation"><?php echo $form->nom_formation; ?></h2>
            <div class="col-md-8">
                <p class="text-justify"><?php echo $form->resume_formation; ?></p>
                <div class="row">
                    <div class="col-md-8">
                        <p class="lead titre-formation"><?php echo $form->titre_formation; ?></p>
                    </div>
                    <div class="col-md-4">
                     <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal<?php echo $form->id_formation; ?>">
                        En savoir plus
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img class="featurette-image img-responsive center-block" src="<?php echo base_url($form->img_formation); ?>" alt="<?php echo $form->titre_formation; ?>">
            </div>
        </div>
            <?php $inverse = true; } ?>

            <!-- MODAL >>>>>> page detail du cursus selectionné -->
            <div class="modal fade" id="myModal<?php echo $form->id_formation; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header" style="background-image: url(<?php echo base_url('assets/img/images_pages/developer.jpg'); ?>);">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"><?php echo $form->nom_formation; ?></h4>
                        </div>
                        <div class="modal-body">
                        <p class="text-justify"><?php echo $form->description_formation; ?></p>
                            <div>

                              <!-- Nav tabs -->
                              <ul id="formations-tabs<?php echo $form->id_formation; ?>" class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#programme<?php echo $form->id_formation; ?>" aria-controls="programme" role="tab" data-toggle="tab">Programme</a></li>
                                <li role="presentation"><a href="#objectifs<?php echo $form->id_formation; ?>" aria-controls="objectifs" role="tab" data-toggle="tab">Objectifs</a></li>
                                <li role="presentation"><a href="#debouches<?php echo $form->id_formation; ?>" aria-controls="debouches" role="tab" data-toggle="tab">Débouchés</a></li>
                              </ul>

                              <!-- Tab panes -->
                              <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="programme<?php echo $form->id_formation; ?>"><?php echo $form->programme_formation; ?></div>
                                <div role="tabpanel" class="tab-pane" id="objectifs<?php echo $form->id_formation; ?>"><?php echo $form->objectifs_formation; ?></div>
                                <div role="tabpanel" class="tab-pane" id="debouches<?php echo $form->id_formation; ?>"><?php echo $form->debouches_formation; ?></div>          
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div> 
        <?php } ?>
    </div>

    <div class="col-md-3 col-md-offset-1 temoignages">
    <h2 class="text-muted">Témoignages</h2>
        <div id="carousel-temoignages" data-example-id="simple-carousel"> 
            <div class="slide" data-ride="carousel"> 
                <div class="carousel-inner" role="listbox">
                    <?php $active = "active"; ?>
                    <?php foreach($temoignage as $temoigne){ ?>
                    <div class="item <?php echo $active; ?>">
                        <div class="img-temoignage" style="background-image: url(<?php echo base_url('assets/img/images_temoignage/formation/'.$temoigne->img_temoignage); ?>);"></div>
                        <h2><?php echo $temoigne->nom_temoignage; ?></h2>
                        <p class="text-justify"><?php echo $temoigne->text_temoignage; ?></p>
                    </div>
                    <?php $active = "" ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div> 

