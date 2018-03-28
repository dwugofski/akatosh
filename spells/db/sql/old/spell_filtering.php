<?php

function spell_filter_generic($spell, $val, $field) {
	return strcasecmp($val, $spell[$field]) == 0;
}

function spell_filter_class($spell, $val) {
	return in_array(strtolower($val), $spell['classes']);
}

function spell_filter_level($spell, $val) {
	return spell_filter_generic($spell, $val, 'level');
}

function spell_filter_school($spell, $val) {
	return spell_filter_generic($spell, $val, 'school');
}

?>