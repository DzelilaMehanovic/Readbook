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

<?php
foreach($books as $product) {
 
  echo '

<div class="row"><div class="col-lg-12"><h2>'.$product['name'].'</h2></div></div>
<div class="row">
  <div id="one" class="col-lg-4"><img src="'.base_url($product['image']).'" id="blogIcon"/></div>
  <div id= "two" class="col-lg-8">

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#info">Information</a></li>
    <li><a data-toggle="tab" href="#descript">Description</a></li>
  </ul>

  <div class="tab-content">
    <div id="info" class="tab-pane fade in active">

<div class="col-lg-12 info1" ><label >Author&nbsp</label><p class="text-info">'.$product['author'].'</p></div>
<div class="col-lg-12 info1" ><label >Name&nbsp</label><p class="text-info">'.$product['name'].'</p></div>
<div class="col-lg-12 info1" ><label >Category&nbsp</label><p class="text-info">'.$product['category'].'</p></div>
<div class="col-lg-12 info1"><label >Price&nbsp</label><p class="text-info">'.$product['price'].'KM</p></div>

    </div>
    <div id="descript" class="tab-pane fade">
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
    <p>Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>
</div>
<div class="col-lg-12" >

<form class="" role="form" id="myform" action="../../cart/add/'.$product['id'].'" method="post" >
 <div class="form-group">

<input type="submit" name="addCart" value="Add to Cart" id="addCart" class="btn btn-primary"/></div>


</div>
</form>



</div>
</div>'; 
}

?>

</div>
<div class="col-lg-5" id="right">
<div class="col-lg-12"><h2 id="profPhot">Quotes</h2></div>

<div class="col-lg-12"><blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</blockquote></div>
<div class="col-lg-12"><blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</blockquote></div>
<div class="col-lg-12"><blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</blockquote></div>

</div>
</div>
 </div>
</div><!--container-->

</body>
<script type="text/javascript">

    </script>
</html>
