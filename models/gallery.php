<?php
  class Gallery {
    // we define 6 attributes
    // they are public so that we can access them using $image->category_id directly
    public $imcode;
    public $latin_name;
    public $species;
    public $pathway;
 

    public function __construct($imcode, $latin_name, $species, $pathway) {
      $this->imcode = $imcode;
      $this->latin_name = $latin_name;
      $this->species  = $species;
      $this->pathway = $pathway;

    }

    public static function all() {
      $list = [];
      $db = Gall_Db::getInstance();
      $req = $db->query('SELECT * FROM Images');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $image) {
        $list[] = new Gallery($image['Imcode'], $image['Latin_Name'], $image['Species'] , $image['Pathway']);
      }
      echo 'wew are in model gallery function all -- ' .$List[0];
      return $list;
    }

    // Routine to save blob ( Binary Large Object ) into the database
    public static function upload($filepath, $species, $latinname) {
      echo 'we are in the insertBlob ok<br>';
      $db = Gall_Db::getInstance();
      $req= $db->prepare("INSERT INTO Images(Latin_Name, Species, Pathway) VALUES(?,?,?)");

      $req->bindParam(1,$latinname);
      $req->bindParam(2,$species);
      $req->bindParam(3,$filepath);
      return $req->execute();
      echo 'executed';

    }

    public static function find($id) {
      $db = Gall_Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM Images WHERE Imcode =' . $id);
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('photo_id' => $id));
      $image = $req->fetch();

      return new Gallery($image['Imcode'], $image['Latin_Name'], $image['Species'] , $image['Pathway'], $image['imblob'] , $image['mime']);
    }

  }

?>