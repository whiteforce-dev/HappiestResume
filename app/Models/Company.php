<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = ['_token'];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'created_by');
    }
}
