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
<div class="containerL" >
<?php $attributes = array("name" => "loginF");
      echo form_open("login/index", $attributes);?>
<div class="row"><div class="col-lg-12"><h2 id="sl">Login</h2></div></div>
<form action="#" id="loginF" method="post" name="form">
 
 <div class="form-group">
    <label for="loginUsername">Username</label>
    <input type="text" class="form-control" id="loginUsername"  placeholder="Enter username" name="username" value="<?php echo set_value('username'); ?>"> <span class="text-danger"><?php echo form_error('username'); ?></span>
  </div>

   <div class="form-group">
    <label for="loginPassword" id="pl">Password</label>
    <input type="password" class="form-control" id="loginPassword"  placeholder="Enter password" name="password" value="<?php echo set_value('password'); ?>">
     <span class="text-danger"><?php echo form_error('password'); ?></span>
  </div>

    <div class="form-group">
    <button name="cancel" type="reset" class="btn btn-primary">Cancel</button>
      <button type="submit" name="submit" class="btn btn-primary" id="loginButtonSubmit">Login</button>
    </div>
  <?php echo form_close(); ?>
    <?php echo $this->session->flashdata('msg'); ?>
</form>

<div class="row">
    <div class="col-md-4 col-md-offset-4 text-center">New User? <a href="<?php echo base_url(); ?>index.php/signup">Sign Up Here</a>
    </div>
  </div>
 
</div>    





  
</body>
    <script type="text/javascript" src="modal.js"></script>
</html>
