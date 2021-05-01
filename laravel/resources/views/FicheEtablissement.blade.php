@extends('layouts.app')

@section('content')
<div id="flex-container" class="etabl-flex-wrapper">
    @if ($etablissement)
        <div id="flex-container-etabl" class="flex-wrapper">
            <div class="textbox">
                <h2>{{ $etablissement->nom }}</h2>
                <p>{{ $etablissement->adresse }}</p>
                <p>{{ $etablissement->code_postal }}</p>
                <p>{{ $etablissement->ville }}</p>
                <p>{{ $etablissement->description }}</p>
                <p>Ajouté le {{ $etablissement->created_at->format('d/m/Y') }}</p>
            </div>
            <div class="picture-frame">
                <img class="photo-etabl" src="/{{ $etablissement->picture }}" alt="Photo non disponible">
            </div>
        </div>
    @endif
    <div class="flex-wrapper">
        <div class="project-flex-wrapper">
            <form class="" action="{{ action([App\Http\Controllers\EtablissementController::class, 'delete_etabl'], ['id_etabl' => $etablissement->id]) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <input type="submit" id="submit-delete" value="Supprimer cet établissement">
            </form>
        </div>
    </div>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="project-flex-wrapper">
        <form class="" action="{{ route('create-comm-form') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id_etabl" value="{{ $etablissement->id }}">
            <input type="submit" id="submit-comm" value="Donnez votre avis">
        </form>
    </div>
    <div id="flex-container" class="etabl-flex-wrapper">
        @if ($commentaires)
            <h4>Avis ({{ sizeof($commentaires) }})</h4>
            @foreach ($commentaires as $commentaire)
                    <div class="frame-comm flex-wrapper">
                        <div class="textbox">
                            <h4>Avis publié le : {{ $commentaire->created_at->format('d/m/Y') }} par {{ $commentaire->auteur_rel->name }}</h4>
                            <p class="note-comm">Note : {{ $commentaire->note }}/5</p>
                            <div>{{ $commentaire->commentaire }}</div>
                        </div>
                        <div>
                            <form class="" action="{{ action([App\Http\Controllers\CommentaireController::class, 'delete_comm'], ['id_comm' => $commentaire->id]) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input type="submit" id="submit" value="Supprimer">
                            </form>
                        </div>
                    </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
