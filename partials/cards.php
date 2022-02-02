<?php include_once __DIR__ . "./../server/db.php" ?>

    <?php foreach ($response as $el) { ?>
        <div class="col">
            <div class="container-card d-flex flex-column align-items-center pt-3 pb-3 mb-4">
                <img class="album-cover"
                    src="<?= $el["poster"] ?>"
                    alt="<?= 'Poster image of the album' .  $el["title"] ?>">
                <h4 class="album-name text-white text-card pt-3"><?= $el["title"] ?></h4>
                <h5 class=" text-card gray-subtitle pt-3"><?= $el["author"] ?></h5>
                <h6 class=" text-card gray-subtitle"><?= $el["year"] ?></h6>
            </div>
        </div>
    <?php } ?>