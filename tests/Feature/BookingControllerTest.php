<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use App\Models\Booking;
use Tests\TestCase;

class BookingControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test the create booking endpoint.
     *
     * @return void
     */
    // public function testCreateBooking()
    // {
    //     $data = [
    //         'flight_id' => 1,
    //         'user_id' => 1,
    //         'seat_number' => '12A',
    //         'status' => 'confirmed'
    //     ];

    //     $response = $this->postJson('/api/bookings', $data);

    //     $response->assertStatus(Response::HTTP_CREATED)
    //             ->assertJson($data);
    // }

    /**
     * Test the update booking endpoint.
     *
     * @return void
     */
    // public function testUpdateBooking()
    // {
    //     $booking = Booking::factory()->create();

    //     $data = [
    //         'seat_number' => '14B',
    //         'status' => 'checked-in'
    //     ];

    //     $response = $this->putJson("/api/bookings/{$booking->id}", $data);

    //     $response->assertStatus(Response::HTTP_OK)
    //             ->assertJson($data);
    // }

    /**
     * Test the delete booking endpoint.
     *
     * @return void
     */
    // public function testDeleteBooking()
    // {
    //     $booking = Booking::factory()->create();

    //     $response = $this->deleteJson("/api/bookings/{$booking->id}");

    //     $response->assertStatus(Response::HTTP_NO_CONTENT);
    // }

    /**
     * Test retrieving bookings by flight.
     *
     * @return void
     */
    // public function testShowBookingsByFlight()
    // {
    //     $flightId = 1;
    //     Booking::factory()->count(3)->create(['flight_id' => $flightId]);

    //     $response = $this->getJson("/api/bookings/flight/{$flightId}");

    //     $response->assertStatus(Response::HTTP_OK)
    //             ->assertJsonCount(3);
    // }
}
?>
