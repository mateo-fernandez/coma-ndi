<form action="/" method="post" class="w-75">
    <div class="mb-3">
        <label for="firstname" class="form_label">Nom : </label>
        <input type="text" class="form-control" id="fname" name="user_fname">
    </div>

    <div class="mb-3">
        <label for="lastname" class="form_label">Prénom : </label>
        <input type="text" class="form-control" id="lname" name="user_lname">
    </div>

    <div class="mb-3">
        <label for="mail" class="form_label">E-mail : </label>
        <input type="email" class="form-control" id="mail" name="user_mail" placeholder="name@example.com">
    </div>

    <div class="mb-3">
        <label for="pass" class="form_label">Mot de passe (8 caractères minimum) : </label>
        <input type="password" class="form-control" id="pass" name="passeword" minlength="8" required>
    </div>

    <div>
        <input type="submit" value="valider"/>
    </div>
</form>