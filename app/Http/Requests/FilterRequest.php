<?php

namespace App\Http\Requests;

use App\Services\FilterService;
use Illuminate\Foundation\Http\FormRequest;

class FilterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @param \App\Services\FilterService $filterService
     * @return array
     */
    public function rules(FilterService $filterService): array
    {
        return [
            'date' => 'nullable|date|before:today',
            'language' => 'nullable|string|in:' . implode(',', $filterService->getLanguages()),
            'per_page' => 'nullable|numeric|in:10,50,100'
        ];
    }
}
