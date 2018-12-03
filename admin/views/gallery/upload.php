

<p> Enter Info </p>

<?php



echo '<br><br><img src="../upload/' .$_FILES['file_upload']['name'].'" height="200" width="200"><br>';
// die('Your Image has been uploaded');


?> 


<form method='post' enctype='multipart/form-data' action ='?controller=gallery&action=insertBlob'>
<label>
	<span>Latin Name </span>
	<input type='text' name='Latin_Name' />
	</label>
<label>
	<span>Common Name </span>
	<input type='text' name='Species' />
	</label>


<p><input type='submit'></p> 
</form>
