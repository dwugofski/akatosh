

<script id="spell_template" type="x-tmpl-mustache">
	<div class="spellblock {{{blockclass}}}" id="{{{name}}}">
		<div class="bar top"></div>
		<div class="middle">
			<svg height="60" width="40" class="lvl"><polyline points="0,0 0,40 20,60 40,40 40,0"/></svg>
			<div class="lvl">{{level}}</div>
			<div class="title">
				<h1>{{name}}</h1>
				<h2>{{subtitle}}</h2>
			</div>
			{{#properties}}
			<div class="top_props">
				<svg class="sectionbar" height="4px" width="100%" viewbox="0 0 255 4" preserveAspectRatio="none"><polyline points="0,0 255,1.75 0,3.5"/></svg>
				{{#attributes}}
					{{#ano}}<prop><h4>{{{name}}}</h4><p>{{{text}}}</p></prop>{{/ano}}
					{{#par}}<prop><p>{{{text}}}</p></prop>{{/par}}
					{{#lst}}
					<prop><ul {{#dashed}}class="dashed"{{/dashed}}>
						{{#items}}<li>{{{text}}}</li>{{/items}}
					</ul></prop>
					{{/lst}}
					{{#tab}}
					<prop><div style="text-align: center;"><table>
						{{#rows}}
						<tr>
							{{#items}}
								{{#heading}}<th {{#centered}}class="center_al"{{/centered}}>{{{text}}}</th>{{/heading}}
								{{^heading}}<td {{#centered}}class="center_al"{{/centered}}>{{{text}}}</td>{{/heading}}
							{{/items}}
						</tr>
						{{/rows}}
					</table></div></prop>
					{{/tab}}
				{{/attributes}}
			</div>
			{{/properties}}
			{{#description}}
			<div class="desc">
				<svg class="sectionbar" height="4px" width="100%" viewbox="0 0 255 4" preserveAspectRatio="none"><polyline points="0,0 255,1.75 0,3.5"/></svg>
				{{#attributes}}
					{{#ano}}<prop><h4>{{{name}}}</h4><p>{{{text}}}</p></prop>{{/ano}}
					{{#par}}<prop><p>{{{text}}}</p></prop>{{/par}}
					{{#lst}}
					<prop><ul {{#dashed}}class="dashed"{{/dashed}}>
						{{#items}}<li>{{{text}}}</li>{{/items}}
					</ul></prop>
					{{/lst}}
					{{#tab}}
					<prop><div style="text-align: center;"><table>
						{{#rows}}
						<tr>
							{{#items}}
								{{#heading}}<th {{#centered}}class="center_al"{{/centered}}>{{{text}}}</th>{{/heading}}
								{{^heading}}<td {{#centered}}class="center_al"{{/centered}}>{{{text}}}</td>{{/heading}}
							{{/items}}
						</tr>
						{{/rows}}
					</table></div></prop>
					{{/tab}}
				{{/attributes}}
			</div>
			{{/description}}
			{{#higher}}
			<div class="highlv">
				<h3>At Higher Levels</h3>
				{{#attributes}}
					{{#ano}}<prop><h4>{{{name}}}</h4><p>{{{text}}}</p></prop>{{/ano}}
					{{#par}}<prop><p>{{{text}}}</p></prop>{{/par}}
					{{#lst}}
					<prop><ul {{#dashed}}class="dashed"{{/dashed}}>
						{{#items}}<li>{{{text}}}</li>{{/items}}
					</ul></prop>
					{{/lst}}
					{{#tab}}
					<prop><div style="text-align: center;"><table>
						{{#rows}}
						<tr>
							{{#items}}
								{{#heading}}<th {{#centered}}class="center_al"{{/centered}}>{{{text}}}</th>{{/heading}}
								{{^heading}}<td {{#centered}}class="center_al"{{/centered}}>{{{text}}}</td>{{/heading}}
							{{/items}}
						</tr>
						{{/rows}}
					</table></div></prop>
					{{/tab}}
				{{/attributes}}
			</div>
			{{/higher}}
		</div>
		<div class="bar bottom"></div>
	</div>
</script>