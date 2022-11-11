<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        $allData = Post::latest()->get();
        return view('post.index', ['lists' => $allData]);
    }

    public function addFile()
    {
        return view('post.add');
    }

    public function store(Request $request)
    {
        // dd($request->file());
        $formFields = $request->validate([
            'title' => 'required|max:255',
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        // dd($formFields);

        Post::create($formFields);

        return redirect()->route('index');
    }
}
