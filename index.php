<!DOCTYPE html> 
<html>
<head>
	<!-- Defaults, CSS/JS main files -->
	<?php include('config.php'); ?>
	<title> Peu Research Center</title>
	<script type = "text/javascript" src = "<?php echo $base;?>/homepage-timers.js?v=<?php echo $date;?>"></script>
</head>
<body>
	<!-- 
		============================================================
		====================== NAVIGATION BAR ======================
		============================================================
	-->
	<?php include('nav.php'); ?>
	<!-- 
		===========================================================
		====================== MAIN SECTIONS ======================
		===========================================================
	-->

	<div class = "double-box">
		<div class = "homepage-box">
			<img id = "display-choya" src = "./images/assets/peu-choya.png">
			<span id = "static-fader"></span>
			<span id = "top-fader" ></span>
			<span id = "middle-top-fader"></span>
			<span id = "middle-bottom-fader"></span>
			<span id = "bottom-fader"></span>

		</div>
		<!-- Hidden margin between the left and right boxes since the left is abs-->
		<div class = "hidden-homepage-box">
		</div>

		<div class = "right-box">
			<h1 class = "title"> Peu Research Center </h1>

			<div class = "section-header">
				<h1>Peu Train</h1>
				<div class = "banner-box"></div>
				<img src = "./images/assets/banner.svg">
			</div>
			<!-- Hidden space so the header doesn't overlap anything below -->
			<div class = "section-header-space"></div>

			<div class = "inner-double-box">
				<div class = "small-description">
					<p1 style = "font-size: 20px;"> Join me for unique trains such as Auric Basin, Tangled Depth Baubles, LS4, POF, and more! <b>/sqjoin Peureki.3647</b> around 15 minutes before a train to join squad and say hi!
					</p1>
				</div>

				<div class = "small-description">
					<div id = "box-0" class = "inner-page-box"> <!-- Start of Peu Train -->
						<div class = "full-timer-name">
							<b>Official: </b><p1 id = "name-0"></p1> <p1 id = "time-0"></p1>
						</div>
						<div class = "full-progress-box">
							<div id = "progress-bar-0" class = "full-progress-bar">
							</div>

							<div class = "page-box-full-timer">

								<div class = "full-timer">
									Days
									<br>
									<p1 id = "days-0">00</p1> <!-- Day -->
								</div>
								<div class = "full-timer">
									Hours
									<br>
									<p1 id = "hours-0">00</p1> <!-- Hour -->
								</div>
								<div class = "full-timer">
									Minutes 
									<br>
									<p1 id = "minutes-0">00</p1> <!-- Minutes -->
								</div>
								<div class = "full-timer">
									Seconds
									<br>
									<p1 id = "seconds-0">00</p1> <!-- Seconds -->
								</div>
							</div>
						</div>

						<p2 id = "num-0" style = "display: none;"> </p2>
					</div> <!-- End of peu train -->

					<div id = "box-1" class = "inner-page-box"> <!-- Start of impromtu -->
						<div class = "full-timer-name">
							<b>Impromtu: </b><p1 id = "name-1"></p1> <p1 id = "time-1"></p1>
						</div>
						<div class = "full-progress-box">
							<div id = "progress-bar-1" class = "full-progress-bar">
							</div>

							<div class = "page-box-full-timer">

								<div class = "full-timer">
									Days
									<br>
									<p1 id = "days-1">00</p1> <!-- Day -->
								</div>
								<div class = "full-timer">
									Hours
									<br>
									<p1 id = "hours-1">00</p1> <!-- Hour -->
								</div>
								<div class = "full-timer">
									Minutes 
									<br>
									<p1 id = "minutes-1">00</p1> <!-- Minutes -->
								</div>
								<div class = "full-timer">
									Seconds
									<br>
									<p1 id = "seconds-1">00</p1> <!-- Seconds -->
								</div>
							</div>
						</div>

						<p2 id = "num-1" style = "display: none;"> </p2>
					</div> <!-- End of impromtu -->
				</div> <!-- End of peu train desc -->
			</div> <!-- End of inner double box -->

			<div class = "section-header">
				<h1>Updates </h1>
				<div class = "banner-box"></div>
				<img src = "./images/assets/banner.svg">
			</div>
			<!-- Hidden space so the header doesn't overlap anything below -->
			<div class = "section-header-space"></div>

			<div class = "small-description" style = "overflow-y: scroll; height: 500px; width: 80%; margin-left: auto; margin-right: auto;">
				<p1>
					<span style = "font-weight: bold;">August 8, 2021</span>
				<br>
					- Added a new footer banner designed by <a href = "https://twitter.com/tiffymew" target = "_blank"><u> Tiffymew</u></a>.
					<br> - Fixed tables in <a href = "./benchmarks.html" target = "_blank"><u>Benchmarks</u></a> to be centered. 
					<br> - Added a new transition to the choyas on this landing page
					<br> - Changed link colors from yellow -> black when switching from dark -> light mode
					
				<br><br>
					<span style = "font-weight: bold;">August 7, 2021</span>
				<br>
					- Been a little MIA because I've been working on a professional portfolio. Trying for a career change as a web dev! Wish me luck! 
					<br> - With that, I've done a complete overhaul of this website. The biggest change is: 
					<br> - Starting to implement a Dark Mode. Simply toggle with the button on the top left and check it out! Only about 60% of the website can currently use it. Both the Timer and Map pages are still in progress. They're more of a pain to work on. 
					<br> - The site is becoming a lot more Mobile-Friendly. This has always been the real struggle since the beginning, but I'm finally learning to make it work and functional. Some pages are still working to be fixed as well. 
					<br> - The design of the front page is completely new. I think the old homepage was cute, but redundant. It didn't offer anything but the menu to go to other 'main' pages to specific pages. I think it's better to simply use the nav bar to get to a page so you don't have to go through two pages to get to what you want. 
					
				<br><br>
					<span style = "font-weight: bold;">July 6, 2021</span>
				<br>
					- Fixed some PSNA locations in <a href = "./resources/dailies.html"><u> Dailies</u></a>.
					
				<br><br>
					<span style = "font-weight: bold;">July 3, 2021</span>
				<br>
					- Switched the order of some of the PSNA links. It's been requested to try to align them from left-to-right. Over time, if it seems off I'll switch the order again. 
					<br> - Added Discipline tooltip to the Mystic Curios in <a href = "./research/refinement.html"><u> Refinement</u></a>. 
					<br> - Updated the drop rate for 10-25 Amalgamated Gemstone conversion in <a href = "./research/refinement.html"><u> Refinement</u></a>. 
					
				<br><br>
					<span style = "font-weight: bold;">July 3, 2021</span>
				<br>
					- Added Pact Supply Network Agent to the <a href = "./resources/dailies.html"><u> Dailies!</u></a>
					<br>- Added Amalgamated Draconic Lodestones, Stormcaller Cores, Sheet of (+Charged) Ambrite to Misc table in <a href = "./research/refinement.html"><u> Refinement</u></a>.
					<br> - Adjusted the sub-nav bar to be scooted to the left
					
				<br><br>
					<span style = "font-weight: bold;">July 2, 2021</span>
				<br>
					- Trashed the old navigation bar and <b>created an entire new one!</b> This one should also be responsive for mobile! There may be some slight adjustments I'll make over time, but the bulk of the layout is complete. I've changed the navigation bar to every single page of the website. 
					<br>- In addition, I've changed the <b> Bookmarks </b> bar on the left side. These are the lil boxes on the left that direct you to a certain location of a page if it's really long. It has fancy new look and animation now. 
					<br>- Updated almost all tables in <a href = "./research/refinement.html"><u> Refinement</u></a> so that when you hover it will show the name of the item. When you hover over the result item, it will show the <b> Costs</b>. Still working on the rest as the other tables..they were made poorly. 
					
				<br><br>
					<span style = "font-weight: bold;">June 28, 2021</span>
				<br>
					- Added <b> Miscellaneous </b> in <a href = "./research/refinement.html"><u> Refinement</u></a>
					<br> - Fixed a bug in in <a href = "./research/refinement.html"><u> Refinement</u></a> where some recipes were showing misplaced materials 
					<br> - Reworked the entire <a href = "./research/refinement.html"><u> Refinement</u></a> code so it should be a lot easier for me to add new recipes and run smoother. 
					
				<br><br>
					<span style = "font-weight: bold;">June 24, 2021</span>
				<br>
					- Added <b> Crystals -> Orbs </b> in <a href = "./research/refinement.html"><u> Refinement</u></a>
					<br> - Fixed a bug in in <a href = "./research/refinement.html"><u> Refinement</u></a> where Item 3 prices were showing up as 0
					
				<br><br>
					<span style = "font-weight: bold;">June 23, 2021</span>
				<br>
					- Added <b> Mystic Curios</b> in <a href = "./research/refinement.html"><u> Refinement</u></a>
					<br> - Added <b> Gemstones</b> in <a href = "./research/refinement.html"><u> Refinement</u></a>
					<br> - Fixed a lot of code in terms of the structure of preferences. Hopefully it works better now. 
					<br> - Added <b> Preferences</b> in <a href = "./research/refinement.html"><u> Refinement</u></a>
					
				<br><br>
					<span style = "font-weight: bold;">June 17, 2021</span>
				<br>
					- Added <b> Daily Ascended Materials</b> in <a href = "./research/refinement.html"><u> Refinement</u></a>
					
				<br><br>
					<span style = "font-weight: bold;">June 13, 2021</span>
				<br>
					- Added a new page called <a href = "./research/refinement.html"><u> Refinement</u></a>! This page will show you whether it's worth it or not to refine a material and make a profit out of it. This is a work in progress as I'll add more materials and adjust some things. 
					
				<br><br>
					<span style = "font-weight: bold;">June 12, 2021</span>
				<br>
					- Live trains are now show here on the front page. These trains are hosted by various commanders that post when they're doing LS4 trains, HP trains, HOT trains, etc. If you want to get pinged, join the public Overflow discord (link on the side). 
					<br> - Fixed the padding again on the images in <a href = "./benchmarks.html"><u> Benchmarks</u></a>.
					
				<br><br>
					<span style = "font-weight: bold;">June 11, 2021</span>
				<br>
					- Fixed a bug where the <b> Popularity </b> column in the <a href = ".benchmarks.html"><u> Benchmarks </u></a> was too wide on mobile. 
					<br> - Adjusted the padding and width of the <a href = "./benchmarks.html"><u> Benchmarks</u></a> to be a lil smaller.
					<br> - Fixed a bug where <a href = "./research/currency-worth.html"><u> Fine T3 -> T4 Spirit Shard conversions</u></a> were not using the appropiate dust.
					<br> - Fixed a bug where gold per hour wasn't properly being sorted in <a href = "./benchmarks.html"><u> Benchmarks</u></a>.
					
				<br><br>
					<span style = "font-weight: bold;">June 10, 2021</span>
				<br>
					- Took a lil vacation, but now I'm back :D
					<br> - Added a new column in <a href = "./benchmarks.html"><u> Benchmarks</u></a> called <b> Popularity </b>. This will show whether or not a train or farm is common. 
					<br> - Fixed a random bug that suddently turned tables to have bigger borders. I have no idea where that came from but Benchmarks and Daily tables should look better now. 
					<br> - Added <b> Laurels </b> to the <a href = "./research/currency-worth.html"><u> Currency Worth</u></a> page. 
					<br> - Added a button in <a href = "./research/currency-worth.html"><u> Currency Worth</u></a> page in <b> mobile </b> that allows you to see the preferences and bookmarks. 
					<br> - Added a new farm. <a href = "./benchmarks.html"><u> Solo Farm: Bitterfrost Events</u></a>. This farm is similar to the popular Bitterfrost Chest Farm, but focuses on the events since they can be easily solo-able. I was just curious on what numbers it could produce. 
					<br> - Adjusted some things in the <a href = "./benchmarks.html"><u> Silverwaste benchmark</u></a>. It now calculates with Piles of Silky Sand. Didn't change the benchmark too much, but it's just slightly higher than previously. 
					<br> - Added <b> Greater Nightmare Pods </b> from the Silverwaste Labyrith in <a href = "./benchmarks.html"><u> benchmarks </u></a>.
					<br> - Added <b> Superior Buried Treasure </b> from Desert Highland's meta in <a href = "./benchmarks.html"><u> benchmarks</u></a>.
				<br><br>
					<span style = "font-weight: bold;">May 29, 2021</span>
				<br>
					- Adjusted the <a href = "./research/currency-worth.html"><u> Currency-Worth </u></a> page to be alphabetical as I'm adding more and more currencies lately. 
					<br> - Added Bandit Crests to <a href = "./research/currency-worth.html"><u> Currency-Worth </u></a>! These are currencies obtained by doing Silverwaste events. 
					<br> - In addition to above ^, I've also updated the <a href = "./benchmarks.html"><u> benchmarks </u></a> for Silverwaste to include Bandit Crests. Since there is also a negative amount of net keys being earned in the train (since it's also assuming you open the lost chests), that is also taken into account. 
					<br> - ..And furthermore..I've also removed the Silverwaste <a href = "./benchmarks.html"><u> benchmark </u></a> with (w/ lvl character). The benchmark is now in-line with the rest of the benchmarks. My low lvl benchmark also considered a lvl 49-53 character..which according to <a href = "https://silverwastes.loltools.net/" target = "_blank"><u> Silverwastes.loltools </u></a> is not as profitable as it used to be. 
					<br> - Edited a few weird waypoints in <a href = "./resources/dailies.html"><u> Dailies </u></a> to be better choices. 
				<br><br>
					<span style = "font-weight: bold;">May 24, 2021</span>
				<br>
					- Updated the Volatile and Unbound Magic tables in <a href = "./research/currency-worth.html"><u> Currency-Worth </u></a>. They are much prettier now, sort from the highest to lowest, and I've provided the values for all Unbound Magic choices rather than the ones only at Ember Bay. 
					<br> - Preferences in <a href = "./research/currency-worth.html"><u> Currency-Worth </u></a> now have Volatile Magic, Unbound Magic, and Trade Contracts added. When you adjust the page to your liking, the bookmarks on the left side also change. The page can be whatever you want it to be 
					<br> - Added Buy Price or Sell Price in <a href = "./research/currency-worth.html"><u> Currency-Worth </u></a> for Volatile Magic and Unbound Magic. 
					<br> - Updated the Volatile and Unbound Magic tables in <a href = "./research/currency-worth.html"><u> Currency-Worth </u></a> to make them spawn faster. 
				<br><br>
					<span style = "font-weight: bold;">May 22, 2021</span>
				<br>
					- Fixed a bug in <a href = "./research/currency-worth.html#spirit-shards"><u> Currency-Worth page</u></a> where the price of Elonian Wine was 1 silver off
					<br> - Fixed a bug in <a href = "./research/currency-worth.html#spirit-shards"><u> Currency-Worth page</u></a> where the all dust specific conversions were slightly off in their calculations. 
					<br> - Changed the X button in various pages to view more clear that the button is there. The background is red instead of black. 
					<br> - Changed some waypoints in <a href = "./resources/dailies.html"><u> Dailies</u></a> to better suit the daily in a faster fashion. 
				<br><br>
					<span style = "font-weight: bold;">May 19, 2021</span>
				<br>
					- Updated <a href = "./research/currency-worth.html#spirit-shards"><u> Currency-Worth page</u></a> by adding <b> Preferences </b>. These are checkboxes on the right side that allow you to show/hide specific items on the page. This will also save your settings for the next time you visit. These are cookies, but they basically act like it. 
				<br><br>
					<span style = "font-weight: bold;">May 17, 2021</span>
				<br>
					- Updated <a href = "./research/currency-worth.html#spirit-shards"><u> Currency-Worth page</u></a> to include more Spirit Shard conversions. This time it's for Fine materials of
					<br> T1 -> T2 
					<br> T2 -> T3
					<br> T3 -> T4
					<br> T4 -> T5
				<br> - Updated <a href = "./resources/dailies.html"><u> Dailies</u></a> to include a button to copy all waypoints that are expansion + level 80. 
	
				<br><br>
					<span style = "font-weight: bold;">May 15, 2021</span>
				<br>
					- Updated <a href = "./research/currency-worth.html#spirit-shards"><u> Currency-Worth page</u></a> to include Spirit Shards. So far, it's the classic T5->T6 for both Fine and Rare materials. 
					<br> - Updated <a href = "./resources/dailies.html"><u> Dailies</u></a> to include a button to copy all waypoints that are expansion + level 80. 
					<br> - Updated <a href = "./resources/must-have-items.html"><u> Must-Have-Items</u></a> to include the eater Herta. 
	
				<br><br>
					<span style = "font-weight: bold;">May 10, 2021</span>
				<br>
					- Updated the Nav bar with a couple of things. 1) Made the overall font and size smaller. 2) Added it to the Home page. 3) Added a submenu bar so you can instantly click to a specific area of the website now! 
					<br> - Redirected all farms that have to deal with multiple maps into <a href = "./maps/combo-farms.html" target = "_blank"><u> Combo Farms</u></a> instead of having their own individual page. This reduces the amount of crap I have LOL..but it better organizes those unique metas all in one place.
	
				<br><br>
					<span style = "font-weight: bold;">May 5, 2021</span>
				<br>
					- Fixed a bug in <a href = "./resources/dailies.html" target = "_blank"><u> Dailies </u></a> where it deleted the wrong daily sometimes. 
					
				<br><br>
					<span style = "font-weight: bold;">May 3, 2021</span>
				<br>
					- Added Chak Driver to the <a href = "./timers/tangled-depths.html" target = "_blank"><u> Tangled Depths timer page </u></a>
					
				<br><br>
					<span style = "font-weight: bold;">May 2, 2021</span>
				<br>
					- Fixed a bug in <a href = "./resources/dailies.html" target = "_blank"><u> Dailies </u></a> where Ascalon lumberer was in a bad spot.
					<br> - Updated <a href = "./resources/dailies.html" target = "_blank"><u> Dailies </u></a> to show the accurate representation of what dailies are for lvl80 + expansion accounts and free accounts. Anything labeled in orange is free only. 
					<br> - Fixed a bug in <a href = "./resources/dailies.html" target = "_blank"><u> Dailies </u></a> where it removed the wrong minidungeon than what is actually shown in the game. There are usually multiple minidungeons when the daily is that, but I try to remove the correct one. 
					
				<br><br>
					<span style = "font-weight: bold;">April 28, 2021</span>
				<br>
					- Fixed a bug in <a href = "./benchmarks.html" target = "_blank"><u> Sandswept/Kourna benchmarks </u></a> that didn't like to the correct page. 
					<br> - (Hopefully) Fixed a bug in <a href = "./resources/dailies.html" target = "_blank"><u> Dailies </u></a> where if multiple dungeons are the dailies, it will remove any that aren't the first one listed. 
					<br> - Fixed a bug in <a href = "./benchmarks.html" target = "_blank"><u> benchmarks </u></a> that only allowed users to click a map if you click its name instead of the box it's in. 
					<br> - Fixed a bug that when you hover the NAV bar, the text disappears. 

				<br><br>
					<span style = "font-weight: bold;">April 27, 2021</span>
				<br>
					- Added Dragonstorm <a href = "./benchmarks.html" target = "_blank"><u>benchmark</u></a> in "Metas"
					<br> - Fixed a bug in <a href = "./resources/dailies.html"><u> Dailies </u></a> after an update that I made to delete unnecessary dailies. In return, it also messed up the ordering of the description + waypoints. 
					<br> - Added Sunken Chests from Sandswept Isles <a href = "./benchmarks.html" target = "_blank"><u>benchmark</u></a> in "Chests"
				<br><br>
					<span style = "font-weight: bold;">April 24, 2021</span>
				<br>
					- Fixed a bug in <a href = "./resources/dailies.html"><u> Dailies </u></a> to enable the linked videos+web links. For some reason, one of them (if both showed up) wouldn't take users to the link. 
				<br><br>
					<span style = "font-weight: bold;">April 23, 2021</span>
				<br>
					- Fixed a bug in <a href = "./resources/dailies.html"><u> Dailies </u></a> to show many of the same type of dailies at once.
					<br>  - Added tomorrow's <a href = "./resources/dailies.html"><u> Dailies </u></a> as well!
				<br><br>
					<span style = "font-weight: bold;">April 22, 2021</span>
				<br>
					- Fixed a bug in <a href = "./resources/dailies.html"><u> Dailies </u></a> to show web links because they weren't showing up for some reason. 
				<br><br>
					<span style = "font-weight: bold;">April 20, 2021</span>
				<br>
					- Uploaded a new page! <a href = "./resources/dailies.html"><u> Dailies! </u></a>. This page is intended to help you do your dailies very quickly. It lists all the dailies for today with simple directions and waypoints that will go straight to your clipboard. 
					<br> - Altered the timer on this homepage. Now, it will have light orange bar that will increase over time if the event I'm hosting is < 24 hours away. I just like it. I think it's cute. 
					<br> - Reorganized the <a href = "./resources.html"><u> Resource </u></a> page to make them alphabetical and added a section called "Tools". 
				<br><br>
					<span style = "font-weight: bold;">April 11, 2021</span>
				<br>
					- Uploaded a new video! <a href = "https://www.youtube.com/watch?v=x6QaIbHoJ8k&t=303s" target="_blank"><u>How to get PoF Experience</u></a>. 
				<br><br>
					<span style = "font-weight: bold;">April 5, 2021</span>
				<br>
					- Updated the <a href = "./maps/combo-farms.html#ls4-train" target="_blank"><u>LS4 train page</u></a> to include Guild MM's new video guide on the train itself!  
				<br><br>
					<span style = "font-weight: bold;">April 3, 2021</span>
				<br>
					- Made some edits to the <a href = "./timers/bitterfrost-frontier.html" target = "_blank"><u>Bitterfrost timer page</u></a> for some specific timers because popup messages wouldn't go away. Just prepping it for a train I had the same day. 
					<br> - Added another event in the Bitterfrost ^ event timers. 
					<br> - Made some changes to <a href = "./benchmarks.html" target = "_blank"><u>Benchmarks</u></a>: 
					<br> 1. Auric Basin is now a Repeatable Farm because the only thing keeping it daily was the Amal Gemstone, but the farm itself is mainly directed by shiny baubles and uni gear. 
					<br> 2. Same reason for Tangled Depths
					<br> 3. Made Kourna, Bitterfrost, Leather Farm, Frostgorge, Cursed Shore, Kessex, Siren's Landing Daily Farms instead of Repeatable because diminishing returns hits those hard. About 30 minutes into the train, events start giving less loot and champions.  

				<br><br>
					<span style = "font-weight: bold;">April 2, 2021</span>
				<br>
					- Uploaded a new video guide! This time it's for gathering <a href = "https://www.youtube.com/watch?v=eyqzz9eDIA0" target = "_blank"><u>LS3 currencies</u></a>.
					<br> - Updated <a href ="./resources/ascended-materials.html" target = "_blank"><u>Ascended Materials guide</u></a> to put it pretty bookmark..looking things. It's pretty colors. 
					<br> - Added a waypoint feature in <a href = "./timers/auric-basin.html" target = "_blank"><u> Auric Basin timers </u></a>. Will add this feature to the rest of the trains eventually. When clicking on the waypoints, you can automatically get the waypoint copied to your clipboard. This will help greatly during trains when you need the squad to move. 
				<br><br>
					<span style = "font-weight: bold;">March 23, 2021</span>
				<br>
					- With the new mastery update in IBS, I've added more Rift options for EXP in <a href = "./resources/experience.html"><u>Experience</u></a>. There should be enough orbs to hit the daily 250 orbs.  
				<br><br>
					<span style = "font-weight: bold;">March 21, 2021</span>
				<br>
					- I'ved updated the LS4 meta train data. There wasn't much to begin with..but the last time I recorded a full one was Jan 2020. Since then, it's been improved by a lot and commanded by many new commanders. I did a run with [OTC] and decided to record a fresh new one. Maybe I'll get the motivation to join them again for more trials..but it's so hard for me to farm for 2+ hours in a row LOL. With that said, it's got a new hefty number on the <a href = "./benchmarks.html" target = "_blank"><u>benchmarks</u></a> table. 
				<br><br>
					<span style = "font-weight: bold;">March 20, 2021</span>
				<br>
					- Updated <a href = "./resources/experience.html"><u> Experience</u></a> page to include more options and picture guides. Noted that this can also be good use of EXP for gaining Spirit Shards. 
				<br><br>
					<span style = "font-weight: bold;">March 17, 2021</span>
				<br>
					- Uploaded a new video on YouTube! Check out my <a href = "https://www.youtube.com/watch?v=B_JC0XKMdvk" target = "_blank"><u>Crystal Oasis farm info guide</u></a>!
				<br><br>
					<span style = "font-weight: bold;">March 15, 2021</span>
				<br>
					Oh, didn't realize it's been a whole month that I haven't updated. I've been slightly taking a break from making content, but I'm back to work on some stuff again!
					<br><br> - Worked on a full guide on how to get <a href = "./resources/experience.html"><u>mastery experience</u></a>! 
					<br>- Temporarily removed Builds page since that's obviously not done yet. 
				<br><br>
					<span style = "font-weight: bold;">February 15, 2021</span>
				<br>
					- Edited some of the description for the <a href = "./maps/crystal-oasis.html" target = "_blank"><u>Crystal Oasis</u></a> page about the farm
				<br><br>
					<span style = "font-weight: bold;">February 13, 2021</span>
				<br>
					- Added another trial for Auric Basin Shiny Bauble train
					<br> - Added another trial for Desolation
					<br> - Added another trial for Sandswept/Kourna combo train
				<br><br>
					<span style = "font-weight: bold;">February 12, 2021</span>
				<br>
					- Added <a href = "./resources/must-have-items.html"><u>Must Have Items</u></a>! This is a cute lil page on items on the gemstore and nongemstore items that I think everyone should have or has a great QoL change. 
					<br> - Added Mesmer and Necro to the <a href = "./resources/builds.html"><u>Builds</u></a> page. 
				<br><br>
					<span style = "font-weight: bold;">February 9, 2021</span>
				<br>
					- Revamped how <a href = "./resources.html"><u>Resources page</u></a> looks like because getting more and more boxes for links is getting kinda big and meh. 
					<br> - Added a new page that's currently..still in the works but it's up anyway since it's in my latest patch. Check out <a href = "./resources/builds.html"><u>Builds</u></a> for more information on what builds you could run for specifically farming! 
				<br><br>
					<span style = "font-weight: bold;">February 7, 2021</span>
				<br>
					- Added another trial for Tangled Depths map benchmark
					<br> - Added Crystalline Ore to the <a href = "./resources/ascended-materials.html"><u>Ascended Materials</u></a> page. 
					<br> - Fixed bugs in the Ascended Materials page that made timers break during reset times. 
				<br><br>
					<span style = "font-weight: bold;">February 6, 2021</span>
				<br>
					- Added Noxious Seed Pods to the chest benchmarks.
				<br><br>
					<span style = "font-weight: bold;">February 5, 2021</span>
				<br>
					- Updated and add new stuff to the <a href = "./resources/ascended-materials.html"><u>Ascended Materials</u></a> page. This includes: more ascended junk, timers for when it's a good/bad time to gather chests, and just more blobs of info.
					<br> - Updated my <a href = "./maps/bitterfrost-frontier.html">Bitterfrost Map</a> guide page. Just made it simplier as I think some of my pages are really...weird looking LOL. One day I'll update them all. 
				<br><br>
					<span style = "font-weight: bold;">February 1, 2021</span>
				<br>
					- Added a new resource guide! This will built more over time. How to get <a href = "./resources/ascended-materials.html"><u>Ascended Materials</u></a>.
				<br><br>
					<span style = "font-weight: bold;">January 31, 2021</span>
				<br>
					- Added an entire new set of benchmarks. Added <b>Alt Parking!</b>These are awesome locations where you can park your alts to get some instant or quick profits! Check out <a href = "./benchmarks.html"><u>benchmarks</u></a> and click on "Alt Parking" for more info. 
				<br><br>
					<span style = "font-weight: bold;">January 28, 2021</span>
				<br>
					- Added an entire new set of benchmarks. Added <b>Chests!</b>These are open world chests that you can find throughout the open world. It's not all of them, but most of them. Check out <a href = "./benchmarks.html"><u>benchmarks</u></a> and click on "Chests" for more info. 
				<br><br>
					<span style = "font-weight: bold;">January 27, 2021</span>
				<br>
					- Added a new benchmark! <a href = "./maps/combo-farms.html#sandswept-kourna"><u>Sandswept/Kourna</u></a> combo farm.  
					<br> - Added a new benchmark! <a href = "./maps/combo-farms.html#grothmar-bjora"><u>Grothmar/Bjora</u></a> combo farm.
					<br> - Added the combo page (links above) to showcase farms that are "combos"..meaning two or more main maps in a farm. I'll add more when I'm not lazy. 
					<br> - Added Boneskinner respawn rate to the <a href = "./timers/bjora-marches.html"><u> Bjora marches timer page</u></a>.
					<br> - Adjusted one of the raiding parties (N) in the <a href = "./timers/bjora-marches.html"><u> Bjora marches timer page</u></a>  to be more accurate. Found out it was 2 minutes longer than the other two in the map. 

					<br><br> - Removed the "Gold per Hour via Spirit Shards" section of the benchmark. With the latest patch of not having any spirit shards come from champion bags anymore, the value itself is meh. Some people's definition of how valuable Spirit Shards vary from person to person whether your trading it or converting yourself. My standard has always been the average profit from converting T5 -> T6 materials since it's extremely common and easy to do for everyone. Instead, the column has been replaced with <b> Total Gold</b>. This is the amount of gold you could potentially earn in an entire farm.
					<br> - Added a cute lil bracket to show the rest of the table is per hour still. 
					<br> - You can now right-click a farm on the "Map" column to open into a new tab. Why that took me so long to figure out for such a simple problem..I have no idea. 
				<br><br>
					<span style = "font-weight: bold;">January 25, 2020</span>
				<br>
					- Added and adjusted some timers for the <a href = "../timers/bjora-marches.html"><u>Bjora Marches timer page</u></a>. 
				<br><br>
					<span style = "font-weight: bold;">January 21, 2021</span>
				<br>
					- Added another trial for <a href = "https://docs.google.com/spreadsheets/d/1HOBKHgaPbmc1uMAqupeta824hQzjhiaXBWhPXjORAZs/edit#gid=502445709" target = "_blank"><u>Elon Riverlands</u></a> train
					<br> - Added a new benchmark! <a href = "https://docs.google.com/spreadsheets/d/1HOBKHgaPbmc1uMAqupeta824hQzjhiaXBWhPXjORAZs/edit#gid=725999905" target = "_blank"><u>Sandswept/Kourna</u></a> combo train
				<br><br>
					<span style = "font-weight: bold;">January 16, 2021</span>
				<br>
					- Reworked the homepage a bit: 
					<br> - Removed a lot of white space 
					<br> - Condensed the pictures and sections to fit more stuff on the page
					<br> - Added my logo to the website name and the shortcut icon
					<br> - Changed my email and reformatted the footer. (This will slowly be changed throughout the other pages too because I'm lazy)
					<br> - Added a section for my trains instead of just the timer  
					<br> - Added a YouTube button for my YouTube channel!
				<br><br>
					<span style = "font-weight: bold;">January 5, 2021</span>
				<br>
					- Added another <a href = "https://docs.google.com/spreadsheets/d/1HOBKHgaPbmc1uMAqupeta824hQzjhiaXBWhPXjORAZs/edit#gid=1455660781" target = "_blank"><u>trial run</u></a> to the Auric Basin Shiny Bauble farm. 
					<br> - Updated the map info page for <a href = "./maps/sandswept-isles.html" target = "_blank"><u>Sandswept Isles</u></a> as the pictures were super blown up. 
				<br><br>
					<span style = "font-weight: bold;">January 2, 2021</span>
				<br>
					- Added another <a href = "https://docs.google.com/spreadsheets/d/1HOBKHgaPbmc1uMAqupeta824hQzjhiaXBWhPXjORAZs/edit#gid=1855326272" target = "_blank"><u>trial run</u></a> to the Bjora Marches Node Farm. Still averaging out to be around 20ish gph!
				<br><br>
					<span style = "font-weight: bold;">January 1, 2021</span>
				<br>
					- Uploaded a new video! <a href = "https://www.youtube.com/watch?v=HrUGwYeLH5c&t=3s" target = "_blank"><u>Bjora Marches Node Farm! </u></a>
					<br> - Updated the <a href = "./timers/elon-riverlands.html" target = "_blank"><u> Elon Riverlands timer page</u></a> to include special info notes and other stuff when the meta shows up. 
				<br><br>
					<span style = "font-weight: bold;">December 30, 2020</span>
				<br>
					- Updated the <a href = "./timers/tangled-depths.html" target = "_blank"><u>timer page</u></a>. Added Chak Driver event and changed some minor bugs overall. 
				<br><br>
					<span style = "font-weight: bold;">December 29, 2020</span>
				<br>
					- Updated the <a href = "./timers/domain-of-vabbi.html" target = "_blank"><u>timer page</u></a> for the Domain of Vabbi farm. I've added a lot of new tech that I learned from other timer pages and experimented on here. Hover effects, information boxes, and signals that show up when a meta is happening. 
					<br> - Updated colors for meta timers on all timer pages. It is now a sandy-brown to indicate when a meta isn't up. I tried to find a neutral color.
					<br> - Revamped the Thunderhead/Kourna event farm. Did a new trial today with a new <a href = "./benchmarks.html" target = "_blank"><u>benchmark.</u></a>
				<br><br>
					<span style = "font-weight: bold;">December 28, 2020</span>
				<br>
					- Updated the <a href = "./maps/domain-of-vabbi.html" target = "_blank"><u>map guide</u></a> for the Domain of Vabbi farm.
					<br> - Updated the <a href = "./timers/domain-of-vabbi.html" target = "_blank"><u>Domain of Vabbi timer page</u></a> as it had some weird bugs that changed colors of texts and boxes at wrong times. 
					<br> - Updated the <a href = "./gathering/rich-node-farm.html" target = "_blank"><u> Rich Node Farm.</u></a> Redid the benchmark to now gather other nodes around the rich nodes. Also changed the route just slightly to include potential other rich nodes that may not be permanent. This standardizes the node farm with other node farms. It actually increased the GPH so..yay. 
				<br><br>
					<span style = "font-weight: bold;">December 27, 2020</span>
				<br>
					- Expanded the <a href = "./research/currency-worth.html"><u> Currency-Worth page</u></a> to include Trade Contracts. 
				<br><br>
					<span style = "font-weight: bold;">December 26, 2020</span>
				<br>
					- Updated JS for <a href = "./research/drizzlewood-reward-tracks.html"><u>Drizzlewood Reward Track page</u></a>. It used to reference two different spreadsheets, but now it's only referencing one and should load better. 
					<br> - Added another trial run for <a href = "https://docs.google.com/spreadsheets/d/1HOBKHgaPbmc1uMAqupeta824hQzjhiaXBWhPXjORAZs/edit#gid=1389065463" target = "_blank"><u>Domain of Vabbi map benchmark.</u></a>
				<br><br>
					<span style = "font-weight: bold;">December 22, 2020</span>
				<br>
					- Updated timer pages. Ones that have global meta timers now have it displayed on the bottom and always at the bottom. Now it's easier to see that status of the map and when the meta will begin. 
				<br><br>
					<span style = "font-weight: bold;">December 20, 2020</span>
				<br>
					I barley update my Updates page, so I decided to put it here. By putting it in the front page, I'll more likey update my progress. This is to help me see what I've accomplished personally and to let anybody know what I'm doing if you're interested! I've lost track since October on what I did so I'll try to summerize it.
					<br>
					<br> - Added the rest of the <a href = "./timers.html"><u>POF timer pages.</u></a> Desert Highlands and Domain of Vabbi were left. Though, all of these need some stuff added to them such as meta timers and info boxes.
					<br> - Added <a href = "./timers.html"><u>IBS timers.</u></a> Bjora will need some more work later to add a meta timer for both metas. 
					<br> - Revamped every single timer's javascript. I did an overhaul on the structure and it should be much easier for me to work with. It is now flexiable if I need to add stuff in the future.
					<br> - Added extra information boxes for timers: <a href = "./timers/verdant-brink.html"><u> Verdant Brink</u></a>, <a href = "./timers/auric-basin.html"><u>Auric Basin</u></a>, <a href = "./timers/tangled-depths.html"><u>Tangled Depths</u></a>.
					<br> - Revamped map benchmarks: Domain of Vabbi, Desert Highlands, Elon Riverlands, <a href = "./maps/auric-basin.html"><u>Auric Basin.</u></a> Some of these still need updated map guides tho. 
					<br> - Added [SAND]'s Dry Top train! More info of their <a href = "https://drytopsand.com/index.html"><u>trains/website here.</u></a>
					<br> - Added <a href = "./benchmarks.html"><u>Meta Benchmarks</u></a> to showcase how much you'd make per meta!
				<br><br>

					<span style = "font-weight: bold;">October 7, 2020</span>
				<br>
					I realized I've been slacking on updating on this page. I kinda forgot what I did in the last few weeks. 
					<br> - Updated all timers pages with some QOL changes such as auto sorting and checking the checkboxes as you load the page. 
					<br> - Revamped Lake Doric to add a leather farm in the farm. 
					<br> - As with above, reworked the Lake Doric map guide page 
					<br> - Added lots of champion bag data 
					<br> - Added lots of node farm data to the Node Calculator 
					<br> - Added trials to many farms such as Auric Basin, Drizzlewood, Dragonfall, Tangled Depths, and some others that I can't remember 
				<br><br>
					<span style = "font-weight: bold;">September 17, 2020</span>
				<br>
					- Added a Node Farm Calculator on the gathering page 
				<br><br>
					<span style = "font-weight: bold;">September 12, 2020</span>
				<br>
					- Added Glyph research in the Gathering page. The avg profit per strike and node for most glyphs. 
				<br><br>
					<span style = "font-weight: bold;">September 4, 2020</span>
				<br>
					- Added LS3 currency page on how to obtain LS3 currencies
					<br>- Added additional trials to Lake Doric Node Farm 
					<br>- Random bug fixes
				<br><br>
					<span style = "font-weight: bold;">September 1, 2020</span>
				<br>
					- Created a new gathering farm. Lake Doric Node Farm (B/V/V). Uses Bounty for Sickle and Volatile for the rest. 
					<br> - Updated Auric Basin's timer page as some of the times were wrong. Should be accurate now. 
					<br> - Added thousands of champion bag data 
					<br> - Added More-Resource page that offers lots of other external guides and info beyond this website
				<br><br>
					<span style = "font-weight: bold;">August 24, 2020</span>
				<br>
					- Created a guide on how to obtain LS4 currencies
				<br><br>
					<span style = "font-weight: bold;">August 18, 2020</span>
				<br>
					- Redid Desolation farm
					<br> - Added Desolation-timer page
					<br> - Added Desolation-map page
					<br> - Added an additional trial for the Bitterfrost farm
					<br> - Added an additional trial for the Solo Farm: Bitterfrost Icebound Chest farm
				<br><br>
					<span style = "font-weight: bold;">August 15, 2020</span>
				<br>
					- Added another trial for the Solo Farm: Bitterfrost Icebound Chest
					<br> - Attempted to make some pages more mobile friendly. It's okay, but obviously not there yet. Working on it slowly in the background
				<br><br>
					<span style = "font-weight: bold;">August 9, 2020</span>
				<br>
					- Added more trials for Solo Farm: Bitterfrost Icebound Chests to get more accurate data. Apparently that just made it go up 
					<br> - Added more trial for Silverwaste thanks to [SM]
					<br> - Added more trials for Crystal Oasis farm. Redid how I do the farm with the addition of the timer page 
					<br> - Updated the Crystal Oasis map info page
					<br> - Updated some formatting to make some big things be smaller such as the event criterias in each map info page
				<br><br>
					<span style = "font-weight: bold;">August 4, 2020</span>
				<br>
					- I got called out in PvP to update my guide for Drizzlewood LOL! So it's updated now! 
				<br><br>
					<span style = "font-weight: bold;">August 1, 2020</span>
				<br>
					- Added bounties to the Crystal Oasis tiemr page
					<br> - Added multiple trials for an average gold per hour for the new Drizzlewood patch
					<br> - Updated multiple champion bag data for a bigger sample size
					<br> - Added the addition 2 new reward Drizzlewood reward tracks in the Drizzle-Reward-Track page
				<br><br>
					<span style = "font-weight: bold;">July 26, 2020</span>
				<br>
					- Added a "Value" button to the Salvage page. This shows the value of each salvaged item 
					<br> - Added Crystal-Oasis timer page. Working on adding bounty locations and checkboxes
					<br> - Fixed a bug where the message "Train in progress!" wouldn't go away
				<br><br>
					<span style = "font-weight: bold;">July 23, 2020</span>
				<br>
					- Did a huge overhaul of the salvage page. Essentially reworked, revamped the entire code for the page. The numbers used to be very static and was like a snapshot for a certain time but never updated. Now, the page will update the numbers everytime you visit the page! 
				<br><br>
					<span style = "font-weight: bold;">July 21, 2020</span>
				<br>
					- Added Salvage page under the Research tab! Check it out for information on salvaging items and gear. More work will be on the page over time! 
				<br><br>
					<span style = "font-weight: bold;">July 19, 2020</span>
				<br>
					- Updated support page
				<br><br>
					<span style = "font-weight: bold;">July 18, 2020</span>
				<br>
					- Updated gathering pages to include a disclaimer that herbs and quality meat materials are only obtained after a player finishes the Gorment Training achievement.
					<br> - Updated the front page timer to include a message to say that a train is in progress right before and after the deadline
					<br> - Added another trial of Grothmar/Kourna train on the spreadsheet. 
				<br><br>
					<span style = "font-weight: bold;">July 17, 2020</span>
				<br>
					- Updated Drizzlewood-Reward-Track page to include proofs of each reward track
					<br> - Updated with a lot more information on Drizzlewood including info on waystations, siege, caravans, and methods on commanding
				<br><br>
					<span style = "font-weight: bold;">July 15, 2020</span>
				<br>
					- Updated the description and links from the Gathering page
					<br> - Fixed an API error with the currency-worth page. Should be good now
					<br>- Added Ember Bay's timer page
				<br><br>
					<span style = "font-weight: bold;">July 14, 2020</span>
				<br>
					- Updated the spreadsheet to have links of each farm to the website
					<br> - Fixed errors in the Bitterfrost map page
					<br> - Added missing Solo Farm: Bitterfrost Icebound Chest section 
					<br> - Apparently I just didn't finish the About-Benchmark page. Finished the "what's not monetized" section. 
					<br> - Added my recommendation for trinkets on the Living-Story-Trinket page
				<br><br>
					<span style = "font-weight: bold;">July 13, 2020</span>
				<br>
					- First official public release!
					<br> - Fixed errors in the Sandswept Solo Inquest Farm (description)
					<br> - Added a timer for the next Peu Train on the front page
				<br><br>
					<span style = "font-weight: bold;">July 12, 2020</span>
				<br>
					- Added Drizzlewood map page 
					<br> - Fixed more typos and errors
					<br> - Added "Projects in the works:" section on the top of this page
					<br> - Added "Next Peu Train" on the front page of when I do my farms. This updates based on my public spreadsheet 
					<br> - Added Supporter page
				<br><br>
					<span style = "font-weight: bold;">July 9, 2020</span>
				<br>
					- Added additional farm pages that I forgot. I missed a couple it seems
					<br> - Fixed a bug that made all the map/timer page links act like it wasn't a link 
					<br> - Fixed spreadsheet error that made Bjora Marches appear twice
					<br> - Added spreadsheet links to map pages
					<br> - Added timer links to map pages
					<br> - Adjusted description of map farms 
					<br> - Fixed typos 
				<br><br>
					<span style = "font-weight: bold;">July 8, 2020</span>
				<br>
					- Added pages too all farms (40+??)
					<br> - Added clickable names to the benchmark page so they will all redirect to the farm
				<br><br>
					<span style = "font-weight: bold;">July 7, 2020</span>
				<br>
					- Added website icon on every page instead of having the default
				<br><br>
					<span style = "font-weight: bold;">July 5, 2020</span>
				<br>
					- Added a trial farm of Tangled Depths, Drizzlewood Coast
				<br><br>
					<span style = "font-weight: bold;">July 4, 2020</span>
				<br>
					- Added a link in the Resource section on About Benchmarks 
					<br> - Added News to front page  
					<br> - Made Currency-Worth page and Drizzlewood-Reward-Track page smaller in terms of design. Added some descriptions.
					<br> - Edited external links to open a new tab (probably missed some)
					<br> - Added email to the footer
					<br> - Added About-Me page
				<br><br>
				<span style = "font-weight: bold;">March 18, 2020 - July 4, 2020</span>
				<br>
					I made this specific page on July 4, 2020 so I'm not sure exactly what the dates are for other updates I did for the website. March was when I first started learning how to code/make the website. 
				</p1>
			</div> <!-- End of updates box -->
		</div> <!-- End of right box -->
	</div> <!-- End of double box -->
	<!-- 
		========================================================================
		====================== FOOTER + DARK MODE ==============================
		========================================================================
	-->
	<?php include("footer.php"); ?>

	<script> //train_timer(); 
	new_Train('days-0','hours-0','minutes-0','seconds-0','progress-bar-0','num-0','box-0','name-0','time-0',0);
	new_Train('days-1','hours-1','minutes-1','seconds-1','progress-bar-1','num-1','box-1','name-1','time-1',1);
	</script>

</body>

<!-- Added these last because it needs to read some html ids to work -->
<script type = "text/javascript" src = "<?php echo $base;?>/choya.js?v=<?php echo $date;?>"></script>

</html>