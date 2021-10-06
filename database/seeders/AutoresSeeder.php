<?php

namespace Database\Seeders;

use App\Models\autores;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        autores::factory()->count(20)-> create();

        // DB::table('autores')->insert([
        //     'autor'=> 'Dante'
        // ]);
    }
}
