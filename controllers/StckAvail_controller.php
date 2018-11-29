<?php

  class StckAvailController {
    public function index() {
      // $species = StckAvail::all();
      require_once('views/StckAvail/index.php');
    }

    public function show() {
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