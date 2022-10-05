<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'Nombre' => 'Refrigerador',
            'Codigo' => 'REF4000',
            'CPadre' => 'Nacionales',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'Nombre' => 'Lavadora',
            'Codigo' => 'LAV5000',
            'CPadre' => 'Nacionales',
            'created_at' => now(),
            'updated_at' => now()    
            
        ]);
    }
}
