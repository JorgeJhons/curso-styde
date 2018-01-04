<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /**  * @test */
     
    function mostrar_usuarios()
    {
        $this->get('/usuarios')
             ->assertStatus(200)
             ->assertSee('LISTADO DE USUARIOS')
             ->assertSee('Bill');
    }

    function mostrar_lista_vacia()
    {
        $this->get('/usuarios?empty')
             ->assertStatus(200)
             ->assertSee('NO HAY USUARIOS REGISTRADOS.');
    }

    /**  * @test */
    function detalles_de_usuarios(){
    	$this->get('/usuarios/5')
    		 ->assertStatus(200)
    		 ->assertSee('Mostrando detalles del usuario: {$id}');
    }
}
