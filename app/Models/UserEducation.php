<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEducation extends Model
{
    public $timestamps = false;
    protected $table = 'user_education';

    public function user()
    {
        return $this->belongsTo('App\Models\RegistrationModel', 'user_id');
    }

    public static function getUserEducation($id)
    {
        $UserEducations = static::where(['user_id' => $id])->orderBy('id', 'asc')->get();
        return $UserEducations;
    }

    public static function save_education($uid)
    {
        $education_school = request('education_school');
        $education_school_website = request('education_school_website');
        $education_school_board = request('education_school_board');
        $education_type = request('education_type');
        $education_icon = request('education_icon');
        if (!empty($education_type) && count($education_type) > 0) {
//            static::where(['user_id' => $uid])->delete();
            foreach ($education_type as $index => $education) {
                $user_education = UserEducation::where(['icon' => $education_icon[$index], 'type' => "$education", 'user_id' => $uid])->first();
                if (isset($user_education)) {
                    $user_education->user_id = $uid;
                    $user_education->education_name = isset($education_school[$index]) ? $education_school[$index] : null;//$education;
//                    $user_education->type = isset($education_type[$index]) ? $education_type[$index] : null;
//                    $user_education->icon = isset($education_icon[$index]) ? $education_icon[$index] : null;
                    $user_education->organization = isset($education_school_board[$index]) ? $education_school_board[$index] : null;
                    $user_education->website = isset($education_school_website[$index]) ? $education_school_website[$index] : null;
                    $user_education->created_at = Carbon::now('Asia/Kolkata');
                    $user_education->save();
                } /*else {
                    $user_education_new = new UserEducation();
                    $user_education_new->user_id = $uid;
                    $user_education_new->education_name = $education;
                    $user_education_new->type = isset($education_type[$index]) ? $education_type[$index] : null;
                    $user_education_new->icon = isset($education_icon[$index]) ? $education_icon[$index] : null;
                    $user_education_new->organization = isset($education_school_board[$index]) ? $education_school_board[$index] : null;
                    $user_education_new->website = isset($education_school_website[$index]) ? $education_school_website[$index] : null;
                    $user_education_new->created_at = Carbon::now('Asia/Kolkata');
                    $user_education_new->save();
                }*/
            }
        }
    }
}
