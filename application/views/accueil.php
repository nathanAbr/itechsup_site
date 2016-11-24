<!-- CAROUSEL -->
<section id="carousel">
    <div id="myCarousel" class="marketing carousel slide" data-ride="carousel">
        <?php 
            $active = "active";
            $i = 0;
        ?>

        <ol class="carousel-indicators">
        <?php foreach($slide as $img){ ?>
            <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="<?php echo $active; ?>"></li>
            <?php 
                $i++;
                $active = "";
            ?>
        <?php } ?>
        </ol>

        <div class="carousel-inner" role="listbox">
        <?php $active = "active"; ?>
        <?php foreach($slide as $img){ ?>
            <div class="item <?php echo $active; ?>">
                <div class="img-carousel" style="background-image: url(<?php echo base_url('assets/img/carousel/'.$img->img_carousel); ?>);"></div>
                <div class="container">
                    <div class="carousel-caption">
                        <h1><?php echo $img->titre_carousel; ?></h1>
                        <h3><?php echo $img->text_carousel; ?></h3>
                    </div>
                </div>
            </div>
            <?php $active = "" ?>
        <?php } ?>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<!-- PRESENTATION -->
<section id="presentation">
    <div class="container marketing">
        <div class="row text-center">
            <div class="col-md-3 presentation-element">
                <img class="img-circle" src="assets/img/presentation/feature9.png" alt="Generic placeholder image" width="110" height="110">
                <h2>Itechsup</h2>
                <a href="<?php echo site_url('index.php/presentation'); ?>">Présentation du centre</a>
            </div>
            <div class="col-md-3 presentation-element">
                <img class="img-circle" src="assets/img/presentation/feature7.png" alt="Generic placeholder image" width="110" height="110">
                <h2>Nos prochaines rentrés</h2>
                <a href="<?php echo site_url('index.php/rentres'); ?>">Nos prochaines rentrés</a>
            </div>
            <div class="col-md-3 presentation-element">
                <img class="img-circle" src="assets/img/presentation/feature8.png" alt="Generic placeholder image" width="110" height="110">
                <h2>Pré-inscription</h2>
                <a href="<?php echo site_url('index.php/candidater'); ?>">Rejoignez-nous</a>
            </div>
            <div class="col-md-3 presentation-element">
                <img class="img-circle idalis" src="assets/img/presentation/feature7.png" alt="Generic placeholder image" width="110" height="110">
                <h2>Formations courtes</h2>
                <a href="http://www.idalis.fr">Idalis</a>
                <!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
            </div>
        </div>
    </div>
</section>

<!-- FORMATION -->
<section id="formations">
    <div class="marketing img-formation" style="background-image: url(<?php echo base_url('assets/img/main-top-body.png'); ?>);">
        <h1>Nos formations</h1>
        <h2>Notre école propose des formations diplômantes du BAC +2 au BAC +5</h2>
    </div>
    <div class="container-fluid marketing">
        <div class="row text-formation">
        <?php foreach($type_formation as $type){ ?>
            <div class="col-md-4">
                <div class="panel panel-perso">
                    <div class="panel-heading accueil"><h2 class="text-center"><?php echo $type->nom_type_formation; ?></h2></div>
                    <div class="panel-footer">
                        <p class="text-center">En savoir</p>
                        <a class="lien-panel-footer" href="<?php echo site_url('index.php/formation/formations/'.$type->id_type_formation); ?>">
                            <span class="glyphicon glyphicon-plus-sign"></span>
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
    <hr class="featurette-divider">
</section>


<!-- EVENEMENTS -->
<section id="evenements">
    <div class="container marketing">
    <div class="row">
    <h1>Prochains événements</h1>
    <?php foreach($news as $new){ ?>
        <div class="col-md-4 text-center">
            <h3><?php echo $new->titre_event; ?></h3>
            <p><?php echo date('d/m/Y', strtotime($new->date_event)); ?></p>
            <p><?php echo $new->text_event; ?></p>
        </div>
    <?php } ?>
    </div>
    </div>
</section>