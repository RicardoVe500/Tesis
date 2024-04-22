<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartidaencabezadoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'tipoPartidaId' => 'required',
			'codigoPartida' => 'required|string',
			'fechaContable' => 'required',
			'fechaActual' => 'required',
			'debe' => 'required',
			'haber' => 'required',
			'diferenca' => 'required',
			'conceptoGeneral' => 'required|string',
			'estado' => 'required|string',
        ];
    }
}
