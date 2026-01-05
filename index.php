<?php require_once "includes/header.php" ?>


<main class="container my-5">
    <!-- HERO SECTION -->

    <section class="hero-section d-flex flex-column flex-md-row align-items-center gap-4 p-4 shadow-sm">

        <div class="flex-fill text-center">
            <h1 class="text-warning">Des outils et du savoir-faire pour chaque projet</h1>
            <p class="fw-bold mt-3">
                Espaces verts, bricolage, chantiers : GaSo&Co vous accompagne avec du matériel performant et des solutions adaptées à tous vos besoins.
            </p>

            <h2 class="text-warning mt-3 display-1">GaSo&Co</h2>
        </div>
        <img src="img/tailleHaie.png" alt="photo tailleur de haie" class="rounded img-fluid" style="max-width:15rem;">
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
            <article class="tools">
                <img src="/img/blog/fendeuse.jpg" alt="Fendeuse" class="tool-img">
                <p class="tool-name">Motobineuse fraise arrière</p>
                <p class="tool-desc">Marque Roques et Lecoeur : idéale pour fendre le bois rapidement et efficacement.</p>


            </article>

            <article class="tools">
                <img src="/img/blog/debroussailleuse.jpg" alt="Débroussailleuse" class="tool-img">
                <p class="tool-name">Débroussailleuse</p>
                <p class="tool-desc">Maruyama : parfaite pour débroussailler les terrains difficiles et les herbes hautes.</p>

            </article>

            <article class="tools">
                <img src="/img/blog/souffleur-feuilles.jpg" alt="Souffleur" class="tool-img">
                <p class="tool-name">Souffleur</p>
                <p class="tool-desc">Marque Echo : souffle les feuilles et les débris, rapide et maniable.</p>
            </article>

            <article class="tools">
                <img src="/img/blog/entretien-exterieur.jpg" alt="Taille-haie" class="tool-img">
                <p class="tool-name">Taille-haie</p>
                <p class="tool-desc">Marque Echo : taille haies et arbustes avec précision et sécurité.</p>
            </article>

            <article class="tools">
                <img src="/img/blog/tondeuse.png" alt="Tondeuse" class="tool-img">
                <p class="tool-name">Tondeuse</p>
                <p class="tool-desc">Marque Weibang : tonte efficace pour pelouses petites et moyennes.</p>
            </article>
        </div>
        <a href="/pages/location-materiel.php" class="btn btn-warning">Voir nos locations</a>
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
            <article class="maintenance-item">
                <img src="/img/blog/entretien-exterieur.jpg" alt="Taille de haies" class="maintenance-img">
                <p class="maintenance-name">Entretien espaces verts</p>
                <p class="maintenance-desc">Élagage et taille de haies, tonte, labourage etc....</p>
            </article>

            <article class="maintenance-item">
                <img src="/img/blog/plantation.jpg" alt="Plantation" class="maintenance-img">
                <p class="maintenance-name">Plantation</p>
                <p class="maintenance-desc">Plantation d’arbres, fleurs et arbustes pour embellir vos espaces verts.</p>
            </article>

            <article class="maintenance-item">
                <img src="/img/blog/arboriculture.jpg" alt="Entretien arboricole" class="maintenance-img">
                <p class="maintenance-name">Entretien arboricole</p>
                <p class="maintenance-desc">Soins et élagages pour préserver la santé de vos arbres et éviter les risques.</p>
            </article>

            <article class="maintenance-item">
                <img src="/img/blog/gants-tournevis.jpg" alt="Réparations intérieures" class="maintenance-img">
                <p class="maintenance-name">Réparations et bricolage</p>
                <p class="maintenance-desc">Carrelage, parquet, peinture et petites réparations pour vos espaces intérieurs et extérieurs.</p>
            </article>

            <article class="maintenance-item">
                <img src="/img/blog/devis.jpg" alt="Autres services" class="maintenance-img">
                <p class="maintenance-name">Autres services</p>
                <p class="maintenance-desc">Nous intervenons sur tout type de projet : aménagement, bricolage, entretien ou travaux spécifiques. Devis gratuit et personnalisé.</p>
            </article>
        </div>
        <a href="/pages/location-materiel.php" class="btn btn-warning">Voir nos prestations</a>
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

            <img src="/img/blog/devis.jpg"
                alt="Devis pour travaux"
                class="img-fluid rounded mt-4">

            <a href="/pages/contact.php"
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