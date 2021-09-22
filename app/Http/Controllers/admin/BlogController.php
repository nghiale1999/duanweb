<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelBlog;

class BlogController extends Controller
{
    public function GetBolg(){
        $data = ModelBlog::paginate(3);
        return view('admin.blog',compact('data'));
    }
}
