<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
    * ブログ一覧の表示
    *
    * @return view
    */
    public function showList() {
        // Blog modelから全てのデータを取得
        $blogs = Blog::all();
        return view('blog.list', ['blogs' => $blogs]);
    }

    /**
    * ブログ詳細の表示
    * @param int $id それぞれのid
    * @return view
    */
    public function showDetail($id) {
        $blog = Blog::find($id);
        // guard
        if (is_null($blog)) {
            \Session::flash('err_msg', 'データがありません');
            return redirect(route('blogs'));
        }

        return view('blog.detail', ['blog' => $blog]);
    }
}
