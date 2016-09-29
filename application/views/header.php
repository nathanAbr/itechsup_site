<html lang="fr">    
    
    <head>
        <title>ITECHSUP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <link href="<?php echo base_url('assets/dist/css/bootstrap.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/dist/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/dist/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/dist/css/accueil.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/dist/css/style.css');?>" rel="stylesheet" type="text/css" />
    </head>

    <header>
        <!-- BANNIERE -->
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <img src="<?php echo base_url('assets/img/logo/logo.png');?>" alt="Itechsup" id="logo_header"/>
                </div>
                <div class="clearfix visible-xs-block"></div>
                <div class="col-xs-6 col-sm-6 col-md-6 banniere">
                    <a href="https://www.facebook.com/itechsupformation/?fref=ts" target="_blank" class="btn btn-social-icon btn-md btn-facebook" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-lg']);"><i class="fa fa-facebook"></i></a>
                    <a href="https://fr.linkedin.com/in/itech-sup-003949105" target="_blank" class="btn btn-social-icon btn-md btn-linkedin" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-lg']);"><i class="fa fa-linkedin"></i></a>
                    <a href="#" class="btn btn-warning" role="button">Mon espace</a>
                </div>
            </div>
        </div>

        <!-- NAVBAR -->
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="<?php echo site_url('index.php/'); ?>">Accueil</a></li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Itechsup <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('index.php/presentation'); ?>">Présentation</a></li>
                                <li><a href="<?php echo site_url('index.php/partenaires'); ?>">Ils nous font confiance</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Formations <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <?php foreach($header as $header_formation){ ?>
                                    <li><a href="<?php echo site_url('index.php/formation/formations/'.$header_formation->id_type_formation); ?>"><?php echo $header_formation->nom_type_formation; ?></a></li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">L'Alternance <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <?php foreach($contrat as $contrat_header){ ?>
                                    <li><a href="<?php echo site_url('index.php/contrats/contrat/'.$contrat_header->id_contrat); ?>"><?php echo $contrat_header->nom_contrat; ?></a></li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Vie du centre <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('index.php/news'); ?>">&Eacute;vénements</a></li> 
                                <li><a href="#">Salons</a></li>   
                                <li><a href="#">Réunions d'information</a></li>
                                <li><a href="#">Portes ouvertes</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Offre</a></li>
                        <li class="dropdown"><a class="dropdown-toggle drop menu" data-toggle="dropdown" href="#">Contact <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('index.php/contact'); ?>">Nous contacter</a></li>
                                <li><a href="<?php echo site_url('index.php/trouver'); ?>">Nous trouver</a></li>
                                <li><a href="<?php echo site_url('index.php/candidater'); ?>">Demande de candidature</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>