<?php

namespace App\Http\Controllers;

use App\Models\OurSites;
use Illuminate\Http\Request;

class OurSitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $our_sites = OurSites::latest()->paginate(5);
  
        return view('our_sites.index',compact('our_sites'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('our_sites.create');
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
        //     'title' => 'required',
        //     'about_image' => 'unique',
        //     'details' => 'required',
        // ]);
  
        // OurSites::create($request->all());
   
        // return redirect()->route('our_sites.index')
        //                 ->with('success','About Us created successfully.');

        $request->validate([
            'name_site' => 'unique',
            'address' => 'required',
            'number' => 'required',
            
        ]);
        
        OurSites::create($request->all());
   
        return redirect()->route('our_sites.index')
                        ->with('success','New Site created successfully.');
    }
    public function show(OurSites $our_sites)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\our_sites  $our_sites
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $our_sites = OurSites::find($id);
        return view('our_sites.edit',compact('our_sites'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\our_sites  $our_sites
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OurSites $our_sites, $id)
    {
        $request->validate([
            'name_site' => 'unique',
            'address' => 'required',
            'number' => 'required',
        ]);
        
        $our_sites = OurSites::find($id); 
        $our_sites->update($request->all());
  
        return redirect()->route('our_sites.index')
                        ->with('success','Site updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\our_sites  $our_sites
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {

        $our_sites = OurSites::find($id);

        $our_sites->delete();
  
        return redirect()->route('our_sites.index')
                        ->with('success','Our Sites deleted successfully');
    }
}
