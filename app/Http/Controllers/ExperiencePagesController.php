<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;

class ExperiencePagesController extends Controller
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
        $experience = Experience::all();
        return view('pages.experience.list', compact('experience'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('pages.experience.create', compact('experience'));
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
            'date' => 'required|date', 
            'workplace' => 'required|string', 
            'description' => 'required|string', 
        ]);

        $experience = new Experience;
        $experience->description = $request->description;
        $experience->title = $request->title;
        $experience->date = $request->date;
        $experience->workplace = $request->workplace;        

        $experience->save();

        return redirect()->route('admin.experience.create')->with('success', 'Data Telah Di Tambah');
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
        $experience = Experience::find($id);
        return view('pages.experience.edit', compact('experience'));
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
            'date' => 'required|date',
            'workplace' => 'required|string',
            'description' => 'required|string', 
        ]);

        $experience = Experience::find($id);
        $experience->description = $request->description;
        $experience->title = $request->title;        
        $experience->date = $request->date;        
        $experience->workplace = $request->workplace;        

        $experience->save();

        return redirect()->route('admin.experience.list')->with('success', 'Data Telah Di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $experience = Experience::find($id);        
        $experience->delete();

        return redirect()->route('admin.experience.list')->with('success', 'Data Sukses Di Hapus ');
    }
}
