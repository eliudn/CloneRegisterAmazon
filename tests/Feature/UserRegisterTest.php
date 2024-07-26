<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserRegisterTest extends TestCase
{
    use RefreshDatabase;

    public function test_register_user():void
    {
        $data = [
            'name'=>'Usuario Prueba',
            'email'=>'Prueba@prueba.com',
            'password'=>'Password123',
            'password_confirmation'=>'Password123'
        ];

        $response = $this->post( '/auth/register', $data);
        // dd($response->json());
        $response->assertStatus(200);
        $this->assertDatabaseCount('users', 1);
        $this->assertDatabaseHas('users', [
            'name'=>'Usuario Prueba',
            'email'=>'Prueba@prueba.com',
        ]);
    }

    public function test_register_user_fail_request():void
    {
        $data = [
            'name'=>'',
            'email'=>'Prueba',
            'password'=>'Pass',
            'password_confirmation'=>'Password123_'
        ];

        $response = $this->post( '/auth/register', $data);
        $response->assertSessionHasErrors(['name','email','password']);
        $response->assertInvalid([
            'name' => 'The name field is required.',
            'email' => 'The email field must be a valid email address.',
            'password' => [
                'The password field confirmation does not match.',
                'The password field must be at least 6 characters.'
            ]
        ]);
    }
    public function test_register_user_fail_request_unique_mail():void
    {
        User::factory()->create(['email'=>'dev@test.com']);
        $data = [
            'name'=>'Test',
            'email'=>'dev@test.com',
            'password'=>'123456',
            'password_confirmation'=>'123456'
        ];

        $response = $this->post( '/auth/register', $data);
        $response->assertSessionHasErrors(['email']);
        $response->assertInvalid([
            'email' => 'The email has already been taken.',
        ]);
    }
}
