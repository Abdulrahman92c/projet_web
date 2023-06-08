<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Intranet</title>
    <link rel="stylesheet" href="{{ asset('css/app2.css') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/public/favicon/site.webmanifest') }}">

</head>

<body>
    <header class="header">
        <nav>
            <ul class="menu_gauche">
                <li>
                    <h1><img src="{{ asset('asset/android-chrome-192x192.png') }}">Intranet</h1>
                </li>
            </ul>
            <ul class="menu_droite">
                <li>
                    <a href="{{ url('/liste') }}"><img src="{{ asset('asset/liste.png') }}"
                            alt="logo de liste">liste</a>
                </li>

                <li class="profilepicture">
                    <a href="{{ asset('./modification') }}"><img src="{{ asset('asset/profile.jpg') }}"
                            alt="profile"></a>
                </li>
                <li>
                    <a href="{{ url('/') }}"><img src="{{ asset('asset/connexion.png') }}" alt="logo connexion">
                        Déconnexion</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h1>Bienvenue sur l'intranet</h1>
            <p>La plate-forme de l'entreprise qui vous permet de retrouver tout vos collaborateurs</p>
            <h2>Avez-vous dit bonjour à :</h2>
            {{-- @php 
            echo "<p>",Auth::password(),"</p>"
            @endphp --}}
        </section>

        <section class="carte">
            <figure>
                <img class="profilcarte" src="{{ asset('asset/profile.jpg') }}" alt="image profile">
                <figcaption>
                    <h3>Chahdi Abdulrahman</h3>
                    <p>Gennevilliers</p>
                    <ul>
                        <li> <img src="{{ asset('asset/mail.png') }}">
                            <p>chahdiabdulrahman@gmail.com</p>
                        </li>
                        <li> <img src="{{ asset('asset/phone.png') }}">
                            <p>06-14-42-19-18</p>
                        </li>
                        <li> <img src="{{ asset('asset/gateau-danniversaire.png') }}">
                            <p>Anniversaire : 07 janvier</p>
                        </li>
                    </ul>

                </figcaption>
            </figure>
        </section>
        <div class="button">
            <a href="{{ url('./connecte') }}">Dites bonjour à d'autres collaborateurs</a>
        </div>
    </main>
    </main>
    <footer>
        <p> &copy; Abdulrahman - Projet M2L </p>
    </footer>
</body>

</html>
