<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/home">Readbook</a>
    </div>
    <ul class="nav navbar-nav">
      <li class=""><a href="<?php echo base_url(); ?>index.php/home" class="menuLink">Home</a></li>
      <li><a href="<?php echo base_url(); ?>index.php/aboutUs" class="menuLink">About Us</a></li>
      <li><a href="<?php echo base_url(); ?>index.php/blog" class="menuLink">Blog</a></li>
      <li><a href="<?php echo base_url(); ?>index.php/books" class="menuLink">Books</a></li>
      <li><a href="<?php echo base_url(); ?>index.php/contactus" class="menuLink">Contact Us</a></li>
      <li><a href="<?php echo base_url(); ?>index.php/profile" class="menuLink">Profile</a></li>
    </ul>
     <ul class="nav navbar-nav navbar-right">
     <!--<li ><a href="#" class="menuLink" id="signUp"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#" class="menuLink" id="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->


      <?php if ($this->session->userdata('login')){ ?>
        <li><p class="navbar-text menuLink">Hello <?php echo $this->session->userdata('uusername'); ?></p></li>
        <li><a href="<?php echo base_url(); ?>index.php/home/logout" class="menuLink">Log Out</a></li>
        <?php } else { ?>
      <li ><a href="<?php echo base_url(); ?>index.php/signup" class="menuLink" id="signUp"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="<?php echo base_url(); ?>index.php/login" class="menuLink" id="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      
        <?php } ?>

      <li><a href="<?php echo base_url(); ?>index.php/cart" class="menuLink"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
    </ul>
  </div>
</nav>
  