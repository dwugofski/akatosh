
function sort_mobs(spell_obj_list){
	spell_obj_list.sort(function(a, b){
		return a.name.localeCompare(b.name);
	});
}

function summoned_daedra(){ return ["scamp", "clannfear", "daedroth", "spiderdaedra"]; }

function dragon_cult(){ return ["dragoncultist", "dragoncultacolyte", "dragoncultthug", "dragoncultinfiltrator"]; }