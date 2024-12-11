<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductoSeeder extends Seeder
{
    public function run()
    {
        DB::table("users")->insert([
            [
                'name' => 'Juan',
                'email' => 'juan@mail.com',
                'url_foto' => 'https://docs.material-tailwind.com/img/face-2.jpg',
                'password' => Hash::make("12345678"),
            ],
            [
                'name' => 'Maria',
                'email' => 'maria@mail.com',
                'url_foto' => 'https://docs.material-tailwind.com/img/face-3.jpg',
                'password' => Hash::make("12345678"),
            ],
            [
                'name' => 'Jose',
                'email' => 'jose@mail.com',
                'url_foto' => 'https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1480&q=80',
                'password' => Hash::make("12345678"),
            ],
            [
                'name' => 'Mariana',
                'email' => 'mariana@mail.com',
                'url_foto' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1061&q=80',
                'password' => Hash::make("12345678"),
            ],
            [
                'name' => 'John',
                'email' => 'john@mail.com',
                'url_foto' => 'https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1760&q=80',
                'password' => Hash::make("12345678"),
            ]
        ]);

        DB::table('productos')->insert([
            [
                'nombre' => 'Laptop HP',
                'descripcion' => 'Laptop HP con procesador Intel i7, 16GB RAM, 512GB SSD.',
                'precio' => 15000.00,
                'stock' => 20,
                'imagen_url' => 'https://m.media-amazon.com/images/I/41DY7XivtRL.jpg',
                'categoria' => 'Electrónica',
                'marca' => 'HP',
            ],
            [
                'nombre' => 'Smartphone Samsung Galaxy S23',
                'descripcion' => 'Smartphone Samsung Galaxy S23 con cámara de 108 MP, 8GB RAM, 128GB almacenamiento.',
                'precio' => 12000.00,
                'stock' => 50,
                'imagen_url' => 'https://m.media-amazon.com/images/I/71EYdOx09+L.jpg',
                'categoria' => 'Electrónica',
                'marca' => 'Samsung',
            ],
            [
                'nombre' => 'Cafetera Nespresso',
                'descripcion' => 'Cafetera Nespresso para preparar café espresso con cápsulas.',
                'precio' => 2000.00,
                'stock' => 15,
                'imagen_url' => 'https://m.media-amazon.com/images/I/51mx3DcKSCL.jpg',
                'categoria' => 'Hogar',
                'marca' => 'Nespresso',
            ],
            [
                'nombre' => 'Zapatos Nike Air Max',
                'descripcion' => 'Zapatos deportivos Nike Air Max, modelo unisex, color negro.',
                'precio' => 3500.00,
                'stock' => 100,
                'imagen_url' => 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/a75b5f09-be21-457c-bbd7-283f59f0e519/NIKE+AIR+MAX+90+LV8.png',
                'categoria' => 'Moda',
                'marca' => 'Nike',
            ],
            [
                'nombre' => 'Reloj Casio',
                'descripcion' => 'Reloj Casio resistente al agua, ideal para actividades al aire libre.',
                'precio' => 1500.00,
                'stock' => 30,
                'imagen_url' => 'https://http2.mlstatic.com/D_NQ_NP_810212-MLU72609046133_112023-O.webp',
                'categoria' => 'Accesorios',
                'marca' => 'Casio',
            ],
        ]);
    }
}
