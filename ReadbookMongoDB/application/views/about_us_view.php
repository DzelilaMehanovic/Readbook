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
<div class="col-lg-7" id="left">

<div class="row"><div class="col-lg-12"><h2>About Us</h2></div></div>

<div class="row" >
  <div id="one" class="col-lg-5"><img src="<?php echo '../assets/images/aboutUs.jpg';?>" id="blogIcon"/></div>
  <div id= "two" class="col-lg-7"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
</div>
</div>


<div id="lastRow" class="col-lg-12"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div>
</div>


<div class="col-lg-5" id="right">
<div class="row"><div class="col-lg-12"><h2>Others About Us</h2></div></div>
<div class="row"><div class="col-lg-12 rotateIcon"><img src="<?php echo '../assets/images/person3.png';?>" id="person" class="rotate" /></div></div>
<div class="row"><div class="col-lg-12" id="sentence">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div></div>

</div>

</div>
</div><!--container-->

</body>
    <script type="text/javascript" src="modal.js"></script>
</html>
