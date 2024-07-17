<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        // Crear datos de prueba usando el método factory
        Post::factory(10)->create();

        // O puedes agregar datos de prueba manualmente
        // Post::create([
        //     'title' => 'Primer Post',
        //     'body' => 'Este es el contenido del primer post.',
        // ]);
    }
}
