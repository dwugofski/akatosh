<?php

$servername = "localhost";
$username = "root";
$password = "bin1211321k9";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error) die("Connection failed: " . $conn->connect_error);

/*$sql = "CREATE DATABASE dnd_spells";
if ($conn->query($sql) == FALSE) die("ERROR creating database: " . $conn->error);

echo "Created database <br/>";*/

$conn->select_db("dnd_spells");

/*$sql = "CREATE TABLE spells (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL UNIQUE,
school ENUM('conjuration', 'enchanting', 'evocation', 'illusion', 'abjuration', 'divination', 'necromancy', 'transmutation', 'universal'),
type VARCHAR(25),
level TINYINT UNSIGNED
)";
if ($conn->query($sql) == FALSE) die("ERROR creating spells table: " . $conn->error);*/

$sql = "CREATE TABLE attributes (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
spell_id INT(10) UNSIGNED NOT NULL,
attr_group VARCHAR(100),
attr_type VARCHAR(100),
INDEX(spell_id),
FOREIGN KEY attr_spell (spell_id) REFERENCES spells(id) ON DELETE CASCADE ON UPDATE CASCADE
)";
if ($conn->query($sql) == FALSE) die("ERROR creating attributes table: " . $conn->error);

$sql = "CREATE TABLE annotations (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
attr_id INT(10) UNSIGNED NOT NULL,
name VARCHAR(100),
text BLOB,
INDEX(attr_id),
FOREIGN KEY ano_attribute (attr_id) REFERENCES attributes(id) ON DELETE CASCADE ON UPDATE CASCADE
)";
if ($conn->query($sql) == FALSE) die("ERROR creating annotations table: " . $conn->error);

$sql = "CREATE TABLE paragraphs (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
attr_id INT(10) UNSIGNED NOT NULL,
text BLOB,
INDEX(attr_id),
FOREIGN KEY par_attribute (attr_id) REFERENCES attributes(id) ON DELETE CASCADE ON UPDATE CASCADE
)";
if ($conn->query($sql) == FALSE) die("ERROR creating paragraphs table: " . $conn->error);

$sql = "CREATE TABLE tbodies (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
attr_id INT(10) UNSIGNED NOT NULL,
INDEX(attr_id),
FOREIGN KEY tab_attribute (attr_id) REFERENCES attributes(id) ON DELETE CASCADE ON UPDATE CASCADE
)";
if ($conn->query($sql) == FALSE) die("ERROR creating tables table: " . $conn->error);

$sql = "CREATE TABLE tabitems (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
tab_id INT(10) UNSIGNED NOT NULL,
rownum TINYINT UNSIGNED,
heading BOOLEAN,
centered BOOLEAN,
INDEX(tab_id),
FOREIGN KEY tabi_table (tab_id) REFERENCES tbodies(id) ON DELETE CASCADE ON UPDATE CASCADE
)";
if ($conn->query($sql) == FALSE) die("ERROR creating table items table: " . $conn->error);

$sql = "CREATE TABLE uls (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
attr_id INT(10) UNSIGNED NOT NULL,
bulleted BOOLEAN,
INDEX(attr_id),
FOREIGN KEY lst_attribute (attr_id) REFERENCES attributes(id) ON DELETE CASCADE ON UPDATE CASCADE
)";
if ($conn->query($sql) == FALSE) die("ERROR creating lists table: " . $conn->error);

$sql = "CREATE TABLE listitems (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
lst_id INT(10) UNSIGNED NOT NULL,
text BLOB,
INDEX(lst_id),
FOREIGN KEY lsti_list (lst_id) REFERENCES uls(id) ON DELETE CASCADE ON UPDATE CASCADE
)";
if ($conn->query($sql) == FALSE) die("ERROR creating list items table: " . $conn->error);

$conn->close();

?>
