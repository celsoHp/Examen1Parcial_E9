<?php

namespace Tests\Feature\Http\Controllers\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LogiControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

     public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }  
    /**@test */
    public function logi_display_validation_errors()
        {
        $response = $this->get(route('logi'),[]);

        $response->assertStatus(302);
        $response->assertViewIs('Email');
    }

     /**@test */
     public function create_display_validation_errors()
     {
         $user = factory(User::class)->create();

         $response = $this->post(route('empleados'),[
             'email' => $user->email,
             'password' => 'password'
         ]);
 
         $response->assertRedirect(route('home'));
         $this->assertAuthenticatedAs($user);
         $response->assertSessionHasErrors('create');
     }
}

 
