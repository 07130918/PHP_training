<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{   /**
    * ブログ一覧の表示
    *
    * @return view
    */
    public function showList() {
        return view('blog.list');
    }
}
