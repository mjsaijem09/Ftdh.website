<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::latest()->paginate(5);
  
        return view('client.index',compact('client'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
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
            'name_image' => 'required',
            'name_image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'message' => 'required'
        ]);

        if($request->hasfile('name_image'))
         {

            foreach($request->file('name_image') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/assets/sites/images/name_image/', $name);  
                $data = $name;  
            }
         }
         $client= new Client();
         $client->name_image= $data;
        $client-> name = $request->get('name');
        $client-> message = $request->get('message');
        // dd($client);
        $client->save();
   
        return redirect()-> route('client.index')
                        -> with('success', 'Your images has been successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {

        return view('client.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {   
        $request->validate([
            'name' => 'required',
            'message' => 'required',
            'name_image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        if($request->hasfile('name_image'))
         {

            foreach($request->file('name_image') as $image)
            {
                $name = $image->getClientOriginalName();
                $image->move(public_path().'/assets/sites/images/name_image/', $name);
                $data = $name; 
               
            }
         }
           
                $client =Client::find($id);
                $client->name_image= $data;
                // $client->name_image = $request -> name_image;
                $client->name = $request->get('name');
                $client->message = $request->get('message');
                $client->save();
        // if($request->hasfile('name_image'))
        //  {

        //     foreach($request->file('name_image') as $image)
        //     {
        //         $name=$image->getClientOriginalName();
        //         $image->move(public_path().'/assets/sites/images/name_image', $name);  
        //         $data = $name;

        //         $client = new Client();
        //         $client->name_image = $data;
        //         $client->name = $request->get('name');
        //         $client->message = $request->get('message');
        //         $client->save();
        //     }
        //  }
        //  $client= Client::find($id);
        //  $client->name_image= $data;
        // $client-> name = $request->get('name');
        // $client-> message = $request->get('message');
        // // dd($client);
        // $client->save();
        
        return redirect()->route('client.index')
                        ->with('success','Client updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
  
        return redirect()->route('client.index')
                        ->with('success','Client us deleted successfully');
    }
}
