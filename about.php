<?php

$title = 'About Us';

// *(* REMOVE THE PHP CONSOLE STUFF BEFORE GO LIVE
include_once('phpconsole/install.php');
phpconsole($title, 'kymdusting');

include("includes/header.php"); ?>
<section class="main" role="main">
    <header class="module heading">
        <h1><?php echo($title); ?></h1>
    </header>
    <section class="module column about">
  		<header>
        <h1><em>90%</em> less water</h1>
        <img src="images/icon-rain.png" alt="">
      </header>
      <p>Farmers claim that some hydroponics crops use <em>90% less water</em> than the same crops in traditional soil farming.</p>
    </section><section class="module column about">
    	<header>
        <h1><em>1/4</em> of the space</h1>
        <img src="images/icon-earth.png" alt="">
      </header>
       <p>You can plant <em>4 times</em> the amount of crops in the same space as traditional soil farming.</p>
    </section>
    <section class="module column about">
    	<header>
        <h1><em>zero</em> soil used</h1>
        <img src="images/icon-leaf.png" alt="">
      </header>
      <p>Grown in an inert medium <em>without soil</em> with perfectly balanced pH, nutrients solutions and highly oxygenated water which is delivered directly to the roots.</p>
    </section><section class="module column about">
    	<header>
        <h1><em>x2</em> growth time</h1>
        <img src="images/icon-time.png" alt="">
      </header>
      <p>Some crops can <em>grow twice as fast</em> in hydroponics due to getting exactly the correct amount of nutrients, water and oxygen.</p>
    </section>
    <section class="module column about">
    	<header>
        <h1><em>0.0</em> chemicals</h1>
        <img src="images/icon-chemicals.png" alt="">
      </header>
      <p>Hydroponically grown crops can use <em>NO herbicide or pesticide</em> chemicals which significantly impact</p>
    </section>
</section>
<?php
include("includes/footer.php"); ?>