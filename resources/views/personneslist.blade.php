
<div class="card mb-3">
    <img src="https://cdn.pixabay.com/photo/2018/11/29/21/51/social-media-3846597__340.png" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Liste des personnes</h5>
        <p class="card-text">Vous trouverez ici toutes les informations relatives aux personnes ressources de la coopérative</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prénoms</th>
                <th scope="col">Email</th>
                <th scope="col">Sexe</th>
                <th scope="col">Fonction</th>
                <th scope="col">Numero</th>
                <th scope="col">Localisation</th>
                <th scope="col">Entité</th>
                <th scope="col">Operations</th>
            </tr>
            </thead>
            <tbody>
            @foreach($personnes as $personne)
                <tr>
                    <td>{{ $personne->nompers }}</td>
                    <td>{{ $personne->prenomspers }}</td>
                    <td>{{ $personne->email }}</td>
                    <td>{{ $personne->sexe }}</td>
                    <td>{{ $personne->fonction }}</td>
                    <td>{{ $personne->numero }}</td>
                    <td>{{ $personne->localisation }}</td>
                    <td>{{ $personne->entite }}</td>
                    <td>

                        <a href="{{ url('personnes/edit4/'.$personne->idpers) }}" class="btn btn-sm btn-warning">Edit</a>

                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>






