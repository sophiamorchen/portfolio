<?php require_once "../includes/header.php"; ?>

<main class="container my-5">

    <!-- INTRO CONTACT -->
    <section class="mb-5 text-center">
        <h1 class="display-4 fw-bold text-warning">Contactez GaSo&Co</h1>
        <p class="lead mt-3">
            Vous avez un projet ou une question ? N'hésitez pas à nous envoyer un message ou à passer nous voir à Puyoo.
        </p>
    </section>

    <div class="row g-4">

        <!-- FORMULAIRE -->
        <div class="col-md-6">
            <div class="p-4 shadow-sm rounded bg-white">
                <h2 class="mb-4">Formulaire de contact</h2>
                <form action="#" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Votre email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea id="message" name="message" rows="5" class="form-control" placeholder="Votre message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning text-white">Envoyer</button>
                </form>
            </div>
        </div>

        <!-- COORDONNEES + CARTE -->
        <div class="col-md-6">
            <div class="p-4 shadow-sm rounded bg-white">
                <h2 class="mb-4">Nos coordonnées</h2>
                <p><strong>Adresse :</strong> 64410 Puyoo, France</p>
                <p><strong>Téléphone :</strong> 06 12 34 56 78</p>
                <p><strong>Email :</strong> contact@gaso-co.fr</p>

                <h3 class="mt-4 mb-3">Où nous trouver</h3>
                <!-- Google Maps embed -->
                <div class="ratio ratio-16x9">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2889.267034282388!2d-0.123456!3d43.533333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd55555abc12345%3A0xabcdef123456!2sPuyoo%2C+France!5e0!3m2!1sfr!2sfr!4v1704123456789"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>

    </div>

</main>

<?php require_once "../includes/footer.php"; ?>