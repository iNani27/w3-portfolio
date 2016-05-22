<?php
if (isset($_POST['letitre'])) {
    $nom = strip_tags(trim($_POST['nom']));
    $prenom = strip_tags(trim($_POST['prenom']));
    $name = $nom . ' ' . $prenom;
    $mail = strip_tags(trim($_POST['email']));
    $letitre = strip_tags(trim($_POST['letitre']));
    $lemessage = strip_tags(trim($_POST['lemessage']));
    $mailwebdvlpr = "webdeveloperinani@gmail.com";
    $entete = 'From: ' . $mail . "\r\n" . 'Reply-To: ' . $mail . "\r\n" . 'X-mailer: PHP/' . phpversion();
    mail($mailwebdvlpr, $letitre, $lemessage, $entete, $name);


    $affiche = '<h2 style="color:darkcyan;">Message bien envoy&eacute;, merci</h2>';
}
?>

<!-- Modal form contact -->
<button onclick="document.getElementById('me').style.display = 'block'" class="w3-btn w3-hover-teal">CONTACT</button>
<div id="me" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
        <header class="w3-container w3-teal"> 
            <span onclick="document.getElementById('me').style.display = 'none'" class="w3-closebtn">&times;</span>
            <h2>Contact</h2>
        </header>
        <div class="w3-container">
            <?php
            /* if (isset($affiche)) {
              echo $affiche;
              } else { */
            ?>
            <div class="w3-margin">
                <form name="contact" method="post" action="">

                    <input class="w3-input" type="text" name="prenom" id="prenom" placeholder="Votre prénom" required />
                    <label class="w3-label w3-validate w3-tiny" for="prenom">Pr&eacute;nom</label>


                    <p></p>
                    <input class="w3-input" type="text" name="nom" id="nom" placeholder="Votre nom de famille" required />
                    <label class="w3-label w3-validate w3-tiny" for="nom">Nom</label>
                    <p></p>
                    <input class="w3-input" type="email" name="email" id="email" placeholder="Votre adresse mail"  required />
                    <label class="w3-label w3-validate w3-tiny" for="email">e-Mail</label>
                    <p></p>
                    <input class="w3-input" name="letitre" type="text" placeholder="L'objet de votre message" required />
                    <label class="w3-label w3-validate w3-tiny" for="letitre">Objet</label><br />
                    <p></p>
                    <textarea class="w3-input" style="width:100%;" name="lemessage" placeholder="Votre message" required></textarea><label class="w3-label w3-validate w3-tiny" for="lemessage"> Message</label>

                    <p><input class="w3-btn w3-teal" style="width:100%;" type="submit" value="Envoyer"></p>

                </form>
            </div>
            <?php
            /*  } */
            ?> 

        </div>
    </div>
</div>
<!-- Modal form contact -->
