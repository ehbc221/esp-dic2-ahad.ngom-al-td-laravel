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

                        <p>
                            <strong>{{ $nom }} : </strong>{{ $etudiant->nom }}
                        </p>
                        <p>
                            <strong>{{ $prenom }} : </strong> {{ $etudiant->prenom }}
                        </p>

                        <br />
                        <br />
                        <hr />
                        <br />

                        <p>
                            <a href="{{ route('editEtudiant', $etudiant->id) }}" class="btn btn-info">{{ trans('commun.modifier') }}</a>
                            <a href="{{ route('home', $etudiant->id) }}" class="btn btn-info">{{ trans('commun.accueil') }}</a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
