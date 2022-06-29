<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Str;
use DateTime;
use DateTimeZone;
use Hash;

class LoginController extends Controller
{
    function registerUser(Request $request)
    {
        $request->validate([
            "name"=>"required|max:50|min:5",
            "email"=>"required|email|unique:App\Models\User,email",
            "password"=>"required|min:8",
            "username"=>"required|min:5"
        ]);



            $name=$request->name;
            $email=$request->email;
            $username=$request->username;
            $password=Hash::make($request->password);

            $dt = new DateTime();
            $tz = new DateTimeZone('Asia/Kolkata'); // or whatever zone you're after

            $dt->setTimezone($tz);
            $create=$dt->format('Y-m-d H:i:s');
            $userid=Str::substr($name, 0, 3).'-'.Str::substr($email, 0, 3).'-'.Str::substr($username, 0, 4);

            $user=DB::insert('insert into users (userid,fullname,email,username,password,createdat) values (?, ?, ?, ?, ?, ?)', [$userid, $name, $email, $username, $password, $create]);
            if($user)
            {
                return redirect('admin/register')->with('message',"Register Successfully...");
            }
            else
            {
                return redirect('admin/register')->with('error',"Not Registered...");
            }

    }


    function loginUser(Request $request)
    {
        $request->validate([
            "email"=>"required|email",
            "password"=>"required"
        ]);


        // get user where email same as inputed email
        $getCredential=User::where('email',$request->email)->first();

        // user is not null and password same as database password then login otherwise error
        if($getCredential && Hash::check($request->password, $getCredential->password))
        {
            $sessionUser=$getCredential->username;
            $sessionId=$getCredential->userid;
            $request->session()->put('username', $sessionUser);
            $request->session()->put('userId', $sessionId);
            return redirect('/admin/dashboard');
        }
        else
        {
            return redirect('/admin/login')->with("error","Please Enter Correct Credentials!");
        }
    }

}
