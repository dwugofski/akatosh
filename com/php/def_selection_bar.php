		<div class="selection_bar noprinting">
<?php if ($section_info[$sectname]['lastsect'] != false) { ?>
			<a class="last" href=<?= "\"?sect=".$section_info[$sectname]['lastsect']."\""?>>&larr;&nbsp;<?= $section_info[$sectname]['lname']?></a>
<?php }?>
<?php if ($section_info[$sectname]['nextsect'] != false) { ?>
			<a class="next" href=<?= "\"?sect=".$section_info[$sectname]['nextsect']."\""?>><?= $section_info[$sectname]['nname']?>&nbsp;&rarr;</a>
<?php } ?>
			<div class="clearer"></div>
		</div>