<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ScoreInputRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'score0' => 'required|numeric|min:0|max:150',
            'score1' => 'required|numeric|min:0|max:150',
            'score2' => 'required|numeric|min:0|max:150',
            'score3' => 'nullable|numeric|min:0|max:150',
        ];
    }
}
