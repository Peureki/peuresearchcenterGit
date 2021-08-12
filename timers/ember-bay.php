<!DOCTYPE html> 
<html>
<head>
  <!-- Defaults -->
  <?php include('../config.php'); ?>
	<title> Ember Bay Timers </title>
</head>
<body>
	<!-- 
    ============================================================
    ====================== NAVIGATION BAR ======================
    ============================================================
  -->
  <?php include('../nav.php'); ?>

  <!-- Main header -->
  <div class = "page-box">
    <div class = "section-header">
      <h1>Ember Bay</h1>
      <div class = "banner-box"></div>
      <img src = "../images/assets/banner.svg">
    </div>
    <!-- Hidden space so the header doesn't overlap anything below -->
    <div class = "section-header-space"></div>
  </div>

	<!-- Inner navgation box to the side -->
  <div id = "nav-left-sidetimer-box" class = "nav-left-sidetimer-box">

    <div id = "ember-1-sidebox" class = "event-sidebox" >
      <h1> Sloth </h1>
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-ember-1-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-ember-1-reset">
      <p1 id = "sidetimer-ember-1">15:00</p1>
      <p2 id = "numerical-sidetimer-ember-1">900</p2>
    </div>

    <div id = "ember-2-sidebox" class = "event-sidebox" >
      <h1> Destroyer Fissure NW </h1>
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-ember-2-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-ember-2-reset">
      <p1 id = "sidetimer-ember-2">10:00</p1>
      <p2 id = "numerical-sidetimer-ember-2">600</p2>
    </div>

    <div id = "ember-3-sidebox" class = "event-sidebox" >
      <h1> Destroyer Fissure E </h1>
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-ember-3-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-ember-3-reset">
      <p1 id = "sidetimer-ember-3">10:00</p1>
      <p2 id = "numerical-sidetimer-ember-3">600</p2>
    </div> 

    <div id = "ember-4-sidebox" class = "event-sidebox" >
      <h1> Coalescence SW </h1>
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-ember-4-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-ember-4-reset">
      <p1 id = "sidetimer-ember-4">16:45</p1>
      <p2 id = "numerical-sidetimer-ember-4">1005</p2>
    </div> 

    <div id = "ember-5-sidebox" class = "event-sidebox" >
      <h1> Coalescence SE </h1>
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-ember-5-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-ember-5-reset">
      <p1 id = "sidetimer-ember-5">16:45</p1>
      <p2 id = "numerical-sidetimer-ember-5">1005</p2>
    </div> 

    <div id = "ember-6-sidebox" class = "event-sidebox" >
      <h1> Coalescence N </h1>
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-ember-6-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-ember-6-reset">
      <p1 id = "sidetimer-ember-6">16:45</p1>
      <p2 id = "numerical-sidetimer-ember-6">1005</p2>
    </div> 

    <div id = "ember-7-sidebox" class = "event-sidebox" >
      <h1> Jade </h1>
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-ember-7-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-ember-7-reset">
      <p1 id = "sidetimer-ember-7">18:00</p1>
      <p2 id = "numerical-sidetimer-ember-7">1080</p2>
    </div> 

    <div id = "ember-8-sidebox" class = "event-sidebox" >
      <h1> Drake </h1>
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-ember-8-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-ember-8-reset">
      <p1 id = "sidetimer-ember-8">19:45</p1>
      <p2 id = "numerical-sidetimer-ember-8">1185</p2>
    </div> 

    <div id = "ember-9-sidebox" class = "event-sidebox" >
      <h1> Dominator </h1>
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-ember-9-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-ember-9-reset">
      <p1 id = "sidetimer-ember-9">15:00</p1>
      <p2 id = "numerical-sidetimer-ember-9">900</p2>
    </div> 

    <div id = "ember-12-sidebox" class = "event-sidebox" >
      <h1> Karka </h1>
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-ember-12-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-ember-12-reset">
      <p1 id = "sidetimer-ember-12">7:00</p1>
      <p2 id = "numerical-sidetimer-ember-12">420</p2>
    </div> 

    <div id = "ember-15-sidebox" class = "event-sidebox" >
      <h1> Wurm </h1>
      <input type = "button" onclick = "start_stop(this);" value = "Start" id = "sidetimer-ember-15-start">
      <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "sidetimer-ember-15-reset">
      <p1 id = "sidetimer-ember-15">10:00</p1>
      <p2 id = "numerical-sidetimer-ember-15">600</p2>
    </div> 
  </div> <!-- End of left side box --> 
             
  <div id = "nav-right-sidetimer-box" class = "nav-right-sidetimer-box">
    All: <input type = "Checkbox" id = "ember-all-checkbox" checked = "true" onclick = "ember_All_Checkbox(this);">
    <br>
    Sloth: <input type = "Checkbox" id = "ember-1-checkbox" checked = "true" onclick = "ember_1_Checkbox(this);">
    <br>
    Destroyer Fissure #1: <input type = "Checkbox" id = "ember-6-1-checkbox" checked = "true" onclick = "ember_6_1_Checkbox(this);">
    <br>
    Destroyer Fissure #2: <input type = "Checkbox" id = "ember-3-checkbox" checked = "true" onclick = "ember_6_2_Checkbox(this);">
    <br>
    Coalescence #1: <input type = "Checkbox" id = "ember-4-checkbox" checked = "true" onclick = "ember_7_1_Checkbox(this);">
    <br>
    Coalescence #2: <input type = "Checkbox" id = "ember-5-checkbox" checked = "true" onclick = "ember_7_2_Checkbox(this);">
    <br>
    Coalescence #3: <input type = "Checkbox" id = "ember-6-checkbox" checked = "true" onclick = "ember_7_3_Checkbox(this);">
    <br>
    Dominator: <input type = "Checkbox" id = "ember-9-checkbox" checked = "true" onclick = "ember_9_Checkbox(this);">
    <br>
    Karka: <input type = "Checkbox" id = "ember-12-checkbox" checked = "true" onclick = "ember_12_Checkbox(this);">
    <br>
    Wurm: <input type = "Checkbox" id = "ember-15-checkbox" checked = "true" onclick = "ember_15_Checkbox(this);">
    <br>
  </div>

	<!-- Main box -->
	<div class = "page-box">
		<div class = "page-header">
      <div class = "small-description">
        <p1><b> How this works: </b>
        <br> These events aren't that special in terms of the event cooldowns. 
         </p1>
      </div>
      
    </div>

		<div class = "map-timer-box">

			<!-- 
				HTML notation: 
				<div class = "[map]-[event #]-box">
				<p1 id = "timer-[map]-[event #]"> [default time] </p1> 
				<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-[map]-[event #]-start">
				<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-[map]-[event #]-reset">
       			<br><p2 id = "timer-[map]-[event #]-text"></p2>	
			-->
		    	<div class = "event-box" id = "ember-1-box">
				    <h1> Sloth Chain </h1>
       	 		<br><p1 id = "timer-ember-1">15:00</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-ember-1-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-ember-1-reset">
       		</div>

       		<div class = "event-box" id = "ember-2-box">
       			<h1> Destroyer Fissure NW</h1>
			     	<br><p1 id = "timer-ember-2" >10:00</p1>
        		<br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-ember-2-start">
       			<input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-ember-2-reset">	
       		</div>

          <div class = "event-box" id = "ember-3-box">
            <h1> Destroyer Fissure E</h1>
            <br><p1 id = "timer-ember-3" >10:00</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-ember-3-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-ember-3-reset">
          </div>

          <div class = "event-box" id = "ember-4-box">
            <h1> Coalescence SW</h1>
            <br><p1 id = "timer-ember-4" >16:45</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-ember-4-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-ember-4-reset">
          </div>

          <div class = "event-box" id = "ember-5-box">
            <h1> Coalescence SE</h1>
            <br><p1 id = "timer-ember-5" >16:45</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-ember-5-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-ember-5-reset">
          </div>

          <div class = "event-box" id = "ember-6-box">
            <h1> Coalescence N</h1>
            <br><p1 id = "timer-ember-6" >16:45</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-ember-6-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-ember-6-reset">
          </div>

          <div class = "event-box" id = "ember-7-box">
            <h1> Jade </h1>
            <br><p1 id = "timer-ember-7" >18:00</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-ember-7-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-ember-7-reset">
          </div>

          <div class = "event-box" id = "ember-8-box">
            <h1> Drake </h1>
            <br><p1 id = "timer-ember-8" >19:45</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-ember-8-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-ember-8-reset">
          </div>

          <div class = "event-box" id = "ember-9-box">
            <h1> Dominator </h1>
            <br><p1 id = "timer-ember-9">15:00</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-ember-9-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-ember-9-reset"> 
          </div>

          <div class = "event-box" id = "ember-12-box">
            <h1> Karka Chain </h1>
            <br><p1 id = "timer-ember-12">7:00</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-ember-12-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-ember-12-reset">
          </div>

          <div class = "event-box" id = "ember-15-box">
            <h1> Wurm </h1>
            <br><p1 id = "timer-ember-15">10:00</p1>
            <br><input type = "button" onclick = "start_stop(this);" value = "Start" id = "timer-ember-15-start">
            <input type = "button" onclick = "reset(this);" value = "&#8635;" id = "timer-ember-15-reset">
          </div>

			<img class = "map-timer-domain-of-kourna" title = "Ember Bay" src = "../images/ember-bay/ember-bay-map.jpg">
		</div>
		
	</div> <!-- End of page-box -->

  <!-- 
    ========================================================================
    ====================== FOOTER + DARK MODE ==============================
    ========================================================================
  -->
  <?php include("../footer.php"); ?>
  <script type = "text/javascript" src = "<?php echo $base;?>/timers/ember-bay.js?v=<?php echo $date;?>"></script>
</body>
</html>