<?php

$membres = [
  [
    "picture" => "photos/marcellin.jpg",
    "name" => "Marcellin M",
  ],
  [
    "picture" => "photos/marcellin.jpg",
    "name" => "Marcellin M",
  ],
  [
    "picture" => "photos/marcellin.jpg",
    "name" => "Marcellin M",
  ],
  [
    "picture" => "photos/marcellin.jpg",
    "name" => "Marcellin M",
  ],
  [
    "picture" => "photos/marcellin.jpg",
    "name" => "Marcellin M",
  ],
  [
    "picture" => "photos/marcellin.jpg",
    "name" => "Marcellin M",
  ],
  [
    "picture" => "photos/marcellin.jpg",
    "name" => "Marcellin M",
  ],
  [
    "picture" => "photos/marcellin.jpg",
    "name" => "Marcellin M",
  ],
]

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Communauté</title>
  <meta name="description" content="La communauté Letecode" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="shortcut icon" href="photos/logoletecode.png" />
  <link rel="stylesheet" href="styles.css" />

  <!-- Ajout Open graph -->
  <meta property="og:title" content="Communauté" />
  <meta property="og:description" content="La communauté Letecode" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://marcellinmweze.github.io/tp2/photos/logoletecode.png" />
  <meta property="og:url" content="https://marcellinmweze.github.io/tp2" />
</head>

<body>
  <?php
  $page = 'communaute';

  include_once('header.php');

  ?>

  <section class="section header">
    <div class="contener">
      <h2 class="mar-t-10">La plus puissante Commaunauté</h2>
      <p class="mar-t-20">
        Une grande communauté des <br />
        développeurs du monde entier
      </p>
      <a href="#" class="btn link">Rejoindre</a>
    </div>
  </section>

  <section class="section learn">
    <div class="contener">
      <div class="bloc-item">
        <h2 class="mar-t-10">
          Apprendre la <br />
          programmation
        </h2>
        <p class="mar-t-20">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias
          delectus maxime eaque maiores repellendus provident, officiis nemo
          quisquam fugiat totam architecto cum, deleniti voluptate?
          Praesentium laborum libero dolores vel commodi.
        </p>
      </div>
      <div class="bloc-item al-center">
        <img src="photos/python_720.png" alt="Logo Letecode" />
      </div>
    </div>
  </section>

  <section class="section membres">
    <div class="contener">
      <h2>Les membres</h2>
      <div class="contener-membres">

        <?php

        foreach ($membres as $membre) {
          echo '<div class="membres">
                  <div class="img-membre">
                  <img src="' . $membre['picture'] . '" alt="Photo membre" />
                  </div>
                  <div>
                  <h3>' . $membre['name'] . '</h3>
                  </div>
                </div>';
        }

        ?>
      </div>
    </div>
  </section>

  <?php

  include_once('footer.php');
  ?>
  <script src="script/menuvolet.js"></script>
</body>

</html>