@extends('layouts.app')

@section('content')
<div id="flex-container" class="etabl-flex-wrapper">
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    @if ($etablissements)
        @foreach ($etablissements as $etablissement)
            <a href="{{ \Illuminate\Support\Facades\URL::route('display_etabl', ['id_etabl' => $etablissement->id]) }}" class="flex-wrapper frame-etabl">
                <div class="textbox">
                    <h2>{{ $etablissement->nom }}</h2>
                    <p><b>Adresse : </b>{{ $etablissement->adresse }}</p>
                    <p><b>Code postal : </b>{{ $etablissement->code_postal }}</p>
                    <p><b>Ville : </b>{{ $etablissement->ville }}</p>
                    <p><b>Pays : </b>{{ $etablissement->pays }}</p>
                    <p>Ajouté le {{ $etablissement->created_at->format('d/m/Y') }}</p>
                </div>
                <div class="picture-frame">
                    <img class="photo-etabl" src="{{ $etablissement->picture }}" alt="Photo non disponible">
                </div>
            </a>
        @endforeach
    @endif
</div>
@endsection
