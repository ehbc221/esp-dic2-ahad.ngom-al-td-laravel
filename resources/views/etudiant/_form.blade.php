@if(isset($etudiant))
    {!! Form::model($etudiant, ['route' => ['updateEtudiant', $etudiant->id], 'method' => 'put']) !!}
@else
    {!! Form::open(['route' => 'addEtudiant']) !!}
@endif

@php($nom = trans('etudiant.nom'))
@php($prenom = trans('etudiant.prenom'))
@php($bouton = trans('commun.enregistrer'))

{!! Form::label('nom', $nom) !!}
{!! Form::text('nom') !!}
{!! Form::label('prenom', $prenom) !!}
{!! Form::text('prenom') !!}
{!! Form::submit($bouton, ['class' => 'btn btn-sm btn-primary m-t-n-xs'], true) !!}
{!! Form::close() !!}