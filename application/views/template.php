<!DOCTYPE html>
<html lang="en">
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
                    <a class="navbar-brand" href="#">Project name</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                    <form class="navbar-form navbar-right">
                        <input type="text" class="form-control" placeholder="Search...">
                    </form>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                        <li class="active"><a href="#">Statistiques</a></li>
                        <li><a href="#">Formations</a></li>
                        <li><a href="#">Contrats</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Témoignages</a></li>
                        <li><a href="#">Présentation</a></li>
                        <li><a href="#">Partenaires</a></li>
                        <li><a href="#">Images</a></li>
                    </ul>
                </div>
                <div class="col-sm-9 col-md-10 col-sm-offset-3 col-md-offset-2 main">
                    <?php echo $output; ?>
                </div>
            </div>
        </div>
    </body>
</html>