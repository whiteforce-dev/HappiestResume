<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSocial extends Model
{
    public $timestamps = false;
    protected $table = 'user_social';

    public function user()
    {
        return $this->belongsTo('App\Models\RegistrationModel', 'user_id');
    }

    public static function getUserSocial($id)
    {
        $UserSocial = static::where(['user_id' => $id])->first();
        return $UserSocial;
    }
}
