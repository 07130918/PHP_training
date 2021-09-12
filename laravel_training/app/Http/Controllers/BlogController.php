<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{   /**
    * ブログ一覧の表示
    *
    * @return view
    */
    public function showList() {
        // Blog modelから全てのデータを取得
        $blogs = Blog::all();
        return view('blog.list', ['blogs' => $blogs]);
    }
}
