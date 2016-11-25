<div class="row">
    <div class="col-sm-8 col-sm-offset-2 candidater">
        <form method="POST" accept-charset="utf-8" action="<?php echo site_url('index.php/contact_formateur/valide_contact_formateur'); ?>" class="form-horizontal">
            <div class="form-group">
                <label for="nom" class="col-sm-4 control-label">Nom</label>
                <div class="col-sm-5">
                    <input required type="text" name="nom" id="nom" placeholder="Nom" class="form-control" value="<?php echo set_value('nom'); ?>" />
                </div>
            </div>
            <div class="form-group">
                <label for="prenom" class="col-sm-4 control-label">Prénom</label>
                <div class="col-sm-5">
                    <input required type="text" name="prenom" id="prenom" placeholder="Prénom" class="form-control" value="<?php echo set_value('prenom'); ?>" />
                </div>
            </div>
            <div class="form-group">
                <label for="mail" class="col-sm-4 control-label">E-mail</label>
                <div class="col-sm-5">
                    <input required type="email" class="form-control" id="mail" placeholder="E-mail" name="mail" value="<?php echo set_value('mail'); ?>"/>
                </div>
            </div>
            <div class="form-group">
                <label for="tel" class="col-sm-4 control-label">Téléphone</label>
                <div class="col-sm-5">
                    <input required type="tel" class="form-control" id="tel" placeholder="Téléphone" name="tel" value="<?php echo set_value('tel'); ?>" />
                </div>
            </div>
            <div class="form-group">
                <label for="mess" class="col-sm-4 control-label">Message</label>
                <div class="col-sm-5" id="inputComm">
                    <textarea required class="form-control" rows="4" name="mess" placeholder="Informations supplémentaires" value="<?php echo set_value('mess'); ?>"></textarea>
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