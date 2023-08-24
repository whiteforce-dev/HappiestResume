<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWorkExp extends Model
{
    public $timestamps = false;
    protected $table = 'user_work_exp';

    public function user()
    {
        return $this->belongsTo('App\Models\RegistrationModel', 'user_id');
    }

    public static function getUserCurrentWorking($id, $flag)
    {
        $UserCurrentWorking = static::where(['user_id' => $id, 'is_current_working' => $flag])->first();
        if (isset($UserCurrentWorking)) {
            return $UserCurrentWorking;
        } else {
            $UserCurrentWorking = static::where(['user_id' => $id])->first();
            return $UserCurrentWorking;
        }

    }

    public static function getUserWorkExps($id)
    {
        $UserCurrentWorking = static::where(['user_id' => $id])->get();
        return $UserCurrentWorking;
    }

    public static function save_work_experience($uid)
    {
        $we_company_name = request('we_company_name');
        $we_website = request('we_website');
        $we_designation = request('we_designation');
        $start_month = request('start_month');
        $start_year = request('start_year');
        $end_month = request('end_month');
        $end_year = request('end_year');
        $we_is_current_working = request('we_is_current_working');
        $exp_company_details = request('exp_company_details');
        if (!empty($we_company_name) && count($we_company_name) > 0) {
            static::where(['user_id' => $uid])->delete();
            foreach ($we_company_name as $index => $we) {
                $work_exp = new UserWorkExp();
                $work_exp->user_id = $uid;
                $work_exp->company = $we;
                $work_exp->title = request('title');
                $work_exp->website = isset($we_website[$index]) ? $we_website[$index] : null;;
                $work_exp->designation = isset($we_designation[$index]) ? $we_designation[$index] : null;
                if (isset($start_month[$index]) && isset($start_year[$index])) {
                    $work_exp->start_date = "$start_year[$index]-$start_month[$index]-01";
                }
                if (isset($end_month[$index]) && isset($end_year[$index])) {
                    $work_exp->end_date = "$end_month[$index]-$end_month[$index]-01";
                }
                $work_exp->is_current_working = isset($we_is_current_working[$index]) ? $we_is_current_working[$index] : 0;;
                $work_exp->description = isset($exp_company_details[$index]) ? $exp_company_details[$index] : null;
                $work_exp->created_at = Carbon::now('Asia/Kolkata');
                $work_exp->save();
            }
        }
    }
}
