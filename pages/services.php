<?php require_once "../includes/header.php"; ?>

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

        <img src="/img/blog/entretien-exterieur.jpg"
            alt="Services GaSo&Co"
            class="rounded img-fluid"
            style="max-width:15rem;">
    </section>

    <!-- SERVICES ESPACES VERTS -->
    <section class="services-page-service-section mt-5 rounded p-4">
        <h2 class="text-warning text-center mb-4">Entretien d’espaces verts</h2>

        <div class="d-flex flex-wrap justify-content-center gap-4 fw-bold">
            <article class="maintenance-item">
                <img src="/img/blog/entretien-exterieur.jpg" alt="Entretien jardin" class="maintenance-img">
                <p class="maintenance-name">Entretien régulier</p>
                <p class="maintenance-desc">
                    Tonte, débroussaillage, nettoyage et entretien de vos extérieurs.
                </p>
            </article>

            <article class="maintenance-item">
                <img src="/img/blog/arboriculture.jpg" alt="Élagage" class="maintenance-img">
                <p class="maintenance-name">Élagage & taille</p>
                <p class="maintenance-desc">
                    Taille de haies, élagage d’arbres et sécurisation des zones à risque.
                </p>
            </article>

            <article class="maintenance-item">
                <img src="/img/blog/plantation.jpg" alt="Plantation" class="maintenance-img">
                <p class="maintenance-name">Plantations</p>
                <p class="maintenance-desc">
                    Plantation d’arbres, arbustes et massifs pour valoriser vos espaces verts.
                </p>
            </article>
        </div>
    </section>

    <!-- SERVICES BRICOLAGE -->
    <section class="services-page-bricolage-section mt-5 rounded p-4">
        <h2 class="text-warning text-center mb-4">Bricolage & petits travaux</h2>

        <div class="d-flex flex-wrap justify-content-center gap-4 fw-bold">
            <article class="maintenance-item">
                <img src="/img/blog/gants-tournevis.jpg" alt="Bricolage" class="maintenance-img">
                <p class="maintenance-name">Petits travaux</p>
                <p class="maintenance-desc">
                    Montage, réparations, ajustements et interventions ponctuelles.
                </p>
            </article>

            <article class="maintenance-item">
                <img src="/img/blog/devis.jpg" alt="Rénovation" class="maintenance-img">
                <p class="maintenance-name">Rénovation légère</p>
                <p class="maintenance-desc">
                    Peinture, parquet, carrelage et améliorations intérieures.
                </p>
            </article>
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