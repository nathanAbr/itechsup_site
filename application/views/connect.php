<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/connect.css'); ?>"/>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    </head>
    
    <body>
    
        <header>
        <div class="container">
            <hr class="row-featurette" />
            <div class="row banniere">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <img class="img-responsive" alt="Responsive image" src="<?php echo base_url('assets/img/logo.png'); ?>"/>
                </div>
            </div>
            <hr class="row-featurette" />
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h2 class="text-muted text-center">Bienvenue sur l'espace d'administration d'Itechsup</h2>
                </div>
            </div>
        </div>
        </header>
        
        <div class="container">

            <?php echo $content; ?>
            
        </div>
        
        <footer>
        </footer>
                
        <script src="<?php echo base_url('assets/js/jquery-1.12.3.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
        <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>
        
    </body>
</html>