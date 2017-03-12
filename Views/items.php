<?php
 $path = $_SERVER['DOCUMENT_ROOT'];
 require_once($path."/Controllers/ItemController.php");
 require_once($path."/Models/Item.php");
 $itembase = new ItemController();
 $items= $itembase->get_item_list();
 
 // need to get a list of product

$check = 0;

?>

<div id ="itemcontainer">

    

  <?php
      
      while($newitem = next($items)) {
      if($check == 0)
      {
        
         $newitem = prev($items);
    
         
          $check = 1;
        
      }
   
      
      
      
        
  
    ?>
  <div id = "itemRow"class="row">
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="<?php echo $newitem ?>" target="_blank">
          <img src="<?php echo $newitem ?>" alt="Lights"width="200" height="200">
          <div class="caption">
            <p><?php echo $newitem?></p>
          </div>
        </a>
      </div>
    </div>
       <div class="col-md-3">
      <div class="thumbnail">
        <a href="<?php echo $newitem = next($items) ?>" target="_blank">
          <img src="<?php echo $newitem ?>" alt="Lights"width="200" height="200">
          <div class="caption">
            <p><?php echo $newitem ?></p>
          </div>
        </a>
      </div>
    </div>
       <div class="col-md-3">
      <div class="thumbnail">
        <a href="<?php echo $newitem = next($items) ?>" target="_blank">
          <img src="<?php echo $newitem ?>" alt="Lights"width="200" height="200">
          <div class="caption">
            <p><?php echo $newitem?></p>
          </div>
        </a>
      </div>
    </div>
       <div class="col-md-3">
      <div class="thumbnail">
        <a href="<?php echo $newitem = next($items) ?>" target="_blank">
          <img src="<?php echo $newitem ?>" alt="Lights"width="200" height="200">
          <div class="caption">
            <p><?php echo $newitem?></p>
          </div>
        </a>
      </div>
    </div>
    
  </div>
    
    
    
      <?php  }?>
    
    
    
    
    
    
</div>