

<form method='POST' enctype='multipart/form-data' action ='?controller=user&action=createuser' style="border:1px solid #ccc">
 <!-- <form action="'?controller=admin&action=index'" style="border:1px solid #ccc"> -->
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

     <label for="uname"><b>Userssssname</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="fname"><b>First Name</b></label>
      <input type="text" placeholder="Enter First Name" name="firstName" required>

      <label for="lname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter last Name" name="lastName" required>    

      <label for="email"><b>Email Address</b></label>
      <input type="text" placeholder="Enter Email Address" name="emailAdd" required>   
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form> 



