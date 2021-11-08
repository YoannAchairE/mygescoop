<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>MyGesCoop</title>
</head>
<body>
@include("navbar")




<div class="row header-container justify-content-center">
    <div class="header">
        <h1>MyGesCoop</h1>
    </div>
</div>

@if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-8">
                    @include("actualiteslist")
                </section>
            </div>
        </div>
    </div>
@elseif($layout == 'create')
    <div class="container-fluid mt-4 " id="create-form">
        <div class="row">
            <section class="col-md-7">
                @include("actualiteslist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Vous trouverez ici toutes les informations relatives aux actualités de la coopérative</h5>
                        <form action="{{ url('/store2') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Date</label>
                                <input name="dateactu" type="date" class="form-control"  placeholder="Entrez la date">
                            </div>
                            <div class="form-group">
                                <label>Titre</label>
                                <input name="titre" type="text" class="form-control"  placeholder="Entrez le titre de l'article">
                            </div>

                            
                            <div class="form-group">
                                <label>Article</label>
                                <input name="article" type="text" class="form-control"  placeholder="Redigez l'article">
                            </div>
                            
                            
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("actualiteslist")
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'edit2')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("actualiteslist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Modifier les informations relatives aux actualites</h5>
                        <form action="{{ url('actualites/update2/'.$actualite->idactu) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Date</label>
                                <input value="{{ $actualite->dateactu }}" name="dateactu" type="date" class="form-control"  placeholder="Entrez la date">
                            </div>
                            <div class="form-group">
                                <label>Titre</label>
                                <input value="{{ $actualite->titre }}" name="titre" type="text" class="form-control"  placeholder="Entrez le titre de l'article">
                            </div>

                            
                            <div class="form-group">
                                <label>Article</label>
                                <input value="{{ $actualite->article }}" name="article" type="text" class="form-control"  placeholder="Redigez l'article">
                            </div>
                            

                            <input type="submit" class="btn btn-info" value="Update">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endif

<footer></footer>
    <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>