<div class="row">
    <div class="col-md-8">

    <?php 
        if(!empty($portes_ouvertes)){
        foreach($portes_ouvertes as $po){ 
        //var_dump($portes_ouvertes);
    ?>
        
        <div class="col-md-6">
            <a class="event-button" data-toggle="modal" data-target="#myModal<?php echo $po->id_porte_ouverte; ?>">
                <div class="bg-grey event-background ri-background">
                    <h2 class="text-muted"><?php echo $po->titre_porte_ouverte; ?> </h2>
                    <p class="text-justify"> <?php echo substr($po->description_porte_ouverte, 0, 150); ?>...</p>
                </div>
            </a>
        </div>

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
    <div class="col-md-3 col-md-offset-1 candidater">
    <?php if(!empty($valide_form)){ ?>
        <h3 class="text-center text-muted"><?php echo $valide_form; ?></h3>
    <?php } else { ?>
    <h3 class="text-center text-muted">S'inscrire</h3>
        <form class="form"  method="post" action="<?php echo site_url('index.php/portes_ouvertes/valide_form'); ?>" >
             <div class="form-group">
                <label for="nom" class="control-label">Nom</label>
                
                    <input type="text" name="nom" id="nom" placeholder="Nom" class="form-control" value="<?php echo set_value('nom'); ?>" />
                    <?php echo form_error('nom'); ?>
                
            </div>
            <div class="form-group">
                <label for="prenom" class="control-label">Prénom</label>
               
                    <input type="text" name="prenom" id="prenom" placeholder="Prénom" class="form-control" value="<?php echo set_value('prenom'); ?>" />
                    <?php echo form_error('prenom'); ?>
               
            </div>
            <div class="form-group">
                <label for="mail" class="control-label">E-mail</label>
                
                    <input type="mail" class="form-control" id="mail" placeholder="E-mail" name="mail" value="<?php echo set_value('mail'); ?>" />
                    <?php echo form_error('mail'); ?>
                
            </div>
            <div class="form-group">
                <label for="tel" class="control-label">Téléphone</label>
                
                    <input type="tel" class="form-control" id="direct" placeholder="Téléphone" name="tel" value="<?php echo set_value('tel'); ?>" />
                    <?php echo form_error('tel'); ?>
                
            </div>
            <div class="form-group">
                <label for="subject" class="control-label">Portes ouvertes</label>
                <select name="subject" class="form-control">
                    <?php 
                    foreach($portes_ouvertes as $po){ ?>
                            <optgroup label="<?php echo $po->titre_porte_ouverte; ?>">
                                <?php 
                                    foreach($date_porte_ouverte as $date){ 
                                        if($date->id_portes_ouvertes == $po->id_porte_ouverte){
                                        ?>
                                        <option><?php echo date("d/m/Y",strtotime($date->date_porte_ouverte)); ?></option>
                                        <?php 
                                        }                        
                                    } 
                                ?>
                            </optgroup>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="inputComm" class="control-label">Commentaires</label>
                <textarea class="form-control" rows="3" name="inputComm" placeholder="Informations supplémentaires" value="<?php echo set_value('comm'); ?>"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-warning">Envoyer</button>
            </div>
        </form>
        <?php } ?>
    </div>
</div>