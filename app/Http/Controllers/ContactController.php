<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contacts::latest()->paginate(7);
        // dd($contacts);
  
        return view('contacts.index',compact('contacts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
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
            'name' => 'required',
            'email_address' => 'required',
            'subject' => 'required',
            'number' => 'required',
            'message' => 'required',
        ]);

        Contacts::create($request->all());
   
        return redirect('/')->with('success','Contacts created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function show(Contacts $contacts, $id)
    {   
            $contacts = Contacts::find($id);        
         return view('contacts.show', compact('contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacts $contacts, $id)
    {
        $contacts = Contacts::find($id);
        return view('contacts.edit',compact('contacts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contacts $contacts)
    {
        $request->validate([
            'name' => 'required',
            'email_address' => 'required',
            'subject' => 'required',
            'number' => 'required',
            'message' => 'required',
            'date_time' => 'required',
        ]);

        $contacts->update($request->all());
        // dd($contacts);

        return redirect()->route('contacts.index')
                        ->with('success','Message updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacts $contacts, $id)
    {

        $contacts = Contacts::find($id);
        $contacts->delete();
  
        return redirect()->route('contacts.index')
                        ->with('success','Message deleted successfully');
    }
}
