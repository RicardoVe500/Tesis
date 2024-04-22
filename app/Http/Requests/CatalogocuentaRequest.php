<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CatalogocuentaRequest extends FormRequest
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
			'n1' => 'string',
			'n2' => 'string|nullable',
			'n3' => 'string|nullable',
			'n4' => 'string|nullable',
			'n5' => 'string|nullable',
			'n6' => 'string|nullable',
			'n7' => 'string|nullable',
			'n8' => 'string|nullable',
			'noCuenta' => 'string',
			'CTADependiente' => 'string|nullable',
			'nivelCuenta' => 'string',
			'nombreCuenta' => 'string',
			'movimientos' => 'string',
        ];
    }
}
