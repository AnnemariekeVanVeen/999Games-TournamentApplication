<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

/**
 * Handles and validates requests for the create and edit actions in RoundController.
 */
class RoundsRequest extends FormRequest
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
            'name'          => 'required|string|min:5|max:45',
            'bracket_round' => 'nullable|boolean',
            'in_progress'   => 'nullable|boolean',
            'finished'      => 'nullable|boolean',
        ];
    }
}
