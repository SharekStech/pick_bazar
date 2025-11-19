<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Marvel\Database\Models\Store;
use Tests\TestCase;

class StoreTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function a_store_can_be_created()
    {
        $response = $this->postJson('/api/stores', [
            'name' => 'Test Store',
            'email' => 'test@test.com',
            'phone' => '1234567890',
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('stores', ['name' => 'Test Store']);
    }

    /** @test */
    public function a_store_can_be_updated()
    {
        $store = Store::factory()->create();

        $response = $this->putJson("/api/stores/{$store->id}", [
            'name' => 'Updated Store',
            'email' => 'updated@test.com',
            'phone' => '0987654321',
        ]);

        $response->assertStatus(200);
        $this->assertDatabaseHas('stores', ['name' => 'Updated Store']);
    }

    /** @test */
    public function a_store_can_be_deleted()
    {
        $store = Store::factory()->create();

        $response = $this->deleteJson("/api/stores/{$store->id}");

        $response->assertStatus(204);
        $this->assertDatabaseMissing('stores', ['id' => $store->id]);
    }

    /** @test */
    public function it_can_list_stores()
    {
        Store::factory()->count(5)->create();

        $response = $this->getJson('/api/stores');

        $response->assertStatus(200)
            ->assertJsonCount(5);
    }

    /** @test */
    public function it_can_show_a_store()
    {
        $store = Store::factory()->create();

        $response = $this->getJson("/api/stores/{$store->id}");

        $response->assertStatus(200)
            ->assertJson([
                'id' => $store->id,
                'name' => $store->name,
                'email' => $store->email,
            ]);
    }
}
