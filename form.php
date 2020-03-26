<?php

$errors =[];

if(empty($_POST['name'])) {
    $errors[] = 'Champ requis';

    //var_dump($errors);
}


?>


<section class="endofpage">
    <h2 id="contact">Me contacter</h2>
    <div class="parchemin_content">
        <div class="content_footer">
            <form action="formulaire.php" method="post">
                <div class="formulaire">
                    <div>
                        <label  for="name">Votre nom</label>
                        <input type="text" id="name" placeholder="Nom">
                    </div>
                    <div>
                        <label  for="mail_adress">Votre adresse mail</label>
                        <input type="email" id="mail_adress" placeholder="xx@exemple.com">
                    </div>
                    <div>
                        <label  for="compagny">Votre entreprise</label>
                        <input type="text" id="compagny" placeholder="Exemple & Co">
                    </div>
                    <div>
                        <label  for="mobile">Votre numéro de téléphone</label>
                        <input type="text" id="mobile" placeholder="06 xx xx xx xx">
                    </div>
                    <div>
                        <label  for="message_user"Votre message</label>
                        <textarea id="message_user" placeholder="Votre message"></textarea>
                    </div>
                    <input class="button" type="button" value="Envoi de votre demande">
                </div>

            </form>

        </div>
    </div>
</section>

