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

<?php $attributes = array("name" => "editform");
      echo form_open("editprofile", $attributes);?>


<div class="row"><div class="col-lg-12"><h2>Edit Profile</h2></div></div>
<form action="" id="form3" method="post" name="form">
 
<div class="form-group">
    <label for="signName">Name</label>
 <textarea class="form-control profile" rows="1" id="ename"   placeholder="Name" name="ename"><?php echo $this->session->userdata('uname'); ?></textarea>
    <span class="text-danger"><?php echo form_error('ename'); ?></span>
  </div>


 <div class="form-group">
    <label for="signSurname">Surname</label>
<textarea class="form-control profile" rows="1" id="esurname"   placeholder="Name" name="esurname"><?php echo $this->session->userdata('usurname'); ?></textarea>
    <span class="text-danger"><?php echo form_error('esurname'); ?></span>
  </div>


 <div class="form-group">
    <label for="signUsername">Username</label>
<textarea class="form-control profile" rows="1" id="eusername"   placeholder="Name" name="eusername"><?php echo $this->session->userdata('uusername'); ?></textarea>
    <span class="text-danger"><?php echo form_error('eusername'); ?></span>
  </div>



 <div class="form-group">
    <label for="signPassword">Password</label>
<textarea class="form-control profile" rows="1" id="epassword"   placeholder="Name" name="epassword"><?php echo $this->session->userdata('upassword'); ?></textarea>
        <span class="text-danger"><?php echo form_error('epassword'); ?></span>
  </div>

 <div class="form-group">
    <label for="signEmail">Email</label>
<textarea class="form-control profile" rows="1" id="eemail"   placeholder="Name" name="eemail"><?php echo $this->session->userdata('uemail'); ?></textarea>
        <span class="text-danger"><?php echo form_error('eemail'); ?></span>
  </div>




    <div class="form-group">



<a href="<?php echo base_url(); ?>index.php/profile" class="menuLink"><button type="button" class="btn btn-primary" id="editProfileCancel">Cancel</button></a>
<button type="submit" name="submit" class="btn btn-primary" id="editProfileButtonSubmit">Save changes</button>
    </div>
     <?php echo form_close(); ?>
      <?php echo $this->session->flashdata('msg'); ?>



</form>




</div>


<div class="col-lg-5" id="right">
<div class="col-lg-12"><h2 id="profPhot">Profile photo</h2></div>
<div class="row"><div class="col-lg-12 rotateIcon"><img src="<?php echo '../assets/images/person3.png';?>" class="rotate" id="person"/> </div></div>
</div>

</div>
</div><!--container-->





</body>
    <script type="text/javascript" src="modal.js"></script>
<script type="text/javascript">


    </script>

</html>
