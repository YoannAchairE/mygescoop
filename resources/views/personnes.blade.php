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
                    @include("personneslist")
                </section>
            </div>
        </div>
    </div>
@elseif($layout == 'create')
    <div class="container-fluid mt-4 " id="create-form">
        <div class="row">
            <section class="col-md-7">
                @include("personneslist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://cdn.pixabay.com/photo/2017/09/14/19/45/partnership-2750197__340.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Vous trouverez ici toutes les informations relatives aux dépenses de la coopérative</h5>
                        <form action="{{ url('/store4') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Nom</label>
                                <input name="nompers" type="text" class="form-control"  placeholder="Entrez votre nom">
                            </div>
                            <div class="form-group">
                                <label>Prénoms</label>
                                <input name="prenomspers" type="text" class="form-control"  placeholder="Entrez vos prénoms">
                            </div>
                            
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" type="email" class="form-control"  placeholder="Entrez votre email">
                            </div>
                            
                            <div class="form-group">
                                <p>Sexe</p>
                                <label>Homme</label>
                                <input name="sexe" type="radio" id="homme" value="homme" >
                            
                                <br><label>Femme</label>
                                <input name="sexe" type="radio" id="femme" value="femme" >
                            </div>
                            </div>
                            
                            <div class="form-group">
                                <label>Fonction</label>
                                <input name="fonction" type="text" class="form-control"  placeholder="Entrez votre Fonction">
                            </div>
                            <div class="form-group">
                                <label>Numero</label>
                                <input name="numero" type="Tel" class="form-control" placeholder="Entrez votre numero">
                            </div>
                            <div class="form-group">
                                <label>Localisation</label>
                                <input name="localisation" type="text" class="form-control"  placeholder="Entrez votre domicile">
                            </div>
                            <div class="form-group">
                                <label>Entité</label>
                                <input name="entite" type="text" class="form-control"  placeholder="Entrez le nom de votre entité">
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
                @include("personneslist")
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("personneslist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://cdn.pixabay.com/photo/2017/09/14/19/45/partnership-2750197__340.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Modifier les informations relatives aux personnes</h5>
                        <form action="{{ url('personnes/update4/'.$personne->idpers) }}" method="post">
                            @csrf
                            <label>Nom</label>
                                <input value="{{ $personne->nompers}}" name="nompers" type="text" class="form-control"  placeholder="Entrez votre nom">
                            </div>
                            <div class="form-group">
                                <label>Prénoms</label>
                                <input value="{{ $personne->prenomspers}}" name="prenomspers" type="text" class="form-control"  placeholder="Entrez vos prénoms">
                            </div>
                            
                            <div class="form-group">
                                <label>Email</label>
                                <input value="{{ $personne->email}}" name="email" type="email" class="form-control"  placeholder="Entrez votre email">
                            </div>
                            
                            <div class="form-group">
                                <p>Sexe</p>
                                <label>Homme</label>
                                <input type="radio" name="sexe" id="homme" value="homme" {{ $personne->sexe == "homme" ? 'checked' : ''}}>
                            
                                <br><label>Femme</label>
                                <input name="sexe" type="radio" id="femme" value="femme" {{ $personne->sexe == "femme" ? 'checked' : ''}}">
                            </div>
                            </div>
                            
                            <div class="form-group">
                                <label>Fonction</label>
                                <input value="{{ $personne->fonction}}" name="fonction" type="text" class="form-control"  placeholder="Entrez votre Fonction">
                            </div>
                            <div class="form-group">
                                <label>Numero</label>
                                <input value="{{ $personne->numero}}" name="numero" type="Tel" class="form-control" placeholder="Entrez votre numero">
                            </div>
                            <div class="form-group">
                                <label>Localisation</label>
                                <input value="{{ $personne->localisation}}" name="localisation" type="text" class="form-control"  placeholder="Entrez votre domicile">
                            </div>
                            <div class="form-group">
                                <label>Entité</label>
                                <input  value="{{ $personne->entite}}" name="entite" type="text" class="form-control"  placeholder="Entrez le nom de votre entité">
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