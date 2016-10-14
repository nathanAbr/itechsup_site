<hr class="featurette-divider">
<div class="container-content">
<form method="POST" accept-charset="utf-8" action="<?php echo site_url('index.php/candidater/valide_form'); ?>" class="form-horizontal" id="form_candidater">
    <div class="form-group">
        <label for="nom" class="col-sm-2 control-label">Nom</label>
        <div class="col-sm-10">
            <input type="text" name="nom" id="nom" placeholder="Nom" class="form-control" value="<?php echo set_value('nom'); ?>" />
            <?php echo form_error('nom'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="prenom" class="col-sm-2 control-label">Prénom</label>
        <div class="col-sm-10">
            <input type="text" name="prenom" id="prenom" placeholder="Prénom" class="form-control" value="<?php echo set_value('prenom'); ?>" />
            <?php echo form_error('prenom'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="adresse" class="col-sm-2 control-label">Adresse</label>
        <div class="col-sm-10">
            <input type="text" name="adresse" id="adresse" placeholder="Adresse" class="form-control" value="<?php echo set_value('adresse'); ?>" />
            <?php echo form_error('adresse'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="cp" class="col-sm-2 control-label">Code postal</label>
        <div class="col-sm-10">
            <input type="text" name="cp" id="cp" placeholder="Code postal" class="form-control" value="<?php echo set_value('cp'); ?>" />
            <?php echo form_error('cp'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="ville" class="col-sm-2 control-label">Ville</label>
        <div class="col-sm-10">
            <input type="text" name="ville" id="ville" placeholder="Ville" class="form-control" value="<?php echo set_value('ville'); ?>" />
            <?php echo form_error('ville'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="mail" class="col-sm-2 control-label">E-mail</label>
        <div class="col-sm-10">
            <input type="mail" class="form-control" id="mail" placeholder="E-mail" name="mail" value="<?php echo set_value('mail'); ?>" />
            <?php echo form_error('mail'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="tel" class="col-sm-2 control-label">Téléphone</label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" id="direct" placeholder="Téléphone" name="tel" value="<?php echo set_value('tel'); ?>" />
            <?php echo form_error('tel'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="diplome" class="col-sm-2 control-label">Dernier diplôme obtenu</label>
        <div class="col-sm-10">
            <select class="form-control" id="inputExter" name="inputExter">
                <option>BAC TECHNOLOGIQUE</option>
                <option>BAC G&Eacute;N&Eacute;RAL</option>
                <option>BAC PROFESSIONNEL</option>
                <option>BAC +2</option>
                <option>BAC +3</option>
                <option>BAC +4</option>
                <option>BAC +5</option>
                <option>SUP&Egrave;RIEURE AU BAC +5</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputComm" class="col-sm-2 control-label">Commentaires</label>
        <div class="col-sm-10" id="inputComm">
            <textarea class="form-control" rows="3" name="comm" placeholder="Informations supplémentaires" value="<?php echo set_value('comm'); ?>"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="cv" class="col-sm-2 control-label">Joindre son CV</label>
        <div class="col-sm-10">
            <input type="file" name="cv" class="form-control" id="cv" value="<?php echo set_value('cv'); ?>" />
            <?php echo form_error('cv'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="lm" class="col-sm-2 control-label">Joindre sa lettre de motivation</label>
        <div class="col-sm-10">
            <input type="file" name="lm" class="form-control" id="lm" value="<?php echo set_value('lm'); ?>" />
            <?php echo form_error('lm'); ?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </div>
</form>
</div>