
<div class="charblock multi">
	<div class="bar"></div>
	<div class="middle colored">
		<div class="lvl">{{level}}</div>
		<div class="title">
			<h1>{{{name}}}</h1>
			<h2>{{race}} {{#clss}}{{name}} ({{level}}), {{/clss}}{{alignment}}</h2>
		</div>
		{{#top_props}}
		<div class="propset top_props">
			{{#attributes}}
			{{#ano}}<prop><h4>{{name}}</h4><p>{{{text}}}</p></prop>{{/ano}}
			{{#par}}<prop class="palone"><p>{{{text}}}</p></prop>{{/par}}
			{{/attributes}}
		</div>
		{{/top_props}}
		<div class="propset abilities">
			<table>
				<tr>
					<th class="col1">STR</th>
					<th>DEX</th>
					<th>CON</th>
					<th>INT</th>
					<th>WIS</th>
					<th>CHA</th>
				</tr>
				<tr>
					<td class="col1">{{STR}}</td>
					<td>{{DEX}}</td>
					<td>{{CON}}</td>
					<td>{{INT}}</td>
					<td>{{WIS}}</td>
					<td>{{CHA}}</td>
				</tr>
			</table>
		</div>
		{{#bot_props}}
		<div class="propset bot_props">
			{{#attributes}}
			{{#ano}}<prop><h4>{{{name}}}</h4><p>{{{text}}}</p></prop>{{/ano}}
			{{#par}}<prop class="palone"><p>{{{text}}}</p></prop>{{/par}}
			{{/attributes}}
		</div>
		{{/bot_props}}
		{{#skills}}
		<div class="propset skills">
			<prop>
				<table>
					{{#group}}
					<tr>
						{{#skill}}
						<th>{{{name}}} ({{ability}})</th>
						<td class="val">{{mod}}</td>
						{{/skill}}
					</tr>
					{{/group}}
				</table>
			</prop>
		</div>
		{{/skills}}
		{{#features}}
		<div class="feats">
			{{#feat_sects}}
			<div class="propset">
				<h5 class="colored">{{section}}</h5>
				{{#attributes}}
				{{#ano}}<prop><h4>{{{name}}}.</h4><p>{{{text}}}</p></prop>{{/ano}}
				{{#par}}<prop class="palone"><p>{{{text}}}</p></prop>{{/par}}
				{{/attributes}}
			</div>
			{{/feat_sects}}
		</div>
		{{/features}}
		{{#atks}}
		<div class="propset atks">
			<h3>Attacks</h3>
			{{#attributes}}
			{{#wep}}<prop><h4>{{{name}}}.</h4><p><i>{{type}}:</i> {{{text}}}</p></prop>{{/wep}}
			{{/attributes}}
		</div>
		{{/atks}}
		{{#spellist}}
		<div class="propset">
			<h3>Spells</h3>
			{{#attributes}}
			{{#ano}}<prop><h4>{{{name}}}.</h4><p>{{{text}}}</p></prop>{{/ano}}
			{{/attributes}}
			<div class="spellist">
				{{#levels}}
				<prop>
					{{#cantrip}}
					<table class="colored">
						<tr>
							<th>Cantrips</th>
						</tr>
					</table>
					<ul class="cantrip">
						{{#spells}}
						<li class="spelllink" id="{{sname}}_link"><a href="#{{sname}}_anc">{{{name}}}</a></li>
						{{/spells}}
					</ul>
					{{/cantrip}}
					{{^cantrip}}
					<table class="colored">
						<tr>
							<th>Level {{level}}</th>
							<td>Slot Total: {{slots}}</td>
						</tr>
					</table>
					<ul>
						{{#spells}}
						{{#prepped}}<li class="spelllink prepped" id="{{sname}}_link" ><a href="#{{sname}}_anc">{{/prepped}}
						{{^prepped}}<li class="spelllink" id="{{sname}}_link"><a href="#{{sname}}_anc">{{/prepped}}
						{{{name}}}</a>
						</li>
						{{/spells}}
					</ul>
					{{/cantrip}}
				</prop>
				{{/levels}}
			</div>
		</div>
		{{/spellist}}
		<hr class="ender"/>
	</div>
	<div class="bar"></div>
</div>