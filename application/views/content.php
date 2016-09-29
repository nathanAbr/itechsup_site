<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

    <body>
        <?php 
            echo $header;
            if(isset($content)) {
                echo $content;
            }
            else {
                echo '<h1>Désolé, il n\'y a rien à afficher à cette URL</h1>';
            }
        ?>
        
        <footer>
                
        </footer>
        
        <script src="<?php echo base_url('assets/js/jquery-1.12.3.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
        <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>
    </body>
</html>