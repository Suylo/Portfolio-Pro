<section id="llbn-contact">
    <h1 class="llbn-text-cursive llbn-primary">
        <i class="bi bi-telephone"></i> Me contacter
    </h1>
    <hr class="llbn-separator-pages">
    <p class="llbn-contact-intro">
        Vous pouvez me contacter par le biais de l'adresse mail suivante : <span class="llbn-secondary" style="font-weight: bold">contact@louis-lubineau.fr</span>
        <br>
    </p>
    <?= $msg ?>
    <form method="post" id="llbn-contact-form">
        <p>
            <input type="text" name="first_name" id="first_name" placeholder="Prénom" required>

            <input type="text" name="last_name" id="last_name" placeholder="Nom" required>
        </p>
        <p>
            <input type="text" name="subject" id="subject" placeholder="Objet" required>
            <input type="email" name="email" id="email" placeholder="E-mail" required>
        </p>
        <p>
            <textarea name="message" id="message" placeholder="Votre message..." required></textarea>

        </p>
        <button name="submit" class="llbn-btn-primary" id="llbn-contact-submit"><i class="bi bi-forward"></i> Envoyer</button>

    </form>
</section>

<script>
    $(document).ready(function() {
        $("#llbn-contact-form").submit(function(event){
            event.preventDefault();
            submitForm();
        });

        function formSuccess() {
            $("#llbn-contact-form").html("<p class='llbn-contact-intro'>Votre message a bien été envoyé !</p>");
        }

        function submitForm(){
            let firstName = $("#first_name").val();
            let lastName = $("#last_name").val();
            let subject = $("#subject").val();
            let email = $("#email").val();
            let message = $("#message").val();

            $.ajax({
                type: "POST",
                url: "assets/dev/contactMail.php",
                data: "first_name=" + firstName + "&last_name=" + lastName + "&email=" + email + "&subject=" + subject + "&message=" + message,
                success : function(success){
                    if (success == "success"){
                        formSuccess();
                    }
                }
            });
        }
    });
</script>