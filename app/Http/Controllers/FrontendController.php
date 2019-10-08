<?php

namespace App\Http\Controllers;

use App\PostInfo;
use Illuminate\Http\Request;
use Storage;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->toArray());
        $post = new PostInfo();

        $path = Storage::putFile('public', $request->file('image'));
        $url = Storage::url($path);

        $request->validate([
            'title' => 'required',
            'description' => 'required|max:500',
            'image' => 'required',
        ]);


        $post->title = $request->title;
        $post->description = $request->description;
        $post->image = $url;

        $post->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $post = PostInfo::latest('created_at')->get();

        $post->title = $request->title;
        $post->description = $request->description;
        $post->image = $request->image;

        return view('pages.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = PostInfo::find($id);

        return view('pages.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = PostInfo::find($request->id);

        $path = Storage::putFile('public', $request->file('image'));
        $url = Storage::url($path);

        $post->title = $request->title;
        $post->description = $request->description;
        $post->image = $url;

        $post->save();

        return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = PostInfo::find($id);

        $post->delete();

        return redirect('/');

    }
    public function details($id)
    {
        $post = PostInfo::find($id);

        return view('pages.details', compact('post'));

    }

}
