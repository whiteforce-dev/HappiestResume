<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAchievementModel extends Model
{
    public $timestamps = false;
    protected $table = 'user_achievement';

    public function user()
    {
        return $this->belongsTo('App\RegistrationModel', 'user_id');
    }

    public static function getUserAchievement($id)
    {
        $UserEducations = static::where(['user_id' => $id])->get();
        return $UserEducations;
    }

    public static function save_achievement($uid)
    {
        $acheivement_image = request('acheivement_image');
        $acheivement_title = request('acheivement_title');
        $acheivement_content = request('acheivement_content');
        if (!empty($acheivement_title) && count($acheivement_title) > 0) {
            static::where(['user_id' => $uid])->delete();
            foreach ($acheivement_title as $index => $acheivement) {
                if (isset($acheivement)) {
                    $a_img = $acheivement_image[$index];

                    $myimage = isset($acheivement_image[$index]) ? $acheivement_image[$index] : '';
                    $char_count = strlen($myimage);
                    $user_education = new UserAchievementModel();
                    $user_education->user_id = $uid;
                    $user_education->title = $acheivement;
                    $user_education->image = $a_img;
//                    if ($myimage != "" && $char_count > 500) {
//                        $path = 'public/achievement/';
//                        list($type, $myimage) = explode(';', $myimage);
//                        list(, $myimage) = explode(',', $myimage);
//                        $data = base64_decode($myimage);
//                        $image_name = time() . '.png';
//                        $path = $path . '/' . $image_name;
//                        file_put_contents($path, $data);
//                        $user_education->image = "achievement/$image_name";
//                    } else {
//                        $user_education->image = isset($old_achi[$index]->image) ? $old_achi[$index]->image : null;
//                    }
                    $user_education->content = isset($acheivement_content[$index]) ? $acheivement_content[$index] : null;
                    $user_education->created_at = Carbon::now('Asia/Kolkata');
                    $user_education->save();
                }
            }
//            static::where(['user_id' => $uid])->where('created_at', '<', Carbon::now('Asia/Kolkata')->addSeconds(-5))->delete();
        }
    }

    public static function save_achievement_old($uid)
    {
        $acheivement_image = request('acheivement_image');
        $acheivement_title = request('acheivement_title');
        $acheivement_content = request('acheivement_content');
        if (!empty($acheivement_title) && count($acheivement_title) > 0) {
            $old_achi = static::where(['user_id' => $uid])->get();
            foreach ($acheivement_title as $index => $acheivement) {
                if (isset($acheivement)) {
                    $myimage = isset($acheivement_image[$index]) ? $acheivement_image[$index] : '';
                    $char_count = strlen($myimage);
                    $user_education = new UserAchievementModel();
                    $user_education->user_id = $uid;
                    $user_education->title = $acheivement;
                    if ($myimage != "" && $char_count > 500) {
                        $path = 'public/achievement/';
                        list($type, $myimage) = explode(';', $myimage);
                        list(, $myimage) = explode(',', $myimage);
                        $data = base64_decode($myimage);
                        $image_name = time() . '.png';
                        $path = $path . '/' . $image_name;
                        file_put_contents($path, $data);
                        $user_education->image = "achievement/$image_name";
                    } else {
                        $user_education->image = isset($old_achi[$index]->image) ? $old_achi[$index]->image : null;
                    }
                    $user_education->content = isset($acheivement_content[$index]) ? $acheivement_content[$index] : null;
                    $user_education->created_at = Carbon::now('Asia/Kolkata');
                    $user_education->save();
                }
            }
            static::where(['user_id' => $uid])->where('created_at', '<', Carbon::now('Asia/Kolkata')->addSeconds(-5))->delete();
        }
    }
}
