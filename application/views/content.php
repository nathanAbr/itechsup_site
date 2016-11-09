<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

        <?php 
            echo $header;
            if(isset($content)){ 
            if(current_url() != site_url()){ ?>
                <header id="img-page">
                    <?php foreach($images_pages as $image){ ?>
                        <div class="marketing img_page" style="background-image:url(<?php echo base_url('assets/img/images_pages/'.$image->lien_img_pages_head); ?>);">
                            <h1 class="text-center titre_img_page"><?php echo $image->titre_img_pages_head; ?></h1>
                        </div>
                    <?php } ?>
                </header>
                <div class="container marketing">
            <?php } ?>
            <?php
                echo $content;
            } else
            {
                echo '<h1>Désolé, il n\'y a rien à afficher à cette URL</h1>';
            }
        ?>

        </div>
        
        <footer>
                <!---->
                <div class="panel-group panel-footer" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="bandeau-footer">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="hidden-lg">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title text-center">
                                        <span class="glyphicon glyphicon-eject"></span>  
                                    </h4>
                                </div>
                            </a>
                        </div>  
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body panel-footer">
                                <div class="mastfoot">
                                    <div class="inner">
                                        <div class="container">
                                            <div class="row row-footer">
                                                <div class="col-xs-3">
                                                    <div class="logo-accueil-footer"></div>
                                                </div>
                                                <div class="col-xs-1">
                                                </div>
                                                <div class="col-xs-3 prestation-footer">
                                                    <h4>Liens utiles</h4>
                                                    <a class="dropdown-toggle" href="<?php echo site_url('index.php/presentation'); ?>">Présentation</a></br>
                                                    <a class="dropdown-toggle" href="<?php echo site_url('index.php/offres'); ?>">Nos offres</a></br>
                                                    <a class="dropdown-toggle" href="<?php echo site_url('index.php/reunions_infos'); ?>">Nos réunions d'informations</a></br>
                                                    <a class="dropdown-toggle" href="<?php echo site_url('index.php/news'); ?>">Nos évènements</a></br>
                                                    <a class="dropdown-toggle" href="<?php echo site_url('index.php/portes_ouvertes'); ?>">Nos portes ouvertes</a></br>
                                                    <a class="dropdown-toggle" href="<?php echo site_url('index.php/salons'); ?>">Nos salons</a></br>
                                                </div>
                                                <div class="col-xs-2">
                                                    <h4>&Acirc; savoir</h4>
                                                    <p><a href="#">Mentions légales</a></p>
                                                    <p><a href="<?php echo site_url('index.php/trouver'); ?>">Nous trouver</a></p>
                                                </div>
                                                <div class="col-xs-3 social">
                                                    <h4>Social</h4>
                                                    <a href="#"><div class="social"><img src="<?php echo base_url('assets/img/social/png/64/1.png'); ?>" alt="" /></div></a>
                                                    <a href="#"><div class="social"><img src="<?php echo base_url('assets/img/social/png/64/7.png'); ?>" alt="" /></div></a>
                                                    <a href="#"><div class="social"><img src="<?php echo base_url('assets/img/social/png/64/10.png'); ?>" alt="" /></div></a>
                                                </div>
                                            </div>
                                            <hr class="" />
                                            <div class="row">
                                                <p>Copyright - &copy; 2015. Tous droits réservés à ITECHSUP</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="<?php echo base_url('assets/js/jquery-1.12.3.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
        <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>
    </body>
</html>