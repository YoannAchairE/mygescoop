<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MyGesCoop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            *{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
.banner{
    width:100%;
    height:100vh;
    background-image: linear-gradient(rgba(30, 45, 87, 0.75),rgba(107, 10, 10, 0.75)), url("https://cdn.pixabay.com/photo/2017/08/02/00/49/people-2569234__340.jpg");
    background-size: cover;
    background-position: center;
}
.navbar{
    width:100%;
    margin: 0;
    padding: 35px 0;
    display: flex;
    align-items:center;
    justify-content:space-between;
}
.logo{
    width: 120px;
    cursor: pointer;
    margin-left: 35px;
}
.navbar ul li{
    list-style: none;
    display: inline-block;
    margin: 0 20px;
    position: relative; 
}
.navbar ul li a{
    text-decoration:none;
    color:aqua;
    text-transform: uppercase;
}
.navbar ul li::after{
    content: '';
    height: 3px;
    width: 0;
    background: red;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.5s;
}
.navbar ul li:hover::after{
    width: 100%;
}
.content{
    width: 100%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    text-align: center;
    color: #fff;
}
.content h1{
    font-size: 70px;
    margin-top: 80px;
    color:goldenrod
}
.content p{
    margin: 20px auto;
    font-weight: 100;
    line-height: 25px;
    color:yellowgreen
}
button{
    width: 200px;
    padding: 15px 0;
    text-align: center;
    margin: 20px 10px;
    border-radius: 25px;
    font-weight: bold;
    border: 2px solid #009688;
    background:transparent;
    color:dodgerblue;
    cursor:pointer;
    position: relative;
    overflow: hidden;
}
span{
    background: #009688;
    height: 100%;
    scrollbar-width: 100%;
    border-radius: 25px;
    left: 0;
    bottom: 0;
    z-index: -1;
    transition: 0.5s;
}
button:hover span{
    width: 100%;
}
button:hover{
    border: 2px solid tomato;
    color: tomato;
}
a{
    text-decoration: none;
    font-size:larger;
}
        </style>
    </head>
    <body>
        

        <div class="banner">
        <div class="navbar">
            <img src="../public/img/mygescoop.png" class=logo>
            <!--<ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Actualités</a></li>
                <li><a href="#">Nos partenaires</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="index2.php">Se connecter</a></li>
            </ul>-->
        </div>
        <div class="content">
            <h1>Bienvenue sur votre plateforme<br> MyGesCoop</h1>
            <p style="font-size:larger;">Pour vous aider dans la gestion et le développement de votre coopérative</p>
            <div >
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                    <button type="button"><a href="{{ route('login') }}">Connexion</a></button>
                        @if (Route::has('register'))
                        <button type="button"><a href="{{ route('register') }}">Inscription</a></button>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
        </div>
        
    </div>
    
    </div>
    </body>
</html>
