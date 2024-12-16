<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ToyTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfReceiveAllEntryOfToyInJsonFile(){
        $toy = Toy::factory()->create();

        $response = $this->get(route('apiindex'));

        $response->assertStatus(200)
                ->assertJsonCount(1);

    }

    public function test_CheckIfReceiveOnlyOneEntryOfToyInJsonFile(){
        $toy = Toy::factory()->create();

        $response = $this->get(route('apishow', ['id' => $toy->id]));

        $response->assertStatus(200);

        $response->assertJson([
            'id' => $toy->id,
        ]);
    }

    public function test_CheckIfCanCreateEntryInToyWithJson(){
        $response = $this->post(route('apistore'), [
            'name' => 'Super Adventure Game',
            'image' => 'https://example.com/images/super_adventure_game.jpg',
            'description' => 'An exciting adventure game where players explore fantastic worlds, solve puzzles, and face powerful enemies in an epic mission to save the kingdom.',
            'minimun_age_id' => '12',
        ]);
        $response = $this->get(route('apiindex'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);
    }

    public function test_CheckIfCanDeleteEntryInToyWithApi(){
        $toy = Toy::factory(2)->create();

        $response = $this->delete(route('apidestroy', 1));
        $this->assertDatabaseCount('toys', 1);

        $response = $this->get(route('apiindex'));
        $response->assertJsonCount(1);
    }

    public function test_CheckIfCanUpdateEntryInToyWithJsonFile(){
        $response = $this->post(route('apistore'), [
            'name' => 'Super Adventure Game',
            'image' => 'https://example.com/images/super_adventure_game.jpg',
            'description' => 'An exciting adventure game where players explore fantastic worlds, solve puzzles, and face powerful enemies in an epic mission to save the kingdom.',
            'minimun_age_id' => '12'
        ]);
        $data = ['name' => 'Super Adventure Game',
            'image' => 'https://example.com/images/super_adventure_game.jpg',
            'description' => 'An exciting adventure game where players explore fantastic worlds, solve puzzles, and face powerful enemies in an epic mission to save the kingdom.',
            'minimun_age_id' => '12'
            ];
        $response = $this->get(route('apiindex'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);

        $response = $this->put('/api/toys/1', [
            'name' => 'Mystic Quest: Legends of the Lost World',
            'image' => 'https://example.com/images/mystic_quest.jpg',
            'description' => 'Embark on a mystical journey through ancient ruins, uncover hidden secrets, and battle mythical creatures to restore balance to the world. A story-driven RPG with stunning visuals and deep lore.',
            'minimun_age_id' => '16'
        ]);
        $data = ['name' => 'Mystic Quest: Legends of the Lost World',
            'image' => 'https://example.com/images/mystic_quest.jpg',
            'description' => 'Embark on a mystical journey through ancient ruins, uncover hidden secrets, and battle mythical creatures to restore balance to the world. A story-driven RPG with stunning visuals and deep lore.',
            'minimun_age_id' => '16'
            ];
        $response = $this->get(route('apiindex'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);
    }
}
