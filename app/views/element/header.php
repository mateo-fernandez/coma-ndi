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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Langue <i class="fas fa-language"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="?a=ch-lang&lang=fr">🇫🇷 Français</a></li>
                        <li><a class="dropdown-item" href="?a=ch-lang&lang=fr">🇬🇧 English</a></li>
                        <li><a class="dropdown-item" href="?a=ch-lang&lang=es">🇪🇸 Spanish</a></li>
                        <li><a class="dropdown-item" href="?a=ch-lang&lang=ar">🇩🇪 Deutsch</a></li>
                    </ul>
                </li>
                <?php if ($_SESSION["isLogged"] == true) { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Compte <i class="fas fa-user-circle"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Voir le profil</a></li>
                            <li><a class="dropdown-item" href="#">Modifier le profil</a></li>
                            <li><a class="dropdown-item" href="?action=disconnect&controller=user">Se déconnecter</a></li>
                        </ul>
                    </li>
                <?php } else if ($_SESSION["isLogged"] == false) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=login&controller=user">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=register&controller=user">S'inscrire</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script>
    function addDarkmodeWidget() {
        new Darkmode().showWidget();
    }
    window.addEventListener('load', addDarkmodeWidget);

    const options = {
        bottom: '64px', // default: '32px'
        right: 'unset', // default: '32px'
        left: '32px', // default: 'unset'
        time: '0.5s', // default: '0.3s'
        mixColor: '#fff', // default: '#fff'
        backgroundColor: '#fff',  // default: '#fff'
        buttonColorDark: '#370028',  // default: '#100f2c'
        buttonColorLight: '#fff', // default: '#fff'
        saveInCookies: true, // default: true,
        label: '🌓', // default: ''
        autoMatchOsTheme: true // default: true
    }

    const darkmod = new Darkmode(options);
    darkmod.showWidget();
</script>