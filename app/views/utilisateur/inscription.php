<div id="popup2" class="overlay w-100">
    <div class="popup">
        <h2 style="text-align: center">Inscription</h2>
        <div class="content-popup">
            <form action="?controller=utilisateur&action=created" method="post">
                <div class="mb-3">
                    <label for="lastname" class="form-label">Nom&nbsp;:</label>
                    <input id="lastname" name="nom" class="form-control" type="text" placeholder="Entrer votre nom de famille"
                           required>
                    <p class="error"><?php echo (isset($errorNom))?$errorNom:"";?></p>
                </div>
                <div class="mb-3">
                    <label for="firstname" class="form-label">Prénom&nbsp;:</label>
                    <input id="firstname" name="prenom" class="form-control" type="text" placeholder="Entrer votre prénom"
                           required>
                    <p class="error"><?php echo (isset($errorPrenom))?$errorPrenom:"";?></p>
                </div>

                <div class="mb-3">
                    <label for="mm" class="form-label">Adresse email&nbsp;:</label>
                    <input id="mm" name="adresseEmail" class="form-control" type="email" placeholder="Entrer votre mail" required>
                    <p class="error"><?php echo (isset($errorAdresseEmail))?$errorAdresseEmail:"";?></p>
                </div>

                <div class="mb-3">
                    <label for="pass" class="form-label">Mot de passe&nbsp;:</label>
                    <input id="pass" name="motDePasse" class="form-control" type="password" placeholder="Entrer le mot de passe"
                           required>
                    <label for="pass2" class="form-label"></label>
                    <input id="pass2" name="motDePasseConfirmation" class="form-control" type="password" placeholder="Confirmation du mot de passe"
                           required>
                    <p class="error"><?php echo (isset($errorMotDepasse))?$errorMotDepasse:"";?></p>

                </div>

                <input type="submit" class="btn btn-primary" value="Envoyer">
            </form>
        </div>
        <div class="d-flex justify-content-center"><a href="?controller=utilisateur&action=connexion">Déjà inscrit&nbsp;?</a></div>
    </div>
</div>