<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personalInfo extends Model
{
    use HasFactory;
    protected $table='personal_infos';
    protected $fillable =
    [
        'name',
        'motherName',
        'privateNumber',
        'kindFile',
        'department',
        'note'

    ];
}
