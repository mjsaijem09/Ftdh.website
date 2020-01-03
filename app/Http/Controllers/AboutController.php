<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::latest()->paginate(7);
        // dd($about);
  
        return view('about.index',compact('about'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {


        $request->validate([
            'details' => 'required',
        ]);

        about::create($request->all());
   
        return redirect('about')->with('success','about created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\about  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about, $id)
    {   
            $about = About::find($id);        
         return view('about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\about  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('about.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\about  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            'details' => 'required',

        ]);

        $about->update($request->all());
        // dd($about);

        return redirect()->route('about.index')
                        ->with('success','Message updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\about  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {

        $about->delete();
  
        return redirect()->route('about.index')
                        ->with('success','Message deleted successfully');
    }
}
