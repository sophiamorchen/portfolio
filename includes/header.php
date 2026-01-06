<?php
include(__DIR__ . '/../lib/config.php');


$currentPage = basename($_SERVER['SCRIPT_NAME']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= HOUSE_LOGO ?></title>

    <!-- Reset CSS -->
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS perso -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <!-- HEADER -->
    <header class="site-header">
        <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
            <div class="header-brand">
                <h1 class="site-title"><?= HOUSE_LOGO ?></h1>
                <span class="site-tagline">Entretien, bricolage & location de matériel professionnel</span>
            </div>
            <nav class="site-nav">
                <?php
                $currentPage = basename($_SERVER['SCRIPT_NAME']);
                foreach ($mainMenu as $url => $label) {
                    $active = ($url == $_SERVER['REQUEST_URI'] || basename($url) == $currentPage) ? ' active' : '';
                    echo '<a href="' . BASE_URL . $url . '" class="nav-link' . $active . '">' . $label . '</a>';
                }
                ?>
            </nav>
        </div>
    </header>