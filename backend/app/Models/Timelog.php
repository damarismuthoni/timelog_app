<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timelog extends Model

{
    protected $table = 'timelog';

    protected $fillable = ['name', 'id_number', 'plate_number', 'photo'];
    use HasFactory;
}
