<div class="card mb-3">
    <img src="https://cdn.pixabay.com/photo/2019/06/14/08/02/figures-4273081__340.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Activités </h5>
        <p class="card-text">Vous trouverez ici les activités de la coopérative </p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Lieu</th>
                <th scope="col">Heure</th>
                <th scope="col">Description</th>
                <th scope="col">Operations</th>

            </tr>
            </thead>
            <tbody>
            @foreach($activites as $activite)
                <tr>
                    <td>{{ $activite->dateacti }}</td>
                    <td>{{ $activite->lieu }}</td>
                    <td>{{ $activite->heure }}</td>
                    <td>{{ $activite->description }}</td>
                    <td>
                        <a href="{{ url('activites/edit1/'.$activite->idacti) }}" class="btn btn-sm btn-warning">Modifier</a>

                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
