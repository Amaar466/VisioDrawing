<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\personalInfo;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $record = personalInfo::all();
        return view('admin.record',compact('record'));
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
       $record = new personalInfo;
       $record->id_record= $request->input('id_record');
       $record->name= $request->input('name');
       $record->motherName= $request->input('motherName');
       $record->privateNumber= $request->input('privateNumber');
       $record->kindFile= $request->input('kindFile');
       $record->department= $request->input('department');
       $record->note= $request->input('note');
       $record->save();
       return redirect('/record');
    //    return response()->json(['res'=> 'Record Created Successfully']);


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        return view('/admin.record' , compact('record'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $record = personalInfo::find($id);
        return view('admin.user' , compact('record'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $record = personalInfo::find($id);

        $record->id_record= $request->input('id_record');
        $record->name= $request->input('name');
        $record->motherName= $request->input('motherName');
        $record->privateNumber= $request->input('privateNumber');
        $record->kindFile= $request->input('kindFile');
        $record->department= $request->input('department');
        $record->note= $request->input('note');
        $record->save();
        return redirect('/record')->with('message', 'User updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destory(string $id)
    {
        $record = personalInfo::find($id);
        $record->delete();
        return redirect('/record')->with('success', 'Record deleted successfully.');
    }
}
