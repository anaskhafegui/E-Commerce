<?php

namespace Tests\Unit\Models\Categories;
use App\Models\Category;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_it_many_children()
    {
        $category = factory(Category::class)->create();

        $category->children()->save(
            factory(Category::class)->create()
        );

        $this->assertInstanceOf(Category::class, $category->children->first());
    }
}
