<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id(); // Crea un campo 'id' como clave primaria.
            $table->string('nombre'); // Nombre del producto
            $table->text('descripcion'); // Descripción del producto
            $table->decimal('precio', 12, 2); // Precio del producto
            $table->integer('stock'); // Cantidad en inventario
            $table->string('imagen_url')->nullable(true); // Enlace de la imagen
            $table->string('categoria'); // Categoría del producto
            $table->string('marca'); // Marca del producto
            $table->timestamps(); // Created_at y Updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
