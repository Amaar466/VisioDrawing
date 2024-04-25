<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menuPage extends Model
{
    use HasFactory;
    protected $table='menu_pages';
    protected $fillable =
    [
        'department',
        'month',

    ];
}
