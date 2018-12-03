<DOCTYPE html>
<html>
  <head>
  <title>Guppies Aquatic Room</title>
  <link rel="stylesheet" type="text/css" href="styles/home.css" />
    <link rel="stylesheet" type="text/css" href="styles/lightbox.css" />
    <link rel="stylesheet" type="text/css" href="styles/admin.css" />
  </head>

  <body>

    <div class="page">
<!--               <?php require_once('/models/IP.php'); ?>
              <?php require_once('get_ip.php'); ?> -->
              
          <div class='header-logo'> ----  </div>
            <div class = 'header-menu'>
              <a href='/'><div class ='button-menu'>Home</div></a>
              <a href='?controller=posts&action=index'><div class ='button-menu'>Posts</div></a>
              <a href='?controller=gallery&action=index'><div class ='button-menu'>Gallery</div></a>
              <a href='?controller=StckAvail&action=index'><div class ='button-menu'>Price List</div></a>
              <a href='?controller=user&action=index'><div class ='button-menu'>Admin</div></a>
              
            </div>

          <div class='content'><?php require_once('routes.php'); ?></div>
          <div class='footer'>(c) Andy Guppy - Guppies Aquatic Room 2017</div>


    </div>

  <body>
<html>