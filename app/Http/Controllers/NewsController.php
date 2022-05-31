<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    public function create(){
        return view('pages.news.create');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'abstract' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'body' => 'required',
            'image' => 'nullable|image:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {

            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('image')->storeAs('public/news_images', $fileNameToStore);
        }

        $news = News::create([
            'title' => $request->get('title'),
            'abstract' => $request->get('abstract'),
            'author' => $request->get('author'),
            'body' => $request->get('body'),
            'image' => $request->file('image') ? $fileNameToStore : null,
        ]);

        return redirect('/');

    }
}
