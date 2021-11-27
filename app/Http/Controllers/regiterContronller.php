<?php

namespace App\Http\Controllers;

use App\Mail\demoMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class regiterContronller extends Controller
{
    //
    public function show(){
        return view('client.user.login');
    }
    public function create(Request $request){
        // dd($request->user());
        // // $request->use()
        $remember_token= md5($request->name.time());
        // dd($request->user());
        // dd( $remember_token);
        User::create([
           'name'=> $request->name,
           'email'=> $request->email,
           'password'=> $request->password,
           'remember_token'=>$remember_token,
        ]);

        $url= route('login.update',[$remember_token]);

    //     // dd($url);
       $data=[
           'link'=> $url,
           'name'=> $request->name,
       ];
    // //    dd($request->user());

       Mail::to($request->email)->send(new demoMail($data));
       return "ban da dang ky thanh cong, hay kiem tra mail de veryfy tk";
    }
    public function update($remember_token){
        $now = now();
        User::where('remember_token',$remember_token)->update(['email_verified_at'=>$now]);
        return 'TRANG CHU : BAN DANG VERYMAIL THANH CONG';

    }
    //show nhap mail
    public function showforgot(){
            return view('client.user.forgotPassword');
    }

    public function check(Request $request){
          $email= $request->email;
        //   dd($email);
         $a= User::where('email',$email);
         $url= route('login.forgotpass',['email'=>$email]);
        //  dd($url);
         $data=[
            'link'=> $url,
            'name'=> $request->name,
        ];
        // dd($url);
          if ($a){
          $mail=  Mail::to($request->email)->send(new demoMail($data));
              return 'vui long kiem tra mail de doi mk';
          }else{
              return 'email nay khong ton tai trong he thong';
          };
    }
    //hien thi view doi pass ra man hinh
    public function changepasss($email){

        return view('client.user.changepass',['email'=>$email]);
    }
    //doi passs
    public function changepasssdb(Request $request, $email){
        // dd($email);
        $password= $request->password;
        // dd($password);
        User::where('email',$email)->update(['password'=>$password]);
        return "ban da doi pass thanh cong";
    }
}
