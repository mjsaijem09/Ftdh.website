<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::latest()->paginate(5);
  
        return view('slider.index',compact('slider'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.create');
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
            'image_slide' => 'required',
            'image_slide.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        // $promo = \Input::get('promo');
        if($request->hasfile('image_slide'))
         {

            foreach($request->file('image_slide') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/assets/sites/images/slider', $name);  
                $data = $name;  
            }
         }
         $slider= new Slider();
         $slider->image_slide= $data;
        // dd($slider);
        $slider->save();
   
        return redirect()->route('slider.index')
                         ->with('success', 'Your images has been successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
      public function update(Request $request, Slider $slider)
    {   
     

        $slider->update($request->all());
       
        if($request->hasfile('image_slide'))
         {

            foreach($request->file('image_slide') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/assets/sites/images/slider', $name);  
                $data = $name;  
            }
         }
         $slider->update($request->all());
  
        return redirect()->route('slider.index')
                        ->with('success','Slider  updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
  
        return redirect()->route('slider.index')
                        ->with('success', 'Slider deleted successfully');
    }
}
