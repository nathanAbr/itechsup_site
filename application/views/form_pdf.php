<div class="row">
    <?php if(isset($error)){ ?>
        <div class="col-xs-12 col-sm-6 col-sm-offset-4 col-md-4 col-md-offset-4 message-error">
                <h4 class="text-center"><?php echo $error; ?></h4>
        </div>
    <?php } ?>
    <div class="col-xs-12 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 form-contact">
        <h3 class="text-center text-muted">Générer fiche de comm</h3>
        <form method="POST" accept-charset="utf-8" action="<?php echo site_url('myPdf/html_render'); ?>" enctype="multipart/form-data" class="form-horizontal" id="form_candidater">
            <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-sm-8 col-sm-offset-2">
                    <input type="text" name="titre" id="titre" placeholder="Titre" class="form-control input-lg" value="<?php echo set_value('titre'); ?>" />
                    <?php echo form_error('titre'); ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-sm-8 col-sm-offset-2">
                    <input type="text" name="sousTitre" id="sousTitre" placeholder="Sous titre" class="form-control input-lg" value="<?php echo set_value('sousTitre'); ?>" />
                    <?php echo form_error('sousTitre'); ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-sm-8 col-sm-offset-2">
                    <input type="file" name="img1" id="img1" class="form-control input-lg" value="<?php echo set_value('img1'); ?>" />
                    <?php echo form_error('img1'); ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-sm-8 col-sm-offset-2">
                    <input type="file" name="img2" id="img2" class="form-control input-lg" value="<?php echo set_value('img2'); ?>" />
                    <?php echo form_error('img2'); ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-sm-8 col-sm-offset-2">
                    <input type="file" name="img3" id="img3" class="form-control input-lg" value="<?php echo set_value('img3'); ?>" />
                    <?php echo form_error('img3'); ?>
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