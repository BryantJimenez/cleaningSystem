<?php

namespace App\Http\Requests;

use App\Province;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ProvinceStoreRequest extends FormRequest
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

    protected function prepareForValidation()
    {
        $trashed=Province::where('name', $this->name)->withTrashed()->exists();
        $exist=Province::where('name', $this->name)->exists();
        ($trashed) ? $this->merge(['trashed' => true]) : $this->merge(['trashed' => false]);
        ($exist) ? $this->merge(['exist' => true]) : $this->merge(['exist' => false]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->trashed && $this->exist===false) {
            $province=Province::where('name', $this->name)->withTrashed()->first();
            $province->restore();
        }
        return [
            'name' => 'required|string|min:2|max:191|unique:provinces,name'
        ];
    }
}
