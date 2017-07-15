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

<div class="containerS" >
<?php $attributes = array("name" => "signupform");
      echo form_open("signup/index", $attributes);?>

<div class="row"><div class="col-lg-12"><h2 id=sl>Sign up</h2></div></div>

<form action="#" id="sign" method="post" name="form">
 
 <div class="form-group">
    <label for="signName">Name</label>
    <input type="text" class="form-control" id="signName"  placeholder="Enter name" name="name" value="<?php echo set_value('name'); ?>" >
    <span class="text-danger"><?php echo form_error('name'); ?></span>
  </div>


 <div class="form-group">
    <label for="signSurname">Surname</label>
    <input type="text" class="form-control" id="signSurname"  placeholder="Enter surname" name="surname" value="<?php echo set_value('surname'); ?>" >
    <span class="text-danger"><?php echo form_error('surname'); ?></span>
  </div>


 <div class="form-group">
    <label for="signUsername">Username</label>
    <input type="text" class="form-control" id="signUsername"  placeholder="Enter username" name="username" value="" >
    <span class="text-danger"><?php echo form_error('username'); ?></span>
  </div>



 <div class="form-group">
    <label for="signPassword">Password</label>
    <input type="password" class="form-control" id="signPassword"  placeholder="Enter Password" name="password" ">
        <span class="text-danger"><?php echo form_error('password'); ?></span>
  </div>

 <div class="form-group">
    <label for="signEmail">Email</label>
    <input type="email" class="form-control" id="signEmail"  placeholder="Enter Email" name="email" value="<?php echo set_value('email'); ?>">
        <span class="text-danger"><?php echo form_error('email'); ?></span>
  </div>



<div class="form-group">
<button name="cancel" type="reset" class="btn btn-primary">Cancel</button>
<button type="submit" name="submit" class="btn btn-primary" id="signButtonSubmit">Sign up</button>
</div>
      <?php echo form_close(); ?>
      <?php echo $this->session->flashdata('msg'); ?>


</form>
 

 <div class="row">
    <div class="col-md-4 col-md-offset-4 text-center">  
    Already Registered? <a href="<?php echo base_url(); ?>index.php/login">Login Here</a>
    </div>
  </div>
</div>    





  
</body>
</html>
