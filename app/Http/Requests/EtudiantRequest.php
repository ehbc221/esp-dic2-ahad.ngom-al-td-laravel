<?php

/**
 * @author El Hadj Babacar Cissé
 * @version 1.0
 *
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EtudiantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'nom.required' => trans('etudiant.nomrequis'),
            'prenom.required'  => trans('etudiant.prenomrequis'),
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nom' => 'required',
            'prenom' => 'required',
        ];
    }
}
