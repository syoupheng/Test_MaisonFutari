<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etablissement;
use App\Models\Commentaire;

class EtablissementController extends Controller
{
    public function display_form() 
    {
        return view('AddEtablissement');
    }//

    public function create_etablissement(Request $request)
    {
        $data = $request->validate([
            'NomEtablissement' => 'required|max:255|unique:etablissement,nom',
            'adresse' => 'required|max:255|unique:etablissement,adresse',
            'code_postal' => 'required|max:255',
            'ville' => 'required|max:255',
            'pays' => 'required|max:255',
            'description' => 'required|max:1000',
            'pays' => 'required|max:255',
            'picture' => 'nullable|mimes:jpg,png|max:1000'
        ]);

        $etablissement = new Etablissement();

        $etablissement->nom = $request->get('NomEtablissement');
        $etablissement->adresse = $request->get('adresse');
        $etablissement->code_postal = $request->get('code_postal');
        $etablissement->ville = $request->get('ville');
        $etablissement->pays = $request->get('pays');
        $etablissement->description = $request->get('description');
        
        if ($request->hasFile('picture')) {
            $name_picture = time().'_'.$request->file('picture')->getClientOriginalName();
            $etablissement->picture = $request->file('picture')->storeAs('images', $name_picture);
        }

        $etablissement->save();

        return redirect()->back()->with('message', 'Vous avez ajouté un nouvel établissement !');
    }

    public function display_etabl($id_etabl) 
    {
        $etablissement = new Etablissement();
        $result_etabl = $etablissement->where('id', $id_etabl)->first();

        $commentaires = new Commentaire();
        $result_comm = $commentaires->where('etablissement', $id_etabl)->get();

        return view('FicheEtablissement', ['etablissement' => $result_etabl, 'commentaires' => $result_comm]);
    }

    public function delete_etabl($id_etabl) 
    {
        $etablissement = new Etablissement();
        
        $result = $etablissement->where('id', $id_etabl)->first();
        $result->delete();
        
        return redirect('/home')->with('message', "L'établissement ".$id_etabl." a été supprimé !");
    }
}
