<?php

  class StckAvailController {
    public function index() {
      // we store all the posts in a variable
      // $species = StckAvail::all();
      require_once('views/StckAvail/index.php');
    }

    public function show() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $specie = StckAvail::find($_GET['id']);
      // echo $specie->latin_name . ' specie is ';
      // $image = StckAvail::findallimg($specie->latin_name);
      require_once('views/StckAvail/show.php');
    }
  }
?>