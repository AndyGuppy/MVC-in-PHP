<p>This is the requested image:</p>

<p><?php echo $image->photo_id; ?></p>
<p><?php echo $image->photo_filename; ?></p>
<?php echo '<img src="photos/'.$image->photo_filename.'" />' ?>
<p><?php echo $image->photo_caption; ?></p>
<p><?php echo $image->photo_category; ?></p>

