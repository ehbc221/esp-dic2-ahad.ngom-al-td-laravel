@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header">{{ trans('etudiant.titrevoir') }}</div>

                    <div class="card-body">
                        @php($nom = trans('etudiant.nom'))
                        @php($prenom = trans('etudiant.prenom'))
                        @php($bouton = trans('commun.enregistrer'))

                        <strong>{{ $nom }} : </strong> {{ $etudiant->nom }}<br />
                        <strong>{{ $prenom }} : </strong> {{ $etudiant->prenom }}

                        <br />
                        <br />

                        <p>
                            <a href="{{ route('editEtudiant', $etudiant->id) }}">{{ trans('commun.modifier') }}</a><br />
                            <a href="{{ route('home', $etudiant->id) }}">{{ trans('commun.accueil') }}</a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
