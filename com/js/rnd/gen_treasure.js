

//	<div id="loot_test" class="loot_holder"><span>Loot:</span></div>
//	<script type="text/javascript">$(document).ready(function(){generate_loot('onto oblivion loot_test', 2, 'loot_test', 3, {lock:true});});</script>

var potions_list = [
	{name : 'Healing', sname: 'healing', weight : 4},
	{name : 'Magicka', sname: 'magicka', weight : 1},
	{name : 'Resist Element', weight : 2},
	{name : 'Improve Attribute', weight : 2},
	{name : 'Speed', sname: 'speed', weight : 2}
];

var elements_list = [
	{name : 'Acid', sname: 'acid', weight : 3},
	{name : 'Cold', sname: 'cold', weight : 3},
	{name : 'Fire', sname: 'fire', weight : 3},
	{name : 'Force', sname: 'force', weight : 1},
	{name : 'Lightning', sname: 'lightning', weight : 3},
	{name : 'Necrotic', sname: 'necrotic', weight : 2},
	{name : 'Poison', sname: 'poison', weight : 3},
	{name : 'Psychic', sname: 'psychic', weight : 1},
	{name : 'Radiant', sname: 'radiant', weight : 2},
	{name : 'Thunder', sname: 'thunder', weight : 1}
];

var dice_list = [
	{name : '1d4', max : 4, weight : 9},
	{name : '1d6', max : 6, weight : 8},
	{name : '1d8', max : 8, weight : 7},
	{name : '1d10', max : 10, weight : 6},
	{name : '1d12', max : 12, weight : 5},
	{name : '1d20', max : 20, weight : 4},
	{name : '1d100', max : 100, weight : 1}
];

var attributes_list = [
	{name : 'Strength', sname : 'strength', abb : 'STR', weight : 2},
	{name : 'Dexterity', sname : 'dexterity', abb : 'DEX', weight : 2},
	{name : 'Constitution', sname : 'constitution', abb : 'CON', weight : 2},
	{name : 'Intelligence', sname : 'intelligence', abb : 'INT', weight : 2},
	{name : 'Wisdom', sname : 'wisdom', abb : 'WIS', weight : 2},
	{name : 'Charisma', sname : 'charisma', abb : 'CHA', weight : 2}
];

var reagents_list = [
	{name : 'Daedra Heart', sname : 'daedra heart', weight : 2},
	{name : 'Mort Flesh', sname : 'mort flesh', weight : 2}
];

var scasters_list = [
	{name : 'Wizard', sname : 'wizard', weight : 2},
	{name : 'Cleric', sname : 'cleric', weight : 2},
	{name : 'Sorceror', sname : 'sorcerer', weight : 2},
	{name : 'Druid', sname : 'druid', weight : 2},
	{name : 'Ranger', sname : 'ranger', weight : 2},
	{name : 'Bard', sname : 'bard', weight : 2},
	{name : 'Warlock', sname : 'warlock', weight : 2},
	{name : 'Paladin', sname : 'paladin', weight : 2}
];

var loot_options = [
	{name : 'potion', draw : random_pot, weight : 3},
	{name : 'scroll', draw : random_scroll, weight : 2},
	{name : 'reagent', draw : random_reagent, weight : 1},
	{name : 'soul_gem', draw : s_gem, weight : 2},
	{name : 'e_arrow', draw : random_e_arrow, weight : 2}
];

var loot_options_adv = [
	{name : 'potion', draw : random_pot, weight : 3},
	{name : 'scroll', draw : random_scroll, weight : 2},
	{name : 'reagent', draw : random_reagent, weight : 1},
	{name : 'soul_gem', draw : s_gem, weight : 2},
	{name : 'blk_soul_gem', draw : s_gem, weight : 2},
	{name : 'e_arrow', draw : random_e_arrow, weight : 2},
	{name : 'ult_potion', draw : random_pot, weight : 1},
	{name : 'novel', draw : random_novel, weight : 1}
];

function expand_array(array){
	exp_array = [];
	var i;
	for (i=0; i<array.length; i+=1) {
		var weight = array[i].weight;
		var name = array[i].name;
		var j;

		for (j=1; j<=weight; j+=1)
			exp_array.push(array[i]);
	}
	return exp_array;
}

function rnd_item(array){
	var exp_array = expand_array(array);
	var ind = Math.floor(Math.random() * exp_array.length);

	return exp_array[ind];
}

function generate_loot(seed, tier, container, size, diffs={lock: false, sec: false, trap: false}, mod=5){
	n_adv = rnd_diffs(seed, tier, container, mod, diffs);

	switch(size){
		case 2:
			rnd_med_loot(seed, tier, container, n_adv);
			break;
		case 3:
			rnd_large_loot(seed, tier, container, n_adv);
			break;
		case 4:
			rnd_boss_loot(seed, tier, container);
			break;
		case 1:
		default:
			rnd_small_loot(seed, tier, container, n_adv);
	}
}

function rnd_diffs(seed, tier, container, mod, diffs){
	Math.seedrandom(seed);
	n_adv = 0;

	if (diffs.lock == true || diffs.trap == true || diffs.sec == true){
		var $diffs = $('<ul>').addClass('diffs');

		if (diffs.lock == true) {
			n_adv += 1;
			var level = Math.floor(Math.random() * 10) + 4 + mod;
			$diffs.append($('<li>').text('A lock with DC ' + level));
		}
		if (diffs.sec == true) {
			n_adv += 1;
			var level = Math.floor(Math.random() * 10) + 4 + mod;
			$diffs.append($('<li>').text('Hidden with DC ' + level));
		}
		if (diffs.trap == true) {
			n_adv += 1;
			var level = Math.floor(Math.random() * 10) + 4 + mod;
			var dmg_type = rnd_item(elements_list);
			var dmg_dice = rnd_item(dice_list);
			var dmg = Math.floor(Math.random() * dmg_dice.max) + 1;
			$diffs.append($('<li>').text('Trapped with a DC ' + level + ' ' + dmg_dice.name + ' ' + dmg_type.sname + ' trap (' + dmg + ' hp)'));
		}

		$('#'+container).append($diffs);
	}

	return n_adv;
}

function rnd_small_loot(seed, tier, container, n_adv=0){
	Math.seedrandom(seed);
	var gold = 2;
	var i;
	for (i=0; i<=n_adv; i+=1) {
		gold += Math.floor(Math.random() * 4) + 1;
	}

	var $_list = $('<ul>').addClass('loot');
	$_list.append($('<li>').text('Gold: '+gold));
	if (Math.floor(Math.random * 10) == 9) $_list.append($('<li>').text(random_minor_item(tier)));

	$('#'+container).append($_list);
}

function rnd_med_loot(seed, tier, container, n_adv=0){
	Math.seedrandom(seed);
	var gold = 10;
	var i;
	for (i=0; i<=n_adv; i+=1) {
		gold += Math.floor(Math.random() * 20) + 1;
	}

	var $_list = $('<ul>').addClass('loot');
	$_list.append($('<li>').text('Gold: '+gold));
	if (n_adv > 0){
		$_list.append($('<li>').text(random_major_item(tier)));
		for (i=0; i<=n_adv-1; i+=1){
			$_list.append($('<li>').text(random_minor_item(tier)));
		}
		if (Math.round(Math.random * 4) == 4){
			$_list.append($('<li>').text(random_treasure()));
		}
	} else {
		$_list.append($('<li>').text(random_minor_item(tier)));
		if (Math.round(Math.random * 9) == 9){
			$_list.append($('<li>').text(random_treasure()));
		}
	}

	$('#'+container).append($_list);
}

function rnd_large_loot(seed, tier, container, n_adv=0){
	Math.seedrandom(seed);
	var gold = 50;
	var i;
	for (i=0; i<=n_adv; i+=1) {
		gold += Math.floor(Math.random() * 100) + 1;
	}

	var $_list = $('<ul>').addClass('loot');
	$_list.append($('<li>').text('Gold: '+gold));
	$_list.append($('<li>').text(random_minor_item(tier)));
	$_list.append($('<li>').text(random_minor_item(tier)));
	$_list.append($('<li>').text(random_treasure()));
	if (n_adv > 0){
		$_list.append($('<li>').text(random_major_item(tier)));
		for (i=0; i<=n_adv-1; i+=1){
			$_list.append($('<li>').text(random_minor_item(tier)));
			$_list.append($('<li>').text(random_minor_item(tier)));
		}
		if (Math.floor(Math.random * 10) == 9){
			$_list.append($('<li>').text(random_major_item(tier)));
			$_list.append($('<li>').text(random_major_item(tier)));
		}
	} else {
		if (Math.floor(Math.random * 10) == 9){
			$_list.append($('<li>').text(random_major_item(tier)));
		}
	}

	$('#'+container).append($_list);
}

function rnd_boss_loot(seed, tier, container, n_adv=0){
	Math.seedrandom(seed);
	var n_adv = 3;
	var gold = 50;
	var i;
	for (i=0; i<=n_adv; i+=1) {
		gold += Math.floor(Math.random() * 100) + 1;
	}

	var $_list = $('<ul>').addClass('loot');
	$_list.append($('<li>').text('Gold: '+gold));
	$_list.append($('<li>').text(random_treasure()));
	$_list.append($('<li>').text(random_minor_item(tier)));
	$_list.append($('<li>').text(random_minor_item(tier)));
	$_list.append($('<li>').text(random_major_item(tier)));
	$_list.append($('<li>').text(random_major_item(tier)));
	$_list.append($('<li>').text(random_major_item(tier)));
	$_list.append($('<li>').text(random_major_item(tier)));
	$_list.append($('<li>').text(random_major_item(tier)));
	$_list.append($('<li>').text(random_major_item(tier)));

	$('#'+container).append($_list);
}

function random_treasure(){
	var gold = Math.floor(Math.random() * 100) + 51;
	return 'Treasure valued at ' + gold + ' gold';
}

function random_minor_item(tier){
	var type = rnd_item(loot_options);
	return type.draw(tier);
}

function random_major_item(tier){
	var type = rnd_item(loot_options_adv);
	var item;
	switch (type){
		case 'blk_soul_gem':
		case 'ult_potion':
			item = type.draw(tier+1);
			break;
		default:
			item = type.draw(tier+1);
	}
	return item;
}

function random_novel(tier){return 'A novel miraculous item';}

function random_e_arrow(tier){
	switch(tier){
		case 2:
			tier = 'Lesser';
			break;
		case 3:
			tier = 'Common';
			break;
		case 4:
			tier = 'Greater';
			break;
		case 5:
			tier = 'Grand';
			break;
		case 6:
			tier = 'Deific';
			break;
		case 1:
		default:
			tier = 'Petty';
	}

	var element = rnd_item(elements_list);
	var amt = Math.floor(Math.random() * 20) + 1;
	var item = tier + ' ' + element.name + ' Arrow x ' + amt;

	return item;
}

function random_scroll(tier){	
	var double = (tier == 6);
	var clss = rnd_item(scasters_list);
	var sinfo = {des_clss : clss.sname, des_level : ((tier > 5) ? 5 : tier)};

	var spells = spell_list.filter(function(spell){
		return ( (spell.classes.indexOf(this.des_clss) > -1) && (spell.level == ''+this.des_level) );
	}.bind(sinfo));

	var spell_array = [];
	var i;
	for (i=0; i<spells.length; i+=1){
		spell_array.push({name : spells[i].name, weight : 2});
	}

	var spell = rnd_item(spell_array);

	var item = "A scroll of " + spell.name;
	item = double ? "Two scrolls of " + spell.name : item;

	return item;
}

function random_reagent(tier){
	var reagent = rnd_item(reagents_list);
	var amt = Math.floor(Math.random() * 4) + 1;
	var item = reagent.name + ' x ' + (amt * tier);

	return item;
}

function s_gem(tier, ult=false){
	switch(tier){
		case 2:
			tier = 'Lesser';
			break;
		case 3:
			tier = 'Common';
			break;
		case 4:
			tier = 'Greater';
			break;
		case 5:
			tier = 'Grand';
			break;
		case 6:
			tier = 'Deific';
			break;
		case 1:
		default:
			tier = 'Petty';
	}
	tier = ult ? 'Black' : tier;
	var item = tier + ' soul gem';

	return item;
}

function random_pot(tier, ult=false) {
	var tier = 'Minor';
	switch(tier){
		case 3:
			tier = 'Diluted';
			break;
		case 4:
			tier = 'Clear';
			break;
		case 5:
			tier = 'Distilled';
			break;
		case 6:
			tier = 'Pure';
			break;
		case 1:
		case 2:
		default:
			tier = 'Polluted';
	}
	tier = ult ? 'Ultimate' : tier;

	var potion = rnd_item(potions_list);
	var pot = potion.name;
	var item = 'Unknown potion';

	switch(pot){
		case 'Resist Element':
			var element = rnd_item(elements_list);
			item = tier + ' potion of resist ' + element.sname;
			break;
		case 'Improve Attribute':
			var attr = rnd_item(attributes_list);
			item = tier + ' potion of increased ' + attr.sname;
			break;
		case 'Healing':
		case 'Magicka':
		case 'Speed':
		default:
			item = tier + ' potion of ' + potion.sname;
	}

	amt = Math.floor(Math.random() * 4) + 1;
	item = item + ' x ' + amt;

	return item;
}
