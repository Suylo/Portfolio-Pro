<?php

    include "assets/includes/connectDB.php";

?>

<!doctype html>
<html lang="fr">
    <?php include "assets/includes/head.html"; ?>
    <body>

        <div id="llbn-particles">
            <div id="particles-js">
                <canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="1378" height="927"></canvas>
            </div>
        </div>

    <nav id="llbn-nav">
        <section id="llbn-profile">
            <section id="llbn-profile-img">
                <img src="assets/img/-favicon.jpg" alt="Photo de moi" width="100">
            </section>
            <section id="llbn-profile-text">
                <h2>
                    Louis L.
                </h2>
            </section>
        </section>


        <ul id="llbn-menu">
        <?php while ($row = mysqli_fetch_array($result)){
            if($query == $row["url"]) {
                echo '    <li class="active">';
            } else {
                echo '<li>';
            }
            echo '
                <a href="' . $row["url"] . '">
                    <span class="llbn-icon-nav"><i class="bi bi-' . $row["icon"] .'"></i></span>
                    <span class="llbn-title-nav">' . $row["title"] .'</span>
                </a>
            </li>';
            }?>

        </ul>

        <ul id="llbn-socialmedia">
            <li><a href="https://www.linkedin.com/in/louis-l-9a28a11ba/" target="_blank"><i class="bi bi-linkedin"></i></a></li>
            <li><a href="https://github.com/Suylo" target="_blank"><i class="bi bi-github"></i></a></li>
        </ul>
    </nav>

    <main id="llbn-wrapper">
        <?php
        switch ($query){
            case "introduction":
                include "assets/includes/introduction.html";
                break;
            case "educational-background":
                include "assets/includes/formations.html";
                break;
            case "skills":
                include "assets/includes/competences.php";
                break;
            case "experiences":
                include "assets/includes/experiences.html";
                break;
            case "documentation":
                include "assets/includes/documentation.html";
                break;
            case "technological-watch":
                include "assets/includes/veille_techno.html";
                break;
            case "contact":
                include "assets/includes/contact.php";
                break;
            default:
                include "assets/includes/home.php";
                break;
        }
        ?>

    </main>

    <?php include 'assets/includes/script.php'; ?>
    </body>
</html>