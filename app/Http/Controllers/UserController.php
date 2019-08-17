<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Http\Requests\UserRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  
    public function index(){
    	$user = user::all();
    	return view('admin.user.user' , ['user' =>$user]);
    }

    public function createform(){
   	return view('admin.user.user_add');
   }

   // public function create(UserRequest $request)
   //          {
   			
   // 			$data = $request->except('_token');
   //      dd($data);
   //          user::create($data);
   // 			return $this->index();
			// }
   public function create(Request $request)
            {
        $this->validate($request, [
        'fistname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users',
            'password'=> 'required|min:6',
            'address' => 'required',
            'birthday'=>'required',
            'roles'=>'nullable'
            
        ]);
        $data = $request->except('_token');
        
        // lưu dữ liệu vào bảng class
        $user = new user();
        //gán dữ liệu cho các thuộc tính
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

            // cách 2 
            // ClassRoom::create($data);
            //CÁCH 3 
            // $mutidata = [
            //       $data,
            //       $data,
            //       $data
            // ];
            //    classRoom::insert($mutidata);
        return $this->index();

   }
	function remove($user)
   {
      user::destroy($user);
      return $this->index();
   }
   public function editform(user $user){
     // dDAT TEN THAM SOS TRUFNG S THAM SỐ Ở ROUTE KÈM THEO CLASSROOM THÌ TRẢ VỀ LUÔN CLASSROOM CÓ ID MÀ K CẦN FIND
       return view('admin.user.user_add', ['user' => $user]);
}
public function update(Request $request)
     {
      $this->validate($request, [
        'fistname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'password'=> 'required|min:6',
            'address' => 'required',
            'birthday'=>'required',
            'roles'=>'nullable'
            
        ]);

      $data = $request->except('_token' , 'id');
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
      return $this->index();
}

//// LOGIN

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
