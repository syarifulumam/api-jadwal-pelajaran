<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HariRequest extends FormRequest
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
            'mata_pelajaran' => ['required'],
            'waktu_mulai' => ['required'],
            'waktu_akhir' => ['required'],
        ];
    }
}
