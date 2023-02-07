<?php

namespace Tests\Feature\Http\Controllers\Api\V1;

use App\Models\Article;
use Tests\TestCase;

class ArticleControllerTest extends TestCase
{
    public function test_success_store(): void
    {
        $article = [
            'title' => 'article-title',
            'content' => 'article-content',
        ];

        $response = $this->postJson(route('api.v1.articles.store'), $article);

        $response->assertSuccessful();
    }

    public function test_success_update(): void
    {
        Article::factory()->create();

        $article = Article::first();

        $response = $this
            ->patchJson(
                route(
                    'api.v1.articles.update',
                    ['article' => $article->id]
                ),
                $article->toArray()
            );

        $response->assertSuccessful();
    }
}
