<?php
session_start();
$product_ids = array();
//session_destroy();

//check if Add to Cart button has been submitted
if(filter_input(INPUT_POST, 'add_to_cart')){
    if(isset($_SESSION['shopping_cart'])){
        
        //keep track of how mnay products are in the shopping cart
        $count = count($_SESSION['shopping_cart']);
        
        //create sequantial array for matching array keys to products id's
        $product_ids = array_column($_SESSION['shopping_cart'], 'id');
        
        if (!in_array(filter_input(INPUT_GET, 'id'), $product_ids)){
        $_SESSION['shopping_cart'][$count] = array
            (
                'id' => filter_input(INPUT_GET, 'id'),
                'name' => filter_input(INPUT_POST, 'name'),
                'price' => filter_input(INPUT_POST, 'price'),
                'quantity' => filter_input(INPUT_POST, 'quantity')
            );   
        }
        else { //product already exists, increase quantity
            //match array key to id of the product being added to the cart
            for ($i = 0; $i < count($product_ids); $i++){
                if ($product_ids[$i] == filter_input(INPUT_GET, 'id')){
                    //add item quantity to the existing product in the array
                    $_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
                }
            }
        }
        
    }
    else { //if shopping cart doesn't exist, create first product with array key 0
        //create array using submitted form data, start from key 0 and fill it with values
        $_SESSION['shopping_cart'][0] = array
        (
            'id' => filter_input(INPUT_GET, 'id'),
            'name' => filter_input(INPUT_POST, 'name'),
            'price' => filter_input(INPUT_POST, 'price'),
            'quantity' => filter_input(INPUT_POST, 'quantity')
        );
    }
}

if(filter_input(INPUT_GET, 'action') == 'delete'){
    //loop through all products in the shopping cart until it matches with GET id variable
    foreach($_SESSION['shopping_cart'] as $key => $product){
        if ($product['id'] == filter_input(INPUT_GET, 'id')){
            //remove product from the shopping cart when it matches with the GET id
            unset($_SESSION['shopping_cart'][$key]);
        }
    }
    //reset session array keys so they match with $product_ids numeric array
    $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
}

//pre_r($_SESSION);

function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Open Farm</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container" style="margin-bottom:15px;">
    <div class="row">
      <div class="col-md-3">
        <img src="img/OpenFarm.png" id="logo" alt="Open Farm Logo">
      </div>
      <div class="col-md-3"><span class="fa f"></span>11, Elekahia Road, Port Harcourt
        <br> Find agents near you
      </div>    
      <div class="col-md-3">
        info@openfarm.com.ng
        <br> +23407034696973
      </div>
      <div class="col-md-3">
        <button class="btn btn-light text-uppercase" style="background: #00b2ff; color: #fff;">Register/Login</button>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg" style="background: #00b2ff;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 55px;">
      <ul class="navbar-nav mr-auto text-uppercase">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"  style="color: #fff;">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"  style="color: #fff;">Funding</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"  style="color: #fff;">Training</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"  style="color: #fff;">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"  style="color: #fff;">Storage Facilities</a>
        </li>
      </ul>
        
       <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <span class="input-group-text" id="basic-addon2"><i class="fa fa-search"></i></span>
      </form>
    </div>
  </nav>
    
    <br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <?php $date = date('D-M-Y');
                    echo date('D'.' '.'M'.' '.'Y');
                ?>
      </div>
        
      <div class="col-md-10">
        <div class="container">
          <div id="subheader" class="row">
            <div class="col-md-5">
              
            </div>
            <div class="col-md-3" id="view">
              <ul>
                <li> View as:</li>
                <li class="active">
                  <a href="#">LIST</a>
                </li>
                <a href="#">CARD</a>
                <li></li>
              </ul>
            </div>
            <div class="col-md-4" id="view1">
                <ul>
                    <li><img src="AgroHackAssets/add-user.svg"></li>
                    <li><img src="AgroHackAssets/notifications.svg"></li>
                    <li><img src="AgroHackAssets/report.svg"></li>
                    <li><img src="AgroHackAssets/profile-pic.svg"></li>
                </ul>
                <ul>
                    <li>New</li>
                    <li>Notification</li>
                    <li>Report</li>
                    <li>Profile</li>
                </ul>

            </div>
          </div>
            <hr>
 
         <div class="container">
        <?php

        $connect = mysqli_connect('localhost', 'root', '', 'cart');
        $query = 'SELECT * FROM products ORDER by id ASC';
        $result = mysqli_query($connect, $query);

        if ($result):
            if(mysqli_num_rows($result)>0):
                while($product = mysqli_fetch_assoc($result)):
                //print_r($product);
                ?>
                <div class="col-sm-4 col-md-3" style="float: right;">
                    <form method="post" action="cart.php?action=add&id=<?php echo $product['id']; ?>">
                        <div class="products">
                            <img src="<?php echo $product['image']; ?>" width="200px" height="200px" class="img-responsive" />
                            <h4 class="text-info"><?php echo $product['name']; ?></h4>
                            <h4>$ <?php echo $product['price']; ?></h4>
                            <input type="text" name="quantity" class="form-control" value="1" />
                            <input type="hidden" name="name" value="<?php echo $product['name']; ?>" />
                            <input type="hidden" name="price" value="<?php echo $product['price']; ?>" />
                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-info"
                                   value="Add to Cart" />
                        </div>
                    </form>
                </div>
                <?php
                endwhile;
            endif;
        endif;   
        ?>
        <div style="clear:both"></div>  
        <br />  
        <div class="table-responsive">  
        <table class="table">  
            <tr><th colspan="5"><h3>Order Details</h3></th></tr>   
        <tr>  
             <th width="40%">Product Name</th>  
             <th width="10%">Quantity</th>  
             <th width="20%">Price</th>  
             <th width="15%">Total</th>  
             <th width="5%">Action</th>  
        </tr>  
        <?php   
        if(!empty($_SESSION['shopping_cart'])):  
            
             $total = 0;  
        
             foreach($_SESSION['shopping_cart'] as $key => $product): 
        ?>  
        <tr>  
           <td><?php echo $product['name']; ?></td>  
           <td><?php echo $product['quantity']; ?></td>  
           <td>$ <?php echo $product['price']; ?></td>  
           <td>$ <?php echo number_format($product['quantity'] * $product['price'], 2); ?></td>  
           <td>
               <a href="cart.php?action=delete&id=<?php echo $product['id']; ?>">
                    <div class="btn-danger">Remove</div>
               </a>
           </td>  
        </tr>  
        <?php  
                  $total = $total + ($product['quantity'] * $product['price']);  
             endforeach;  
        ?>  
        <tr>  
             <td colspan="3" align="right">Total</td>  
             <td align="right">$ <?php echo number_format($total, 2); ?></td>  
             <td></td>  
        </tr>  
        <tr>
            <!-- Show checkout button only if the shopping cart is not empty -->
            <td colspan="5">
             <?php 
                if (isset($_SESSION['shopping_cart'])):
                if (count($_SESSION['shopping_cart']) > 0):
             ?>
                <a href="#" class="button">Checkout</a>
             <?php endif; endif; ?>
            </td>
        </tr>
        <?php  
        endif;
        ?>  
        </table>  
         </div>
        </div>
              
              
  



      </div>




      </div>
    </div>


  </div>



  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
</body>

</html>