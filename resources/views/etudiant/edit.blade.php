@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header">{{ trans('etudiant.titremodification') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
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

                        @include('etudiant._form')

                        <br />
                        <br />

                        <p>
                            <a href="{{ route('showEtudiant', $etudiant->id) }}">{{ trans('commun.details') }}</a><br />
                            <a href="{{ route('home', $etudiant->id) }}">{{ trans('commun.accueil') }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
