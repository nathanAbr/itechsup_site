<div class="row">
    <div class="col-md-8 contrats">
    <?php foreach($contrats as $contrat){ ?>
        <div class="bg-grey">
            <h2 class="text-muted nom-formation"><?php echo $contrat->nom_contrat; ?></h2>
            <div>
                <!-- Nav tabs -->
                <ul id="contrats-tabs<?php echo $contrat->id_contrat; ?>" class="nav nav-tabs" role="tablist">
                    <li role="contrat" class="active"><a href="#description<?php echo $contrat->id_contrat; ?>" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
                    <li role="contrat"><a href="#duree<?php echo $contrat->id_contrat; ?>" aria-controls="duree" role="tab" data-toggle="tab">Durée</a></li>
                    <li role="contrat"><a href="#rythme<?php echo $contrat->id_contrat; ?>" aria-controls="rythme" role="tab" data-toggle="tab">Rythme</a></li>
                    <li role="contrat"><a href="#remuneration<?php echo $contrat->id_contrat; ?>" aria-controls="remuneration" role="tab" data-toggle="tab">Rémunération</a></li>
                    <li role="contrat"><a href="#prisencharge<?php echo $contrat->id_contrat; ?>" aria-controls="prisencharge" role="tab" data-toggle="tab">Prise en charges</a></li>
                    <li role="contrat"><a href="#public<?php echo $contrat->id_contrat; ?>" aria-controls="public" role="tab" data-toggle="tab">Public</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content contrat-content">
                    <div role="tabpanel" class="tab-pane active" id="description<?php echo $contrat->id_contrat; ?>"><?php echo $contrat->description_contrat; ?></div>
                    <div role="tabpanel" class="tab-pane" id="duree<?php echo $contrat->id_contrat; ?>"><?php echo $contrat->duree_contrat; ?></div>
                    <div role="tabpanel" class="tab-pane" id="rythme<?php echo $contrat->id_contrat; ?>"><?php echo $contrat->rythme_contrat; ?></div>
                    <div role="tabpanel" class="tab-pane" id="remuneration<?php echo $contrat->id_contrat; ?>"><?php echo $contrat->remuneration_contrat; ?></div>
                    <div role="tabpanel" class="tab-pane" id="prisencharge<?php echo $contrat->id_contrat; ?>"><?php echo $contrat->prise_en_charge_contrat; ?></div>
                    <div role="tabpanel" class="tab-pane" id="public<?php echo $contrat->id_contrat; ?>"><?php echo $contrat->public_contrat; ?></div>
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
                        <div class="img-temoignage" style="background-image: url(<?php echo base_url('assets/img/images_temoignage/contrat/'.$temoigne->img_temoignage_contrat); ?>);"></div>
                        <h2><?php echo $temoigne->nom_temoignage_contrat; ?></h2>
                        <p class="text-justify"><?php echo $temoigne->text_temoignage_contrat; ?></p>
                    </div>
                    <?php $active = "" ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    
</div> 