<?php

namespace App\Http\Controllers;

use Auth;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{


    public function __construct(){
        $this->middleware('auth');
    }


    public function index(){

        $user = Auth::user();
        $profile = DB::table('profiles')
                              ->where('idx', $user->idx)
                              ->get();

        return view('profile.index', compact('profile'));
    }


    public function create(){
        return view('profile.form');
    }


    public function store(Request $data){
        request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'pob' => 'required',
            'dob' => 'required',
            'address' => 'required',

        ]);

        $insert = new Profile();
        $insert->idx = $data['idx'];
        $insert->first_name = $data['first_name'];
        $insert->last_name = $data['last_name'];
        $insert->phone = $data['phone'];
        $insert->dob = $data['dob'];
        $insert->pob = $data['pob'];
        $insert->address = $data['address'];

        $insert->save();


        return redirect()->route('profile')
                        ->with('success','Profile created successfully.');
    }


    public function show(Profile $profile){
        //
    }

    public function edit(Profile $id) {

        $profile = Profile::find($id);
        
        return view('profile.edit', ['profile' => $profile]);
    }


    public function update($id, Request $data){

        request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'pob' => 'required',
            'dob' => 'required',
            'address' => 'required',

        ]);

        $update = Profile::find($id);

        $update->idx = $data['idx'];
        $update->first_name = $data['first_name'];
        $update->last_name = $data['last_name'];
        $update->phone = $data['phone'];
        $update->dob = $data['dob'];
        $update->pob = $data['pob'];
        $update->address = $data['address'];

        $update->save();

        return redirect()->route('profile')
                        ->with('success','Profile updated successfully.');
    }

    public function destroy(Profile $profile){
        //
    }

    public function setting($id){

        $user = Auth::user();
        $profile = DB::table('profiles')
                              ->where('idx', $id)
                              ->get();

        return view('profile.setting', compact('profile', 'user'));

    }

}
