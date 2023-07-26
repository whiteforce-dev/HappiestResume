<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{

    protected $primaryKey = 'city_id';
    protected $table = 'cities';
    protected $state_id = 'state_id';
    use HasFactory;
}
