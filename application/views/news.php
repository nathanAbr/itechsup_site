<div class="row">
    <div class="col-md-8 col-md-offset-2">

<?php 
        if(empty($news)){ echo "<h2>Aucun évènements n'est à venir .</h2><hr class=\"featurette-divider\"> "; } else {
        foreach($news as $new){ 

        //var_dump($new);

        ?>
            <a class="event-button" data-toggle="modal" data-target="#myModal<?php echo $new->id_event; ?>">
                <div class="event-background bg-grey">
                    <div class="row date-grille">
                        <div class="col-md-3 date">
                            <div class="date-event">
                                <h2><?php echo date("d",strtotime($new->date_event));?> </h2>
                                <p class="text-center"><?php echo date("F",strtotime($new->date_event));?>
                                <?php echo date("Y",strtotime($new->date_event));?> </p>
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-1">
                            <h2 class="text-muted nom-formation"><?php echo $new->titre_event; ?> </h2>
                            <p class="text-justify"> <?php echo substr($new->text_event, 0, 150); ?>...</p>
                        </div>
                    </div>
                </div>
            </a>

    <!-- MODAL >>>>>> page detail du cursus selectionné -->
            <div class="modal fade" id="myModal<?php echo $new->id_event; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header" style="background-image: url(<?php echo base_url('assets/img/images_pages/developer.png'); ?>);">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"><?php echo $new->titre_event; ?></h4>
                        </div>
                        <div class="modal-body">
                        <p class="text-justify"><?php echo $new->text_event; ?></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div> 
<?php }
} ?>

</div>
</div>