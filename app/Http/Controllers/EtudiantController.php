<?php

/**
 * @author El Hadj Babacar Cissé
 * @version 1.0
 *
 */

namespace App\Http\Controllers;

use App\Etudiant;
use App\Http\Requests\CreateEtudiant;
use App\Http\Requests\EtudiantRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class EtudiantController extends Controller
{
    /**
     * Ajouter un étudiant.
     *
     * @param EtudiantRequest $request
     * @return \Illuminate\Http\RedirectResponse : return sur la vue précedente
     */
    public function add(EtudiantRequest $request)
    {
        $validated = $request->validated();

        Etudiant::create($request->all());

        #return view('home');
        return back()->with('status', trans('etudiant.msgenregistrementok'));
    }

    /**
     * Afficher les informaitions d'un étudiant.
     *
     * @param int $id : id de l'étudiant
     * @return view : show
     */
    public function show($id)
    {
        $etudiant = Etudiant::findOrFail($id);

        return view('etudiant.show', compact('etudiant'));
    }

    /**
     * Afficher le formulaire pour la modification.
     *
     * @param $id : id de l'étudiant
     * @return view : Vue Edit d'étudiant
     */
    public function edit($id)
    {
        $etudiant = Etudiant::findOrFail($id); // si l'id n'éxiste pas, il retourne une erreur 404

        return view('etudiant.edit', compact('etudiant'));
    }

    /**
     * Valider la modification sur le formulaire.
     *
     * @param EtudiantRequest $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(EtudiantRequest $request, $id)
    {
        $etudiant = Etudiant::findOrFail($id); // si l'id n'éxiste pas, il retourne une erreur 404
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->save();

        return back()->with('status', trans('etudiant.msgmiseajourok'));
    }

    /**
     * Afficher le formulaire pour la modification.
     *
     * @param $id : id de l'étudiant
     * @return view : Vue Edit d'étudiant
     */
    public function delete($id)
    {
        $etudiant = Etudiant::findOrFail($id); // si l'id n'éxiste pas, il retourne une erreur 404

        Etudiant::destroy($id);

        return back()->with('status', trans('etudiant.msgsuppressionok'));
    }

}
