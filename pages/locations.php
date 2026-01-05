<?php require_once "../includes/header.php"; ?>

<main class="container my-5">

    <!-- HERO LOCATION -->
    <section class="hero-section d-flex flex-column flex-md-row align-items-center gap-4 p-4 shadow-sm">
        <div class="flex-fill text-center">

            <h2 class="text-warning mb-4">Nos locations</h2>
            <p class="lead text-warning fw-bold">
                Jardin, bricolage ou chantier : GaSo&Co met à votre disposition
                du matériel professionnel, entretenu et prêt à l’emploi.
                La location vous permet de travailler efficacement,
                sans contrainte ni investissement inutile.
            </p>

            <p class="text-warning mt-3">
                Tarifs indicatifs – dégressifs selon la durée de location.
            </p>
        </div>

        <img src="/img/blog/location-materiel.jpg"
            alt="Location de matériel GaSo&Co"
            class="rounded img-fluid"
            style="max-width:15rem;">
    </section>

    <!-- LOCATION JARDIN -->
    <section class="location-page-jardin-section mt-5 rounded p-4">
        <h2 class="text-warning text-center mb-4">Matériel pour le jardin</h2>

        <div class="d-flex flex-wrap justify-content-center gap-4 fw-bold">

            <!-- TONDEUSE -->
            <article class="tools tool-hover">
                <img src="/img/blog/tondeuse.png" alt="Tondeuse" class="tool-img">
                <p class="tool-name">Tondeuse</p>
                <p class="tool-desc">
                    Marque Weibang – entretien des pelouses petites et moyennes surfaces.
                </p>

                <table class="table table-sm text-center mt-3">
                    <thead>
                        <tr>
                            <th>Journée</th>
                            <th>Week-end</th>
                            <th>Semaine</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>35 €</td>
                            <td>60 €</td>
                            <td>140 €</td>
                        </tr>
                    </tbody>
                </table>
            </article>

            <!-- DEBROUSSAILLEUSE -->
            <article class="tools tool-hover">
                <img src="/img/blog/debroussailleuse.jpg" alt="Débroussailleuse" class="tool-img">
                <p class="tool-name">Débroussailleuse</p>
                <p class="tool-desc">
                    Maruyama – terrains difficiles et herbes hautes.
                </p>

                <table class="table table-sm text-center mt-3">
                    <thead>
                        <tr>
                            <th>Journée</th>
                            <th>Week-end</th>
                            <th>Semaine</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>30 €</td>
                            <td>55 €</td>
                            <td>130 €</td>
                        </tr>
                    </tbody>
                </table>
            </article>

            <!-- TAILLE-HAIE -->
            <article class="tools tool-hover">
                <img src="/img/blog/entretien-exterieur.jpg" alt="Taille-haie" class="tool-img">
                <p class="tool-name">Taille-haie</p>
                <p class="tool-desc">
                    Echo – taille précise et efficace des haies.
                </p>

                <table class="table table-sm text-center mt-3">
                    <thead>
                        <tr>
                            <th>Journée</th>
                            <th>Week-end</th>
                            <th>Semaine</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>25 €</td>
                            <td>45 €</td>
                            <td>110 €</td>
                        </tr>
                    </tbody>
                </table>
            </article>

        </div>
    </section>

    <!-- LOCATION CHANTIER -->
    <section class="location-page-chantier-section mt-5 rounded p-4">
        <h2 class="text-warning text-center mb-4">Matériel de chantier</h2>

        <div class="d-flex flex-wrap justify-content-center gap-4 fw-bold">

            <!-- MOTOBINEUSE -->
            <article class="tools tool-hover">
                <img src="/img/blog/fendeuse.jpg" alt="Motobineuse" class="tool-img">
                <p class="tool-name">Motobineuse</p>
                <p class="tool-desc">
                    Roques et Lecoeur – préparation des sols.
                </p>

                <table class="table table-sm text-center mt-3">
                    <thead>
                        <tr>
                            <th>Journée</th>
                            <th>Week-end</th>
                            <th>Semaine</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>45 €</td>
                            <td>80 €</td>
                            <td>190 €</td>
                        </tr>
                    </tbody>
                </table>
            </article>

            <!-- SOUFFLEUR -->
            <article class="tools tool-hover">
                <img src="/img/blog/souffleur-feuilles.jpg" alt="Souffleur" class="tool-img">
                <p class="tool-name">Souffleur</p>
                <p class="tool-desc">
                    Echo – nettoyage rapide des feuilles et débris.
                </p>

                <table class="table table-sm text-center mt-3">
                    <thead>
                        <tr>
                            <th>Journée</th>
                            <th>Week-end</th>
                            <th>Semaine</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>20 €</td>
                            <td>35 €</td>
                            <td>90 €</td>
                        </tr>
                    </tbody>
                </table>
            </article>

            <!-- AUTRES -->
            <article class="tools tool-hover">
                <img src="/img/blog/devis.jpg" alt="Autres équipements" class="tool-img">
                <p class="tool-name">Autres équipements</p>
                <p class="tool-desc">
                    Matériel spécifique selon vos besoins.
                </p>

                <p class="text-warning fw-bold mt-4">
                    Sur devis
                </p>
            </article>

        </div>
    </section>

    <!-- CTA -->
    <section class="hero-devis-section text-center mt-5">
        <div class="hero-devis-box mx-auto">
            <h3 class="text-warning">Besoin d’un matériel précis ?</h3>
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