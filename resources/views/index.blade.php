<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Intranet</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">

</head>

<body>
    <header class="header">
        <h1><img src="{{ asset('asset/android-chrome-192x192.png') }}"> Intranet</h1>
        <nav>
            <ul>
                <li>
                    <a href="{{ url('/connecte') }}"><img src="{{ asset('asset/connexion.png') }}"> Connexion</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="container">
            <h2> Connexion </h2>
            <p> Pour vous connecter, entrez votre identifiant et mot de passe. </p>
            <fieldset>

       
                    <form action="{{ url('/') }}" method="post">
                        {{ csrf_field() }}
                        <label for="mail">
                            Email :
                        </label>
                        <input type="text" id="email" name="email" placeholder="Votre Mail" :value="__('email')">
                  
                        <label for="psw">
                            Mot de passe :
                        </label>
                        <input type="password" id="password" name="password" placeholder="Votre mot de passe" :value="__('password')">
              
                        <input class="button" type="submit" value=" Connexion">
                    </form>
          
            </fieldset>
        </section>
    </main>
    <footer>
        <p> &copy; Abdulrahman - Projet M2L </p>
    </footer>
</body>

</html>
