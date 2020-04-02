<?php

$nameErr = $emailErr = $telErr = $textErr = "";
$name = $email = $tel = $text = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["user_name"])) {
        $nameErr = "Veuillez saisir votre nom";
    } else {
        $name = test_input($_POST["user_name"]);
    }

    if (empty($_POST["user_email"])) {
        $emailErr = "Veuillez saisir votre adresse mail";
    } else {
        $email = test_input($_POST["user_email"]);
    }

    if (empty($_POST["user_tel"])) {
        $telErr = "Veuillez saisir votre numéro de téléphone";
    } else {
        $tel = test_input($_POST["user_tel"]);
    }

    if (empty($_POST["user_text"])) {
        $textErr = "Veuillez saisir votre message";
    } else {
        $text = test_input($_POST["user_text"]);
    }

}

if (empty($nameErr) && empty($emailErr) && empty($telErr) && empty($textErr)){
    $valid = "Votre message a bien été envoyé";
    $nameErr = $emailErr = $telErr = $textErr = "";
    $name = $email = $tel = $text = "";
}

?>



<section class="endofpage">
    <h2 id="contact">Me contacter</h2>

    <!-- <div class="content_footer"> -->
         <form action="" method="post">
             <div class="formulaire">
                 <div class="validform">
<p> <?php// echo $valid ?></p>
                 </div>
                 <div>
                     <label for="nom">Votre nom :</label>
                     <input type="text" id="nom" name="user_name" value="<?php echo $name ?>" placeholder="John Doe" />
                     <p><?php echo $nameErr; ?></p>
                 </div>
                 <div>
                     <label for="courriel">Votre adresse mail :</label>
                     <input type="email" id="courriel" name="user_email" value="<?php echo $email ?>"  placeholder="xx@exemplefr" />
                     <p><?php echo $emailErr; ?></p>
                 </div>
                 <div>
                     <label for="tel">Votre numéro de téléphone :</label>
                     <input type="text" id="tel" name="user_tel" value="<?php echo $tel ?>"   placeholder="06/07...."  />
                     <p><?php echo $telErr; ?></p>
                 </div>
                 <div>
                     <label for="message">Votre message :</label>
                     <textarea id="message" name="user_text" value="<?php echo $text ?>" ></textarea>
                     <p><?php echo $textErr; ?></p>
                 </div>

                 <div class="button">
                     <button type="submit">Envoyer !</button>
                 </div>
             </div>

         </form>

</section>

