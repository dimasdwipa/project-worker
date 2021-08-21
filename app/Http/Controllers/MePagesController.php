<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Me;

class MePagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $me = Me::all();
        return view('pages.me.list', compact('me'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('pages.me.create', compact('me'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'img' => 'required|image', 
            'description' => 'required|string', 
        ]);

        $me = new Me;
        $me->description = $request->description;
        $me->title = $request->title;

        $image = $request->file('img');
        Storage::putFile('public/img', $image);
        $me->img = "storage/img/".$image->hashName();

        $me->save();

        return redirect()->route('admin.me.create')->with('success', 'Data Telah Di Tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $me = Me::find($id);
        return view('pages.me.edit', compact('me'));
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
        $this->validate($request, [
            'title' => 'required|string',               
            'description' => 'required|string', 
        ]);

        $me = Me::find($id);
        $me->description = $request->description;
        $me->title = $request->title;


        if($request->file('img')){
            $image = $request->file('img');
            Storage::putFile('public/img', $image);
            $me->img = "storage/img/".$image->hashName();
        }

        $me->save();

        return redirect()->route('admin.me.list')->with('success', 'Data Telah Di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $me = me::find($id);
        @unlink(public_path($me->img));
        $me->delete();

        return redirect()->route('admin.me.list')->with('success', 'Data Sukses Di Hapus ');
    }
}
