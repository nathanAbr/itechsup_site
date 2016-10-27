<html lang="fr">    
    <head>
        <title>ITECHSUP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <link href="<?php echo base_url('assets/dist/css/bootstrap.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/dist/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
        <link type="text/css" href="<?php echo base_url('assets/dist/css/menu_lateral.css');?>" rel="stylesheet" media="screen" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url('assets/dist/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/dist/css/accueil.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/dist/css/formations.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/dist/css/style.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/dist/css/contact.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/dist/css/contrats.css');?>" rel="stylesheet" type="text/css" />
        <!-- scripts -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/dist/js/menu_lateral.js');?>"></script>
        <!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//localhost/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//localhost/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
    </head>
    <body>
    <div id="menu">
        <a href="javascript:;" class="close glyphicon glyphicon-remove"></a>
        <ul class="menu_lateral">
            <div class="menu-header-lateral">
                <li><a href="#">Test d'orientation</a></li>
                <li><a href="#">Télécharger la plaquette</a></li>
                <li><a href="<?php echo site_url('index.php/candidater'); ?>">Candidater</a></li>
                <li><a href="<?php echo site_url('index.php/contact'); ?>">Nous contacter</a></li>
            </div>
            <!--<?php foreach($news as $new){ ?>
                <div class="event-header">
                    <div class="text-center">
                        <h2 class="title-event-header text-center">Prochain évènement</h2>
                        <h4 class="text-center"><?php echo $new->titre_event; ?></h4>
                        <p><?php echo date('d/m/Y', strtotime($new->date_event)); ?></p>
                        <p><?php echo $new->text_event; ?></p>
                    </div>
                </div>
            <?php } ?>-->

        </ul>
    </div>
    <div id="page">
    <header>        
        <!-- BANNIERE -->
        <div class="container">
            <a href="javascript:;" class="menu_btn glyphicon glyphicon-menu-left"></a>
            <div class="row banniere">
                <div class="col-md-6">
                    <img src="<?php echo base_url('assets/img/logo/logo.png');?>" alt="Itechsup" id="logo_header"/>
                </div>
                <div class="col-md-6 banniere-social">
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
                    <a class="navbar-brand" href=""><img alt="Itechsup" width="70" height="25" src="<?php echo base_url('assets/img/logo/logo2.png');?>"></a>
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
                                <li><a href="<?php echo site_url('index.php/salons'); ?>">Salons</a></li>   
                                <li><a href="<?php echo site_url('index.php/reunions_infos'); ?>">Réunions d'information</a></li>
                                <li><a href="<?php echo site_url('index.php/portes_ouvertes'); ?>">Portes ouvertes</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo site_url('index.php/offres'); ?>">Offre</a></li>
                        <li class="dropdown"><a class="dropdown-toggle drop menu" data-toggle="dropdown" href="#">Contact <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('index.php/contact'); ?>">Nous contacter</a></li>
                                <li><a href="<?php echo site_url('index.php/trouver'); ?>">Nous trouver</a></li>
                                <li><a href="<?php echo site_url('index.php/candidater'); ?>">Demande de candidature</a></li>
                            </ul>
                        </li>
                        <li class="mon_espace"><a href="#" class="btn btn-warning" role="button">Mon espace</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>