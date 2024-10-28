<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required|min:5',
            'release_date' => 'required',
            'cast' => 'required',
            'genres' => 'required',
            'image' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Judulnya harus diisi',
            'description.required' => 'Sinopsis gak boleh kosong',
            'description.min' => 'Sinopsis minimal 5 kata',
            'release_date.required' => 'Tahun rilis harus diisi',
            'cast.required' => 'Cast harus diisi',
            'genres.required' => 'Genre harus diisi',
            'image.required' => 'Gambar harus diisi',
        ];
    }
}
