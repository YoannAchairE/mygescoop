
<div class="card mb-3">
    <img src="https://cdn.pixabay.com/photo/2015/10/31/08/50/coins-1015125__340.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Liste des dépenses</h5>
        <p class="card-text">Vous trouverez ici toutes les informations relatives aux dépenses de la coopérative</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Libellés</th>
                <th scope="col">Créancier</th>
                <th scope="col">Montant</th>
                <th scope="col">Operations</th>
            </tr>
            </thead>
            <tbody>
            @foreach($depenses as $depense)
                <tr>
                    <td>{{ $depense->datedep }}</td>
                    <td>{{ $depense->libelledep }}</td>
                    <td>{{ $depense->creancier }}</td>
                    <td>{{ $depense->montantdep }}</td>
                    <td>

                        <a href="{{ url('depenses/edit3/'.$depense->iddep) }}" class="btn btn-sm btn-warning">Edit</a>

                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>






