<p>This is the requested image:</p>


<p><?php 

foreach ($users as $user){
	   echo 'Hello <br>';

	   echo $user->username;
		var_dump(get_object_vars($user));


}


 ?></p>

