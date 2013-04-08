<?php

$title = 'Our Products';
$var = '';

if (isset($_GET['cat'])) {
    $var = $_GET['cat'];
};

switch ($var) {
    case "nutrients":
        $title .= ' - Nutrients';
        break;
    case "additives":
        $title .= ' - Additives';
        break;
    case "mediums":
        $title .= ' - Growing Mediums';
        break;
    case "lighting":
        $title .= ' - Lighting / Light Kits / Ballasts';
        break;
    case "fans":
        $title .= ' - Fans / Filters / Ducts';
        break;
    case "meters":
        $title .= ' - Meters / Scales / Timers';
        break;
    case "pumps":
        $title .= ' - Air &amp; Water Pumps';
        break;
    case "pots":
        $title .= ' - Pots / Poly / Irrigation';
        break;
    case "tents":
        $title .= ' - Panda Film / Grow Tents';
        break;
    case "hardware":
        $title .= ' - Hardware / Detox';
        break;
    case "control":
        $title .= ' - Pest &amp; Disease Control';
        break;
    case "propagation":
        $title .= ' - Propagation';
        break;
    case "hydrokits":
        $title .= ' - Hydroponic Kits';
        break;
    case "canna":
        $title .= ' - Canna';
        break;
    case "housegarden":
        $title .= ' - House &amp; Garden';
        break;
    case "dutchmaster":
        $title .= ' - Dutch Master';
        break;
    case "falirform":
        $title .= ' - Flairform';
        break;
    case "growthtech":
        $title .= ' - Growth Technology';
        break;
    case "bac":
        $title .= ' - B.A.C';
        break;
    case "ozimagic":
        $title .= ' - OZI Magic';
        break;
}

include("includes/header.php"); ?>
<section class="main products" role="main">
    <header class="module heading">
        <h1><?php echo($title); ?></h1>
    </header>
    <?php
        if ($var != '') {
            include("includes/" . $var . ".php");
        } else {
            include("includes/products-menu.php");
        }
    ?>
</section>
<?php
include("includes/footer.php"); ?>