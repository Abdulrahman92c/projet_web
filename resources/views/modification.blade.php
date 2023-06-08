<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Intranet</title>
    <link rel="stylesheet" href="{{asset('css/app3.css')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('favicon/site.webmanifest')}}">

</head>
<body>
  <header class="header">
    <nav>
      <ul class="menu_gauche">
        <li>
          <h1><img src="{{asset('asset/android-chrome-192x192.png')}}">Intranet</h1>
        </li>
      </ul>
      <ul class="menu_droite">
        <li>
          <a href="{{asset('./liste')}}"><img src="{{asset('asset/liste.png')}}" alt="logo de liste">liste</a>
        </li>

        <li class="profilepicture">
          <a href="{{asset ('/modification')}}"><img src="{{asset('asset/profile.jpg')}}" alt="profile"></a>
        </li>
        <li>
          <a href="{{url('/')}}"><img src="{{asset('asset/connexion.png')}}" alt="logo connexion"> Déconnexion</a>
        </li>
      </ul>
    </nav>
  </header>
  <main>
    <section class="container">
        <h2> Modifie ton profil </h2>
        <fieldset>

            <form action="{{asset('./modification')}}" method="post">
                <label for="gender">Civilité</label>
                <select name="gender" id="gender">
                    <option value="">Votre Civilité</option>
                    <option value="man">Homme</option>
                    <option value="woman">Femme</option>
                </select>
                <label for="Lastname">
                    Nom :
                </label>
                <input type="text" id="lastname" name="lastname" placeholder="Nom">
                <label for="Name">
                    Prenom :
                </label>
                <input type="text" id="name" name="name" placeholder="Prénom">
                  <label for="age">
                    Date de naissance :
                </label>
                <input type="date" id="dateofbirth" name="dateofbirth" placeholder="Date de naissance">
                <label for="Phone">
                    Téléphone :
                </label>
                <input type="phone" id="phone" name="phone" placeholder="Numéro de téléphone">
                <label for="country">
                    Pays :
                </label>
                <input type="country" id="pays" name="pays" placeholder="Pays">
                <label for="city">
                    Ville :
                </label>
                <input type="city" id="ville" name="ville" placeholder="Ville">
                <label for="mail">
                    Email :
                </label>
                <input type="text" id="mail" name="mail" placeholder="Mail">
                <label for="psw">
                    Mot de passe :
                </label>
                <input type="password" id="psw" name="psw" placeholder="Mot de passe">
                <label for="psw">
                    Mot de passe :
                </label>
                <input type="password" id="psw" name="psw" placeholder="Confirmation du mot de passe">
                <input class="button" type="submit" value="Modifier mon profil" href="{{url('./modification')}}">
            </form>
        </fieldset>
    </section>
</main>
<footer>
    <p> &copy; Abdulrahman - Projet M2L </p>
</footer>
</body>

</html>