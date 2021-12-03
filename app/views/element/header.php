<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="assets/img/ship.svg" alt="logo site" style="max-width: 60px">
            CoMa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php require File::getApp(array("views", "element", "searchbar.php")); ?>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <div class="nav-link form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="switchTheme" />
                        <label for="switchTheme"><i class="fas fa-moon"></i></label>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Changer la langue <i class="fas fa-language"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="?a=ch-lang&lang=fr">🇫🇷 Français</a></li>
                        <li><a class="dropdown-item" href="?a=ch-lang&lang=fr">🇬🇧 English</a></li>
                        <li><a class="dropdown-item" href="?a=ch-lang&lang=es">🇪🇸 Spanish</a></li>
                        <li><a class="dropdown-item" href="?a=ch-lang&lang=ar">🇩🇪 Deutsch</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Compte <i class="fas fa-user-circle"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="?a=profile&c=user">Voir le profil</a></li>
                        <li><a class="dropdown-item" href="?a=modify&c=user">Modifier le profil</a></li>
                        <li><a class="dropdown-item" href="?a=deconnect&c=user">Se déconnecter</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
