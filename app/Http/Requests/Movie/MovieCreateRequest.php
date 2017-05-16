<?php

namespace App\Http\Requests\Movie;

use Illuminate\Foundation\Http\FormRequest;

class MovieCreateRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|min:3|unique:movies,name',
            'movie_types_id'=>'required|not_in:0',

        ];
    }

    public function messages()
    {
        return [
            'movie_types_id.not_in'=>'El campo tipo pelicula es obligatorio',

        ];
    }


}
