<?php
	$chapname = "Bruma";
	include "../index_head.php";
?>
		<script type="text/javascript">
			$(document).ready(function(){
				fillSidenav($("#main chapter"));
			});
		</script>
		<div id="header">
			<div class="sub" style="top: 110px; left: 50px;">Chapter 1</div>
			<div class="main" style="top: 140px; left: 50px;">Bruma and Piukanda</div>
		</div>
		<section id="The Ruins of Piukanda">
			<chapter>
				<h1>The Ruins of Piukanda</h1>
				<h2>Overview</h2>
				<h5>(1/2 Level)</h5>
				<p>
					After completing the <quest>Key to Piukanda</quest> quest, the party may enter the ruined city of Piukanda through the back door. This quest is fairly straight-forward. It&rsquo;s a simple dungeon walk.
					</p><p>
					The party is in search of an <item>Ayleid Memory Stone</item> containing the location of the <item>Bal Falruhn</item>. However the memory crystal is hidden in the ruins. The chamber containing the stone &mdash; the memory stone vault &mdash; hides the stone beneath the floor. The room has seven sconces for Varla Stones, and the party must place <item>Piukandan Varla Stones</item> on four of them in order to reveal the memory stone beneath the floor.
					</p><p>
					The Piukandan Varla Stones are held by <enemy>Ayleid Knights</enemy> who have been guarding the keys for centuries in order to stay true to their last, solemn vow: to never allow the <item>Staff of Towers</item> to be reassembled. There are two White-Gold Knights, each defending two Varla Stones and an <item>Ayleid Tablet</item> which describes which sconces to place the stones on.
					</p><p>
					When the quest is completed, Arrianus will use the memory stone to determine that the location of the <item>Bal Falruhn</item> is Labyrinthian. She directs the party to travel north towards Skyrim to the ancient Nordic ruins.
				</p>
				<h3>Background</h3>
				<p>
					By this point the party should know from <npc>Arrianus Hearth-Heart</npc> that their ultimate goal is the location of the <item>Bal Falruhn</item>, an ancient and very powerful Ayleid artifact that the Blades want to keep out of the hands of the Marukhati Selectives. In order to locate this relic for the Blades, Arrianus needed to get a memory stone held in Piukanda. However access to the section of Piukanda with the memory stone is impossible through the front entrance due to collapsed tunnels.
					</p><p>
					The only way to reach the memory stone vault is through the back entrace to the council chambers. However that entrance was locked centuries ago when the human slaves revolted, and only the original key &mdash; held by <npc>Jervar Djernsen</npc> &mdash; was capable of opening it.
				</p>
				
				<h2>Entering the Ruins</h2>
				<p>
					When the party returns to <npc>Arrianus Hearth-Heart</npc> with the <item>Key to Piukanda</item>, she will give them the location of the hidden entrance. She will explain that it is a good thing the entrance is locked, because the rest of Piukanda was picked clean centuries ago. Scholars love to investigate the city, because the <item>Varla Stones</item> from there are unique. Unlike most Varla Stones which crumble after use, Piukandan Varla Stones remain solid even after their magicka is spent.
					</p><p>
					Arrianus has looked into maps of Piukanda. While she does not know how much of the city underground has survived the centuries, the memory stone vault is located very near the rear entrance. She tells the party that, at the end of the entrance hallway, there will be a door on the right leading to the vault. She also believes that the White-Gold Knights have likely sealed the memory stone away somehow &mdash; to protect it from thieves. 
					</p><p>
					However she does not know how it was locked away. The party may have to look for clues to discover how to extract the relic. She offers her <item>Ayleidoon reference notes</item> to help translate any Ayleid text they may encounter. Anyone with an Intelligence score of 12 or higher will be capable of using these notes to translate Ayleid texts. As well, a DC 13 <die>INT</die> (History) check can allow a player to learn Ayleidoon from the reference material if they do not already.
					</p><p>
					Piukanda's rear entrance is located due southeast of Bruma. About a day and a half's journey out of the city. While most of the city was indeed above ground, the surface structures have been largely salvaged by scavengers looking for Ayleid stone. The back entrance is in a forest, with a short stone path leading to the doorway. If the door is touched without the crystal key, a blue ward shimmers around the door, preventing entry. However when the key is pressed to the ward, it disintegrates into patches and erodes away.
				</p>
				
				<h2>Inside the Ruins</h2>
				<imagebox id="piukanda_map_box" class="doublewide">
					<img src="res/piukanda.png" id="piukanda_map"/>
					<footnote>Map of Piukanda</footnote>
				</imagebox>
				<br/>
				<p>
					This section of the city is simply the city's council chambers. Here most of the governence of the city took place. The rest of the city underground has been cut off by cave-ins. Below is an map of the ruins interior along with some relevant annotation. 
				</p>
				<h3>Area 1: Entrance</h3>
				<p>
					This hallway is where the party enters the ruins upon their arrival. In addition to the southern entrance, there are two doors at the end of the hall: one leading north and one leading south. The south door leads to area 2 while the north door leads to area 4.
				</p>
				<h3>Area 2: The Memory Stone Vault</h3>
				<p>
					This is the location where the memory stone is being held. It is a square room with Varla Stone sconces in alcoves set into the four corners of the room. Two Varla Stone sconces are located in each corner except for the entrance corner, which only has one. In order to reach the sconces the party must make a DC 8 <die>DEX</die> (Acrobatics) check in order to reach the sconce. On a failed check, the party member takes <die>1d4</die> bludgeoning (fall) damage. 
					</p><p>
					In the center of the room is a circular metal plate bearing the sigil of the White-Gold Knights (an ornate tree-embossed emblem). The memory stone is located in the below the sigil, in a cylindical pedestal which will rise from the floor if and only if the party places four <item>Piukandan Varla Stones</item> in the four sconces indicated by the white circles in the map (on the left side when facing each corner).
					</p><p>
					The characters can make an <die>INT</die> (Investigation) check on the circular plate to see its significant. The result of the check is shown in the table below:
				</p>
				<div class="tablewrap">
					<table>
						<tr>
							<th class="center_al">Check Value</th>
							<th>Result</th>
						</tr>
						<tr>
							<td class="center_al">&lt;5</td>
							<td>There does not seem to be anything remarkable about this plate</td>
						</tr>
						<tr>
							<td class="center_al">5-10</td>
							<td>This plate seems to be part of the original Ayleid building; it bears the sigil of the White-Gold Knights</td>
						</tr>
						<tr>
							<td class="center_al">10-15</td>
							<td>The same as the 5-10 result, with the addition of noticing that the grooves arround the plate as well as subtle seams in the metal suggest the plate can slit in two and slide under the ground</td>
						</tr>
						<tr>
							<td class="center_al">15-20</td>
							<td>The same as the 10-15 result, with the addition of noticing that the contraption appears to be connected to the Varla Stone sconces surrounding the room</td>
						</tr>
						<tr>
							<td class="center_al">&gt;20 (or critical)</td>
							<td>The same as the 15-20 result, with the addition of detecting a magical entanglement between the plate and the correct four sconces which will trigger it</td>
						</tr>
					</table>
				</div>
				<p>
					In addition to investigating the plate as a whole, the party members can investigate the individual sconces. An <die>INT</die> (Investigation) or <die>WIS</die> (Perception) check can detect whether a sconce is resonating with the central plate and thus likely to be the correct sconce to place the Varla Stones. If the result of the check is 18 or greater, the player will accurately determine whether the sconce is attuned to the vault. However if the check fails, the party member will only sense random magical associations. If the result of the check is even, they detect magical resonance. If the result is odd, they do not.
				</p>
				<p>
					Once the four stones are placed on their respective holders, they crumble. The room shakes. The circular plate divides in two and hides under the floor, and a pedestal rises up from underground holding the gleaming memory stone in a sconce.
				</p>
				<h3>Area 3: The Switched Room</h3>
				<p>
					This hallway runs above the entrance hallway and ends in a door that can only be opened from the side opposite the memory stone vault. The door has a circle in the center, and a party member may be able to make a DC 12 ranged attack to hit the button and open the door. The door itself is made of a material stronger than steel, so most normal weapons and spells will have no effect on destroying it.
				</p>
				<h3>Area 4: Hallway to the Heart</h3>
				<p>
					This hallway connects to the heart of the council chambers. The &ldquo;x&rdquo; on the map indicates the location of a <enc>easy encounter</enc>.
				</p>
				<h3>Area 5: The Heart</h3>
				<p>
					This section of the ruins is the hub that connects to the other parts of the dungeon. It is an open, huge two-leveled area with a stone bridge crossing through the center of the room. The lower floor is partiall obscured by fog, grating a +2 bonus to Stealth checks to creatures trying to hide in the fog. Upon entering the room, the party members are able to detect creatures moving in the fog, but cannot quite make out their figures. On the upper level, the room is well-lit by several <item>Welkynd Stones</item> in sconces indicated by the cyan dots. Party members can remove the Welkynd Stones without any skill checks as the sconces are within reach. There are four encounters in this room:
				</p>
				<ul class="untabbed">
					<li>The encounter just in front of the door to area 4 is an <enc>easy encounter</enc></li>
					<li>The encounter at the bottom-left of the top level is an <enc>easy encounter</enc></li>
					<li>The encounter at the mid-right of the top level is an <enc>easy encounter</enc></li>
					<li>The encounter in the center of the map on the bottom level is a <enc>medium encounter</enc></li>
				</ul>
				<h3>Area 6: The Six-Sconce Room</h3>
				<p>
					This room is a sort of hallway containing six Welkynd sconces in alcoves along the side walls. Only one sconce, shown on the map, contains an active Welkynd Stone. The other stones have disintegrated into dust. In the middle of the room is a raised platform about a foot off the ground. Melee fighters on the raised platform gain advantage on attack rolls against creatures on the lower floor.
					</p><p>
					The encounter in this room is a <enc>medium encounter</enc>. The obvious Ayleid cask in the center of the room contains <loot>small loot</loot>. The Ayleid chest in the alcove in partially obscured behind a sconce pillar and contains <loot>medium loot</loot>.
				</p>
				<h3>Area 7: The Guard's Room</h3>
				<p>
					This room is one of the two rooms occupied by the skeletal remains of a White-Gold Knight. It used to be where the council guards would be stationed during their downtime. In the center of the room is a raised &ldquo;T&rdquo;-shaped platform. In addition to the <enemy>Ayleid Knight</enemy> who sits on a throne-like chair in the middle of the T platform, there are two <item>Faded Piukandan Varla Stones</item> &mdash; maked with &ldquo;V&rdquo; on the map &mdash; sitting atop sconces on either side of the chair. Creatures on the raised platform have advantage on attack rolls against creatures on the lower floor. 
					</p><p>
					The &ldquo;B&rdquo; represents a <enc>hard encounter</enc> including one and only one <enemy>Ayleid Knight</enemy>. The Ayleid cask marked by the circl at the bottom of the T platform contains <loot>small loot</loot>. The Ayleid chest to the right of the room contains <loot>medium loot</loot>. The Ayleid chest behind the throne contains <loot>large loot</loot> plus an <item>Ayleid Tablet</item>. The tablet is a fragment of two parts &mdash; with the other half being in area 18. This is the ending fragment, and, when it is translated, it reads: &ldquo;&hellip;each to the left.&rdquo;
				</p>
				<h3>Area 8: The Five-Sconce Room</h3>
				<p>
					This room is lined with five Welkynd Stone sconces along the wall, but only one of them &mdash; shown on the map &mdash; holds a Welkynd Stone. The encounter in this room is an <enc>easy encounter</enc>.
				</p>
				<h3>Area 9: The Blades Hall</h3>
				<p>
					This hallway contains swinging blades which will not activate until a character walks into their path. Players will detect the trap if their passive perception is above 12, or if they make a DC 12 <die>INT</die> (Investigation) check. If a character walks into the trap, they must make a DC 11 <die>DEX</die> saving throw or take damage. If they detect the trap before walking in, they have advantage on the save. The trap will deal <die>1d8</die> of slashing damage normally. However if a character&lsquo;s speed is less than 30ft., the damage will increase to <die>2d8</die>.
				</p>
				<h3>Area 10: The Eight-Sconce Hall</h3>
				<p>
					This hall contains two levels. The upper level is comprised of two balconies: one to the south and one to the north. They overlook the lower level hallway and have a metal grate from their floor to the ceiling, making it impossible to jump off or onto the upper level. The lower level hallway contains eight Welkynd Stone sconces, two of which contain stones.
				</p>
				<h3>Area 11: The Two Stairs Room</h3>
				<p>
					This room contains two stairs leading upward and to the left and right. As well, this room contains a secret door that can only be opened by a switch in area 18.
				</p>
				<h3>Area 12: South Upper Hallway</h3>
				<p>
					This is a simple hallway connecting areas 11, 10, and 13. On the west side of the hallway is an <enc>easy encounter</enc>. On the right side of the hallway is an Ayleid cask containing <loot>small loot</loot>.
				</p>
				<h3>Area 13: The Slab Room</h3>
				<p>
					Once a lavishly decorated council meeting room, time has stipped this room of everything except the stone slabs the councilmembers would place cushions upon to sit and discuss issues facing the city. The encounter in this room is an <enc>easy encounter</enc>.
				</p>
				<h3>Area 14: North Upper Hallway</h3>
				<p>
					This is a simple hallway connecting areas 11, 10, and 15. At the western end of the hallway is an <enc>easy encounter</enc> and an Ayleid cask with <loot>small loot</loot>.
				</p>
				<h3>Area 15: The Spike Trap Room</h3>
				<p>
					This room was where Ayleid officials would torture slaves who misbehaved or ran away. Most councilmembers and ordinary citizens were not permitted entry to this part of the city, so they had very little idea how cruel, barbaric, and bloody the torturers could be. The encounter in this room is a <enc>medium encounter</enc>, and the Ayleid chest along the eastern side contain <loot>medium loot</loot>. The 20ft. x 20ft. square in the center of the room is actually a platform that will rise up from the bottom of the room and smash players into spikes in the ceiling. Characters and creatures who walk into the center of the room must make a DC 13 <die>DEX</die> saving throw or take <die>1d8</die> piercing damage and be immobilized for one turn.
					</p><p>
					Characters with a passive perception between 10 and 14 (inclusive) or who make an <die>INT</die> (Investigation) check between 10 and 14 on the room will notice blood stains on the floor where the trap would activate. When the passive perception or <die>INT</die> check is 15 or higher, the party member(s) will also notice the large spikes in the ceiling.
				</p>
				<h3>Area 16: The Fog Chamber</h3>
				<p>
					The entrance to this room overlooks the lower floor, with stairs to the side leading to the lower level.The upper level is separated from the lower by a metal grate that runs from the floor of the upper level to the ceiling, just like in area 10. The lower level is largely obscured by mist, granting a +2 bonus to Stealth checks in the room.
					</p><p>
					This room contains an <enc>easy encounter</enc> which &mdash; if possible &mdash; is split into two parts. The first part is indicated by the lower &ldquo;X&rdquo; and is clearly visible to the party upon entering the room. The second part is hiding in the mist. If the party starts their encounter with the first group without detecting the second, the second group will join in after one round with advantage on their attack rolls for the subsequent round. A DC 11 <die>WIS</die> (Perception) or <die>INT</die> (Investigation) check will allow the group to detect the Ayleid cask containing <loot>small loot</loot> in the corner.
				</p>
				<h3>Area 17: Column Room</h3>
				<p>
					This room contains a column. It is nothing special. However it also holds an <enc>easy encounter</enc>.
				</p>
				<h3>Area 18: Records Room</h3>
				<p>
					This used to be the records room, where the council would keep records of their meetings. However now the shelves of record books are rotting and illegible. The siwtch to the west of the north column opens the door marked &ldquo;S&rdquo;. There is a Welkynd Stone sconce located in an alcove on the western side of the room opposite the south column.
					</p><p>
					At the center of the room, marked with &ldquo;B&rdquo; is a <enc>hard encounter</enc> containing at least one <enemy>Ayleid Knight</enemy>, sitting on a slab. To the north and south of the Ayleid Knight are two <item>Faded Piukandan Varla Stones</item>. Behind the Ayleid Knight is an Ayleid chest containing <loot>large loot</loot> with an <item>Ayleid Tablet</item>.
					</p><p>
					The tablet is a fragment of two parts &mdash; with the other half being in area 7. This is the starting fragment, and, when it is translated, it reads: &ldquo;&hellip;Take the four Varla Stones and place them&hellip;&rdquo;
				</p>
				<h2>Recovering the Memory Stone</h2>
				<p>
					After the party has retrieved the <item>Ayleid Memory Stone</item> from the vault, the first person to touch it will experience an extreme sense of disorientation. They will momentarily be rushed with vague memories from a White-Gold Knight named <npc>Meidilye</npc> who was tasked with escorting the <item>Bal Falruhn</item> to the abandoned ruins of the Falmer - the Goria Tor ("Forgotten Vale"), where the Ayleids hoped to establish themselves in Skyrim. 
				</p><p>
					However on the way over, their caravan was hijacked by Nord raiders. Meidilye managed to escape the carnage and slaughter, but had his right hand amputated and was left for dead in the cold. He barely managed to make it into Ayleid territory, so the first group of White-Gold Knights to find him extracted his memories with the stone in order to keep his memories in case he died before interrogation. 
				</p><p>
					When the party returns the memory stone to <npc>Arrianus</npc>, she will spend a few minutes channeling it. Then she will rummage through her notes and maps. Then she will explain to the group that, according to her notes, the group that hijacked the caravan operated outside of Bromjunaar - Labyrinthian, as it is more commonly known. That's where the party should begin their search for the artifact. 
				</p>
			</chapter>
			<h2>Creatures</h2>
			<p>
				The Ruins of Piukanda are filled with the reanimated corpses of Ayleid citizens brutally killed by their slaves during the revolt. Their souls cannot find rest, so they wander the halls of their former city.
				</p><p>
				While you should feel free to generate your own enemy creatures and encounters, the following list contains the enemies I used in encounters for this dungeon. Easy encounters will just contain a mix of simple monsters like <enemy>Skeletons</enemy> or <enemy>Zombies</enemy>. Medium encounters may contain higher difficulty creatures like <enemy>Shadows</enemy> but not <enemy>Ayleid Knights</enemy>. The knights are reserved for the two <enc>hard encounters</enc> arround the varla stones.
			</p>
			<div>
				<span class="moblink" id="skeleton_link"></span>
				<span class="moblink" id="zombie_link"></span>
				<span class="moblink" id="shadow_link"></span>
				<span class="moblink" id="ayleidknight_link"></span>
			</div>
			<div id="creaturebox"></div>
		</section> <!-- End Section -->
<?php
include "../index_tail.php";
?>