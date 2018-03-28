<?php

function runquery($c, $q){
	if ($c->query($q) == FALSE) die("Error running query: \n$q" . $c->error);
	return $c->insert_id;
}

$servername = "localhost";
$username = "dm";
$password = "akatosh";
$dbname = "dnd_spells";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) die("Connection failed: ". $conn->connect_error);
else echo "CONNECTION ESTABLISHED\n";

$name = "Enhance Ability";
$school = "transmutation";
$type = "2nd-level Transmutation Spell";
$level = 2;

$sql = "INSERT INTO spells (name, school, type, level) VALUES ('$name', '$school', '$type', $level)";
$spell_id = runquery($conn, $sql);

$sql = "INSERT INTO attributes (spell_id, attr_group, attr_type) VALUES ($spell_id, 'prop', 'ano')";
$attr_id = runquery($conn, $sql);
$sql = "INSERT INTO annotations (attr_id, name, text) VALUES ($attr_id, 'Level', '$level')";
runquery($conn, $sql);
$sql = "INSERT INTO attributes (spell_id, attr_group, attr_type) VALUES ($spell_id, 'prop', 'ano')";
$attr_id = runquery($conn, $sql);
$sql = "INSERT INTO annotations (attr_id, name, text) VALUES ($attr_id, 'Casting Time', '1 action')";
runquery($conn, $sql);
$sql = "INSERT INTO attributes (spell_id, attr_group, attr_type) VALUES ($spell_id, 'prop', 'ano')";
$attr_id = runquery($conn, $sql);
$sql = "INSERT INTO annotations (attr_id, name, text) VALUES ($attr_id, 'Range', 'Touch')";
runquery($conn, $sql);
$sql = "INSERT INTO attributes (spell_id, attr_group, attr_type) VALUES ($spell_id, 'prop', 'ano')";
$attr_id = runquery($conn, $sql);
$sql = "INSERT INTO annotations (attr_id, name, text) VALUES ($attr_id, 'Component', 'V, S, M (fur from a beast)')";
runquery($conn, $sql);
$sql = "INSERT INTO attributes (spell_id, attr_group, attr_type) VALUES ($spell_id, 'prop', 'ano')";
$attr_id = runquery($conn, $sql);
$sql = "INSERT INTO annotations (attr_id, name, text) VALUES ($attr_id, 'Duration', 'Concentration, up to 1 hour')";
runquery($conn, $sql);

$sql = "INSERT INTO attributes (spell_id, attr_group, attr_type) VALUES ($spell_id, 'desc', 'par')";
$attr_id = runquery($conn, $sql);
$sql = "INSERT INTO paragraphs (attr_id, text) VALUES ($attr_id, 'You touch a creature and bestow upon it a magical enhancement. Choose one of the following effects: the target gains the effect until the spell ends.')";
runquery($conn, $sql);
$sql = "INSERT INTO attributes (spell_id, attr_group, attr_type) VALUES ($spell_id, 'desc', 'ano')";
$attr_id = runquery($conn, $sql);
$sql = "INSERT INTO annotations (attr_id, name, text) VALUES ($attr_id, 'Bear&rsquo;s Endurance', 'The target has advantage on <b class=\"die save con\">CON</b> checks. It also gains <b class=\"die heal tmp\">2d6</b> temporary hit points, which are lost when the spell ends.')";
runquery($conn, $sql);
$sql = "INSERT INTO attributes (spell_id, attr_group, attr_type) VALUES ($spell_id, 'desc', 'ano')";
$attr_id = runquery($conn, $sql);
$sql = "INSERT INTO annotations (attr_id, name, text) VALUES ($attr_id, 'Bull&rsquo;s Strength', 'The target has advantage on <b class=\"die save str\">STR</b> checks, and his or her carrying capacity doubles.')";
runquery($conn, $sql);
$sql = "INSERT INTO attributes (spell_id, attr_group, attr_type) VALUES ($spell_id, 'desc', 'ano')";
$attr_id = runquery($conn, $sql);
$sql = "INSERT INTO annotations (attr_id, name, text) VALUES ($attr_id, 'Cat&rsquo;s Grace', 'The target has advantage on <b class=\"die save dex\">DEX</b> checks. It also doesn&rsquo;t take damage from falling 20 feet or less if it isn&rsquo;t incapacitated.')";
runquery($conn, $sql);
$sql = "INSERT INTO attributes (spell_id, attr_group, attr_type) VALUES ($spell_id, 'desc', 'ano')";
$attr_id = runquery($conn, $sql);
$sql = "INSERT INTO annotations (attr_id, name, text) VALUES ($attr_id, 'Eagle&rsquo;s Splendor', 'The target has advantage on <b class=\"die save cha\">CHA</b> checks.')";
runquery($conn, $sql);
$sql = "INSERT INTO attributes (spell_id, attr_group, attr_type) VALUES ($spell_id, 'desc', 'ano')";
$attr_id = runquery($conn, $sql);
$sql = "INSERT INTO annotations (attr_id, name, text) VALUES ($attr_id, 'Fox&rsquo;s Cunning', 'The target has advantage on <b class=\"die save int\">INT</b> checks.')";
runquery($conn, $sql);
$sql = "INSERT INTO attributes (spell_id, attr_group, attr_type) VALUES ($spell_id, 'desc', 'ano')";
$attr_id = runquery($conn, $sql);
$sql = "INSERT INTO annotations (attr_id, name, text) VALUES ($attr_id, 'Owl&rsquo;s Wisdom', 'The target has advantage on <b class=\"die save wis\">WIS</b> checks.')";
runquery($conn, $sql);

$sql = "INSERT INTO attributes (spell_id, attr_group, attr_type) VALUES ($spell_id, 'high', 'par')";
$attr_id = runquery($conn, $sql);
$sql = "INSERT INTO paragraphs (attr_id, text) VALUES ($attr_id, 'When you cast this spell using a spell slot of 3<sup>rd</sup> level or higher, you can target one additional creature for each slot level above 2<sup>nd</sup>.')";
runquery($conn, $sql);

echo "Successfully entered spell '$name'\n";
$conn->close();

?>