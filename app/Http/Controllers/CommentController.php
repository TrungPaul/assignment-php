<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comment;
use App\Http\Requests\CommentRequest;
class CommentController extends Controller
{
    function index() {
    		$comment=comment::all();
    		return view ('admin.comment.comment' , [ 'comment' => $comment]);
    }
    function remove($comment)
   {
      comment::destroy($comment);
      return $this->index();
   }
   public function createform(){
   	return view('admin.comment.comment_add');
   }
  public function create(CommentRequest $request)
            {
   			
   			$data = $request->except('_token');
            comment::create($data);
   			return $this->index();
}
  public function editform(comment $comment){
     // dDAT TEN THAM SOS TRUFNG S THAM SỐ Ở ROUTE KÈM THEO CLASSROOM THÌ TRẢ VỀ LUÔN CLASSROOM CÓ ID MÀ K CẦN FIND
       return view('admin.comment.comment_add', ['comment' => $comment]);
   }
    public function update(CommentRequest $request)
     {
      $data = $request->except('_token' , 'id');
       $comment = comment::find($request->id);
      $comment->update($data);
      return $this->index();
}
}
