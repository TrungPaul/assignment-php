<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\comment;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
  function __construct(){
         $this->middleware(['auth', 'checkUser']);
      }
     function index() {
    		$product=product::all();
    		return view ('admin.product.product' , [ 'product' => $product]);

    }
     function list() {
        $product=product::all();
        return view ('productList' , [ 'product' => $product]);

    }
      function detail(product $product) {
        $product = $product->load('comments');
         dd($product);
        return view ('productDetail' , [ 'product' => $product]);

    }
    function remove($product)
   {
      product::destroy($product);
      return $this->index();
   }
   public function createform(){
   	return view('admin.product.product_add');
   }
    public function create(ProductRequest $request)
            {
   			
   			$data = $request->except('_token');
            product::create($data);
   			return $this->index();
}
public function editform(product $product){
    
       return view('admin.product.product_add', ['product' => $product]);
   }
public function update(ProductRequest $request)
     {
      $data = $request->except('_token' , 'id');
      $product = product::find($request->id);
      $product->update($data);
      return $this->index();
}
}
