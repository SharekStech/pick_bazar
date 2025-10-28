<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Marvel\Database\Models\Category;
use Marvel\Database\Models\Type;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function a_category_can_be_created_with_an_image()
    {
        Storage::fake('public');

        $type = Type::factory()->create();
        $image = UploadedFile::fake()->image('category.jpg');

        $response = $this->postJson('/api/categories', [
            'name' => 'Test Category',
            'type_id' => $type->id,
            'image' => $image,
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('categories', ['name' => 'Test Category']);
        $this->assertNotNull(Category::first()->image);
        Storage::disk('public')->assertExists(Category::first()->image);
    }

    /** @test */
    public function a_category_can_be_updated_with_a_new_image()
    {
        Storage::fake('public');

        $category = Category::factory()->create();
        $oldImage = $category->image;

        $newImage = UploadedFile::fake()->image('new_category.jpg');

        $response = $this->putJson("/api/categories/{$category->id}", [
            'name' => 'Updated Category',
            'image' => $newImage,
        ]);

        $response->assertStatus(200);
        $this->assertDatabaseHas('categories', ['name' => 'Updated Category']);
        $this->assertNotEquals($oldImage, Category::first()->image);
        Storage::disk('public')->assertExists(Category::first()->image);
        if ($oldImage) {
            Storage::disk('public')->assertMissing($oldImage);
        }
    }

    /** @test */
    public function when_a_category_is_deleted_its_image_is_also_deleted()
    {
        Storage::fake('public');

        $category = Category::factory()->create();
        $image = $category->image;

        $response = $this->deleteJson("/api/categories/{$category->id}");

        $response->assertStatus(200);
        $this->assertDatabaseMissing('categories', ['id' => $category->id]);
        if ($image) {
            Storage::disk('public')->assertMissing($image);
        }
    }
}
