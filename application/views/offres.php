<section id="formations">
    <div class="container marketing">
        <div class="row text-formation">
        <?php foreach($type_form as $type_formation){ ?>
            <div class="col-md-4">
                <a class="lien-panel-footer" href="<?php echo site_url('index.php/offres_form/offre/'.$type_formation->id_type_formation); ?>">
                <div class="panel">
                    <div class="panel-heading offres"><h2 class="text-center"><?php echo $type_formation->nom_type_formation; ?></h2></div>
                    
                </div>
                </a>
            </div>
        <?php } ?>
        </div>
    </div>
</section>