<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutPagesController extends Controller
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
        $about = About::all();
        return view('pages.about.list', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.about.create', compact('about'));
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
            'icon' => 'required|string', 
            'description' => 'required|string', 
        ]);

        $about = new About;
        $about->icon = $request->icon;
        $about->description = $request->description;
        $about->title = $request->title;

        $about->save();

        return redirect()->route('admin.about.create')->with('success', 'Data Telah Di Tambah');
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
        $about = About::find($id);
        return view('pages.about.edit', compact('about'));
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
            'icon' => 'required|string', 
            'description' => 'required|string', 
        ]);

        $about = About::find($id);
        $about->icon = $request->icon;
        $about->description = $request->description;
        $about->title = $request->title;

        $about->save();

        return redirect()->route('admin.about.list')->with('success', 'Data Sukses Di Tambah ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::find($id);
        $about->delete();

        return redirect()->route('admin.about.list')->with('success', 'Data Sukses Di Hapus ');
    }
}
