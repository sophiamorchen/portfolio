<?php
require_once(__DIR__ . '/../includes/header.php'); // header.php inclus config.php
require_once(__DIR__ . '/../lib/pdo.php');
require_once(__DIR__ . '/../lib/services.php');
require_once(__DIR__ . '/../lib/images.php');




$allServices = getServices($pdo);
$jardinServices = getServices($pdo, 'jardin');
$bricolageServices = getServices($pdo, 'bricolage');
$images = getImages($pdo);
?>
<main class="container my-5">

    <!-- HERO SERVICES -->
    <section class="hero-section d-flex flex-column flex-md-row align-items-center gap-4 p-4 shadow-sm">
        <div class="flex-fill text-center">

            <h2 class="text-warning mb-4">Nos services</h2>
            <h3 class="text-warning mt-3 display-1">Une solution adaptée à chaque projet</h3>

            <p class="lead text-warning fw-bold">
                Que vous soyez un particulier ou un professionnel, nous vous accompagnons
                dans vos travaux d’entretien, d’aménagement et de bricolage.
                Chaque intervention fait l’objet d’un <strong>devis gratuit et personnalisé</strong>.
            </p>
        </div>

        <img src="<?= $images[2]['path'] ?>"
            alt="<?= $images[2]['alt_text'] ?>"
            class="rounded img-fluid"
            style="max-width:15rem;">
    </section>

    <!-- SERVICES ESPACES VERTS -->
    <section class="services-page-service-section mt-5 rounded p-4">
        <h2 class="text-warning text-center mb-4">Entretien d’espaces verts</h2>
        <div class="d-flex flex-wrap justify-content-center gap-4 fw-bold">
            <?php foreach ($jardinServices as $jardinService) {
                include '../includes/page_services_garden_partial.php';
            } ?>
        </div>

    </section>

    <!-- SERVICES BRICOLAGE -->
    <section class="services-page-bricolage-section mt-5 rounded p-4">
        <h2 class="text-warning text-center mb-4">Bricolage & petits travaux</h2>

        <div class="d-flex flex-wrap justify-content-center gap-4 fw-bold">
            <?php foreach ($bricolageServices as $bricolageService) { 
                include '../includes/page_service_bricolage_partial.php';
            } ?>
        </div>
    </section>


    <!-- CTA DEVIS -->
    <section class="hero-devis-section text-center mt-5">
        <div class="hero-devis-box mx-auto">
            <h3 class="text-warning">Besoin d’un devis ?</h3>
            <p class="mt-3">
                Expliquez-nous votre projet, nous vous répondrons rapidement
                avec une solution adaptée et transparente.
            </p>

            <a href="/pages/contact.php" class="btn btn-warning btn-lg mt-3">
                Demander un devis gratuit
            </a>
        </div>
    </section>

</main>

<?php require_once "../includes/footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>

</html>