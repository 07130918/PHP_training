<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Requests\BlogRequest;

class BlogController extends Controller
{
    /**
    * ブログ一覧の表示
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

    /**
    * ブログ作成画面の表示
    * @return view
    */
    public function showCreate() {
        return view('blog.form');
    }

    /**
    * ブログ登録
    * @return view
    * postリクエストが渡ってくるメソッドは引数にリクエストのオブジェクトを取る
    */
    public function exeStore(BlogRequest $request) {
        $inputs = $request->all();


        // 登録の際に通信ミスったとき用, ミスったら登録しない
        \DB::beginTransaction();
        try {
            // ブログの登録
            Blog::create($inputs);
            \DB::commit();
        } catch (\Throwable $e) {
            \DB::rollback();
            abort(500);
        }

        \Session::flash('err_msg', 'ブログを登録しました');
        return redirect(route('blogs'));
    }
}
