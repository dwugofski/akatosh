		<div id="header">
			<div class="sub" style="top: 110px; left: 50px;">Magical Items</div>
			<div class="main" style="top: 140px; left: 50px;">Magical Goods and Enchanted Items</div>
		</div>
		<section id="items" class="ocol">
			<h1>Magical Item Basics</h1>
			<p>
				Throughout Tamriel there are numerous magical artifacts and items. These items can be used by players of any level or class. Typically these items are rare or hard to come by in some way, requiring the party to seek out or work hard for whatever relic they want to obtain. 
			</p>

			<h1><a class="anchor" id="utility_items"></a>Utility Items</h1>
			<p>
				These items occur repeatedly in the came. Some may be rare, and some may be common, but they all grant some benefits to the players when used.
			</p>
			<?php include 'db/potions.php';?>
			<?php include 'db/soul_gem.php';?>
			<?php include 'db/varla_stone.php';?>
			<?php include 'db/welkynd_stone.php';?>
			<?php include 'db/daedra_heart.php';?>
			<?php include 'db/mort_flesh.php';?>

			<h1><a class="anchor" id="enchanted_items"></a>Enchanted Items</h1>
			<p>
				Many magical items have obtained their magical properties through being enchanted by some mage in Tamriel. These items each have a magical charge which decays with use. They may also be disenchanted, a process which destroys the item but bestows the knowledge of the enchantment to the disenchanter. For more details on enchanted items, see the <a href="../over/index.php?section=mech#enchanted_items">Enchanted Items</a> section of the gameplay mechanics page.
			</p>
			<?php include 'db/conductive_wand.php';?>
			<?php include 'db/sprigganwood_ring.php';?>
			<?php include 'db/ring_of_apparel.php';?>
		</section>
