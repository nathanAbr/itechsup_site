<?php session_start(); ?>

<html>
    <head>
        <style>
        body{
         width: 1200px;
         font-family: "arial";
        }
        .head{
            height: 250px;
        }
        .image-head{
            position: absolute;
            width: 100%;
        }
        .block-img-head{
            width: 1200px;
            height: 500px;
            position: absolute;
            top: 0;
            left: 0;
            margin:0;
            overflow: hidden;
        }
        .title-head{
            z-index: 1000;
            width: 900px;
            height: 150px;
            background-color: #CCC;
            position: absolute;
            left: 0;
            top: 125px;
            border-radius: 0px 10px 10px 0px;
        }
        .element-title-head{
            display: inline-block;
            vertical-align: middle;
            margin-left: 10px;
            margin-top: 20px;
        }
        .text-title-head{
            height: 100px;
            margin-left: 190px;
        }
        .text-title-head h1{
            font-size: 45px;
            line-height: 10px;
            color: #444444;
        }
        .text-title-head h2{
            float: right;
            line-height: 0;
            font-size: 30px;
            color: #FF5000;
        }
        .img-title-head img{
            width: 300px;
            margin-left: 20px;
        }
        
        .image-head-1{
            left: -70%;
            top: -205px;
            width: 110%;
            transform: rotate(20deg);
            z-index: 10;
        }
        .image-head-2{
            left: 30%;
            top: 50%;
            width: 70%;
            transform: rotate(20deg);
            z-index: 9;
        }
        .content{
            position: absolute;
            width:1200px;
            top: 500px;
            left: 0;
            background-color: #CCC;
        }
        
        .formation {
            position: absolute;
            width: 100%;
            height: 180px;
            background-color: #DDD;
            border-bottom: 4px solid #3d454f;
            margin-bottom: 10px;
        }
        
        .formation h3{
            position: absolute;
            z-index: 11;
            width: 30%;
            text-align: center;
            text-transform: uppercase;
            margin-top: 70;
            font-size: 35px;
            color: white;
        }
        
        .reverse h3{
            right: 0;
        }
        
        .title-formation{
            position : absolute;
            height: 180px;
            width: 30%;
            font-weight: bold;
        }
        
        .formation-2{
            margin-top: 184px;
        }
         .formation-3{
            margin-top: 368px;
        }
        
        .formation-1 .title-formation{
            background-color:#FF5000;
            transform-origin: top right;
            transform: skew(20deg);
        }
        
        .formation-3 .title-formation{
            background-color: #D74100;
            transform-origin: top right;
            transform: skew(10deg);
        }
        
        .reverse .title-formation{
            right: 0;
            background-color: #ea4600;
            transform-origin: top right;
            transform: skew(-25deg);
        }
        
        .formation-1 .fictif{
            position : absolute;
            height: 180px;
            width: 30%;
            background-color:#FF5000;
        }
        
        .formation-3 .fictif{
            position : absolute;
            height: 180px;
            width: 30%;
            background-color:#D74100;
        }
        
        .formation-2 .fictif{
            position : absolute;
            height: 180px;
            right: 0;
            width: 30%;
            background-color: #ea4600;
        }
        .content-formation{
            margin-left: 30%;
            width: 70%;
        }
        .reverse .content-formation{
            margin-left: -20px;
        }
        .inline{
            display: inline-block;
        }
        .titre-content-formation{
            float: right;
            color: FF5000;
            margin-right: 10px;
        }
        li{
            text-decoration: none;
            list-style-type: none;
        }
        footer{
            width: 1200px;
            text-align:center;
        }
        footer img{
            margin-top: 400px;
            width: 100%;
        }
        </style>
    </head>
    <body>
        <header>
            <div class="head">
                <div class="block-img-head">
                    <img class="image-head image-head-1" src="<?php echo base_url($_SESSION['img1']); ?>" alt="test" />
                    <img class="image-head image-head-2" src="<?php echo base_url($_SESSION['img2']); ?>" alt="test" />
                    <img class="image-head image-head-3" src="<?php echo base_url($_SESSION['img3']); ?>" alt="test" />
                </div>
                <div class="title-head">
                    <div class="element-title-head img-title-head"><img src="http://www.itechsup.fr/images/logo/logo_itechsup.png" alt="de" /></div>
                    <div class="element-title-head text-title-head"><h1><?php echo $_SESSION['titre']; ?></h1><h2><?php echo $_SESSION['sousTitre']; ?></h2></div>
                </div>
            </div>
        </header>
        <div class="content">
        <?php
        $i=1;
        $inverse = false;
        foreach($_SESSION['secteur'] as $s){
        if($s->nom_type_formation != "Formations Inter-Intra"){
            if(!$inverse){
        ?>
            <div class="formation formation-<?php echo $i; ?>">
                <div class="fictif"></div>
                <h3><?php echo $s->nom_type_formation; ?></h3>
                <div class="title-formation"></div>
                <div class="content-formation">
                    <div class="text-content-formation inline">
                        <ul>
                        <?php 
                        foreach($_SESSION['formation'] as $f){
                            if($f->id_type_formation == $s->id_type_formation){
                            ?>
                            <li><?php echo $f->nom_formation; ?></li>
                        <?php }
                        } ?>
                        </ul>
                    </div>
                    <div class="titre-content-formation inline">
                        <ul>
                        <?php 
                        foreach($_SESSION['formation'] as $f){
                            if($f->id_type_formation == $s->id_type_formation){
                            ?>
                            <li><?php echo $f->titre_formation; ?></li>
                        <?php  }
                        } ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php $i++; $inverse = true; } else { ?>
            <div class="formation formation-<?php echo $i; ?> reverse">
                <div class="fictif"></div>
                <h3><?php echo $s->nom_type_formation; ?></h3>
                <div class="title-formation"></div>
                <div class="content-formation">
                    <div class="text-content-formation inline">
                        <ul>
                        <?php 
                        foreach($_SESSION['formation'] as $f){
                            if($f->id_type_formation == $s->id_type_formation){
                            ?>
                            <li><?php echo $f->nom_formation; ?></li>
                        <?php }
                        } ?>
                        </ul>
                    </div>
                    <div class="titre-content-formation inline">
                        <ul>
                        <?php 
                        foreach($_SESSION['formation'] as $f){
                            if($f->id_type_formation == $s->id_type_formation){
                            ?>
                            <li><?php echo $f->titre_formation; ?></li>
                        <?php  }
                        } ?>
                        </ul>
                    </div>
                </div>
            </div>
        
        <?php $i++; $inverse = false; } 
        } }?>
        </div>
        <footer>
            <img src="<?php echo base_url('uploads/pdf/img/CAPTURE.png'); ?>" alt="" />
        </footer>
    </body>
</html>
