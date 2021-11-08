<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('/')}}"><img src="../public/img/logo.png" alt="MyGesCoop" style="width:50%; height:15%"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav" style="font-family:cursive; font-size: larger;">
            <a class="nav-item nav-link active" href="{{url('/')}}">Accueil <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link " href="{{url('/create')}}">Nouveau</a>
            <a class="nav-item nav-link active" href="{{url('/activites')}}">Activités</a>
            <a class="nav-item nav-link active" href="{{url('/actualites')}}">Actualités</a>
            <a class="nav-item nav-link active" href="{{url('/depenses')}}">Dépenses</a>
            <a class="nav-item nav-link active" href="{{url('/personnes')}}">Personnes</a>
            <a class="nav-item nav-link active" href="{{url('/recettes')}}">Recettes</a>
            <a class="nav-item nav-link active" href="{{url('/subventions')}}">Subventions</a>

        </div>
    </div>
</nav>