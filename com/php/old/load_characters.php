<?php
if (! isset($compath)) $compath = "dnd.akatosh.com/com/";
if (substr($compath, -1) != "/") $compath = $compath . "/";
if (! isset($charsspath)) $charsspath = $_SERVER['DOCUMENT_ROOT']."/characters/db/chars/";
if (substr($charsspath, -1) != "/") $charsspath = $charsspath . "/";
?><script type="text/javascript">
		var chars_path="<?= $charsspath?>";
	</script>
	<script type="text/javascript" src="<?= $compath?>js/chars/load_characters.js"></script>
