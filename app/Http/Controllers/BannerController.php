<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::latest()->paginate(5);
  
        return view('banners.index',compact('banners'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
           
        //     'banner_image' => 'required',
        // ]);
  
        // Banner::create($request->all());
   
        // return redirect()->route('banners.index')
        //                 ->with('success','Banner created successfully.');

       $request->validate([
            'banner_image' => 'required',
            'banner_image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        // $promo = \Input::get('promo');
        if($request->hasfile('banner_image'))
         {

            foreach($request->file('banner_image') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/assets/sites/images/banner', $name);  
                $data = $name;  
            }
         }
         $banners= new Banner();
         $banners->banner_image= $data;
        // dd($banners);
        $banners->save();
   
        return redirect()->route('banners.index')
                         ->with('success', 'Your images has been successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\navbar  $navbar
     * @return \Illuminate\Http\Response
     */

    public function edit(Banner $banners, $id)
    {

        $banners = Banner::find($id);

        return view('banners.edit',compact('banners'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banners, $id)
    {   

        $banners->update($request->all());
        // $promo = \Input::get('promo');
        if($request->hasfile('banner_image'))
         {

            foreach($request->file('banner_image') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/assets/sites/images/banner', $name);  
                $data = $name;  
            }
         }

         
         $banners = Banner::find($id);
         $banners->banner_image= $data;
        // dd($banners);
         $banners->save();
         
  
        return redirect()->route('banners.index')
                        ->with('success','Banner updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banners, $id)
    {   
        $banners = Banner::find($id);
        $banners->delete();
  
        return redirect()->route('banners.index')
                        ->with('success', 'Banner deleted successfully');
    }
}
