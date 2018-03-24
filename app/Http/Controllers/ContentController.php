<?php

namespace App\Http\Controllers;

use Auth;
use App\Content;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('content.index', compact('content'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.create', compact('content'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {

        request()->validate([
            'title' => 'required',
            'type' => 'required',
            'category_1' => 'required',
            'category_2' => 'required',
            'category_3' => 'required',
            'province' => 'required',
            'city' => 'required',
            'place' => 'required',
            'incident' => 'required',
            'chronology' => 'required',
            'desc' => 'required',
            'note' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        $insert = new Content();

        $insert->idx = $data['idx'];
        $insert->title = $data['title'];
        $insert->type = $data['type'];
        $insert->category_1 = $data['category_1'];
        $insert->category_2 = $data['category_2'];
        $insert->category_3 = $data['category_3'];
        $insert->province = $data['province'];
        $insert->city = $data['city'];
        $insert->place = $data['place'];
        $insert->incident = $data['incident'];
        $insert->chronology = $data['chronology'];
        $insert->desc = $data['desc'];
        $insert->note = $data['note'];


        $file       = $data->file('image');
        $fileName   = str_random(5).'.'.$file->getClientOriginalName();
        $data->file('image')->move("content/", $fileName);

        $insert->image = $fileName;
        $insert->save();


        return redirect()->route('home')
                        ->with('success','Content created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content){
        
        $profile = DB::table('profiles')
                              ->where('idx', $content->idx)
                              ->get();
                              
        return view('content.detail',compact('content', 'profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        //
    }

    /**
     * insert the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $request, Content $content)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        //
    }
}
