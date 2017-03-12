<?php
  include '/Header_and_Footer/navbar.php';
  $path = $_SERVER['DOCUMENT_ROOT'];
  require_once($path."/Controllers/ItemController.php");
  require_once($path."/Models/Item.php");

?>
<style>
    #inventoryContainer{
        postion: fixed;
         top: 100;
        
    }
    
</style>

<div id ="inventoryContainer" class="container">
    <form action ="<?php $_PHP_SELF ?>"  method="post">
    <div class="form-group row">
        <label for="inputusername"  class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
            <input type="username" name= "username" class="form-control" id="inputusername" placeholder="username">
        </div>
         <label for="inputpassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password"   name= "password"class="form-control" id="inputpassword" placeholder="password">
            <small id="emailHelp" class="form-text text-muted">enter number only</small>
        </div>
    </div>
        <button type ="submit" class="btn btn-primary"> Sign up </button>
    </form>
</div>
        
        
        
        
        
        
    
    
    
    
