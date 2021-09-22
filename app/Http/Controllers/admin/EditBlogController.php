<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelBlog;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RequestBlog;
use Illuminate\Foundation\Auth\User;

class EditBlogController extends Controller
{
    public function GetEdit($id){

        $data = ModelBlog::where('id',$id)->get();
        
        return view('admin.editBlog',compact('data'));
    }

    public function PostEdit(RequestBlog $request, $id){
       
       
        $blog = ModelBlog::findOrFail($id);

        $file = $request->file('file');
        
        $data = $request->all();
        $data['hinh']=$file->getClientOriginalName();
        $blog->update($data); 
        if($blog->update($data)){
            $file->move('upload', $file->getClientOriginalName());
            return redirect()->back()->with('success','update thanh coong');
        }else{
            return redirect()->back()->withErrors('update that bai');
        }



        
    }
}
