<?php
  class User {
    // we define 6 attributes
    // they are public so that we can access them using $image->category_id directly
    public $username;
    public $password;
    public $firstname;
    public $lastName;
    public $emailAddress;
    public $rank;
    private $element;
 

    public function __construct($userName, $password, $FirstName, $lastName, $emailAddress, $rank) {
      $this->username = $userName;
      $this->firstname = $FirstName;
      $this->password  = $password;
      $this->lastName = $lastName;
      $this->email = $emailAddress;
      $this->rank = $rank;



    }

    public static function all() {
      $group = [];
      $db = AdminGall_Db::getInstance();
      $req = $db->query('SELECT * FROM users');
      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $userdata) {
        $group[] = new User($userdata['UserID'], $userdata['Passwd'], $userdata['FirstName'] , $userdata['lastName'], $userdata['EmailAddress'], $userdata['Rank']);
      }

       return $group;
    }

      public static function validate($userdata) {
      $db = Gall_Db::getInstance();
      $username = $userdata[0];
      $usrPwd = $userdata[1];
      $password ="";
      $req = $db->prepare('SELECT Passwd FROM users WHERE UserID ="' . $username . '"');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('Passwd' => $password));
      $user = $req->fetch();

      if (md5($usrPwd) == $user['Passwd']) {
        return 0;
      } else {

        return 1;
      }
    }


    public static function create($userdata) {
      $db = Gall_Db::getInstance();
      $req= $db->prepare("INSERT INTO users(UserID, Passwd, FirstName, lastName, EmailAddress, Rank) VALUES(?,?,?,?,?,?)");
      $element = 0;
      foreach ($userdata as $value ){
        $element++ ;    
        if ($element <> 2) {
          $req->bindParam($element,$userdata[$element-1]);
        }else{
          $password = md5($userdata[$element-1]);
          $req->bindParam($element,$password );
        }
        
      } 
      return $req->execute();
      echo 'executed';

    }
// Refactored to above
    // public static function create($username, $password, $firstname, $lastname, $emailaddress, $rank) {
    //   echo 'we are in the User Upload<br>';
    //   $db = Gall_Db::getInstance();
    //   $req= $db->prepare("INSERT INTO users(UserID, Passwd, FirstName, lastName, EmailAddress, Rank) VALUES(?,?,?,?,?,?)");

    //   $req->bindParam(1,$username);
    //   $req->bindParam(2,$password);
    //   $req->bindParam(3,$firstname);
    //   $req->bindParam(4,$lastname);
    //   $req->bindParam(5,$emailaddress);
    //   $req->bindParam(6,$rank);
      
    //   return $req->execute();
    //   echo 'executed';

    // }


  }

?>