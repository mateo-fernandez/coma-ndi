<div class="w-100">
    <h2 style="text-align: center">Connexion</h2>
    <div class="content-popup">
        <form action="?controller=user&action=connected" method="post">
            <div class="mb-3">
                <label for="mail-login" class="form-label">E-mail&nbsp;:</label>
                <input id="mail-login" name="adresseEmail" class="form-control" type="text"
                       placeholder="jean-michel34@example.com" required>
            </div>
            <div class="mb-3">
                <label for="password-login" class="form-label">Mot de passe&nbsp;:</label>
                <input id="password-login" name="motDePasse" class="form-control" type="password"
                       placeholder="********" required>
            </div>
            <input type="submit" class="btn btn-primary" value="Login">
        </form>
    </div>
    <div class="d-flex justify-content-center mb-3 mt-3">
        <a href="?controller=user&action=register">Pas encore inscrit&nbsp;?</a>
    </div>
</div>