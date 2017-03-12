<?php
 $path = $_SERVER['DOCUMENT_ROOT'];
 require_once($path."/Controllers/ItemController.php");
 require_once($path."/Models/Item.php");
 $itembase = new ItemController();
 $items_all= $itembase->get_item_list();  // all information for each item such as name , cost ,price ...
 // need to get a list of product
$check = 0;
 if($_SESSION['search']) {
     $items_all = $_SESSION['search'];
    $_SESSION['search'] = Null;
 }
?>

<div id ="itemcontainer">

    

  <?php
      // display 4 colums
      while($newitem = next($items_all) ) {
           // first travel list, need to goback ward for get the first element
          if($check == 0)
          {
              $newitem = prev($items_all);
              $check =1;
          }
    
  
    ?>
 
  <div id = "itemRow"class="row">
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="<?php echo $newitem["itempath"] ?>" target="_blank">
          <img src="<?php echo $newitem["itempath"]  ?>" alt="Lights"width="200" height="200">
          <div class="caption">
            <p><?php echo $newitem['itemname']?></p>
          </div>
        </a>
      </div>
      
    </div>
     <div class="col-md-3">
      <div class="thumbnail">
        <a href="<?php $newitem = next($items_all); echo $newitem["itempath"] ?>" target="_blank">
          <img src="<?php  echo $newitem["itempath"]  ?>" alt="Lights"width="200" height="200">
          <div class="caption">
            <p><?php echo $newitem['itemname']?></p>
          </div>
        </a>
      </div>
      
    </div>
         <div class="col-md-3">
      <div class="thumbnail">
        <a href="<?php $newitem = next($items_all); echo $newitem["itempath"] ?>" target="_blank">
          <img src="<?php  echo $newitem["itempath"]  ?>" alt="Lights"width="200" height="200">
          <div class="caption">
           <p><?php echo $newitem['itemname']?></p>
          </div>
        </a>
      </div>
      
    </div>
      
           <div class="col-md-3">
      <div class="thumbnail">
        <a href="<?php $newitem = next($items_all); echo $newitem["itempath"] ?>" target="_blank">
          <img src="<?php  echo $newitem["itempath"]  ?>" alt="Lights"width="200" height="200">
          <div class="caption">
           <p><?php echo $newitem['itemname']?></p>
          </div>
        </a>
      </div>
      
    </div>
   
    
  </div>
    
    
    
      <?php  }?>
    
    
    
    
    
    
</div>