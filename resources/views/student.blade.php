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




<div class="row header-container justify-content-center" >
    <div class="header">
        <h1 style="font-size: xxx-large;">MyGesCoop</h1>
    </div>
</div>

@if($layout == 'index')
    
    @include("studentslist")

@elseif($layout == 'create')

<div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-8">

                <div class="card mb-3">
                    <img src="https://images.pexels.com/photos/2382665/pexels-photo-2382665.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Enregistrer ici toutes les informations relatives aux activités de la coopérative</h5>
                        <form action="{{ url('/store1') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Date</label>
                                <input name="dateacti" type="date" class="form-control"  placeholder="Entrez la date">
                            </div>
                            <div class="form-group">
                                <label>Lieu</label>
                                <input name="lieu" type="text" class="form-control"  placeholder="Entrez le lieu de l'activité">
                            </div>

                            
                            <div class="form-group">
                                <label>Heure</label>
                                <input name="heure" type="text" class="form-control"  placeholder="Entrez l'heure de l'activité">
                            </div>
                            
                            <div class="form-group">
                                <label>Description</label>
                                <input name="description" type="text" class="form-control"  placeholder="Entrez la description">
                            </div>
                            
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>

                <div class="card mb-3">
                    <img src="https://cdn.pixabay.com/photo/2015/10/31/17/33/press-1015988__340.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Enregistrer ici toutes les informations relatives aux actualités de la coopérative</h5>
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

                <div class="card mb-3">
                    <img src="https://images.pexels.com/photos/4386366/pexels-photo-4386366.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Enregistrer ici toutes les informations relatives aux dépenses de la coopérative</h5>
                        <form action="{{ url('/store3') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Date</label>
                                <input name="datedep" type="date" class="form-control"  placeholder="Entrez la date">
                            </div>
                            <div class="form-group">
                                <label>Nature</label>
                                <input name="libelledep" type="text" class="form-control"  placeholder="Entrez la nature de la depense">
                            </div>

                            
                            <div class="form-group">
                                <label>Libellés</label>
                                <input name="libelledep" type="text" class="form-control"  placeholder="Entrez la description">
                            </div>

                            <div class="form-group">
                                <label>Créancier</label>
                                <input name="creancier" type="text" class="form-control"  placeholder="Entrez le nom du créancier">
                            </div>
                            
                            <div class="form-group">
                                <label>Montant</label>
                                <input name="montantdep" type="number" class="form-control"  placeholder="Entrez le montant">
                            </div>
                            
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>



                <div class="card mb-3">
                    <img src="https://cdn.pixabay.com/photo/2017/09/14/19/45/partnership-2750197__340.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Enregistrer ici toutes les informations relatives aux personnes ressources de la coopérative</h5>
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

                

                <div class="card mb-3">
                    <img src="https://images.pexels.com/photos/5370036/pexels-photo-5370036.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Enregistrer ici toutes les informations relatives aux recettes de la coopérative</h5>
                        <form action="{{ url('/store5') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Date</label>
                                <input name="daterec" type="date" class="form-control"  placeholder="Entrez la date">
                            </div>
                            <div class="form-group">
                                <label>Libellés</label>
                                <input name="libellerec" type="text" class="form-control"  placeholder="Entrez la nature de la recette">
                            </div>

                            
                            <div class="form-group">
                                <label>Débiteur</label>
                                <input name="debiteur" type="text" class="form-control"  placeholder="Entrez le nom du débiteur">
                            </div>
                            
                            <div class="form-group">
                                <label>Montant</label>
                                <input name="montantrec" type="number" class="form-control"  placeholder="Entrez le montant">
                            </div>
                            
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>

                <div class="card mb-3">
                    <img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Enregistrer ici toutes les informations relatives aux subventions allouées de la coopérative</h5>
                        <form action="{{ url('/store6') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Date</label>
                                <input name="datesubv" type="date" class="form-control"  placeholder="Entrez la date">
                            </div>
                            <div class="form-group">
                                <label>Nature</label>
                                <input name="nature" type="text" class="form-control"  placeholder="Entrez la nature de la subvention">
                            </div>

                            
                            <div class="form-group">
                                <label>Libellés</label>
                                <input name="libellesub" type="text" class="form-control"  placeholder="Entrez la description">
                            </div>
                            
                            <div class="form-group">
                                <label>Montant</label>
                                <input name="montantsub" type="number" class="form-control"  placeholder="Entrez le montant">
                            </div>
                            
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>

                </section>
            </div>
        </div>
    </div>


@elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("studentslist")
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Update informations of student</h5>
                        <form action="{{ url('/update/'.$student->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>CNE</label>
                                <input value="{{ $student->cne }}" name="cne" type="text" class="form-control"  placeholder="Enter cne">
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input value="{{ $student->firstName }}" name="firstName" type="text" class="form-control"  placeholder="Enter the first name">
                            </div>
                            <div class="form-group">
                                <label>second Name</label>
                                <input value="{{ $student->secondName }}" name="secondName" type="text" class="form-control"  placeholder="Enter second name">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input value="{{ $student->age }}" name="age" type="text" class="form-control"  placeholder="Enter the Age">
                            </div>
                            <div class="form-group">
                                <label>Speciality</label>
                                <input value="{{ $student->speciality }}" name="speciality" type="text" class="form-control"  placeholder="Enter Sepeciality">
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