<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voiture;
class voitureController extends Controller
{

    public function index()
    {
        $voitures = Voiture::all();
        return view('listeVoiture', ['voitures' => $voitures]);
    }

    public function getById($marque, $modele, $annee, $id)
    {
        $voiture = Voiture::find($id);

        if (!$voiture) {
            abort(404, 'Voiture non trouvée');
        }
        $verif_marque = trim(strtolower($voiture->marque)) != trim(strtolower($marque));
        $verif_modele = trim(strtolower($voiture->modele)) != trim(strtolower($modele));
        $verif_annee = trim(strtolower($voiture->annee)) != trim(strtolower($annee));

        if ( $verif_annee == true || $verif_modele == true || $verif_marque == true) {
            abort(404, 'Voiture non trouvée diso');
        }

        return view('detailVoiture', ['voiture' => $voiture]);
    }

}
