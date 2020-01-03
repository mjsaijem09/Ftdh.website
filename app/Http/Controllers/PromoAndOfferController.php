<?php

namespace App\Http\Controllers;

use App\Models\PromoAndOffers;
use Illuminate\Http\Request;
// use Input;

class PromoAndOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promo_and_offers = PromoAndOffers::latest()->paginate(5);
  
        return view('promo_and_offers.index',compact('promo_and_offers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('promo_and_offers.create');
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
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'promo' => 'required',
            'status' => 'required',
            'paragraph' => 'required'


        ]);
        // $promo = \Input::get('promo');
        if($request->hasfile('filename'))
         {

            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/assets/sites/images/Promo/', $name);  
                $data = $name;  
            }
         }
         $promo_and_offers= new PromoAndOffers();
         $promo_and_offers->filename= $data;
         $promo_and_offers-> promo = $request->get('promo');
         $promo_and_offers-> status = $request->get('status');
         $promo_and_offers-> paragraph = $request->get('paragraph');
        // dd($promo_and_offers);
         $promo_and_offers->save();
   
        return redirect()-> route('promo_and_offers.index')
                        -> with('success', 'Your images has been successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PromoAndOffer  $promoAndOffer
     * @return \Illuminate\Http\Response
     */
    public function show(PromoAndOffers $promo_and_offers, $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PromoAndOffer  $promoAndOffer
     * @return \Illuminate\Http\Response
     */
    public function edit(PromoAndOffers $promo_and_offers, $id)
    {   
        $promo_and_offers = PromoAndOffers::find($id);
        // dd($promo_and_offers->filename);

        return view('promo_and_offers.edit',compact('promo_and_offers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PromoAndOffer  $promoAndOffer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([

             'promo' => 'required',
             'status' => 'required',
             'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'paragraph' => 'required'
            
        ]);

        if($request->hasfile('filename'))
         {

            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/assets/sites/images/Promo/', $name);  
                $data = $name;  
            }
         }
  
        $promo_and_offers = PromoAndOffers::find($id);  
        $promo_and_offers->filename= $data;
        $promo_and_offers-> status = $request->get('status');
        $promo_and_offers-> promo = $request->get('promo');
        $promo_and_offers-> paragraph = $request->get('paragraph');
        $promo_and_offers->save();
  
        return redirect()->route('promo_and_offers.index')
                        ->with('success','Promo and Offers updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PromoAndOffer  $promoAndOffer
     * @return \Illuminate\Http\Response
     */
    public function destroy(PromoAndOffers $promo_and_offers, $id)
    {   
        $promo_and_offers = PromoAndOffers::find($id);
        $promo_and_offers->delete();
  
        return redirect()->route('promo_and_offers.index')
                        ->with('success','Promo and Offers deleted successfully');
    }

}
