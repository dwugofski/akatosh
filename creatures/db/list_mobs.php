<?php

$mobnames = [];
foreach(glob($mobspath.'*.php') as $filename){
	$short = basename($filename, ".php");
	include $filename;
	$mobnames[] = [ 'id' => $short, 'name' => ${$short.'_mob'}['name'] ];
}

$mobfactions = ['dragoncult', 'draugr', 'summoneddaedra', 'dremora'];
$dragoncult_mobfaction = ['name' => 'Dragon Cult', 'mobs' => [
	'dragoncultacolyte',
	'dragoncultassassin',
	'dragoncultchampion',
	'dragoncultfanatic',
	'dragoncultinfiltrator',
	'dragoncultist',
	'dragoncultlieutenant',
	'dragoncultritualist',
	'dragoncultthug'
]];
$draugr_mobfaction = ['name' => 'Draugr', 'mobs' => [
	'draugr',
	'draugrdeathlord',
	'draugroverlord',
	'draugrscourge',
	'draugrwight',
	'Morokei',
	'restlessdraugr'
]];
$summoneddaedra_mobfaction = ['name' => 'Summoned Daedra', 'mobs' => [
	'scamp',
	'clannfear',
	'daedroth',
	'spiderdaedra'
]];
$dremora_mobfaction = ['name' => 'Dremora', 'mobs' => [
	'dremorachurl',
	'dremoracaitiff',
	'dremorakynval',
	'dremorakynreeve',
	'dremorakynmarcher'
]];


?>