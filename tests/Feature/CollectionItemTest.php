<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CollectionItemTest extends TestCase
{
    use RefreshDatabase;

    public function test_authenticated_user_can_create_collection_item(): void
    {
        $user = User::factory()->create();

        $category = Category::create([
            'name' => 'Mangá',
            'slug' => 'manga',
        ]);

        $response = $this->actingAs($user)->post(route('items.store'), [
            'name' => 'Naruto Vol. 1',
            'category_id' => $category->id,
            'quantity' => 1,
            'status' => 'owned',
            'condition' => 'Good',
        ]);

        $response->assertRedirect(route('items.index'));

        $this->assertDatabaseHas('collection_items', [
            'name' => 'Naruto Vol. 1',
            'user_id' => $user->id,
        ]);
    }
}