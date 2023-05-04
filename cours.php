<?php
$cours = [
  [
    "picture" => "photos/git.png",
    "intitule" => "Git et Github",
    "temps" => 5,
  ],
  [
    "picture" => "photos/html.png",
    "intitule" => "HTML5",
    "temps" => 5,
  ],
  [
    "picture" => "photos/css.png",
    "intitule" => "CSS3",
    "temps" => 5,
  ],
  [
    "picture" => "photos/flexbox.png",
    "intitule" => "Flexbox",
    "temps" => 5,
  ],
  [
    "picture" => "photos/Responsive.png",
    "intitule" => "Responsive",
    "temps" => 5,
  ],
  [
    "picture" => "photos/animation.png",
    "intitule" => "Animations",
    "temps" => 5,
  ]

]

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cours</title>
  <meta name="description" content="Les cours proposés par Letecode" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="shortcut icon" href="photos/logoletecode.png" />
  <link rel="stylesheet" href="styles.css" />

  <!-- Ajout Open graph -->
  <meta property="og:title" content="Cours" />
  <meta property="og:description" content="Les cours proposés par Letecode" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://marcellinmweze.github.io/tp2/photos/logoletecode.png" />
  <meta property="og:url" content="https://marcellinmweze.github.io/tp2" />
</head>

<body>
  <?php
  $page = 'cours';

  include_once('header.php');

  ?>

  <section class="section cours">
    <div class="contener">
      <div class="paracours">
        <h2 class="mar-t-20">Les Cours</h2>
      </div>
      <div class="grid-box">

        <?php

        foreach ($cours as $cour) {
          echo '<div class="grid-item">
    <div class="img">
    <img src="' . $cour['picture'] . '" alt="" class="img-logo" />
    </div>
    <div class="text">
    <h3>' . $cour['intitule'] . '</h3>
    <p>' . $cour['temps'] . ' heures</p>
    </div>
    </div>';
        }

        ?>
      </div>
    </div>
  </section>

  <section class="section boite">
    <div class="contener">
      <div class="boitelettre">
        <div class="boite-item">
          <h2 class="mar-t-10">Abonnez vous à la boîte <br />aux lettres</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia,
            quae, porro nemo unde obcaecati odio aperiam labore sed numquam,
            et nam ipsam laborum. Tempora corrupti quam corporis earum alias.
            Maiores.
          </p>
        </div>
        <div class="boite-item al-center">
          <div class="texte">
            <input type="text" placeholder="Adresse email" class="txtemail" />
          </div>
          <div>
            <button class="btn2">S'abonner</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php

  include_once('footer.php');
  ?>
  <script src="script/menuvolet.js"></script>

</body>

</html>