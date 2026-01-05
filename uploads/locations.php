<?php
require_once('../includes/header.php');
require_once('../lib/pdo.php');

require_once('../lib/locations.php');

$locations = getLocations($pdo, 0);

?>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <h1>Liste des locations</h1>
</div>
<div class="row">
    <?php foreach ($locations as $location) { ?>
        <div class="col-md-4 my-2 d-flex">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= $location['name']; ?></h5>
                    <p class="card-text"><?= $location['description']; ?></p>
                    <img src="" alt="">

                </div>
            </div>
        </div>
    <?php } ?>
</div>
<?php require_once('../includes/footer.php');