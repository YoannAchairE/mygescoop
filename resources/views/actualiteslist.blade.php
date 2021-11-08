
<div class="card mb-3">
    <img src="https://image.freepik.com/free-vector/male-news-reporter_1308-45933.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Liste des actualités</h5>
        <p class="card-text">Vous trouverez ici toutes les news de la coopérative</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Titre</th>
                <th scope="col">Article</th>
                <th scope="col">Operations</th>
            </tr>
            </thead>
            <tbody>
            @foreach($actualites as $actualite)
                <tr>
                    <td>{{ $actualite->dateactu }}</td>
                    <td>{{ $actualite->titre }}</td>
                    <td>{{ $actualite->article }}</td>
                    <td>

                        <a href="{{ url('actualites/edit2/'.$actualite->idactu) }}" class="btn btn-sm btn-warning">Edit</a>

                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>






