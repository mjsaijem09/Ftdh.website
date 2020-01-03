<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $navbar = Navbar::latest()->paginate(5);
  
        return view('navbar.index',compact('navbar'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('navbar.create');
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
            'nav_name' => 'required',
            'nav_code' => 'required',
        ]);
  
        Navbar::create($request->all());
   
        return redirect()->route('navbar.index')
                        ->with('success','Navbar created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function show(Navbar $navbar)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function edit(Navbar $navbar)
    {
        return view('navbar.edit',compact('navbar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Navbar $navbar)
    {
        $request->validate([
            'nav_name' => 'required',
            'nav_code' => 'required',
        ]);
  
        $navbar->update($request->all());
  
        return redirect()->route('navbar.index')
                        ->with('success','Navbar updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Navbar $navbar)
    {
        $navbar->delete();
  
        return redirect()->route('navbar.index')
                        ->with('success', 'Navbar deleted successfully');
    }
}
