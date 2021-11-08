
<div class="card mb-3">
    <img src="https://cdn.pixabay.com/photo/2021/08/13/07/38/stock-6542484__340.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Liste des recettes</h5>
        <p class="card-text">Vous trouverez ici toutes les informations relatives aux recettes de la coopérative</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Libellés</th>
                <th scope="col">Débiteur</th>
                <th scope="col">Montant</th>
                <th scope="col">Operations</th>
            </tr>
            </thead>
            <tbody>
            @foreach($recettes as $recette)
                <tr>
                    <td>{{ $recette->daterec }}</td>
                    <td>{{ $recette->libellerec }}</td>
                    <td>{{ $recette->debiteur }}</td>
                    <td>{{ $recette->montantrec }}</td>
                    <td>

                        <a href="{{ url('recettes/edit5/'.$recette->idrec) }}" class="btn btn-sm btn-warning">Edit</a>

                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>






