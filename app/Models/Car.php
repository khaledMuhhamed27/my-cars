<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    // table name
    protected $table = 'cars';
    // id
    protected $primaryKey = 'id';
    // for table
    protected $fillable = [
        'name',
        'company',
        'year_model',
        'price',
        'color',
        'car_status',
    ];
    // ---end
    use HasFactory;
}
