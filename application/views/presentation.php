<?php foreach($images_pages as $image){ ?>
    <div class="img_page" style="background-image:url(<?php echo base_url($image->lien_img_pages_head); ?>);background-repeat: no-repeat;background-attachment:fixed;background-size:100% 75%;">
        <h1 class="text-center titre_img_page"><?php echo $image->titre_img_pages_head; ?></h1>
    </div>
<?php } ?>
<hr class="featurette-divider">
<?php foreach($presentation as $pres){ ?>
    
        <div class="container-content">
            <h3><?php echo $pres->titre_presentation; ?></h3>
            <p class="text-justify"><?php echo $pres->text_presentation; ?></p>
        </div>
    
<?php } ?>