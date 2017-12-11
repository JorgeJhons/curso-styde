<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PerfilUser extends TestCase
{
    /** @test */
    function perfil_nombrecompleto()
    {
        $this->get('saludo/jorge/fernandez')
        	 ->assertStatus(200)
        	 ->assertSee('Bienvenido jorge fernandez');
    }

    /** @test */
    function perfil_sin_apellido()
    {
        $this->get('saludo/jorge')
        	 ->assertStatus(200)
        	 ->assertSee('Bienvenido jorge');
    }
}
