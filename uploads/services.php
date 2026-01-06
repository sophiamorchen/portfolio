<?php
require_once('../includes/header.php');
require_once('../lib/pdo.php');
require_once('../lib/services.php');
require_once('../lib/images.php');

$services = getServices($pdo, 'jardin');
?>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <h1>Liste des services</h1>
</div>
<div class="row">
    <?php foreach ($services as $service) { ?>
        <div class="col-md-4 my-2 d-flex">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= $service['name']; ?></h5>
                    <p class="card-text"><?= $service['description']; ?></p>
                    <img src="<?= $service['img_path'] ?>" alt="">
                </div>
            </div>
        </div>
    <?php } ?>
</div>













<h2 class="text-warning text-center mb-4">Entretien d’espaces verts</h2>

<div class="d-flex flex-wrap justify-content-center gap-4 fw-bold">
    <article class="maintenance-item">
        <img src="/img/taille-haie.jpg" alt="Entretien jardin" class="maintenance-img">
        <p class="maintenance-name">Entretien régulier</p>
        <p class="maintenance-desc">
            Tonte, débroussaillage, nettoyage et entretien de vos extérieurs.
        </p>
    </article>

    <article class="maintenance-item">
        <img src="/img/arboriculture.jpg" alt="Élagage" class="maintenance-img">
        <p class="maintenance-name">Élagage & taille</p>
        <p class="maintenance-desc">
            Taille de haies, élagage d’arbres et sécurisation des zones à risque.
        </p>
    </article>

    <article class="maintenance-item">
        <img src="/img/plantation.jpg" alt="Plantation" class="maintenance-img">
        <p class="maintenance-name">Plantations</p>
        <p class="maintenance-desc">
            Plantation d’arbres, arbustes et massifs pour valoriser vos espaces verts.
        </p>
    </article>
</div>





<?php require_once('../includes/footer.php');
