<?php

namespace App\Http\Controllers\AppUser;

use App\Http\Controllers\Controller;
use App\Models\AppUserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AppUserController extends Controller
{
    public function register(Request $request)
    {
        $fields = $request->validate([
            'user_email' => 'required|string',
            'user_name' => 'required|string',
            'user_password' => 'required|string',
            'user_profile' => 'image|nullable',
        ]);
        $checkEmail = AppUserModel::where('user_email', $fields['user_email'])->first();
        if ($checkEmail) {
            return response([
                "response" => false,
                "user_name" => "not found",
                "user_email" => "not found",
                "score" => 0,
                "id" => -100,
            ]);
        }

        $user = new AppUserModel();
        $user->user_email = $fields["user_email"];
        $user->user_name = $fields["user_name"];
        if ($request->hasFile('user_profile')) {
            $path = $request->user_profile->getRealPath();
            $logo = file_get_contents($path);
            $user->user_profile = $logo;
        }
        $user->score = 0;
        $user->verification = rand(10000, 10000000);
        $user->status = 0;
        $user->user_password = bcrypt($fields["user_password"]);
        $user->save();
        return response([
            "response" => true,
            "user_name" => $fields["user_name"],
            "user_email" => $fields["user_email"],
            "score" => 0,
            "id" => $user->id,
        ]);
    }
    public function login(Request $request)
    {
        $fields = $request->validate([
            'user_email' => 'required|string',
            'user_password' => 'required|string'
        ]);

        //Check Email

        $user = AppUserModel::where('user_email', $fields['user_email'])->first();

        //Check Password

        if (!$user || !Hash::check($fields['user_password'], $user->user_password)) {
            return response([
                "response" => false,
                "user_name" => "not found",
                "user_email" => "not found",
                "score" => 0,
                "id" => -100,
            ]);
        } else {
            return response([
                "response" => true,
                "user_name" => $user->user_name,
                "user_email" => $user->user_email,
                "score" => $user->score,
                "id" => $user->id,
            ]);
        }
    }

    public function setScore(Request $request)
    {
        $fields = $request->validate([
            'user_email' => 'required',
            'score' => 'required'
        ]);
        $user = AppUserModel::where('user_email', $fields['user_email'])->first();

        if ($user) {
            $user->score = $fields['score'];
            $user->save();
            return response([
                "response" => true,
                "user_name" => $user->user_name,
                "user_email" => $user->user_email,
                "score" => $user->score,
                "id" => $user->id,
            ]);
        } else {
            return response([
                "response" => false,
                "user_name" => "not found",
                "user_email" => "not found",
                "score" => 0,
                "id" => -100,
            ]);
        }
    }
    public function sendMailForPassword(Request $request)
    {

        $fields = $request->validate([
            'user_email' => 'required'
        ]);
        $user = AppUserModel::where('user_email', $fields['user_email'])->first();
        if ($user) {
            $email = $user->user_email;
            $array = [
                'name' => $user->user_name,
                'date' => date('Y-m-d H:i:s'),
                'code' => $user->verification,
            ];
            Mail::send('mail.password', $array, function ($message) use ($email) {
                $message->subject('Şifre Sıfırlama İsteği');
                $message->to($email);
            });
            
            return response([
                "status" => true,
                ]);
        }
        return response([
                "status" => false,
                ]);
        
    }
    public function formatPassword(Request $request)
    {
        $fields = $request->validate([
            'user_email' => 'required',
            'user_password' => 'required',
            'verification' => 'required',
        ]);
        $user = AppUserModel::where('user_email', $fields['user_email'])->where('verification', $fields['verification'])->first();
        if ($user) {
            $user->user_password = bcrypt($fields["user_password"]);
            $user->verification = rand(10000, 10000000);
            $user->save();

            return response([
                "response" => true,
                "user_name" => $user->user_name,
                "user_email" => $user->user_email,
                "score" => $user->score,
                "id" => $user->id,
            ]);
        } else {
            return response([
                "response" => false,
                "user_name" => "not found",
                "user_email" => "not found",
                "score" => 0,
                "id" => -100,
            ]);
        }
    }
    public function showProfile(Request $request){
        $fields = $request->validate([
            'user_email' => 'required'
            ]);
        $user = AppUserModel::where('user_email', $fields['user_email'])->first();
        if($user){
            return response([
                "response" => true,
                "user_name" => $user->user_name,
                "user_email" => $user->user_email,
                "score" => $user->score,
                "id" => $user->id,
            ]);
        }
        else{
             return response([
                "response" => false,
                "user_name" => "not found",
                "user_email" => "not found",
                "score" => 0,
                "id" => -100,
            ]);
        }
        
    }
}
