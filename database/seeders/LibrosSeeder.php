<?php

namespace Database\Seeders;

use App\Models\libros;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        libros::factory()->count(20)-> create();
        // DB::table('libros')->insert([
        //     'nombre'=> 'Divina comedia',
            
        // ]);
    }
}
