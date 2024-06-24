<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\cookie;

class ProfileController extends Controller
{
    //index
    public function index($id){
        $name = "Donal Trump" ;
        $age = "75" ;
        $data =array(
          "id"=>$id,
          "name"=>$name,
          "age"=>$age,
        );

       $cookieName = 'access_token';
       $value = '123-XYZ';
       $minutes = time() + 60 * 1;
       $path = '/';
       $domain = $_SERVER['SERVER_NAME'];
       $secure = 'false';
       $httpOnly = 'true';


     http_response_code(200);
       return response()->json($data,200)->withCookie($cookieName,$value,$minutes,$path,$domain,$secure,$httpOnly);
    }
}
