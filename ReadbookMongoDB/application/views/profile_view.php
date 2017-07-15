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

  </style>
</head>
<body>
    <?php include 'menu.php'; ?>
<div class="container1" >
<div class="row" id="aboutRow">
<div class="col-lg-7" id="left">
<?php if ($this->session->userdata('login')){ ?>
<div class="row"><div class="col-lg-12"><h2>Profile</h2></div></div>

<form action="#" id="form1" method="post" name="form">
 
<div class="form-group">
  <label for="name">Name:</label>
  <textarea class="form-control profile" rows="1" id="name"  readonly="" placeholder="Name" name="pname"><?php echo $this->session->userdata('uname'); ?></textarea>
</div>

<div class="form-group">
  <label for="surname">Surname:</label>
  <textarea class="form-control profile" rows="1" id="surname" readonly placeholder="Surname" name="psurname"><?php echo $this->session->userdata('usurname'); ?></textarea>
</div>

<div class="form-group">
  <label for="username">Username:</label>
  <textarea class="form-control profile" rows="1" id="username" readonly placeholder="Username" name="pusername"><?php echo $this->session->userdata('uusername'); ?></textarea>
</div>

<div class="form-group">
  <label for="password">Password:</label>
  <textarea class="form-control profile" rows="1" id="password" readonly placeholder="Password" name="ppassword"><?php echo $this->session->userdata('upassword'); ?></textarea>
</div>

<div class="form-group">
  <label for="email">Email:</label>
  <textarea  class="form-control profile" rows="1" id="email" readonly placeholder="Email" name="pemail" value=""><?php echo $this->session->userdata('uemail'); ?></textarea>
</div>



      
        <div class="row"><div class="col-lg-12" ><button type="button" class="btn btn-primary" id="editProfileButton"><a href="<?php echo base_url(); ?>index.php/editprofile" class="menuLink">Edit Profile</a></button></div></div>

        <?php } else { ?>


<div class="row"><div class="col-lg-12"><h2>You are not logged in</h2></div></div>
<div class="row"><div class="col-lg-12" ><a href="<?php echo base_url(); ?>index.php/signup/index" class="menuLink"><button type="button" class="btn btn-primary" id="signButtonProfile">Sign up</button></a></div></div>

<div class="row"><div class="col-lg-12" ><a href="<?php echo base_url(); ?>index.php/login/index" class="menuLink"><button type="button" class="btn btn-primary" id="loginButonProfile">Log in</button></a></div></div>


        <?php } ?>






<!--<div class="row"><div class="col-lg-12" ><button type="button" class="btn btn-primary" id="editProfileButton"><a href="<?php echo base_url(); ?>index.php/editprofile/index" class="menuLink">Edit Profile</a></button></div></div>-->
</form>

</div>


<div class="col-lg-5" id="right">
<div class="col-lg-12"><h2 id="profPhot">Profile photo</h2></div>
<div class="row"><div class="col-lg-12 rotateIcon"><img src="<?php echo '../assets/images/person3.png';?>" class="rotate" id="person"/> </div></div>

</div>

</div>
</div><!--container-->





</body>
</html>
