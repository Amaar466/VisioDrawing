<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.user");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $user = new User;
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();
    //    $input = $request->all();

    //   $validation =  Validator::make($input,[
    //     'name' =>'required',
    //      'phone' =>'required',
    //      'email'=>'required',
    //      'password'=>'required',
    //    ]);
    //    if ($validation->fails()) {
    //        return response()->json(['errors' => $validation->errors()->all()]);
    //    }

    //     User::create($input);

    //    return response()->json(['status' => true, 'message' => 'User added successfully.' ]);
    }

    /**
     * Display the specified resource.
     */


       public function new1()
       {
        return 'hello';
       }



     public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
