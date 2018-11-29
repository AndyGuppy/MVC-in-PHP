<p>This is the Stock Page</p>

<p><?php echo $specie->prcode; ?></p>
<p><?php echo $specie->latin_name; ?></p>

<?php foreach($images as $image) { ?>
	<div class="divtablerow">
    	<div class = 'column1' > <?php echo $image->pathway; ?></div>

	</div><br>

<?php } ?>