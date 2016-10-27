<div class="row">
    <?php if(isset($error)){ ?>
<div class="col-xs-12 col-sm-6 col-sm-offset-4 col-md-4 col-md-offset-4 message-error">
    
        <h4 class="text-center"><?php echo $error; ?></h4>
    
</div>
    <?php } ?>
    <div class="col-xs-12 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 form-contact">
        <h3 class="text-center text-muted">Connectez-vous</h3>
        <form method="POST" accept-charset="utf-8" action="<?php echo site_url('connect/valide_connect'); ?>" class="form-horizontal" id="form_candidater">
            <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-sm-8 col-sm-offset-2">
                    <input type="text" name="log" id="log" placeholder="Login" class="form-control input-lg" value="<?php echo set_value('log'); ?>" />
                    <?php echo form_error('log'); ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-sm-8 col-sm-offset-2">
                    <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" class="form-control input-lg" value="<?php echo set_value('mdp'); ?>" />
                    <?php echo form_error('mdp'); ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-sm-8 col-sm-offset-2">
                    <button type="submit" class="btn btn-lg btn-block btn-info">Envoyer</button>
                </div>
            </div>
        </form>
    </div>
</div>