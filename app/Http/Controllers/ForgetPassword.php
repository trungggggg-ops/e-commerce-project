<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ForgetPassword extends Controller
{
    public function forgetPassword()
    {
        return view('users.forgetpassword');
    }

    public function forgetpasswordPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ],[
            'email.exists'=>"Gmail không đúng hoặc không tồn tại"
        ]);

        $token = Str::random(64);
        DB::table('password_reset_tokens')->insert([
            'email'=>$request->email,
            'token'=>$token,
            'created_at'=>Carbon::now()
        ]);

        Mail::send('users.emails.forgetpassword',['token' =>$token], function($message) use ($request){
            $message->to($request->email);
            $message->subject("Reset password");
        });
        return redirect()->route('users.forgetpassword')->with('success','Đã gửi token tới gmail');
    }

    public function resetpassword($token)
    {
        return view('users.newpassword',compact('token'));
    }

    public function resetpasswordPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password'=>'required'
        ],[
            'email.exists'=>"Gmail không đúng hoặc không tồn tại",
            'password.required'=>'Password không được để trống'

        ]);

        $updatePassword = DB::table('password_reset_tokens')
        ->where([
            "email"=>$request->email,
            'token'=>$request->token
        ])->first();

        if(!$updatePassword){
            return redirect()->route('users.resetpassword')->with('KHong thanh cong');
        }

        User::where("email",$request->email)
        ->update(["password" => Hash::make($request->password)]);

        DB::table('password_reset_tokens')->where(["email"=>$request->email])->delete();

        return redirect()->route('users.login')->with('success','Thay đổi thanh công');
         
    }
}
