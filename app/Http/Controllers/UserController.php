<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
Use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $account = DB::table('users')
                              ->where('idx', $user->idx)
                              ->get();

        return view('profile.account', compact('account'));
    }


    public function edit(User $id)
    {
        $account = User::find($id);
        
        return view('account.edit', ['account' => $account]);
    }


    public function update($id, Request $data)
    {

        request()->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',

        ]);

        $update = User::find($id);

        $update->idx = $data['idx'];
        $update->name = $data['name'];
        $update->username = $data['username'];
        $update->email = $data['email'];

        $data->file('avatar')->store('public/avatar');
        $update->avatar = $data->file('avatar')->hashName('avatar/');

        $update->save();

        return redirect()->route('account')
                        ->with('success','Account updated successfully.');
    }

    public function avatar(Request $request){

        $user = Auth::user();
        $request->file('avatar')->store('public/avatar');
        $user->avatar = $request->file('avatar')->hashName('avatar/');
        $user->save();
        
        return back()->with('success','Upload Berhasil');
    }

    public function post($id){
        
        $user = Auth::user();
        $content = DB::table('contents')
                            ->where('idx', $id)
                            ->get();

        return view('account.post', compact('user', 'content'));

    }

    public function username($id, Request $data){
        
        request()->validate([
            'username' => 'required'
        ]);

        $update = User::find($id);

        $update->username = $data['username'];
        $update->save();

        return back()->with('success','Changed Username successfully');

    }

    public function email($id, Request $data){
        
        request()->validate([
            'email' => 'required'
        ]);

        $update = User::find($id);

        $update->email = $data['email'];
        $update->save();

        return back()->with('success','Changed Email successfully');

    }
}
