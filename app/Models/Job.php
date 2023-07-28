<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public $timestamps = false;
    protected $table = 'job_master';
    protected $guarded = ['_token'];

    public function company()
    {
        return $this->belongsTo('App\Models\Company', 'company_id');
    }
}
