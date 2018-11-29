<p>Here is a list of all Stock:</p>

    <div class="divtable">
      <div class="divtablerow">
    	<div class = 'column1' > GAR Code </div>
    	<div class = 'column2' > Latin Name </div>
    	<div class = 'column3' > Common Name </div>
    	<div class = 'column4' > Size </div>
    	<div class = 'column5' > Price </div>
    	<div class = 'column6' > Stock </div>
    	<div class = 'column7' > More Info</div>
 	 </div><br>

<?php foreach($species as $specie) { ?>
	<div class="divtablerow">
    	<div class = 'column1' > <?php echo $specie->prcode; ?></div>
    	<div class = 'column2' >     <?php echo $specie->latin_name; ?></div>
    	<div class = 'column3' >     <?php echo $specie->species; ?></div>
    	<div class = 'column4' >     <?php echo $specie->size; ?></div>
    	<div class = 'column5' >    <?php echo $specie->price; ?></div>
    	<div class = 'column6' >    <?php echo $specie->availability; ?></div>
    <div class = 'column7' > <a href='?controller=StckAvail&action=show&id=<?php echo $specie->prcode; ?>'>See content</a></div>
	</div><br>

<?php } ?>
</div>
<br>
<br>
<br>