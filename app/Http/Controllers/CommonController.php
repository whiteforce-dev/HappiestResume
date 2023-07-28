<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function imageType()
    {
        $extensions = array('gif', 'jpg', 'jpeg', 'png');
        return $extensions;
    }
}
