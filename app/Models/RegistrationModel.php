<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationModel extends Model
{

    protected $table = 'registrations';
    public $timestamps = false;

    use HasFactory;
}
