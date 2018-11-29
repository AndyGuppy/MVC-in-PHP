<p>Here is a list of all images:</p>
 <div id="main">
	<?php foreach($images as $image) { ?>

  	<div class="block">

    <?php echo "$image->species <br>" ?>
    <div>
    <a href="#<?php echo $image->imcode ?>">
		<img class="thumbnail" src="<?php echo $image->pathway; ?>"/>
	</a> 

	<a href="#_" class="lightbox" id="<?php echo $image->imcode ?>">
   		<img src="<?php echo $image->pathway; ?>"/>
   		<p> Hello </p>
   	</a>
   </div>
	</div>



<?php } ?> 

</div>

