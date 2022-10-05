<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $timestamp = true;

    protected $fillable = [ 'Nombre',
                            'SKU',
                            'Precio',
                            'Descripcion',
                            'image_path', 
                            'id_categories'];

    protected $visible = [ 'Nombre',
                            'SKU',
                            'Precio',
                            'Descripcion',
                            'image_path', 
                            'id_categories'];
}
