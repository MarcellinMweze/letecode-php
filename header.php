<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
</head>

<body>
    <nav class="navigation">
        <div class="contener">
            <div>
                <a href="index.php">
                    <img src="photos/logoletecode.png" alt="Logo Letecode" />
                    <span>Letecode</span>
                </a>
            </div>

            <div>
                <ul class="menu">
                    <li class="menu-item <?php if ($page == 'index') {
                                                echo 'active';
                                            } ?>">
                        <a href="index.php">Acceuil</a>
                    </li>
                    <li class="menu-item <?php if ($page == 'communaute') {
                                                echo 'active';
                                            } ?>">
                        <a href="communaute.php">Communauté</a>
                    </li>
                    <li class="menu-item <?php if ($page == 'cours') {
                                                echo 'active';
                                            } ?>">
                        <a href="cours.php">Cours</a>
                    </li>
                    <li class="menu-item <?php if ($page == 'contact') {
                                                echo 'active';
                                            } ?>">
                        <a href="contact.php">Contacts</a>
                    </li>
                </ul>
            </div>
            <button class="btn-ptmenu">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
        </div>
    </nav>
</body>

</html>