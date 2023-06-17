<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Laurence LICHTENBERGER</title>
        <link rel="stylesheet" href="style.css" />
    </head>

    <body>
        <?php include('header.php'); ?>
        <h1>ddd</h1>
        <div class="bloc_page_contact">
            <h2>Contactez-Nous</h2>
            <form method="POST" action="submit_contact.php" enctype="multipart/form-data">
                <div class="name">
                    <input type="name" id="name" name="name" aria-describedby="name" placeholder="Prénom"/>
                </div>
                <div class="surname">
                    <input type="surname" id="surname" name="surname" aria-describedby="surname" placeholder="Nom"/>
                </div>
                <div class="email">
                    <input type="email" id="email" name="email" aria-describedby="email-help" placeholder="Email"/>
                </div>
                <div class="phone">
                    <input type="phone" id="phone" name="phone" aria-describedby="phone" placeholder="Téléphone"/>
                </div>
                <div class="sujet">
                    <select name="objet" id="objet" placeholder="Sujet">
                        <option value="">Sujet</option>
                        <option value="Droit de la famille">Droit de la famille</option>
                        <option value="Succession">Succession</option>
                        <option value="Mariage, PACS, divorce...">Mariage, PACS, divorce...</option>
                        <option value="Immobilier">Immobilier</option>
                        <option value="Patrimoine">Patrimoine</option>
                        <option value="Transmission">Transmission</option>
                        <option value="Activité professionnelle">Activité professionnelle</option>
                        <option value="Autre...">Autre...</option>
                    </select>
                </div>
                <div class="message">
                    <textarea placeholder="Exprimez-vous" id="message" name="message"></textarea>
                </div>
                <button type="submit" class="bouton_send"><a href="contact.php"  class="a_send">Envoyer</a></button>
            </form>
        </div>
        <?php include('footer.php'); ?>    
    </body>
</html>