<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partner = Partner::latest()->paginate(8);
  
        return view('partner.index',compact('partner'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partner.create');
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
           
            'partner' => 'required',
            'partner.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
           
        ]);

        if($request->hasfile('partner'))
         {

            foreach($request->file('partner') as $image)
            {
                $name = $image->getClientOriginalName();
                $image->move(public_path().'/assets/sites/images/partner/', $name);
                $data = $name; 
               
            }
         }
           
                $partner = new Partner();
                $partner->partner = $data;
                $partner->save();

                // dd($about_us);


         
        return redirect()->route('partner.index')
                        ->with('success','Image created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\About_us  $about_us
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {

        return view('partner.edit',compact('partner'));
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


        if($request->hasfile('partner'))
         {

            foreach($request->file('partner') as $image)
            {
                $name = $image->getClientOriginalName();
                $image->move(public_path().'/assets/sites/images/partner/', $name);
                $data = $name; 
               
            }
         }
           
                $partner = Partner::find($id);
                $partner->partner = $data;
                // $partner->partner = $request -> partner;
                $partner->save();
        
        return redirect()->route('partner.index')
                        ->with('success','Image updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About_us  $about_us
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();
  
        return redirect()->route('partner.index')
                        ->with('success','Image deleted successfully');
    }
}
