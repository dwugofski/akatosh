<script id="mob_template" type="x-tmpl-mustache">
	<div class="moblock" id="{{{name}}}">
		<div class="bar top"></div>
		<div class="middle">
			<div class="mobidname">{{name}}</div>
			<div class="title">
				<h1>{{{name}}}</h1>
				<h2>{{size}} {{type}}, {{alignment}}</h2>
			</div>
			{{#top_props}}
			<div class="top_props">
				<svg class="sectionbar" height="4px" width="100%" viewbox="0 0 255 4" preserveAspectRatio="none"><polyline points="0,0 255,1.75 0,3.5"/></svg>
				{{#attributes}}
				{{#ano}}<prop><h4>{{{name}}}</h4><p>{{{text}}}</p></prop>{{/ano}}
				{{#par}}<prop><p>{{{text}}}</p></prop>{{/par}}
				{{/attributes}}
			</div>
			{{/top_props}}
			<div class="abilities">
				<svg class="sectionbar" height="4px" width="100%" viewbox="0 0 255 4" preserveAspectRatio="none"><polyline points="0,0 255,1.75 0,3.5"/></svg>
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
			<div class="bot_props">
				<svg class="sectionbar" height="4px" width="100%" viewbox="0 0 255 4" preserveAspectRatio="none"><polyline points="0,0 255,1.75 0,3.5"/></svg>
				{{#attributes}}
				{{#ano}}<prop><h4>{{{name}}}</h4><p>{{{text}}}</p></prop>{{/ano}}
				{{#par}}<prop><p>{{{text}}}</p></prop>{{/par}}
				{{/attributes}}
			</div>
			{{/bot_props}}
			{{#feats}}
			<div class="feats">
				<svg class="sectionbar" height="4px" width="100%" viewbox="0 0 255 4" preserveAspectRatio="none"><polyline points="0,0 255,1.75 0,3.5"/></svg>
				{{#attributes}}
				{{#ano}}<prop><h4>{{{name}}}</h4><p>{{{text}}}</p></prop>{{/ano}}
				{{#par}}<prop><p>{{{text}}}</p></prop>{{/par}}
				{{/attributes}}
			</div>
			{{/feats}}
			{{#actions}}
			<div class="actions">
				<h3>Actions</h3>
				{{#attributes}}
				{{#ano}}<prop><h4>{{{name}}}</h4><p>{{{text}}}</p></prop>{{/ano}}
				{{#par}}<prop><p>{{{text}}}</p></prop>{{/par}}
				{{/attributes}}
			</div>
			{{/actions}}
			{{#reactions}}
			<div class="reactions">
				<h3>Rections</h3>
				{{#attributes}}
				{{#ano}}<prop><h4>{{{name}}}</h4><p>{{{text}}}</p></prop>{{/ano}}
				{{#par}}<prop><p>{{{text}}}</p></prop>{{/par}}
				{{/attributes}}
			</div>
			{{/reactions}}

			<hr class="ender"/>
		</div>
		<div class="bar bottom"></div>
	</div>
</script>