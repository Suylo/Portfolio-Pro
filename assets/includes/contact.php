<?php
$msg = "";

if (isset($_POST['submit']) && !empty($_POST['first_name']) && isset($_POST['first_name'])
    && !empty($_POST['last_name']) && isset($_POST['last_name'])
    && !empty($_POST['subject']) && isset($_POST['subject'])
    && !empty($_POST['email']) && isset($_POST['email'])
    && !empty($_POST['message']) && isset($_POST['message'])) {

    $from = $_POST['email'];
    $to = "contact@louis-lubineau.fr";
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = $_POST['subject'];

    $message = "Prénom : " . $first_name . "
    <br>Nom : " . $last_name . "
    <br>De : " . "louis-lubineau.fr" . "
    <br>Sujet : " . $subject . "
    
    <br><br>Message :
    
    " . $_POST['message'];

    $headers = "From: " . $from . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8";

    $ret = mail('contact@louis-lubineau.fr', $subject, $message, $headers);
    if ($ret){
        $msg =  "<p class=\"llbn-contact-intro\">Le mail a bien été envoyé. Merci, je vous recontacterai bientôt.</p>";
    } else {
        $msg = "<p class=\"llbn-contact-intro\">Le mail n'a pas pu être envoyé, veuillez réessayer.</p>";
    }

}


?>
<section id="llbn-contact">
    <h1 class="llbn-text-cursive llbn-primary">
        <i class="bi bi-telephone"></i> Me contacter
    </h1>
    <hr class="llbn-separator-pages">
    <p class="llbn-contact-intro">
        Vous pouvez me contacter par le biais de ce formulaire.
        <br>
        Il est nécessaire de mettre une adresse mail valide afin que je puisse vous recontacter par la suite.
    </p>
    <?= $msg ?>
    <form method="post" id="llbn-contact-form">
        <p>
            <input type="text" name="first_name" id="contact-name" placeholder="Prénom" required>

            <input type="text" name="last_name" id="contact-name" placeholder="Nom" required>
        </p>
        <p>
            <input type="text" name="subject" id="contact-subject" placeholder="Objet" required>
            <input type="email" name="email" id="contact-email" placeholder="E-mail" required>
        </p>
        <p>
            <textarea name="message" id="contact-message" placeholder="Votre message..." required></textarea>

        </p>
        <button name="submit" class="llbn-btn-primary" id="llbn-contact-submit"><i class="bi bi-forward"></i> Envoyer</button>

    </form>
</section>