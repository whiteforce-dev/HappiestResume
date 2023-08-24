<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    public $timestamps = false;
    protected $table = 'user_profile';

    public function user()
    {
        return $this->belongsTo('App\Models\RegistrationModel', 'user_id');
    }

    public static function getUserProfile($id)
    {
        $UserCurrentWorking = static::where(['user_id' => $id])->first();
        return $UserCurrentWorking;
    }
}
