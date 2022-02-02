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
        <div id="app">
            
            <!-- Header -->
            <?php include_once __DIR__ . '/partials/header.php' ?>
    
            <!-- Main -->
            <main>
                <div class="cards-container pt-4">
                    <div>
                        <div class="row row-cols-5 mx-auto">
                            <!-- <?php include_once __DIR__ . '/partials/cards.php' ?> -->
                            <div v-for="el in cards" class="col">
                                <div class="container-card d-flex flex-column align-items-center pt-3 pb-3 mb-4">
                                    <img class="album-cover"
                                        :src="el.poster"
                                        :alt="el.title">
                                    <h4 class="album-name text-white text-card pt-3"> {{el.title}} </h4>
                                    <h5 class=" text-card gray-subtitle pt-3">{{el.author}}</h5>
                                    <h6 class=" text-card gray-subtitle">{{el.year}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <!-- Footer -->
            <?php include_once __DIR__ . '/partials/footer.php' ?>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>