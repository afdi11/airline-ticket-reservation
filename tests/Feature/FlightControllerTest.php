<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Flight;

class FlightControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test case description: Test the index method of FlightController.
     * Expected behavior: The index method should return a list of flights.
     */
    public function testIndex()
    {
        Flight::factory()->count(3)->create();

        $response = $this->get('/api/flights');

        $response->assertStatus(200)
                 ->assertJsonCount(3);
    }

    /**
     * Test case description: Test the show method of FlightController.
     * Expected behavior: The show method should return the details of a specific flight.
     */
    public function testShow()
    {
        $flight = Flight::factory()->create();

        $response = $this->get("/api/flights/{$flight->id}");

        $response->assertStatus(200)
                ->assertJson([
                    'id' => $flight->id,
                    'flight_number' => $flight->flight_number,
                    'destination' => $flight->destination,
                    'departure_time' => $flight->departure_time->format('Y-m-d H:i:s'),
                ]);
    }

    /**
     * Test case description: Test the store method of FlightController.
     * Expected behavior: The store method should create a new flight record.
     */
    // public function testStore()
    // {
    //     $flightData = Flight::factory()->make()->toArray();

    //     $response = $this->post('/api/flights', $flightData);

    //     $response->assertStatus(201)
    //              ->assertJson($flightData);

    //     $this->assertDatabaseHas('flights', $flightData);
    // }

    /**
     * Test case description: Test the update method of FlightController.
     * Expected behavior: The update method should update the details of a specific flight.
     */
    // public function testUpdate()
    // {
    //     $flight = Flight::factory()->create();
    //     $updatedData = Flight::factory()->make()->toArray();

    //     $response = $this->put("/api/flights/{$flight->id}", $updatedData);

    //     $response->assertStatus(200)
    //              ->assertJson($updatedData);

    //     $this->assertDatabaseHas('flights', $updatedData);
    // }

    /**
     * Test case description: Test the destroy method of FlightController.
     * Expected behavior: The destroy method should delete a specific flight record.
     */
    // public function testDestroy()
    // {
    //     $flight = Flight::factory()->create();

    //     $response = $this->delete("/api/flights/{$flight->id}");

    //     $response->assertStatus(204);

    //     $this->assertDatabaseMissing('flights', ['id' => $flight->id]);
    // }
}
