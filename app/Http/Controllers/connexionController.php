<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class connexionController extends Controller
{
    public function traiterFormulaire(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            // Ajoutez les autres règles de validation selon vos besoins
        ]);

        // Créer une nouvelle instance du modèle
        $modele = new User();

        // Affecter les valeurs des champs du formulaire aux propriétés du modèle
        $modele->email = $request->input('email');
        $modele->password = $request->input('password');
        // Affectez les autres champs selon vos besoins

        // Enregistrer le modèle dans la base de données
        $modele->save();

        // Rediriger vers une autre page ou effectuer d'autres actions
        return redirect()->route('/');
    }
}


