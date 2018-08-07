<table class="table table-bordered">
    <tr class="bg-info">
        <th>
            {{ trans('etudiant.nom') }}
        </th>
        <th>
            {{ trans('etudiant.prenom') }}
        </th>
        <th colspan="3">
            {{ trans('etudiant.actions') }}
        </th>
    </tr>
    @if($etudiants->isNotEmpty())
        @foreach($etudiants as $etudiant)
            @php($form_id = "supprimer_etudiant_{{ $etudiant->id }}")
            <tr>
                <td>
                    {{ $etudiant->nom }}
                </td>
                <td>
                    {{ $etudiant->prenom }}
                </td>
                <td>
                    <a href="{{ route('showEtudiant', $etudiant->id) }}" class="btn btn-info">{{ trans('commun.details') }}</a>
                </td>
                <td>
                    <a href="{{ route('editEtudiant', $etudiant->id) }}" class="btn btn-info">{{ trans('commun.modifier') }}</a>
                </td>
                <td>
                    <a href="{{ route('deleteEtudiant', $etudiant->id) }}" class="btn btn-info"
                       onclick="event.preventDefault();
                               confirmerSuppression('{{ $form_id }}')">{{ trans('commun.supprimer') }}</a>

                    <form id="{{ $form_id }}" action="{{ route('deleteEtudiant', $etudiant->id) }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="3"><span class="text text-danger">Aucun étudiant à afficher</span></td>
        </tr>
    @endif
</table>

<script type="text/javascript">
    function confirmerSuppression(id) {
        var confirmation = confirm('Voulez-vous vraiment supprimer l\'étudiant?');
        if (confirmation) {
            document.getElementById(id).submit();
        }
    }
</script>