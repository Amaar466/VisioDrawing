<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index(){
        $user = User::all();
        return view('admin.user' , compact('user'));
    }
    public function store(Request $request)
    {
        //  dd($request->all());
       $user = new User;
       if ($request->hasFile('image')) {
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time() . '.' . $ext;
        $file->move('assets/upload/image/', $filename);

        $user->image = $filename;
    }
       $user->name = $request->input('name');
       $user->phone = $request->input('phone');
       $user->email = $request->input('email');
       $user->password = Hash::make($request->input('password'));
       $user->save();
       return redirect('/user');

    }
    public function edit($id)
    {
            $user = User::find($id);
            return view('admin.user' , compact('user'));

    }
    public function update(Request $request , $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->save();
        return redirect('/user')->with('message', 'User updated successfully!');
    }

    public function show()
    {

        $user = User::all();
        return view('admin.profile' , compact('user'));
    }
    public function destory ($id)
    {

        $user = User::find($id);
         $user->delete();
         return redirect('/user')->with('success', 'Record deleted successfully.');

    }
}
