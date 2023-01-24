<?php

namespace App\Services;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleService {

    public function store(Request $request) {
        return Article::create($request->validated());
    }

}