<div class="col-md-12 contrats">
    <div class="bg-grey">
        <h2 class="text-muted nom-formation"></h2>
        <div>
            <!-- Nav tabs -->
            <ul id="rentres-tabs" class="nav nav-tabs" role="tablist">
            <?php foreach($type_form as $tform){ ?>
                <li role="rentres"><a href="#rentres<?php echo $tform->id_type_formation; ?>" aria-controls="rentres<?php echo $tform->id_type_formation; ?>" role="tab" data-toggle="tab"><?php echo $tform->secteur_type_formation; ?></a></li>
            <?php } ?>
            </ul>
            <!-- Tab panes -->
            
            <div class="tab-content">
            <?php foreach($type_form as $tform){ ?>
                <div role="tabpanel" class="tab-pane" id="rentres<?php echo $tform->id_type_formation; ?>">
                <?php foreach($form as $f) { 
                    if($f->id_type_formation == $tform->id_type_formation){
                        echo '<h3>'.$f->nom_formation.'</h3>';
                        echo '<hr class="featurette-divider" /><ul>';
                        foreach($rentres as $rentre){
                            if($rentre->formation_rentres == $f->id_formation) {
                                echo '<li>'.date('d-m-Y', strtotime($rentre->date_rentres)).'</li>'; 
                            }
                        }
                        echo '</ul>';
                    }
                } ?>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
</div>