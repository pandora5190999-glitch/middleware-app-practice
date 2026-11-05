<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function show($id)
    {
        // IDで投稿を検索（見つからない場合は404エラー）
        $admin = Post::findOrFail($id);

        // ビューを返す
        return view('admin.show', ['admin' => $admin]);
    }
}
