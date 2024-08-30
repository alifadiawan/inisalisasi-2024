<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countBerita = News::where('category', 'Berita')->count();
        $countPengumuman = News::where('category', 'Pengumuman')->count();
        return view('admin.berita.index', compact('countBerita' ,'countPengumuman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'news_title' => $request->news_title,
            'category' => $request->category,
            'content' => $request->content
        ];

        News::insert($data);
        return redirect('admin/berita-dan-pengumuman')->with('success', 'Postingan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(news $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(news $news)
    {
        return view('admin.berita.view');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, news $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(news $news)
    {
        //
    }

    public function user_index(){
        
        $news = news::all();
        return view('berita.index', compact('news'));

    }

    public function user_show($id){

        $current_news = news::find($id);
        return view('berita.show', compact('current_news'));

    }

}
