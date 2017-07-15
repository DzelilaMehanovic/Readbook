<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Readbook</title>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <link rel = "stylesheet" type = "text/css" href ="<?php echo base_url();?>assets/css/aboutUs.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <?php include 'menu.php'; ?>

<div class="container1" >
<div class="row" id="aboutRow">
<div class="col-lg-7" id="left">
<?php if ($this->session->userdata('login')){ ?>
<div class="row"><div class="col-lg-12"><h2>Shopping Cart</h2></div></div>

<div class="row" >


  <table id="cart" class="table table-hover table-condensed ">
            <thead>
            <tr>
              <th id="t40" >Product</th>
              <th id="t15" >Price</th>
              <th id="t15" >Quantity</th>
              <th id="t15" >Subtotal</th>
            </tr>
          </thead>
          <tbody>
<?php
$totalPrice = 0;
          foreach($books as $product) {
 echo'
            <tr>
              <td data-th="Product"><h4 >'.$product['bookName'].'</h4></td>
              <td data-th="Price">'.$product['bookPrice'].'</td>
              <td data-th="Quantity">1<!--<input type="number" class="form-control text-center" value="1">--></td>
              <td data-th="Subtotal" >'.$product['bookPrice'].'</td>
           </tr>';
       $totalPrice +=$product['bookPrice'];
}
?>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="3" ></td>
     
  <?php echo '<td class="hidden-xs text-center"><strong>Total&nbsp;&nbsp;'.$totalPrice.'</strong></td>'; ?>
            </tr>
          </tfoot>
        </table> 
</div>
<div class="col-lg-12"> 
<form class="" role="form" id="myform" action="cart/removeAllCart" method="post" >
 <div class="form-group  col-lg-2"> 
<input type="submit" name="removeAllCart" value="Remove all" id="submitOrder" class="btn btn-primary"/></div>
</form>

<form class="" role="form" id="myform" action="cart/submit" method="post" >
 <div class="form-group col-lg-2"> 
<input type="submit" name="submitCart" value="Submit order" id="submitOrder" class="btn btn-primary"/></div>
</form>
</div>

<?php } else { ?>


<div class="row"><div class="col-lg-12"><h2>You are not logged in</h2></div></div>
<div class="row"><div class="col-lg-12" ><a href="<?php echo base_url(); ?>index.php/signup/index" class="menuLink"><button type="button" class="btn btn-primary" id="signButtonProfile">Sign up</button></a></div></div>

<div class="row"><div class="col-lg-12" ><a href="<?php echo base_url(); ?>index.php/login/index" class="menuLink"><button type="button" class="btn btn-primary" id="loginButonProfile">Log in</button></a></div></div>


        <?php } ?>




<!--<button type="button" class="btn btn-primary" id="cartSubmitButton">Submit</button>-->


</div>




<div class="col-lg-5" id="right">
<div class="row"><div class="col-lg-12"><h2></h2></div></div>
<div class="row"><div class="col-lg-12 rotateIcon"><img src="<?php echo base_url('assets/images/cart.png');?>" id="person" class="rotate" /></div></div>
<div class="row"><div class="col-lg-12" id="sentence">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div></div>

</div>

</div>
</div><!--container-->


</body>
</html>
