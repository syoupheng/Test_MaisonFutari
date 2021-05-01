<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commentaire;
use Illuminate\Support\Facades\Auth;

class CommentaireController extends Controller
{
    public function display_form_comm(Request $request) 
    {
        $id_etabl = $request->get('id_etabl');

        return view('CreateCommentaire', ['id_etabl' => $id_etabl]);
    }

    public function create_comm(Request $request) 
    {
        //dd($request);
        $data = $request->validate([
            'note' => 'required|integer|between:1,5',
            'commentaire' => 'required|max:1000',
            'etablissement' => 'required|exists:etablissement,id'
        ]);
        //dd($request);
        $commentaire = new Commentaire();

        $id_etabl = $request->get('etablissement');

        $commentaire->note = $request->get('note');
        $commentaire->commentaire = $request->get('commentaire');
        $commentaire->etablissement = $id_etabl;
        $commentaire->auteur = Auth::user()->id;
        
        $commentaire->save();

        return redirect()->route('display_etabl', ['id_etabl' => $id_etabl])->with('message', "Votre commentaire a été ajouté");;
    }

    public function delete_comm($id_comm) 
    {
        $commentaire = new Commentaire();
        
        $result = $commentaire->where('id', $id_comm)->first();
        $id_etabl = $result->etablissement_rel->id;
        $result->delete();
        
        return redirect()->route('display_etabl', ['id_etabl' => $id_etabl])->with('message', "Le commentaire a été supprimé");;
    }
}
