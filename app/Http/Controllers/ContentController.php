<?php

namespace App\Http\Controllers;

use Auth;
use App\Content;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
  {

    public function index()
    {
        return view('content.index', compact('content'));
    }

    public function create()
    {
        return view('content.create', compact('content'));
    }

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

    public function show(Content $content){

        $user = Auth::user();

        $profile = DB::table('profiles')
                              ->where('idx', $content->idx)
                              ->get();


        return view('content.detail',compact('content', 'profile', 'user'));
    }

    public function edit(Content $content)
    {
        return view('content.edit',compact('content'));
    }

    public function update($id, Request $data)
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
      ]);

      $update = Content::find($id);

      $update->idx = $data['idx'];
      $update->title = $data['title'];
      $update->type = $data['type'];
      $update->category_1 = $data['category_1'];
      $update->category_2 = $data['category_2'];
      $update->category_3 = $data['category_3'];
      $update->province = $data['province'];
      $update->city = $data['city'];
      $update->place = $data['place'];
      $update->incident = $data['incident'];
      $update->chronology = $data['chronology'];
      $update->desc = $data['desc'];
      $update->note = $data['note'];

      $update->save();

      return redirect()->route('account.post', $data{'idx'})
                      ->with('success','Post Updated successfully.');

    }

    public function destroy(Content $content)
    {
        $content = new Content;      
        $contet = Content::find($conent); 
        $content->delete($content);

    }
}
