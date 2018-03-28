<?php
$navsect = "root";

$compath = "com/";
$respath = "res/";
$rootpath = "./";
$mobspath = "creatures/db/mobs/";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Splinters of Akatosh</title>
	<?php
	include "com/php/def_head.php";
	include "com/php/gen_linkblock.php";
	?>
	
	<link rel="stylesheet" type="text/css" href="com/css/print/chapter.css" media="print"/>
	<link rel="stylesheet" type="text/css" href="com/css/print/creature.css" media="print"/>
	<link rel="stylesheet" type="text/css" href="index_style.css"/>
</head>
<body>

<?php include "com/php/def_navbar.php";?>
<div id="sidenav">
	<nav class="container">
	</nav>
</div>
<div id="content">
	<div id="sidebar">
	</div>
	<div id="main">
		<div id="header">
			<div class="sub" style="top: 110px; left: 50px;">The Campaign</div>
			<div class="main" style="top: 140px; left: 50px;">Splinters of Akatosh</div>
		</div>
		<section>
			<h1>The Website</h1>
			<p>
				This website was compiled for the purpose of collecting my notes for a campaign I am running with some of my friends. The primary purpose of this site is to present the Dungeon Master's guide for the campaign. I find that web programming allows me to manage all the different types of information necessary for a successful campaign in a way that is not easily achieved through simple word processors. Therefore I decided to begin implementing a web-based approach to the campaign documentation.
			</p>

			<h2>Overview</h2>
			<p>
				These sections provide general ideas and rules of thumb behind the game. They outline solid rules I use for the game in order to bridge the game of of <em>D&amp;D</em> with <em>The Elder Scrolls</em> universe. The <a href="over/?over_sect=mech">Gameplay Mechanics</a> section carries information comparable to the <em>Players Handbook</em>: general rules for the players to operate. The <a href="over/?over_sect=dmd">Dungeon Master Rules</a> section is comparable to the <em>Dungeon Master&rsquo;s Guide</em> in that it contains the rules and constraints I use in generating and maintaining the world.
				</p><p>
				However it is not enough to only know the rules of the game. The world has to be populated with actual people and things. These sections outline information on how certain specific things operate in the world of the campaign. The <a href="over/?over_sect=races">Races of Tamriel</a> section provides background information and specs for the various major races native to Tamriel. The <a href="over/?over_sect=mag">Magical Items</a> section gives a list of various magical items and their properties for the campaign.
			</p>
<?php
generate_linkblocks([
	['id' => 'mech', 'link' => 'over/?section=mech', 'text' => 'Gameplay Mechanics', 'img' => 'res/backs/dwemer.jpg', 'x' => '50%', 'y' => '-370px'],
	['id' => 'dmd', 'link' => 'over/?section=dmd', 'text' => 'Dungeon Master Rules', 'img' => 'res/backs/dark_brotherhood.jpg', 'x' => '50%', 'y' => '-422px'],
	['id' => 'race', 'link' => 'over/?section=race', 'text' => 'Races of Tamriel', 'img' => 'res/backs/battle.jpg', 'x' => '50%', 'y' => '-280px'],
	['id' => 'mag', 'link' => 'over/?section=mag', 'text' => 'Magical Items', 'img' => 'res/backs/loot.jpg', 'x' => '50%', 'y' => '-220px']
	]);
?>
		</section>
		<section>
			<h1>The Story So Far</h1>
			<p class="quote">
				Long ago, before the rise of man, the elves ruled over Tamriel and enslaved us. In this time, their mastery over the forces of Aurbis and Aetherius were without limits; there was nothing they could not do. In their arrogance each race made artifacts which could unmake the world. One of these tools of blasphemy - composed by the bloodthirsty Heartland race themselves - had the power to unmake the world. But before they could unleash their horror, the One gave our Queen the power to destroy them. By the might of the One we stood up. By the might of the One we overthrew them. By the might of the One we cast them out of their homes. By the might of the One we rendered them powerless cowards. In the chaos of the ensuing war, the location of the ultimate weapon was forgotten. Its destiny is henceforth unknown.
				<br/>
				<span class="ral"> - <u>Sermon 84 of the Great Prophet Marukh</u></span>
				</p><p class="uind">
				In the middle of the First Era, during the time of the Alessian Empire, three prisoners find themselves in the Imperial Prison. <span class="npc">Mira Andarys</span>: a Dunmer agent of the Morag Tong, <span class="npc">Qa&rsquo;Zahta-Dar</span>: a Khajiit Arkay-worshipper-turned-necromancer, and <span class="npc">Trasus Aquilus</span>: an Alessian Order cleric. They are woken and escorted under guard to a room at the end of the prison wing.
				</p><p>
				There they meet <span class="npc">Matus Polentus</span>, a Blades agent. He informs the party that he has a mission for them, ordered by the Empress herself. The Blades made an arragement with the Morag Tong to get Mira assigned to the mission. For his participation in the mission, Qa&rsquo;Zhata-Dar will receive access to the Imperial Library to study the Elder Scrolls with the Moth Priests. Trasus needs no such persuasion, as he is a loyal subject of the Empire.
				</p><p>
				The three former prisoners are instructed to seek out blades agents in each of the city-states in Nibenay and Colovia. The agents are tasked with locating eight Ayleid relics scattered throughout Tamriel. However a rival shadow group: the <em>Marukhati Selectives</em> have been gaining influence within the Empire, and Matus believes they have infiltrated and corrupted the Blades. He has had to order a communications blackout for these eight agents. The party must investigate and assist these agents and retrieve the relics.
			</p>
			<h2>Chapter 1: Bruma and Piukanda</h2>
			<p>
				The party escapes the Imperial Prison and begins their investigation in Bruma. There they locate the agent stationed there: <span class="npc">Arrianus Hearth-Heart</span>. She informs the party they are seeking the eight fragments of the <em>Staff of Towers</em>, an ancient staff crafted by the Ayleids to harness the power of the towers crafted by the other elvish races.
				</p><p>
				Arrianus informs the party she believes there is a memory stone located in the nearby Ayleid ruins of Piukanda. However the ruins of Piukanda are barred by a magical barrier. Arrianus believes one of the noble families in Bruma holds the key, but has not been able to determine which one. During their investigation, they meet with an Argonian named <span class="npc">Plays-With-Fire</span>: a warlock trying to make ammends for his past as a Mehrunes Dagon worshipper. The party investigates the houses, and discovers the Djern household has the key. 
				</p><p>
				The party enters the ruins of Piukanda and discovers a memory crystal, which they return to Arrianus. She investigates the crystal and determines the location of the relic they are searching for: the <em>Bal Falruhn</em>, is in the ancient Nordic ruins of Bromjunaar, or Labyrinthian. The party must go north to Skyrim to investigate.
			</p>
			<h2>Chapter 2: Retrieving the Bal-Falruhn</h2>
			<p>
				As the party approaches Labyrinthian, the party finds the path up to the ruins is blocked by a powerful blizzard which blows them down the mountain. They head to Whiterun to investigate, but on the way are attacked by cultists in strange masks. When they reach the city, they learn their attackers were part of a Dragon Cult revival which has been wreaking havok in the region.
				</p><p>
				While doing odd jobs in the city to make money, Trasus turns on the party. He reveals that, all along, he has been a worshipper of Molag Bal. He was only using the party as a means to obtain the powerful relics and use them for his Daedric master. The party slays Trasus and heads back into the city. On the way, they meet an Imperial Bard named <span class="npc">Darus Uprene</span>, a scholar seeeking to harness the powers of the ancient civilizations. Darus agrees to join the party, but shortly thereafter he and Plays-With-Fire fall in love and elope to get married.
				</p><p>
				Mira and Qa&rsquo;Zahta-Dar meet with the jarl to discuss the blizzard, hiring a Redguard mercernary named <span class="npc">Zala</span> to assist them. He explains that the Dragon Cult revival has taken up most of his resources, but he believes the blizzard is a result of the actions of <span class="npc">Neradrys Telvanni</span>, a Dunmer wizard who came to the region to study weather magic. He sent some guards to investigate, but they have not returned. The party investigates his cabin, and discovers Dragon Cultists rummaging through it.
				</p><p>
				Mira and Qa&rsquo;Zahta-Dar return to the jarl, who gives them permission to investigate the Dragon Cult presence in the city to locate an agent who may give them the location of Neradrys. The two find <span class="npc">Ornhar Wall-Shaker</span>, who escapes the city through his basement. While pursuing him, the party finds a Khajiit ranger named <span class="npc">Razur</span>, and his wolf companion <span class="npc">Gizmo</span>.
				</p><p>
				They follow Ornhar to the ruins of Volunruud. There, the party finds Neradrys, who explains that the Dragon Cult leader, <span class="npc">Kivas</span> has been using him to learn how to control a powerful relic he discovered in Labyrinthian. He believes Kivas is planning to resurrect <span class="npc">Morokei</span>, an ancient Dragon Priest who has dominion over an army of draugr. If Kivas resurrects Morokei, an undead army will threaten Skyrim and possibly all of Tamriel. Neradrys and the party convince the Jarl to launch a seige against Labyrinthian. 
				</p><p>
				The party, backed by a contingent of soldiers from Whiterun, attack the Dragon Cult fortress of Labyrinthian. Neradrys, using his knowledge of weather magic, manages to create a tear in the weather barrier which prevents access to the ruins. The party enters, but is unable to attack the entrance of Labyrinthian head-on. Instead, they commune with a ghost &mdash; whose respect they earn through combat &mdash; to learn of a secret entrance to the city. This entrance is filled with traps and puzzles. Frustrated beyond the point of tolerance, Razur leaves the party and gives up on the quest. Mira and Qa&rsquo;Zahta-Dar push through, and enter the city
				</p><p>
				Near the secret entrance, they find an Argonian prisoner of the Dragon Cult &mdash; <span class="npc">Kel-Ei</span>. Kel-Ei was captured by the Dragon Cult when he came to Labyrinthian to investigate a Dwemer puzzle box he stole from his former slave master. With Kel-Ei in tow, the party continues onward into the runs to stop Morokei. After Neradrys and Mira put on slave collars to be allowed entrance into the city, the party eventually makes their way to the city&rsquo;s primary ritual temple.
				</p><p>
				In the temple, the party observes Morokei&rsquo;s resurrection, where he sucks the life from Kivas and the other Dragon Cultists. In a heated battle which almost kills many party members, Zala and Mira are finally able to put Morokei back to rest. Neradrys, with his mission completed, continues back to Morrowind, promising the party that &mdash; should they need any assistance from the Telvanni in Vvardenfell &mdash; he would be glad to help them. The party retrieves their first Ayleid artifact: the Bal Falruhn, and returns to Whiterun.
				</p><p>
				Celebrating their victory in the Bannered Mare Inn, Qa&rsquo;Zahta-Dar and Zala party all night. Meanwhile, Mira goes to sleep in her room, and Kel-Ei runs experiments to discern the connection between the Bal Falruhn and his puzzle box. He notices a strong magical connection between the two, but is unable to scry the cause of this connection.
				</p><p>
				In the morning, after asking Zala if she would join them, the party buys her contract from the merchant Baenglin and makes their way to Cheydinhal.
			</p>
			<h2>Chapter 3: Chaos in Cheydinhal</h2>
			<p>
				The party begins their time in the eastern Nibenese city of Cheydinhal by looking for the Blades agent sationed there. They manage to discern that the clothier <span class="npc">Karag Gro-Elimack</span> is the agent they are looking for. It appears Karag was attacked by Marukhati agents who stole his notes and took his memories. Unless the party is able to return his notes to him, Karag will be unable to help them in their search for the next artifact. 
				</p><p>
				The party begins their search in the nearby Ayleid ruins of Kemen. They discover that the Marukhati Selectives were in planning to use Kemen as a base of operations after stealing Karag&rsquo;s notes. However they discovered the ruins were in fact occupied by worshippers of <span class="npc">Mehrunes Dagon</span>. After figting their way throug Dagon cultits (not to be confused with Dragon cultists), the party confronts the cult leader as he is performing a ceremony to sacrifice the last Marukhati to Dagon. Alas, the party is too late, and after killing the cultists, the Marukhati Selective is ripped through a portal to Oblivion by Dagon. 
				</p><p>
				On the advice of Karag, the party decides to speak to <span class="npc">Albrecht Bombidius</span>, an expert on dealing with Daedra, who has been imprisoned in Cheydinhal for Daedra worship.
			</p>
		</section>
	</div>
</div>
</body>
</html>