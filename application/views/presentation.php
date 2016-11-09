<?php //var_dump($formations); 
        $inverse = true;
?>
<div class="row">
    <div class="col-md-8 presentation">

	<?php foreach($presentation as $pres){ ?>
		<?php if($inverse){ ?>
		<div class="bg-grey">
	        <h2 class="text-muted nom-formation"><?php echo $pres->titre_presentation; ?></h2>
	        
	        <p class="text-justify"><?php echo $pres->text_presentation; ?></p>
	    </div>
		<?php $inverse = false; } else { ?>
		<div>
	        <h2 class="text-muted nom-formation"><?php echo $pres->titre_presentation; ?></h2>
	        
	        <p class="text-justify"><?php echo $pres->text_presentation; ?></p>
	    </div>
	    <?php $inverse = true; } ?>
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
                        <div class="img-temoignage" style="background-image: url(<?php echo base_url('assets/img/images_temoignage/presentation/'.$temoigne->img_temoignage_presentation); ?>);"></div>
                        <h2><?php echo $temoigne->nom_temoignage_presentation; ?></h2>
                        <p class="text-justify"><?php echo $temoigne->text_temoignage_presentation; ?></p>
                    </div>
                    <?php $active = "" ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div> 