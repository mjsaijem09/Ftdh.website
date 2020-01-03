<?php

namespace App\Http\Controllers;

use App\Models\Contact_Us;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact_us = Contact_Us::latest()->paginate(7);
        // dd($contacts);
  
        return view('contact_us.index',compact('contact_us'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact_us.create');
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
            'address' => 'required',
            'number' => 'required',
            'messenger' => 'required',
        ]);

        Contact_Us::create($request->all());
   
        return redirect('contact_us')->with('success','Contact Us created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function show(Contact_Us $contact_us, $id)
    {   
            $contact_us = Contact_Us::find($id);        
         return view('contact_us.show', compact('contact_us'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact_Us $contact_us)
    {
        
        return view('contact_us.edit',compact('contact_us'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact_Us $contact_us)
    {
        $request->validate([
            'address' => 'required',
            'number' => 'required',
            'messenger' => 'required',
        ]);

        $contact_us->update($request->all());
        // dd($contacts);

        return redirect()->route('contact_us.index')
                        ->with('success','Message updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact_Us $contact_us)
    {

        
        $contact_us->delete();
  
        return redirect()->route('contact_us.index')
                        ->with('success','Message deleted successfully');
    }
}