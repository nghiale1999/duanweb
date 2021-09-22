<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RequestBlog;
use App\ModelBlog;
use App\Http\Requests\UpdateAdmin;
class AddBlogController extends Controller
{
    public function GetAdd(){
        return view('admin.addBlog');
    }

    public function PostAdd(RequestBlog $request){
           
        $file = $request->file('file');  
        $hinh = $file->getClientOriginalName();
        $data = new ModelBlog;
        $data->tieude = $request->tieude;
        $data->hinh = $hinh;
        $data->noidung = $request->noidung;
        $data->des = $request->noidung;
        $data->save();
        if($data->save()){
            $file->move('upload', $file->getClientOriginalName());
            return redirect()->back()->with('success','them blog thang cong');
        }else{
            return redirect()->back()->withErrors('them that bai');
        }
        
    }
}
