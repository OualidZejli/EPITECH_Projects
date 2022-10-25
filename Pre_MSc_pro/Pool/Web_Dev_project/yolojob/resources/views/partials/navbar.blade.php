<nav>
    <input type="checkbox" id="checkboxid">
    <label for="checkboxid" class="scrollmenu">
        <i class="fa-solid fa-bars"></i>
    </label>
    <a href="{{route('accueil')}}">
        <img src="/img/yolojoblogo.png" alt="yolojob logo" class="logo">
    </a>
    <ul>
        <li><a href="{{route('accueil')}}" class="aresnav">Accueil</a></li>
        <li><a href="{{route('offres.creer')}}" class="aresnav">Créer une nouvelle annonce</a></li>
        <li><a href="{{route('inscription.creer')}}" class="aresnav">Créer votre compte</a></li>
        <li><a href="{{route('login')}}" class="aresnav">Connexion</a></li>
    </ul>
</nav>