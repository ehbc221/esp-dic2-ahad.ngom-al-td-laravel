<table class="table">
    <tr>
        <th>
            {{ trans('etudiant.nom') }}
        </th>
        <th>
            {{ trans('etudiant.prenom') }}
        </th>
        <th>
            {{ trans('etudiant.actions') }}
        </th>
    </tr>
    @foreach($etudiants as $etudiant)
        <tr>
            <td>
                {{ $etudiant->nom }}
            </td>
            <td>
                {{ $etudiant->prenom }}
            </td>
            <td>
                <a href="{{ route('showEtudiant', $etudiant->id) }}">{{ trans('commun.details') }}</a>
            </td>
            <td>
                <a href="{{ route('editEtudiant', $etudiant->id) }}">{{ trans('commun.modifier') }}</a>
            </td>
            <td>
                <a href="{{ route('deleteEtudiant', $etudiant->id) }}"
                   onclick="event.preventDefault();
                           document.getElementById('supprimer_etudiant').submit();">{{ trans('commun.supprimer') }}</a>

                <form id="supprimer_etudiant" action="{{ route('deleteEtudiant', $etudiant->id) }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </td>
        </tr>
    @endforeach
</table>