<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="panel panel-default contact-panel">
            <div class="panel-heading">
                <ul class="nav nav-tabs text-center" role="tablist">
                    <li role="presentation"><a href="#part" aria-controls="pro" role="tab" data-toggle="tab"><p>Vous êtes un particulier ? >>> Cliquez ici <<<</p></a></li>
                    <li role="presentation"><a href="#pro" aria-controls="pro" role="tab" data-toggle="tab"><p>Vous êtes un professionnel ? >>> Cliquez ici <<<</p></a></li>
                </ul>
            </div>
            <div class="panel-body">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="part">
                        <form method="POST" accept-charset="utf-8" action="<?php echo site_url('index.php/contact/valide_contact_part'); ?>" class="form-horizontal">
                            <div class="form-group">
                                <label for="nom_part" class="col-sm-4 control-label">Nom</label>
                                <div class="col-sm-5">
                                    <input type="text" name="nom_part" id="nom_part" placeholder="Nom" class="form-control" value="<?php echo set_value('nom_part'); ?>" />
                                    <?php echo form_error('nom_part'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="prenom_part" class="col-sm-4 control-label">Prénom</label>
                                <div class="col-sm-5">
                                    <input type="text" name="prenom_part" id="prenom_part" placeholder="Prénom" class="form-control" value="<?php echo set_value('prenom_part'); ?>" />
                                    <?php echo form_error('prenom_part'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mail_part" class="col-sm-4 control-label">E-mail</label>
                                <div class="col-sm-5">
                                    <input type="mail" class="form-control" id="mail_part" placeholder="E-mail" name="mail_part" value="<?php echo set_value('mail_part'); ?>" />
                                    <?php echo form_error('mail_part'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tel_part" class="col-sm-4 control-label">Téléphone</label>
                                <div class="col-sm-5">
                                    <input type="tel" class="form-control" id="tel_part" placeholder="Téléphone" name="tel_part" value="<?php echo set_value('tel_part'); ?>" />
                                    <?php echo form_error('tel_part'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="objet_part" class="col-sm-4 control-label">Objet</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="objet_part" placeholder="Objet" name="objet_part" value="<?php echo set_value('objet_part'); ?>" />
                                    <?php echo form_error('objet_part'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputComm_part" class="col-sm-4 control-label">Message</label>
                                <div class="col-sm-5" id="inputComm">
                                    <textarea class="form-control" rows="4" name="comm_part" placeholder="Informations supplémentaires" value="<?php echo set_value('comm_part'); ?>"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-6">
                                    <button type="submit" class="btn btn-warning">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="pro">
                        <form method="POST" accept-charset="utf-8" action="<?php echo site_url('index.php/contact/valide_contact_pro'); ?>" class="form-horizontal">
                            <div class="form-group">
                                <label for="nom" class="col-sm-4 control-label">Nom</label>
                                <div class="col-sm-5">
                                    <input type="text" name="nom" id="nom" placeholder="Nom" class="form-control" value="<?php echo set_value('nom'); ?>" />
                                    <?php echo form_error('nom'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mail" class="col-sm-4 control-label">E-mail</label>
                                <div class="col-sm-5">
                                    <input type="mail" class="form-control" id="mail" placeholder="E-mail" name="mail" value="<?php echo set_value('mail'); ?>" />
                                    <?php echo form_error('mail'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tel" class="col-sm-4 control-label">Téléphone</label>
                                <div class="col-sm-5">
                                    <input type="tel" class="form-control" id="direct" placeholder="Téléphone" name="tel" value="<?php echo set_value('tel'); ?>" />
                                    <?php echo form_error('tel'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tel" class="col-sm-4 control-label">Adresse</label>
                                <div class="col-sm-5">
                                    <input type="adresse" class="form-control" id="adresse" placeholder="Adresse" name="adresse" value="<?php echo set_value('adresse'); ?>" />
                                    <?php echo form_error('adresse'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="objet" class="col-sm-4 control-label">Objet</label>
                                <div class="col-sm-5">
                                    <input type="objet" class="form-control" id="objet" placeholder="Objet" name="objet" value="<?php echo set_value('objet'); ?>" />
                                    <?php echo form_error('objet'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputComm" class="col-sm-4 control-label">Commentaires</label>
                                <div class="col-sm-5" id="inputComm">
                                    <textarea class="form-control" rows="4" name="comm" placeholder="Informations supplémentaires" value="<?php echo set_value('comm'); ?>"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-6">
                                    <button type="submit" class="btn btn-warning">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>