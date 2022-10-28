<nav class="navbar">
    <div class="max-width">
        <div class="logo"><a href="/">BURI<span>DA</span></a></div>
        <ul class="menu">
            <li><a href="/">Accueil</a></li>
            <li><a href="{{ route('rdvs.liste')}}">Prise de rendez-vous</a></li>
            <li><a href="{{ route('cellules.liste')}}">cellule</a></li>
            <li><a href="{{ route('bu.liste')}}">bureau</a></li>
            <li><a href="{{ route('documentalistes.liste')}}">documentaliste</a></li>
        </ul>
        <div class="menu-btn">
           <i class="fas fa-bars"></i>
        </div>
    </div>
</nav>