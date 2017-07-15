<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Readbook</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" type = "text/css" href ="<?php echo base_url();?>assets/css/aboutUs.css">
</head>
<body>
    <?php include 'menu.php'; ?>
<div class="container1" >

<div class="row" id="aboutRow">
<div class="col-lg-9" id="left">

<div class="row"><div class="col-lg-12"><h2>Blog</h2></div></div>


<div class="row" id="blogList">
<?php
foreach($blogs as $product) {
  echo '
  <div class="col-lg-4"> 
     <div class="col-lg-12" id="blog1">
     <div class="row over"><a href="singleblog/show/'.$product['id'].'" class="darken"><img src="'.base_url($product['image']).'" id="blog"/></a></div>
     <div class="row">'.$product['name'].'</div>
     </div>
  </div>';

}
?>





</div>

</div>
<div class="col-lg-3" id="right">
<div class="col-lg-12"><h2 id="profPhot">Read</h2></div>
<div class="list-group">
  <a href="#" class="list-group-item active">Read Blog<br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a>
<?php
foreach($blogs as $product) {
echo '<a href="singleblog/show/'.$product['id'].'" class=" list-group-item list-group-item-action">'.$product['name'].'</a>';
}
?>
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
