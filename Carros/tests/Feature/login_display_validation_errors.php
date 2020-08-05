<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class login_display_validation_errors extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
   
        public function login_display_validation_errors()
        {
            $response = $this->post(route('modelos'),[]);
    
            $response->assertStatus(302);
            $response->assertSessionHasErrors('ShowModelos');
        }
}

