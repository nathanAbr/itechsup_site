<?php foreach($nous_trouver as $trouver){?>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-5">
            <div class="panel panel-default">
            <div class="panel-heading">Notre adresse</div>
                <div class="panel-body">
                    <p><?php echo $trouver->adresse_trouver; ?></p>
                    <p><?php echo $trouver->cp_trouver; ?> <?php echo $trouver->ville_trouver; ?></p>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Nous contacter par t&eacute;l&eacute;phone</div>
                <div class="panel-body">
                    <p>T&egrave;l : <?php echo $trouver->tel_trouver; ?></p>
                    <p>Fax : <?php echo $trouver->fax_trouver; ?></p>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Nous contacter par Mail</div>
                <div class="panel-body">
                    <p>Mail : <?php echo $trouver->mail_trouver; ?></p>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Comment venir</div>
                <div class="panel-body">
                    <p class="text-justify"><?php echo $trouver->transport_trouver; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <iframe src="<?php echo $trouver->map_trouver; ?>" style="width:100%;height:500px;" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
<?php } ?>