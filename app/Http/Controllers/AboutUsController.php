<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about_us = AboutUs::latest()->paginate(5);
  
        return view('about_us.index',compact('about_us'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('about_us.create');
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
            'title' => 'required',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'details' => 'required'
        ]);

        if($request->hasfile('image'))
         {

            foreach($request->file('image') as $image)
            {
                $name = $image->getClientOriginalName();
                $image->move(public_path().'/assets/sites/images/image', $name);
                $data = $name; 

                $about_us = new AboutUs();
                $about_us->image = $data;
                $about_us->title = $request->get('title');
                $about_us->details = $request->get('details');
                $about_us->save();
               
            }
         }
           
                $about_us = new AboutUs();
                $about_us->image = $request -> image;
                $about_us->title = $request->get('title');
                $about_us->details = $request->get('details');

                // dd($about_us);


         
        return redirect()->route('about_us.index')
                        ->with('success','About created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\About_us  $about_us
     * @return \Illuminate\Http\Response
     */
    public function show(AboutUs $about_us)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About_us  $about_us
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutUs $about_us)
    {

        return view('about_us.edit',compact('about_us'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About_us  $about_us
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $request->validate([
            'title' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'details' => 'required'
        ]);

        if($request->hasfile('image'))
         {

            foreach($request->file('image') as $image)
            {
                $name = $image->getClientOriginalName();
                $image->move(public_path().'/assets/sites/images/image', $name);
                $data = $name; 

                $about_us = new AboutUs();
                $about_us->image = $data;
                $about_us->title = $request->get('title');
                $about_us->details = $request->get('details');
                $about_us->save();
               
            }
         }
           
                $about_us = AboutUs::find($id);
                $about_us->image = $request-> image;
                $about_us->title = $request->get('title');
                $about_us->details = $request->get('details');
                $about_us->save();
           // dd($);

        
        return redirect()->route('about_us.index')
                        ->with('success','About updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About_us  $about_us
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutUs $about_us)
    {
        $about_us->delete();
  
        return redirect()->route('about_us.index')
                        ->with('success','About us deleted successfully');
    }
}
