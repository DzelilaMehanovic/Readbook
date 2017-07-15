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
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
</head>
<body>
    <?php include 'menu.php'; ?>

<div class="container1" >
<div class="row" id="aboutRow">
<div class="col-lg-7" id="left">
<div class="row"><div class="col-lg-12"><h2>Contact Us</h2></div></div>


<div class="row" id="contactGroup1">
  <div class="col-lg-4 rotateIcon">
  <div class="row" ><img src="<?php echo '../assets/images/glob.png';?>" class="contactIcons rotate" /></div>
  <div class="row">Address</div>
  <div class="row">Lorem Ipsum</div>
  </div>
   <div class="col-lg-4 rotateIcon">
  <div class="row"><img src="<?php echo '../assets/images/phone.png';?>" class="contactIcons rotate"/></div>
  <div class="row">Phone</div>
  <div class="row">+387 33 555-555</div>
  </div>
    <div class="col-lg-4 rotateIcon">
  <div class="row"><img src="<?php echo '../assets/images/env.png';?>" class="contactIcons rotate"/></div>
  <div class="row">Email</div>
  <div class="row">book.store@live.com</div>
  </div>

</div>

<div class="row" >
<?php $attributes = array("name" => "contactF");
      echo form_open("contactus/index", $attributes);?>
<form action="contactus/contact" id="form" method="post" name="form"> 
<div class="form-group col-lg-4"><input type="text" class="form-control" id="contactName"  required placeholder="Name (required)" name="name">
<span class="text-danger"><?php echo form_error('name'); ?></span></div>
<div class="form-group col-lg-4"><input type="text" class="form-control" id="contactPhone"  placeholder="Phone Number" name="phone"></div>
<div class="form-group col-lg-4"><input type="text" class="form-control" id="contactEmail" required placeholder="Email (required)" name="email" >
<span class="text-danger"><?php echo form_error('email'); ?></span></div>
<div class="form-group col-lg-12 "><textarea class="form-control" rows="5" id="contactTextArea" required placeholder="Your text... (required)" name="content"></textarea>
<span class="text-danger"><?php echo form_error('content'); ?></span></div>
 <div class="form-group"> 
<input type="submit" name="contact" value="Send" id="contact" class="btn btn-primary"/></div>
</div>
  <?php echo form_close(); ?>
    <?php echo $this->session->flashdata('msg'); ?>
</form>

<div>
<div class="col-lg-12" >
</div>
</div>
</div>
<div class="col-lg-5" id="right">
<div class="col-lg-12"><h2 id="profPhot">Find us</h2></div>
<div  class="col-lg-12" id="map"></div>
</div>
</div>
</div><!--container-->
</body>
    <script type="text/javascript" src="modal.js"></script>
<script type="text/javascript">
//create map, add marker and popup
var map = L.map('map').setView([43.8544, 18.4146], 13);
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png').addTo(map);
L.marker([43.8544, 18.4146]).addTo(map).bindPopup('Welcome').openPopup();


    </script>
</html>
