<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'Nombre' => 'Minibar',
            'SKU' => 'ABC123',
            'Precio' => '11500.80',
            'Descripcion' => 'Minibar para tiendas',
            'image_path' => 'minibar.png',
            'id_categories' => '1',
            'created_at' => now(),
            'updated_at' => now(),
            
        ]);

        DB::table('products')->insert([
            'Nombre' => 'MiniEstufa',
            'SKU' => 'XYZ987',
            'Precio' => '5500.55',
            'Descripcion' => 'Mini Estufa para acampar',
            'image_path' => 'miniestufa.png',
            'id_categories' => '2',
            'created_at' => now(),
            'updated_at' => now(),
            
        ]);
    }
}
