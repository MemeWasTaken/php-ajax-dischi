<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <title>PHP Dischi</title>
    </head>
    <body>
        <!-- Header -->
        <?php include_once __DIR__ . '/partials/header.php' ?>

        <!-- Main -->
        <main>
            <div class="cards-container pt-4">
                <div>
                    <!-- <div class="row">
                        <div class="col offset-10 pb-2">
                            <select v-model="selectionGenre" name="genre" id="genre" class="select" @change="$emit('filter', selectionGenre)">
                                <option value="all">All</option>
                                <option value="jazz">Jazz</option>
                                <option value="metal">Metal</option>
                                <option value="pop">Pop</option>
                                <option value="rock">Rock</option>
                            </select>
                        </div>
                    </div> -->
                    <div class="row row-cols-5 mx-auto">
                        <?php include_once __DIR__ . '/partials/cards.php' ?>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer -->
        <?php include_once __DIR__ . '/partials/footer.php' ?>

    </body>
</html>