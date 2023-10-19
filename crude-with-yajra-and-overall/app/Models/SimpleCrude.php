<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimpleCrude extends Model
{
    protected $primaryKey ='student_id';
    protected $table='simplecrude';
    protected $fillable=[

    ];
    use HasFactory;
}
