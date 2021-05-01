@extends('layouts.app')

@section('content')
<div class="form-flex-wrapper">
    <form class="form-norm" id="form_crea_commentaire" action="{{ \Illuminate\Support\Facades\URL::route('create-comm') }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="etablissement" value="{{ $id_etabl }}" required>
        <label for="note">Attribuez une note</label>
        <div class="stars">
            <input class="star star-5" id="star-5" type="radio" name="note" value="5"/>
            <label class="star star-5" for="star-5"></label>
            <input class="star star-4" id="star-4" type="radio" name="note" value="4"/>
            <label class="star star-4" for="star-4"></label>
            <input class="star star-3" id="star-3" type="radio" name="note" value="3"/>
            <label class="star star-3" for="star-3"></label>
            <input class="star star-2" id="star-2" type="radio" name="note" value="2"/>
            <label class="star star-2" for="star-2"></label>
            <input class="star star-1" id="star-1" type="radio" name="note" value="1"/>
            <label class="star star-1" for="star-1"></label>
        </div><br><br>
        <label for="commentaire">Votre avis</label>
        <textarea name="commentaire" required></textarea><br><br>
        <div id="submit-div" class="flex-wrapper">
            <input type="submit" id="submit" value="Ajouter">
        </div>
    </form>
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