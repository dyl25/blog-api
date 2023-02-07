<?php

namespace App\Http\Requests;

use App\Models\Article;
use App\Models\Media;
use App\Models\MediaType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateMediaRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'id' => ['required', 'numeric',Rule::exists(Media::class)],
            'media_type_id' => ['required', 'numeric',Rule::exists(MediaType::class)],
            'article_id' => ['nullable', 'numeric',Rule::exists(Article::class)],
            'files' => ['required'],
            'files.*' => ['required', 'file', 'mimes:jpg,jpeg,bmp,gif,svg,webp', 'max:20000'],
        ];
    }
}
