<?php if(!empty($_SESSION['member-id'])){ ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <?php foreach($css_files as $file): ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php endforeach; ?>
        
        <?php foreach($js_files as $file): ?>
            <script src="<?php echo $file; ?>"></script>
        <?php endforeach; ?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/sidebar.css'); ?>" />
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    </head>
    
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                    </button>
                    <img src="<?php echo base_url('assets/img/logo2.png'); ?>" width="150" alt=""/>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="
                            <?php
                                if($_SESSION['member-id'][0]->admin_utilisateur){
                                    echo site_url('profil/oui');
                                }else{ echo site_url('profil/non'); }
                            ?>
                        ">Profile</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="<?php echo site_url('disconnect'); ?>">Déconnexion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                        <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle">Formations</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('formations'); ?>">Nos formations</a></li>
                                <li><a href="<?php echo site_url('types_formations'); ?>">Nos domaines de formations</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle">Réunions d'informations</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('reunions_info'); ?>">Nos Réunions</a></li>
                                <li><a href="<?php echo site_url('date_reunions_info'); ?>">Dates prévues</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle">Portes ouvertes</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('portes_ouvertes'); ?>">Nos portes ouvertes</a></li>
                                <li><a href="<?php echo site_url('date_po'); ?>">Dates prévues</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo site_url('salons'); ?>">Nos salons</a></li>
                        <li><a href="<?php echo site_url('contrats'); ?>">Contrats</a></li>
                        <li><a href="<?php echo site_url('events'); ?>">Evènements</a></li>
                        <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle">Témoignages</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('temoignages'); ?>">Témoignages des formations</a></li>
                                <li><a href="<?php echo site_url('temoignages_contrat'); ?>">Témoignages des contrats</a></li>
                                <li><a href="<?php echo site_url('temoignages_presentation'); ?>">Témoignages du responsable</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo site_url('presentation'); ?>">Présentation</a></li>
                        <li><a href="<?php echo site_url('offres'); ?>">Offres</a></li>
                        <li><a href="<?php echo site_url('carousel'); ?>">Carousel</a></li>
                        <li><a href="<?php echo site_url('trouver'); ?>">Nous trouver</a></li>
                    </ul>
                </div>
                <div class="col-sm-9 col-md-10 col-sm-offset-3 col-md-offset-2 main">
                    <h4 class="text-center">Bonjour <?php echo $_SESSION['member-id'][0]->nom_utilisateur; ?>&nbsp;<?php echo $_SESSION['member-id'][0]->prenom_utilisateur; ?></h4>
                    <hr class="row-featurette" />
                    <?php echo $output; ?>
                </div>
            </div>
        </div>
    </body>
</html>
<?php } else { redirect('connect'); } ?>