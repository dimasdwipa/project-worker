<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resume;

class ResumePagesController extends Controller
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
        $resume = Resume::all();
        return view('pages.resume.list', compact('resume'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('pages.resume.create', compact('resume'));
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

        $resume = new Resume;
        $resume->description = $request->description;
        $resume->title = $request->title;
        $resume->date = $request->date;
        $resume->workplace = $request->workplace;        

        $resume->save();

        return redirect()->route('admin.resume.create')->with('success', 'Data Telah Di Tambah');
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
        $resume = Resume::find($id);
        return view('pages.resume.edit', compact('resume'));
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

        $resume = Resume::find($id);
        $resume->description = $request->description;
        $resume->title = $request->title;        
        $resume->date = $request->date;        
        $resume->workplace = $request->workplace;        

        $resume->save();

        return redirect()->route('admin.resume.list')->with('success', 'Data Telah Di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resume = Resume::find($id);        
        $resume->delete();

        return redirect()->route('admin.resume.list')->with('success', 'Data Sukses Di Hapus ');
    }
}
