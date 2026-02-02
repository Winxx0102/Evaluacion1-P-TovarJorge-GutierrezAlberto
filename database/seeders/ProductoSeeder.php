<?php

namespace Database\Seeders;
use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    Producto::create([
    'nombre' => 'Laptop Asus Vivobook 15',
    'precio' => 580.99,
    'stock' => 10,
    'descripcion' => 'Laptop de uso general']);

Producto::create([
    'nombre' => 'Mouse Razer',
     'precio' => 30.50,
     'stock' => 50,
     'descripcion' => 'Mouse gamer' ]);

     Producto::create([
         'nombre' => 'Teclado Redragon',
          'precio' => 65.00,
           'stock' => 20,
           'descripcion' => 'Teclado RGB mecánico' ]);
    }
}
