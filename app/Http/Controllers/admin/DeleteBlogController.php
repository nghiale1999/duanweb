<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelBlog;

class DeleteBlogController extends Controller
{
    public function GetDelete($id){
        ModelBlog::where('id',$id)->delete();
        return view('admin.deleteBlog');
    }
}
