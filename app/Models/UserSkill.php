<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSkill extends Model
{
    public $timestamps = false;
    protected $table = 'user_skill';

    public function user()
    {
        return $this->belongsTo('App\Models\RegistrationModel', 'user_id');
    }

    public static function getUserSkill($id)
    {
        $UserSocial = static::where(['user_id' => $id])->first();
        return $UserSocial;
    }
}
