<?php
require_once(__DIR__ . '/../includes/header.php');
require_once(__DIR__ . '/../lib/pdo.php');
require_once(__DIR__ . '/../lib/locations.php');

// Récupérer les locations par catégorie (à mettre AVANT le HTML)
$locationsJardin = getLocationsByCategory($pdo, 'jardin');
$locationsBricolage = getLocationsByCategory($pdo, 'bricolage');
?>

<main class="container my-5">

    <!-- HERO LOCATION -->
    <section class="hero-section d-flex flex-column flex-md-row align-items-center gap-4 p-4 shadow-sm">
        <div class="flex-fill text-center">
            <h2 class="text-warning mb-4">Nos locations</h2>
            <p class="lead text-warning fw-bold">
                Jardin, bricolage ou chantier : GaSo&Co met à votre disposition
                du matériel professionnel, entretenu et prêt à l'emploi.
            </p>
            <p class="text-warning mt-3">
                Tarifs indicatifs – dégressifs selon la durée de location.
            </p>
        </div>
        <img src="/img/location-materiel.jpg"
            alt="Location de matériel GaSo&Co"
            class="rounded img-fluid"
            style="max-width:15rem;">
    </section>

    <!-- LOCATION JARDIN -->
    <section class="location-page-jardin-section mt-5 rounded p-4">
        <h2 class="text-warning text-center mb-4">Matériel pour le jardin</h2>

        <div class="d-flex flex-wrap justify-content-center gap-4 fw-bold">
            <?php foreach ($locationsJardin as $location): ?>
                <article class="tools tool-hover">
                    <img src="<?= $location['img_path'] ?>"
                        alt="<?= $location['img_alt'] ?>"
                        class="tool-img">
                    <p class="tool-name"><?= $location['name'] ?></p>
                    <p class="tool-desc"><?= $location['description'] ?></p>

                    <table class="table table-sm text-center mt-3">
                        <thead>
                            <tr>
                                <th>Journée</th>
                                <th>Journée Week-end</th>
                                <th>Semaine</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $location['prices']['day'] ?> €</td>
                                <td><?= $location['prices']['week-end-day'] ?> €</td>
                                <td><?= $location['prices']['week'] ?> €</td>
                            </tr>
                        </tbody>
                    </table>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- LOCATION CHANTIER -->
    <section class="location-page-chantier-section mt-5 rounded p-4">
        <h2 class="text-warning text-center mb-4">Matériel de chantier</h2>

        <div class="d-flex flex-wrap justify-content-center gap-4 fw-bold">
            <?php if (empty($locationsBricolage)): ?>
                <p class="text-warning">Aucun matériel de chantier disponible pour le moment.</p>
            <?php else: ?>
                <?php foreach ($locationsBricolage as $location): ?>
                    <article class="tools tool-hover">
                        <img src="<?= $location['img_path'] ?>"
                            alt="<?= $location['img_alt'] ?>"
                            class="tool-img">
                        <p class="tool-name"><?= $location['name'] ?></p>
                        <p class="tool-desc"><?= $location['description'] ?></p>

                        <table class="table table-sm text-center mt-3">
                            <thead>
                                <tr>
                                    <th>Journée</th>
                                    <th>Journée Week-end</th>
                                    <th>Semaine</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $location['prices']['day'] ?> €</td>
                                    <td><?= $location['prices']['week-end-day'] ?> €</td>
                                    <td><?= $location['prices']['week'] ?> €</td>
                                </tr>
                            </tbody>
                        </table>
                    </article>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>

    <!-- CTA -->
    <section class="hero-devis-section text-center mt-5">
        <div class="hero-devis-box mx-auto">
            <h3 class="text-warning">Besoin d'un matériel précis ?</h3>
            <p class="mt-3">
                Contactez-nous pour connaître les disponibilités
                et obtenir un devis personnalisé.
            </p>

            <a href="/pages/contact.php" class="btn btn-warning btn-lg mt-3">
                Demander un devis gratuit
            </a>
        </div>
    </section>

</main>

<?php require_once "../includes/footer.php"; ?>