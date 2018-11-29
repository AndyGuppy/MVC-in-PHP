


<form method='POST' enctype='multipart/form-data' action ='?controller=user&action=showuser' style="border:1px solid #ccc">
    <div class="imgcontainer">
      <img src="views/admin/img_avatar2.png" alt="Avatar" class="avatar">
    </div>
    <div class="logcontainer">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit">Login</button>
    </div>

    <div class="logcontainer">
      <button type="button" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>

      <span class="psw"><a href="/?controller=user&action=signup">Sign Up </a></span>

    </div>
  </form> 



