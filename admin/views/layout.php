<DOCTYPE html>
<html>
  <head>
  <title>Admin :::: Guppies Aquatic Room</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>


  </head>
  <body>

   <nav class="navbar navbar-inverse">
  <div class="container-fluid">

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Log Out</a></li>
      </ul>

  </div>
</nav>
  

              
          
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Admin Section</h4>
      <ul class="nav nav-pills nav-stacked">

       <li class="active"><a href="#">Home</a></li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Gallery<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="?controller=gallery&action=index">View All</a></li>
        <li><a href="?controller=gallery&action=browse">Add Image</a></li>
        <li><a href="#">Add Notes</a></li>                        
      </ul>
    </li>
    <li><a href="#">Posts</a></li>
    <li><a href="?controller=user&action=index'">Users</a></li>


      </ul><br>
      
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>

    <div class="col-sm-9">
      <h4><small>RECENT POSTS</small></h4>
      <div class='content'><?php require_once('routes.php'); ?></div>
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>(c) Andy Guppy - Guppies Aquatic Room 2017</p>
</footer>


  <body>
<html>