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
}

// *(* REMOVE THE PHP CONSOLE STUFF BEFORE GO LIVE
include_once('phpconsole/install.php');
phpconsole($title, 'kymdusting');

include("includes/header.php"); ?>
<section class="main" role="main">
    <header class="module heading">
        <h1><?php echo($title); ?></h1>
    </header>
    <?php
        switch ($var) {
            case "nutrients":
                include("includes/nutrients.php");
                break;
            default:
                include("includes/products-menu.php");
        }
    ?>
</section>
<?php
include("includes/footer.php"); ?>