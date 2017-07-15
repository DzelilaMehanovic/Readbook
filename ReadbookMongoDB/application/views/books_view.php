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
<div class="col-lg-9" id="left">

<div class="row"><div class="col-lg-12"><h2>Books</h2></div></div>
<div class="row" id="blogList">
<?php

foreach($books as $product) {
echo '
    <div class="col-lg-4 col-md-4 col-sm-4"> 
     <div class="col-lg-12" id="firstBook" >
     <div class="row over"><a href="singlebook/show/'.$product['id'].'" class="darken"><img src="'.base_url($product['image']).'" id="book"/></a></div>
     <div class="row">'.$product['name'].' '.$product['author'].'<br>'.$product['price'].'KM<span class="glyphicon glyphicon-shopping-cart"></span></div>
     </div>
  </div>';

}
?>



</div>



</div>
<div class="col-lg-3" id="right">
<div class="col-lg-12"><h2 id="profPhot">Find</h2></div>
<!--<div class="list-group">
  <button type="button" class="list-group-item list-group-item-action active">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</button>
  <button type="button" class="list-group-item list-group-item-action" id="allBooks">All books</button>
  <button type="button" class="list-group-item list-group-item-action" id="designBooks">Design</button>
  <button type="button" class="list-group-item list-group-item-action" id="mlBooks">Machine Learning</button>
</div>-->
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#menu0">Books</a></li>
    <li><a data-toggle="tab" href="#menu1">Author</a></li>
    <li><a data-toggle="tab" href="#menu2">Category</a></li>
    <li>
<form action="#" method="post" name="" id="form"><div class="form-group"><input type="submit" name="searchAll" value="All" id="searchAll" class="btn btn-primary"/></div></form>
</li>
  </ul>

    <div class="tab-content">

<div id="menu0" class="tab-pane fade in active">
<form action="#" method="post" name="" id="form">
<div class="form-group">
  <label for="bookNameS">Name of Book:</label>
  <input type="text" class="form-control" id="bookNameS" name = "bookNameS">
</div>
<div class="form-group">
<input type="submit" name="searchBN" value="Find" id="searchBN" class="btn btn-primary"/>
</div>
</form>
</div>

<div id="menu1" class="tab-pane fade in">
<form action="#" method="post" name="" id="form">
<div class="form-group">
  <label for="authorNameS">Name of Author:</label>
  <input type="text" class="form-control" id="authorNameS" name="authorNameS">
</div>

<div class="form-group">
<input type="submit" name="searchAN" value="Find" id="searchAN" class="btn btn-primary"/>
</div>
</form>
</div>


<div id="menu2" class="tab-pane fade in ">
<form action="#" method="post" name="" id="form">
<div class="form-group">
  <label for="bookCategoryS">Category of Book:</label>
  <input type="text" class="form-control" id="bookCategoryS" name="bookCategoryS">
</div>
<div class="form-group">
<input type="submit" name="searchBC" value="Find" id="searchBC" class="btn btn-primary"/>
</div>
</form>
</div>



</div>




</div>
</div>
 </div>
</div><!--container-->


</body>

<script type="text/javascript">
//hover image effect
 var $overlay = $('<div id="overlay">Read More</div>');
    $(".over ").mouseenter(function(){
            $(this).append($overlay.show());  
        })
        .mouseleave(function(){
            $overlay.hide();
        });

  $('.darken').hover(function() {
  $(this).find('img').fadeTo(500, 0.2);
}, function() {
    $(this).find('img').fadeTo(500, 1);
});


</script>
</html>
