<?php require_once(__DIR__ . '/../includes/header.php'); // header.php inclus config.php; 
?>

<main class="container my-5 blog-page">

    <!-- HERO BLOG -->
    <section class="hero-section blog-hero text-center mb-5 p-4">
        <h1 class="text-warning fw-bold">Le blog GaSo&Co</h1>
        <p class="lead fw-bold mt-3">
            Conseils pratiques, retours d’expérience et informations utiles
            autour de l’entretien extérieur, du bricolage et de la location de matériel.
        </p>
        <p class="mt-2">
            Notre objectif : vous aider à faire les bons choix, au bon moment,
            avec des solutions simples et efficaces.
        </p>
    </section>

    <!-- LISTE DES ARTICLES -->
    <section class="blog-list d-flex flex-column gap-5">

        <!-- ARTICLE -->
        <article class="blog-card d-flex flex-column flex-md-row">
            <div class="blog-card-img">
                <img src="../img/entretien-exterieur.jpg"
                    alt="Entretien extérieur et jardin"
                    class="img-fluid">
            </div>

            <div class="blog-card-content p-4">
                <h2>Entretenir ses extérieurs : un investissement durable</h2>

                <p class="blog-meta">Entretien extérieur • Conseils pratiques</p>

                <p>
                    Haies, pelouses, allées ou terrasses sont soumis toute l’année
                    aux intempéries et à l’usure du temps.
                    Un entretien régulier permet d’éviter des dégradations coûteuses
                    et de conserver des espaces propres et sécurisés.
                </p>

                <p>
                    Taille, tonte, nettoyage ou élagage ne sont pas seulement esthétiques :
                    ils prolongent la durée de vie de vos aménagements et facilitent
                    leur entretien sur le long terme.
                </p>

                <p class="fw-bold">
                    GaSo&Co vous accompagne avec des solutions adaptées,
                    ponctuelles ou régulières, selon vos besoins.
                </p>
            </div>
        </article>

        <!-- ARTICLE -->
        <article class="blog-card d-flex flex-column flex-md-row">
            <div class="blog-card-img">
                <img src="../img/location-materiel.jpg"
                    alt="Location de matériel"
                    class="img-fluid">
            </div>

            <div class="blog-card-content p-4">
                <h2>Pourquoi la location de matériel est souvent la meilleure option</h2>

                <p class="blog-meta">Location • Équipement • Budget</p>

                <p>
                    Acheter du matériel pour un usage occasionnel représente
                    un investissement important, sans compter l’entretien
                    et le stockage.
                </p>

                <p>
                    La location permet d’accéder à du matériel professionnel,
                    entretenu et prêt à l’emploi, uniquement lorsque vous en avez besoin.
                </p>

                <p class="fw-bold">
                    Avec GaSo&Co, vous louez en toute simplicité,
                    sans contrainte ni surprise.
                </p>
            </div>
        </article>

        <!-- ARTICLE -->
        <article class="blog-card d-flex flex-column flex-md-row">
            <div class="blog-card-img">
                <img src="../img/bricolage-outils.jpg"
                    alt="Outils de bricolage"
                    class="img-fluid">
            </div>

            <div class="blog-card-content p-4">
                <h2>Bricolage et petits travaux : l’importance du bon outil</h2>

                <p class="blog-meta">Bricolage • Sécurité • Efficacité</p>

                <p>
                    Travailler avec un outil adapté permet de gagner du temps,
                    d’obtenir un meilleur résultat et de réduire les risques.
                </p>

                <p>
                    Chaque projet nécessite un équipement spécifique,
                    en fonction des matériaux, des surfaces et de la durée d’intervention.
                </p>

                <p class="fw-bold">
                    En cas de doute, GaSo&Co vous conseille
                    et vous oriente vers la solution la plus adaptée.
                </p>
            </div>
        </article>

    </section>

</main>

<?php require_once "../includes/footer.php"; ?>