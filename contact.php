<?php

$title = 'Contact Us';

// *(* REMOVE THE PHP CONSOLE STUFF BEFORE GO LIVE
include_once('phpconsole/install.php');
phpconsole($title, 'kymdusting');

include("includes/header.php"); ?>
<section class="main" role="main">
    <header class="module heading">
        <h1><?php echo($title); ?></h1>
    </header>
    <section class="module column form">
      <h1>Send Us a Quick Message</h1>
      <p class="warning">Please note we in no way keep your personal information or provide that information to any third parties.</p>
      <form action="<?=$_SERVER['PHP_SELF']; ?>" method="get" class="contact">
        <label for="name">Your Name</label>
        <input type="text" id="name" />
        <label for="email">E-Mail</label>
        <input type="email" id="email" />
        <label for="phone">Phone</label>
        <input type="tel" id="phone" />
        <label for="message">Your Message</label>
        <textarea name="textarea" id="message" cols="45" rows="5" placeholder="Required"></textarea>
        <input type="submit" name="button" id="button" value="Send" />
        <span class="response" aria-live="polite">
          <?php require_once('includes/contact.php');
            if (isset($_GET['submit'])) {
              if($_GET['submit']){ echo contactUs(); }
            } ?>
        </span>
      </form>
    </section><section class="module column contact">
      <h1>Our Contact Details</h1>
      <dl>
          <dt>Call us</dt>
          <dd class="call"><a href="tel:0266519992" class="tel">02 6651 9952</a></dd>
          <dt>Visit us</dt>
          <dd class="address">5/5 Forge Drive, Coffs Harbour NSW 2450</dd>
          <dt>Open</dt>
          <dd class="hours">Mon - Fri 9:30am - 4:00pm<br />
Sat 9:00am - 1:00pm<br />
<em>After hours by appointment only</em></dd>
      </dl>
      <img src="images/map-address.png" alt="Turn west off Pacific Highway onto Elswick Place. Turn right on to Industrial Drive then left onto Forge Drive. Turn left into 5/5 Forge Drive, the shop is the last door on the left of the carpark." />
  </section>
</section>
<?php
include("includes/footer.php"); ?>