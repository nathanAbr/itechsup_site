<div class="row">
    <div class="col-md-8">

    <?php 
        if(!empty($reunion_info)){
        foreach($reunion_info as $ri){ 
    ?>
        <div class="col-md-6">
            <a class="event-button" data-toggle="modal" data-target="#myModal<?php echo $ri->id_reunion_information; ?>">
                <div class="bg-grey event-background ri-background">
                    <h2 class="text-muted"><?php echo $ri->titre_reunion_information; ?> </h2>
                    <p class="text-center"><?php echo substr($ri->description_reunion_information, 0, 150); ?>...</p>
                </div>
            </a>
        </div>
    
        <!-- MODAL >>>>>> page detail du cursus selectionné -->
        <div class="modal fade" id="myModal<?php echo $ri->id_reunion_information; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-image: url(<?php echo base_url('assets/img/images_pages/info.jpg'); ?>);">
                        <button type="button" class="close" data-dimdiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><?php echo $ri->titre_reunion_information; ?></h4>
                    </div>
                    <div class="modal-body">
                        <p class="text-justify"><?php echo $ri->description_reunion_information; ?></p></br>
                        <ul><h3>Nos prochaines dates</h3></br>
                        <?php 
                        foreach($date_reunion_info as $date){ 
                            if($date->id_reunion_information == $ri->id_reunion_information){
                            ?>
                            <li><?php echo date("d/m/Y", strtotime($date->date_reunion_information)); ?></li>
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
        
        } else {echo "<h2>Nous n'avons pas de réunions d'informations de programmées.</h2><hr class=\"featurette-divider\" /> ";} ?>
        
    </div>
    <div class="col-md-3 col-md-offset-1 candidater">
    <?php if(!empty($valide_form)){ ?>
        <h3 class="text-center text-muted"><?php echo $valide_form; ?></h3>
    <?php } else { ?>
    <h3 class="text-center text-muted">S'inscrire</h3>
        <form class="form" method="post" action="<?php echo site_url('index.php/reunions_infos/valide_form'); ?>">
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
                <label for="subject" class="control-label">Réunion</label>
                <select name="subject" class="form-control">
                    <?php 
                    foreach($reunion_info as $ri){ ?>
                            <optgroup label="<?php echo $ri->titre_reunion_information; ?>">
                                <?php 
                                    foreach($date_reunion_info as $date){ 
                                        if($date->id_reunion_information == $ri->id_reunion_information){
                                        ?>
                                        <option><?php echo date("d/m/Y",strtotime($date->date_reunion_information)); ?></option>
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