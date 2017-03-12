<?php
?>

<a> this is kind 2</a>
    <div>
        <ul class="list-group">
            
             <?php for($i = 1; $i < 16; $i++) {   $location = $path.$i .".jpg";echo "path : ".$location; ?>
             <li class="list-group-item"><img src= "<?php echo $location?>" class="img-responsive" alt="Cinque Terre" width="300" height="200"></li>
             <?php  }?>        
            
            
        </ul>
        
    </div>
    
