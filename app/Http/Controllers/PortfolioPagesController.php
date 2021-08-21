<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Portfolio;

class PortfolioPagesController extends Controller
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
        $portfolios = Portfolio::all();
        return view('pages.portfolio.list', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('pages.portfolio.create', compact('portfolios'));
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
            'big_image' => 'required|image', 
            'description' => 'required|string', 
        ]);

        $portfolios = new Portfolio;
        $portfolios->description = $request->description;
        $portfolios->title = $request->title;

        $big_file = $request->file('big_image');
        Storage::putFile('public/img', $big_file);
        $portfolios->big_image = "storage/img/".$big_file->hashName();

        $portfolios->save();

        return redirect()->route('admin.portfolios.create')->with('success', 'Data Telah Di Tambah');
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
        $portfolio = Portfolio::find($id);
        return view('pages.portfolio.edit', compact('portfolio'));
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

        $portfolios = Portfolio::find($id);
        $portfolios->description = $request->description;
        $portfolios->title = $request->title;


        if($request->file('big_image')){
            $big_file = $request->file('big_image');
            Storage::putFile('public/img', $big_file);
            $portfolios->big_image = "storage/img/".$big_file->hashName();
        }

        $portfolios->save();

        return redirect()->route('admin.portfolios.list')->with('success', 'Data Telah Di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        @unlink(public_path($portfolio->big_image));
        $portfolio->delete();

        return redirect()->route('admin.portfolios.list')->with('success', 'Data Sukses Di Hapus ');
    }
}
