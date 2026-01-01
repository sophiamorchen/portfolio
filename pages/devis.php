<?php require_once "../includes/header.php"; ?>

<main class="container my-5">

    <!-- HERO DEVIS -->
    <section class="hero-section devis-hero d-flex flex-column align-items-center text-center gap-3 p-4 mb-5">
        <h1 class="text-warning fw-bold">Demandez votre devis gratuit</h1>

        <p class="lead fw-bold">
            Un projet d’entretien, de location de matériel ou de travaux ?
            Expliquez-nous votre besoin, nous vous répondons rapidement avec
            une proposition claire, personnalisée et <strong>sans engagement</strong>.
        </p>

        <div class="devis-highlights d-flex flex-column flex-md-row gap-3 mt-3">
            <span>✔ Devis 100 % gratuit</span>
            <span>✔ Réponse rapide</span>
            <span>✔ Adapté à votre projet</span>
        </div>
    </section>

    <!-- FORMULAIRE -->
    <section class="devis-form-section mb-5">
        <h2 class="text-warning text-center mb-4">Décrivez votre projet</h2>

        <form class="devis-form mx-auto">

            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Nom *</label>
                    <input type="text" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Prénom *</label>
                    <input type="text" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Email *</label>
                    <input type="email" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Téléphone</label>
                    <input type="tel" class="form-control">
                </div>

                <div class="col-12">
                    <label class="form-label">Type de projet *</label>
                    <select class="form-select" required>
                        <option value="">— Sélectionnez —</option>
                        <option>Entretien d’espaces verts</option>
                        <option>Location de matériel</option>
                        <option>Bricolage / réparations</option>
                        <option>Travaux / chantier</option>
                        <option>Autre</option>
                    </select>
                </div>

                <div class="col-12">
                    <label class="form-label">Votre demande *</label>
                    <textarea
                        class="form-control"
                        rows="5"
                        placeholder="Décrivez votre projet, les surfaces, la durée, le matériel souhaité…"
                        required></textarea>
                </div>
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-warning btn-lg px-5">
                    Demander mon devis gratuit
                </button>
            </div>

        </form>
    </section>

    <!-- CONFIANCE -->
    <section class="devis-reassurance text-center rounded p-2">
        <h3 class="text-warning mb-3">Pourquoi choisir GaSo&Co ?</h3>

        <p class="mx-auto fw-bold">
            Nous intervenons pour des projets simples comme complexes :
            entretien régulier, prestations ponctuelles, location courte ou longue durée,
            petits travaux ou chantiers plus conséquents.
            <br><br>
            Chaque demande est étudiée avec sérieux afin de vous proposer
            la solution la plus adaptée, au juste prix.
        </p>
    </section>

</main>

<?php require_once "../includes/footer.php"; ?>