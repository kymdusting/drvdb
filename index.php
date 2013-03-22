<?php
$title = 'Home';
include("includes/header.php"); ?>
<section class="main" role="main">
    <div class="module slider">
        <ul>
            <li>Slide 1</li>
            <li>Slide 2</li>
            <li>Slide 3</li>
            <li>Slide 4</li>
            <li>Slide 5</li>
            <li>Slide 6</li>
        </ul>
        <a href="#" data-dir="prev">Previous slide</a>
        <a href="#" data-dir="next">Next slide</a>
    </div>
    <aside class="module full-width tag-line">
        <p>Dr. Van Der Bloom's carries an extensive range of Hydroponics supplies for the commercial or hobby grower. Hydroponic Kits, Nutrients, Additives, Lighting, Testing Equipment, Ventilation and Filters.</p>
    </aside>
    <section class="module column news">
        <h1>Latest From the Store</h1>
        <article>
            <h2>Aenean eu leo quam <time datetime="2013-02-07">7 Feb 2013</time></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae aliquid quod libero expedita doloremque repellendus.</p>
            <p>Necessitatibus soluta est pariatur atque error corporis optio cupiditate ullam quo cumque molestiae mollitia incidunt fugit.</p>
        </article>
        <article>
            <h2>Vitae aliquid quod libero expedita <time datetime="2013-02-01">1 Feb 2013</time></h2>
            <p>Quos nobis nesciunt voluptatum placeat in praesentium vero laboriosam voluptatibus mollitia? Voluptas consequuntur deserunt dolore eligendi nostrum in delectus ab voluptates eaque!</p>
            <p>Blanditiis quod consequuntur nulla dolorem quia deleniti est in!</p>
        </article>
    </section><section class="module column contact">
        <h1>Location & Opening Hours</h1>
        <dl>
            <dt>Address</dt>
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