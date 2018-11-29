<?php

define('BASE_PATH', $_SERVER['DOCUMENT_ROOT']);


  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'pages':

        $controller = new PagesController();
      break;
      case 'posts':
        // we need the model to query the database later in the controller
        require_once('models/post.php');
        $controller = new PostsController();
      break;
            case 'user':
        require_once('models/user.php');
        $controller = new UserController();

      break;
      case 'gallery':
        
        require_once('models/gallery.php');
        $controller = new GalleryController();
      break;
      case 'StckAvail':
        require_once('models/stckavail.php');
        $controller = new StckAvailController();
      break;
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages' => ['home', 'error'],
                       'posts' => ['index', 'show'],
                       'user' => ['index', 'adminlogin', 'signup', 'createuser', 'showuser', 'updateuser', 'deleteuser'],
                       'gallery' => ['index', 'show', 'browse', 'upload'],
                       'StckAvail' => ['index', 'show']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>