<?php foreach($images_pages as $image){ ?>
    <div class="img_page" style="background-image:url(<?php echo base_url($image->lien_img_pages_head); ?>);background-repeat: no-repeat;background-attachment:fixed;background-size:100% 75%;">
        <h1 class="text-center titre_img_page"><?php echo $image->titre_img_pages_head; ?></h1>
    </div>
<?php } ?>

<hr class="featurette-divider">
<div class="container-content">
<div class="row featurette text-center">
<?php foreach($formations as $form){ ?>
    <div class="col-md-6"> 
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal<?php echo $form->id_formation; ?>">
          <?php echo $form->nom_formation; ?>
        </button>
    </div>
        <div class="modal fade" id="myModal<?php echo $form->id_formation; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><?php echo $form->nom_formation; ?></h4>
                    </div>
                    <div class="modal-body">

                    
                    <div class="col-md-9">
                    
                    </div>
                    
                    <!--<div class="col-md-3">
                        <?php foreach($temoignage as $temoigne){ ?>
                            <div>
                                <img src="<?php echo base_url($temoigne->img_temoignage); ?>" alt="" />
                                <h3><?php echo $temoigne->nom_temoignage; ?></h3>
                                <p><?php echo $temoigne->text_temoignage; ?></p>
                            </div>
                        <?php } ?>
                    </div>-->
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    
<?php } ?>
</div>
</div>