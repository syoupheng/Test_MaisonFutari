@extends('layouts.app')

@section('content')
<div class="form-flex-wrapper">
    <form enctype="multipart/form-data" id="form_crea_entreprise" class="form-norm" action="{{ action([App\Http\Controllers\EtablissementController::class, 'create_etablissement']) }}" method="POST">
        {{ csrf_field() }}
        <h2 id="title-add-etabl">Ajoutez un établissement</h2>
        <label for="NomEtablissement">Nom de l'établissement</label>
        <input type="text" name="NomEtablissement" required><br><br>
        <label for="adresse">N° et nom de la voie</label>
        <input type="text" name="adresse" required><br><br>
        <label for="code_postal">Code postal</label>
        <input type="text" name="code_postal" required><br><br>
        <label for="ville">Ville</label>
        <input type="text" name="ville" required><br><br>
        <label for="pays">Pays</label>
        <input type="text" name="pays" required><br><br>
        <label for="description">Description</label>
        <textarea name="description"></textarea><br><br><br>
        <label for="picture">Choisissez une image : </label>
        <input type="file" id="photo_upload" name="picture" accept="image/png, image/jpeg">
        <div id="submit-div" class="flex-wrapper">
            <input type="submit" id="submit" value="Ajouter">
        </div>
    </form>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif
</div>
@endsection