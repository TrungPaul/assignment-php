<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Http\Requests\UserRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function getLogin() {
    if (Auth::check()) {
         return redirect()->route('category.list');
      }
        return view('admin.login');
      
   }

   public function postLogin(LoginRequest $request){
      //kiểm tra đã login chưa 
      if (Auth::check()) {
         return redirect()->route('category.list');
      }
      //nếu chưa login thì chạy xuống dưới 
    
      // check validate , lấy ra dữ liệu 
      $data = $request->only(['email' , 'password']);
     
      // KIỂM TRA ĐĂNG NHẬP EMAIL VÀ PASSWWORD VỪA NHẬN
      $checklogin = Auth::attempt($data);
      if ($checklogin) {
         return redirect()->route('category.list');
      }
      else {
         return redirect()->route('admins.getLogin');
      }
   }

   public function logout(){
      Auth::logout();
      return view('admin.login');
   }
 public function getRegister(){
       return view('admin.register');
   }

public function postRegister(Request $request) {
         $this->validate($request , [
                     'fistname' => 'required',
                      'lastname' => 'required',
                      'email' => 'required|email|unique:users',
                      'password'=> 'required|min:6',
                     'repassword' => 'required_with:password|same:password|min:6',
                     'address' => 'required',
                      'birthday'=>'required',
                      'roles'=>'nullable'


               ]);
               $data = $request->except('_token');
      $user = new user();
      $data['password'] = bcrypt($request->password);
        $user->fistname = $data['fistname'];
        $user->lastname = $data['lastname'];
        $user->email = $data['email'];
        $user->password =$data['password'] ;
        $user->address = $data['address'];
        $user->birthday = date('Y-m-d H:i:s', strtotime($data['birthday']));
        $user->is_active = $data['is_active'];
         $user->roles = $data['roles'];
        $user->save();
         return view('admin.done');
   }
}
