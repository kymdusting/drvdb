<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Dr Van Der Bloom's Hydroponics Supplies | <?php echo($title); ?></title>
        <!-- *(* Need to add keywords from Google Adwords proposal -->
        <meta name="keywords" content="hydroponic lights, pumps garden, hydroponic lighting, coffs harbour, north coast, hydroponic tents, hydroponics supplies, lights hydroponics, hydroponic kit, water pumps garden, garden indoor, ph testers, garden water pumps, hydroponics growing, pumps water, water pumps, hydroponic gardening, grow hydroponic, hydroponics garden, gardening supplies, Nutrients, Additives, Growing Mediums, Lighting, Light Kits, Ballasts, Fans, Filters, Ducts, Meters, Scales, Timers, Air &amp; Water Pumps, Pots, Poly, Irrigation, Panda Film, Grow Tents, Hardware, Detox, Pest &amp; Disease Control, Propagation, Canna, House &amp; Garden, Dutch Master, Flairform, Growth Technology, B.A.C, OZI Magic">
        <meta name="description" content="Dr. Van Der Bloom's Hydroponics Supplies. ">
        <meta name="author" content="Light Is Everything :: http://lightiseverything.com.au">
        <!-- <meta name="viewport" content="width=device-width"> -->

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico">
        <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
        <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">
        <!-- For first- and second-generation iPad: -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72.png">
        <!-- For iPhone with high-resolution Retina display: -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114.png">
        <!-- For third-generation iPad with high-resolution Retina display: -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144.png">

        <link rel="stylesheet" href="styles/screen.css"/>
        <link href="scripts/vendor/jquery.bxslider.css" rel="stylesheet" />
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="scripts/vendor/modernizr.min.js"></script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <header role="banner">
            <section class="utilities">
                <div class="links">
                    <a href="tel:0266519992" class="tel">02 6651 9992</a>
                    <a href="enquiry@drvanderblooms.com.au" class="email">enquiry@drvanderblooms.com.au</a>
                    <a href="http://www.facebook.com/DrVanDerBloomsHydroponics" class="facebook">Connect with us on Facebook</a>
                </div>
                <!-- <form role="search">
                    <label for="search" class="offscreen">Search Dr. Van Der Blooms</label>
                    <input type="text" placeholder="Search" id="search" name="search" /><button class="btn-search">Search</button>
                </form> -->
            </section>
        </header>
        <section class="sidebar">
            <nav class="main-nav" role="navigation">
                <ul>
                    <li><a <?php if ($title == "Home") echo('class="current"'); ?> href="index.php">Home</a></li>
                    <li><a <?php if (strpos($title,'Our Products') !== false) echo('class="current"'); ?> href="products.php">Our Products</a></li>
                    <li><a <?php if (strpos($title,'About Us') !== false) echo('class="current"'); ?> href="about.php">About Us</a></li>
                    <li><a <?php if (strpos($title,'Contact Us') !== false) echo('class="current"'); ?> href="contact.php">Contact Us</a></li>
                </ul>
            </nav>
            <h1><img src="images/logo-drvanderblooms.png" alt="Dr. Van Der Blooms - Coffs Harbour Hydroponics" /></h1>
            <nav class="secondary-nav" role="navigation">
                <h2>Browse By Category</h2>
                <ul>
                    <?php include("includes/products-category.php"); ?>
                </ul>
            </nav>
            <nav class="secondary-nav" role="navigation">
                <h2>Browse By Brand</h2>
                <ul>
                    <?php include("includes/products-brand.php"); ?>
                </ul>
            </nav>
        </section>