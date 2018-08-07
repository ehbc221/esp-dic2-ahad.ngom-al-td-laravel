@if(isset($etudiant))
    {!! Form::model($etudiant, ['route' => ['updateEtudiant', $etudiant->id], 'method' => 'put']) !!}
@else
    {!! Form::open(['route' => 'addEtudiant']) !!}
@endif

@php($nom = trans('etudiant.nom'))
@php($prenom = trans('etudiant.prenom'))
@php($bouton = trans('commun.enregistrer'))

<div class="form-group">
    {!! Form::label('nom', $nom, ['class' => 'label-control']) !!}
    {!! Form::text('nom', old('nom'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('prenom', $prenom, ['class' => 'label-control']) !!}
    {!! Form::text('prenom', old('prenom'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($bouton, ['class' => 'btn btn-sm btn-info m-t-n-xs'], true) !!}
</div>
{!! Form::close() !!}