<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendSMS extends Model
{
   public function send_sms($contact, $sms)
    {
        $str = urlencode("$sms");
        file_get_contents("http://arise.arisesmsworld.com/submitsms.jsp?user=SEYEIT&key=55524d5999XX&mobile=$contact&message=$str&senderid=HAPPST&accusage=1");
    }

    public function send_sms_Bharti($contact,$name,$profile,$username,$pass){
        $mobileNumber = $contact ;
        $msg = "Hi $name,Congrats! Your resume is $profile% created by Happiest.To complete, login to happiestresume.com. Id-$username pswd-$pass.Team Happiest";
        $str = urlencode("$msg");
        $api_key = '46066D0E0C9185';
        $from = 'HAPIES';
        $template_id='1707162140813189044';
        $api_url = "http://webmsg.smsbharti.com/app/smsapi/index.php?key=".$api_key."&campaign=0&routeid=9&type=text&contacts=".$mobileNumber."&senderid=".$from."&msg=".$str."&template_id=".$template_id;
        $response = file_get_contents($api_url);
      
    }

public function send_sms_new($contact, $sms){
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://d7sms.p.rapidapi.com/secure/send",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\r
        \"content\": \$sms,\r
        \"from\": \"White Force\",\r
        \"to\": 918871058178\r
    }",
        CURLOPT_HTTPHEADER => [
            "authorization: Basic ZXVuaTk1NzY6TG84WEg5M3I=",
            "content-type: application/json",
            "x-rapidapi-host: d7sms.p.rapidapi.com",
            "x-rapidapi-key: df902cdce0msh9bb47a765654701p1b84eejsn4278bddcbb90"
        ],
    ]);
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        return 1;
    }
}
}
