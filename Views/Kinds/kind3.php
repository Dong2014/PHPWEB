<?php

  $path = $_SERVER['DOCUMENT_ROOT'];
  require_once($path."/Controllers/ItemController.php");
  require_once($path."/Models/Item.php");
  /**
  $input['itemname'] = "ASUS122";
  $input['itemprice'] = 100.00;
  $input['itemcost'] = 50.00;
  $input['itemunits'] = 30;
  $input['itemcat'] ="motherboard";
  $input['itempath'] = "http://localhost:1080/Sources/computer%20parts/motherboards/m2.jpg";
  $input['itemhit'] = 2;
   */
  
  $itembase = new ItemController();
  $itemlist = $itembase->get_item_list();
  print_r($itemlist);
?>

