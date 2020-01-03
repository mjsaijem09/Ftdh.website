<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use App\Product;

class DisplayDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::select('products.id','products.name','products.detail')
                            ->get();
        return Datatables::of($products)
        ->addColumn('action','<a class="btn btn-info" href="{{{URL::to(\'products/\' .$id. \'/show\') }}}">show</a>
            <a class="btn btn-primary" href="{{{URL::to(\'products/\' .$id. \'/edit\') }}}">edit</a>
            <a class="btn btn-danger" href="{{{URL::to(\'products/\' .$id. \'/delete\') }}}">delete</a>')
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('displaydata');
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
            'detail' => 'required',
        ]);
  
        Product::create($request->all());
   
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $products = Product::find($id);
        
        return view('products.show',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::find($id);

        return view('products.edit',compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
  

        $products = Product::find($id);
        $products->name = $request->get('name');
        $products->detail = $request->get('detail'); 
        $products->save();

        return redirect('/products')->with('success', 'Product has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products->delete();

  
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
 
}

