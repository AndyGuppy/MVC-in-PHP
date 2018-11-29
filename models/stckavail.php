<?php
  
  class StckAvail{

    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $prcode;
    public $latin_name;
    public $species;
    public $size;
    public $price;
    public $availability;

    public function __construct($prcode, $latin_name, $species, $size, $price, $availability) {
      $this->prcode  = $prcode;
      $this->latin_name  = $latin_name;
      $this->species = $species;
      $this->size = $size;
      $this->price = $price;
      $this->availability = $availability;
    }

    public static function all() {
      $list = [];
      $db = Gall_Db::getInstance();
      $req = $db->query('SELECT * FROM Prices');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $specie) {
        $list[] = new StckAvail($specie['PRCode'], $specie['Latin_Name'], $specie['Species'], $specie['Size'], $specie['Price'], $specie['Availability']);
      }
      return $list;
    }

    public static function find($id) {
      //We now need to find all info about this Latin_name as more info has been clicked
      $db = Gall_Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM Prices WHERE PRCode =' . $id);
      // the query was prepared, now we replace :prcode with our actual $prcode value
      $req->execute(array('PRCode' => $id));
      $specie = $req->fetch();

      return new StckAvail($specie['PRCode'], $specie['Latin_Name'], $specie['Species'], $specie['Size'], $specie['Price'], $specie['Availabiliy']);
    }

  }
?>