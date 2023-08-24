<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppliedJob extends Model
{
    public function job()
    {
        return $this->belongsTo('App\Models\Job', 'job_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\RegistrationModel', 'user_id');
    }
}
