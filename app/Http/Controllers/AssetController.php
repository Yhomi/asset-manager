<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asset;
use App\User;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asset=Asset::orderBy('created_at','desc')->get();

        return view('pages.index',compact('asset'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate

        $this->validate($request,array(
            'name'=>'required',
            'staff_id'=>'required|max:6',
            'department'=>'required',
            'device_type'=>'required',
            'device_name'=>'required',
            'serial_no'=>'required',
            'tag_no'=>'required',
            'location'=>'required'
        ));

        // store assets

        $asset=new Asset;
        $asset->name=$request->name;
        $asset->staff_id=$request->staff_id;
        $asset->department=$request->department;
        $asset->device_type=$request->device_type;
        $asset->device_name=$request->device_name;
        $asset->serial_no=$request->serial_no;
        $asset->tag_no=$request->tag_no;
        $asset->location=$request->location;
        $asset->user_id=auth()->user()->id;
        $asset->save();

        // redirect

        return \redirect('/asset')->with('success','Device Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "It worked";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $asset=Asset::findorFail($id);
        return view('pages.edit',\compact('asset'));
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
        $this->validate($request,array(
            'name'=>'required',
            'staff_id'=>'required|max:6',
            'department'=>'required',
            'device_type'=>'required',
            'device_name'=>'required',
            'serial_no'=>'required',
            'tag_no'=>'required',
            'location'=>'required'
        ));

        $asset=Asset::find($id);
        $asset->name=$request->name;
        $asset->staff_id=$request->staff_id;
        $asset->department=$request->department;
        $asset->device_type=$request->device_type;
        $asset->device_name=$request->device_name;
        $asset->serial_no=$request->serial_no;
        $asset->tag_no=$request->tag_no;
        $asset->location=$request->location;
        $asset->save();
        return \redirect('/asset')->with('success',"Device Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asset=Asset::find($id);
        $asset->forceDelete();

        return redirect('/asset')->with('success',"Device Deleted");

    }
}
