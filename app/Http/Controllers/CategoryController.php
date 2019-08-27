<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
  function __construct(){
         $this->middleware(['auth', 'checkUser']);
      }
    function index() {
    		$category=category::all();
        $category= $category->load('childs');
    		return view ('admin.category.category' , [ 'category' => $category]);
    }

public function createform(){
    $category=category::all();
   $category= $category->load('childs');
   	return view('admin.category.cate_add' , [ 'category' => $category]);
   }
   public function create(CategoryRequest $request)
            {
   			
   			$data = $request->except('_token');
            category::create($data);
   			return $this->index();
}
 function remove($category)
   {
      category::destroy($category);
      return $this->index();
   }
   public function editform(category $category){
     // dDAT TEN THAM SOS TRUFNG S THAM SỐ Ở ROUTE KÈM THEO CLASSROOM THÌ TRẢ VỀ LUÔN CLASSROOM CÓ ID MÀ K CẦN FIND 
      $category= $category->load('childs');
       return view('admin.category.cate_edit', ['cate' => $category]);
   }
   public function update(CategoryRequest $request)
     {
         // láy ra dữ liệu cần update
      $data = $request->except('_token' , 'id');
      // tìm ra dữ liệu có id truyền vào
       $category = category::find($request->id);
      // $classRoom = classRoom::where('id', "=" ,$request->id )->first();
      $category->update($data);
      return $this->index();
}
}
