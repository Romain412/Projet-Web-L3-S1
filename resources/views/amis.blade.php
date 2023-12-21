@extends('layouts.base')

@section('title','Page d\'accueil')
@section('stylesheet', asset('css/compte.css'))

@section('content')


<form action="/" method="post">
    {{ csrf_field() }}
    <fieldset>
        <legend>Ajouter un ami</legend>
        <br>
        <label for="pseudo">Pseudo</label>
        <br>
        <input type="text" name="pseudo" required placeholder="Pseudo de l'ami a ajouter" value = "{{ old('pseudo') }}">

        @if ($errors->any())
            <div class="div-error">
                @foreach ($errors->all() as $error)
                    <p class="text-error">{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <br>
        <button type="submit">Ajouter cet ami</button>
        <br><br>

    </fieldset>
</form>
<br><br><br>


<script>document.getElementById('nom').focus();</script>


@endsection