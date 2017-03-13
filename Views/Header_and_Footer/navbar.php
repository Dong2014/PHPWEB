<?php 
error_reporting(0);
if (!isset($_SESSION)) {
  session_start();
    $state = "Sign up";
}
if(isset($_SESSION))
{
    if($_SESSION['username'])
    {
    $state = $_SESSION['username'];
    }  else {
         $state = "Sign up";
    }
     
    
}
  $path = $_SERVER['DOCUMENT_ROOT'];
  require_once($path."/Controllers/ItemController.php");
  require_once($path."/Models/Item.php");
?>

<html>
    <meta http-equiv="Location" content=" http://localhost:1080/">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <link href="CSS/navbar.css" rel="stylesheet">
        
        <title>PC Shop</title>
    </head>
    <style>
footer {
  position: fixed;
  bottom: 10;

  padding: 1rem;
  background-color: #efefef;
  text-align: center;
}



  

        
    </style>

    <body>
        <div id="navbar">
            <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="/">PC SHOP</a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="partslink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Parts
                            </a>
                            <div  class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
                                
                                    <a id ="cat" class="dropdown-item" href="/Views/Kinds/kind1.php">kind1</a>
                                    <a id ="cat" class="dropdown-item" href="/Views/Kinds/kind2.php">Kind2</a>
                                    <a id ="cat" class="dropdown-item" href="/Views/Kinds/kind3.php">Kind3</a>
                               
                            </div>
                        </li>
                        <li class="nav-item">
                            <a id = "login"class="nav-link" href="/Views/signup.php"><?php  echo $state ?></a>
                        </li>
                     <li class="nav-item">
                            <a id = "inventory"class="nav-link" href="/Views/inventory.php">Inventory</a>
                      </li>
                    </ul>
                    <form action ="<?php $_PHP_SELF ?>"  method="post" class="form-inline my-2 my-lg-0">
                        <input name ="search" class="form-control mr-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>
   



      
            

        <div><footer id="footer">
                <div><nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav></div>
                <a>This is footer This is footer This is footer This is footer This is footer This is footer This is footer This is footer This is footer This is footer This is footer </a>
        </footer></div>
    </body>
    
</html>



<?php 
if($_POST['search'])
{
    $inventory = new ItemController();
    echo "POST: " . $_POST['search'];
    $list = $inventory->search_item($_POST['search']);
    $_SESSION['search'] = $list;
    
    
    
   
    
    
    
   
}  else {
    

    
}
?>




