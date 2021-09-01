<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\GuestUser;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\GuestUserController
 */
class GuestUserControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $guestUsers = GuestUser::factory()->count(3)->create();

        $response = $this->get(route('guest-user.index'));

        $response->assertOk();
        $response->assertViewIs('guestUser.index');
        $response->assertViewHas('guestUsers');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('guest-user.create'));

        $response->assertOk();
        $response->assertViewIs('guestUser.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\GuestUserController::class,
            'store',
            \App\Http\Requests\GuestUserStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $email_address = $this->faker->word;

        $response = $this->post(route('guest-user.store'), [
            'email_address' => $email_address,
        ]);

        $guestUsers = GuestUser::query()
            ->where('email_address', $email_address)
            ->get();
        $this->assertCount(1, $guestUsers);
        $guestUser = $guestUsers->first();

        $response->assertRedirect(route('guestUser.index'));
        $response->assertSessionHas('guestUser.id', $guestUser->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $guestUser = GuestUser::factory()->create();

        $response = $this->get(route('guest-user.show', $guestUser));

        $response->assertOk();
        $response->assertViewIs('guestUser.show');
        $response->assertViewHas('guestUser');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $guestUser = GuestUser::factory()->create();

        $response = $this->get(route('guest-user.edit', $guestUser));

        $response->assertOk();
        $response->assertViewIs('guestUser.edit');
        $response->assertViewHas('guestUser');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\GuestUserController::class,
            'update',
            \App\Http\Requests\GuestUserUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $guestUser = GuestUser::factory()->create();
        $email_address = $this->faker->word;

        $response = $this->put(route('guest-user.update', $guestUser), [
            'email_address' => $email_address,
        ]);

        $guestUser->refresh();

        $response->assertRedirect(route('guestUser.index'));
        $response->assertSessionHas('guestUser.id', $guestUser->id);

        $this->assertEquals($email_address, $guestUser->email_address);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $guestUser = GuestUser::factory()->create();

        $response = $this->delete(route('guest-user.destroy', $guestUser));

        $response->assertRedirect(route('guestUser.index'));

        $this->assertDeleted($guestUser);
    }
}
