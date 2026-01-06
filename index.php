<?php
// header.php inclut config.php
require_once(__DIR__ . '/includes/header.php');

require_once(__DIR__ . '/lib/pdo.php');
require_once(__DIR__ . '/lib/services.php');
require_once(__DIR__ . '/lib/locations.php');
require_once(__DIR__ . '/lib/images.php');

$tools = getLocations($pdo, 4);
$services = getServices($pdo);
$images = getImages($pdo);


?>


<main class="container my-5">
    <!-- HERO SECTION -->

    <section class="hero-section d-flex flex-column flex-md-row align-items-center gap-4 p-4 shadow-sm">

        <div class="flex-fill text-center">
            <h1 class="text-warning">Des outils et du savoir-faire pour chaque projet</h1>
            <p class="fw-bold mt-3">
                Espaces verts, bricolage, chantiers : GaSo&Co vous accompagne avec du matériel performant et des solutions adaptées à tous vos besoins.
            </p>

            <h2 class="text-warning mt-3 display-1"><?= HOUSE_LOGO ?></h2>
        </div>
        <img src="<?=$images[2]['path']?>" alt="<?=$images[2]['alt_text']?>" class="rounded img-fluid" style="max-width:15rem;">
    </section>




    <!-- SECTION LOCATION DE MATÉRIEL -->
    <section class="location d-flex flex-column flex-wrap gap-4 mt-5 align-items-center">
        <!-- Titre principal -->
        <h2 class="text-warning text-center mb-4">Location de matériel</h2>

        <!-- Texte introductif -->
        <p class="lead text-center mt-3 text-warning">
            Que ce soit pour le jardin, le bricolage ou vos petits et gros chantiers,
            <strong>GaSo&Co</strong> vous propose une large gamme de matériel performant et entretenu.
            Tondeuses, taille-haies, débroussailleuses, mini-pelles, camions-bennes et plus encore :
            nous avons l’outil qu’il vous faut. Tous nos devis sont gratuits et personnalisés pour vos besoins.
        </p>

        <!-- Liste des outils -->
        <div class="list-tools fw-bold">
            <?php foreach ($tools as $tool) { ?>
                <article class="tools">
                    <img src="<?= $tool['img_path'] ?>" alt="<?= $tool['img_alt'] ?>" class="tool-img">
                    <p class="tool-name"><?= $tool['name'] ?></p>
                    <p class="tool-desc"><?= $tool['description'] ?></p>
                </article>
            <?php } ?>
        </div>
        <a href="http://portfolio.local/pages/locations.php" class="btn btn-warning">Voir nos locations</a>
    </section>

    <!-- SECTION ENTRETIEN D'ESPACES VERTS ET TRAVAUX -->
    <section class="maintenance mt-5 gap-4 d-flex flex-column align-items-center">
        <!-- Titre principal -->
        <h2 class="text-warning text-center mb-4">Nos prestations d’entretien et de travaux</h2>

        <!-- Texte introductif -->
        <p class="text-center lead mb-5 text-warning">
            Chez <strong>GaSo&Co</strong>, nous intervenons pour tous vos besoins :
            entretien d’espaces verts, travaux de bricolage et réparations diverses.
            Taille de haies, plantations, soins arboricoles, carrelage, parquet, peinture… et bien plus encore !
            Nous réalisons des devis personnalisés et <strong>gratuits</strong> pour tout projet,
            qu’il soit petit ou important.
        </p>

        <!-- Liste des services -->
        <div class="list-maintenance d-flex flex-wrap gap-4 justify-content-center fw-bold">
            <?php foreach ($services as $service) { ?>
                <article class="maintenance-item">
                    <img src="<?= $service['img_path'] ?>" alt="<?= $service['img_alt'] ?>" class="maintenance-img">
                    <p class="maintenance-name"><?= $service['name'] ?></p>
                    <p class="maintenance-desc"><?= $service['description'] ?></p>
                </article>
            <?php } ?>
        </div>
        <a href="http://portfolio.local/pages/services.php" class="btn btn-warning">Voir nos prestations</a>
    </section>

    <!-- FIN ENTRETIEN ESPACE VERTS - BRICOLAGE -->

    <!-- SECTION DEVIS -->

    <section class="hero-devis-section text-center mt-5">
        <div class="hero-devis-box mx-auto">

            <h3 class="text-warning">Devis gratuit & personnalisé</h3>

            <p class="mt-3">
                Du simple entretien de jardin au chantier complet,
                nous étudions chaque projet avec sérieux et transparence.
            </p>

            <img src="<?= $images[11]['path'] ?>"
                alt="<?= $images[11]['alt_text'] ?>"
                class="img-fluid rounded mt-4">

            <a href="http://portfolio.local/pages/contact.php"
                class="btn btn-warning btn-lg mt-4 mx-3">
                Demander mon devis
            </a>

        </div>
    </section>
</main>

<!-- FOOTER -->
<?php require_once "includes/footer.php" ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>

</html>