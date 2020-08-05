<?php

namespace Tests\Feature\Http\Controllers\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterControllerTest extends TestCase
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
    public function login_display_validation_errors()
       {
           $response = $this->post(route('modelos'),[]);
   
           $response->assertStatus(302);
           $response->assertSessionHasErrors('ShowModelos');
       }
}
