<div class="card mb-3">
    <img src="https://cdn.pixabay.com/photo/2015/10/31/11/59/financial-equalization-1015294__340.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Subventions </h5>
        <p class="card-text">Vous trouverez ici les subventions allouées à la coopérative </p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Nature</th>
                <th scope="col">Libellés</th>
                <th scope="col">Montant</th>
                <th scope="col">Operations</th>

            </tr>
            </thead>
            <tbody>
            @foreach($subventions as $subvention)
                <tr>
                    <td>{{ $subvention->datesubv }}</td>
                    <td>{{ $subvention->nature }}</td>
                    <td>{{ $subvention->libellesub }}</td>
                    <td>{{ $subvention->montantsub }}</td>
                    <td>
                        <a href="{{ url('subventions/edit6/'.$subvention->idsub) }}" class="btn btn-sm btn-warning">Modifier</a>

                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
