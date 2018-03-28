<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="../com/js/def/jquery.js"></script>
	<script type="text/javascript" src="../spells/db/sql/spell_list.js"></script>
	<script type="text/javascript" src="../com/js/rnd/seedrandom.js"></script>
	<script type="text/javascript" src="../com/js/rnd/gen_treasure.js"></script>
</head>
<body>
	<div id="holder">
	</div>
	<script type="text/javascript">
		$(document).ready(function(){rnd_large_loot('none', 2, 'holder', 1);});
	</script>
</body>
</html>