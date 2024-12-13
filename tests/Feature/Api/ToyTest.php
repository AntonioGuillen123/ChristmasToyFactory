<?php

namespace Tests\Feature\Api;

use App\Models\Toy;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ToyTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfReceiveAllEntryOfToyInJsonFile(){
        $toys = Toy::factory()->create();

        $response = $this->get(route('apiindex'));

        $response->assertStatus(200)
                ->assertJsonCount(1);
    }
}
