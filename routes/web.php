<?php

use App\Models\Banner;
use App\Models\Navbar;
use App\Models\AboutUs;
use App\Models\PlanAndPackages;
use App\Models\PromoAndOffers;
use App\Models\Contacts;
use App\Models\Slider;
use App\Models\OUrSites;
use App\Models\Packages;
use App\Models\Plan;
use App\Models\Partner;
use App\Models\Client;
use App\Models\Contact_Us;
use App\Models\About;

Route::get('/', function () {

	$banners = Banner::all();
	$navbar = Navbar::all();
	$slider = Slider::all();
	$about_us = AboutUs::all();

  $plan_and_packages = PlanAndPackages::join('packages','plan_and_packages.package_id','packages.id')
                            ->join('plans','plan_and_packages.plan_id','plans.id')
                            ->select('plan_and_packages.id','plan_and_packages.information','plan_and_packages.plan_image','plan_and_packages.details','plan_and_packages.status','plans.plan_name', 'plan_and_packages.package_id','packages.package_name')
                            ->get();

  $plan_and_packages_list = PlanAndPackages::leftjoin('packages','plan_and_packages.package_id','packages.id')
                                       ->leftjoin('plans','plan_and_packages.plan_id','plans.id')
                                       ->select('plan_and_packages.id as package_id','plan_and_packages.information','plan_and_packages.plan_image','plan_and_packages.details','plan_and_packages.status','plans.plan_name', 'plan_and_packages.package_id','packages.package_name')
                                       ->get(); 
                                       // dd($plan_and_packages_list->all());

  // $quad_play_list = PlanAndPackages::leftjoin('packages','plan_and_packages.package_id','packages.id')
  //                                      ->where('plan_and_packages.package_id',1)
  //                                      ->join('plans','plan_and_packages.plan_id','plans.id')
  //                                      ->select('plan_and_packages.id','plan_and_packages.information','plan_and_packages.plan_image','plan_and_packages.details','plan_and_packages.status','plans.plan_name', 'plan_and_packages.package_id','packages.package_name')
  //                                      ->get();	

  //   $triple_play_list = PlanAndPackages::leftjoin('packages','plan_and_packages.package_id','packages.id')
  //                                      ->where('plan_and_packages.package_id',2)
  //                                      ->join('plans','plan_and_packages.plan_id','plans.id')
  //                                      ->select('plan_and_packages.id','plan_and_packages.information','plan_and_packages.plan_image','plan_and_packages.details','plan_and_packages.status','plans.plan_name')
  //                                      ->get();

  //   $double_play_list = PlanAndPackages::leftjoin('packages','plan_and_packages.package_id','packages.id')
  //                                      ->where('plan_and_packages.package_id',3)
  //                                      ->join('plans','plan_and_packages.plan_id','plans.id')
  //                                      ->select('plan_and_packages.id','plan_and_packages.information','plan_and_packages.plan_image','plan_and_packages.details','plan_and_packages.status','plans.plan_name')
  //                                      ->get();


                            // dd($quad_play_list);

	$promo_and_offers = PromoAndOffers::all();
	$contacts = Contacts::all();
	$our_sites = OurSites::all();
	$package = Packages::all();
	$plan = Plan::all();
  $partner = Partner::all();
  $client = Client::all();
  $packages_list = Packages::all();
  $contact_us = Contact_Us::all();
  $about = About::all();

	return view('home_page',
		compact('banners',
    			'navbar',
    			'slider',
    			'about_us',
    			'promo_and_offers',
    			'contacts',
    			'our_sites',
    			'packages',
    			'plan',
          'plan_and_packages',
          'package_list',
          'plan_list',
    			'quad_play_list',
    			'triple_play_list',
    			'double_play_list',
          'partner',
          'client',
          'packages_list',
          'plan_and_packages_list',
          'contact_us',
          'about'
    		));
	});

Auth::routes();
Route::get('home', 'HomeController@index');

//PLAN AND PACKAGES---)
Route::resource('plan_and_packages','PlanAndPackagesController');
Route::get('plan_and_packages/{id}/edit','PlanAndPackagesController@getEdit');
Route::post('plan_and_packages/{id}/edit','PlanAndPackagesController@postEdit');
Route::get('plan_and_packages/{id}/delete','PlanAndPackagesController@getDelete');
Route::post('plan_and_packages/{id}/delete','PlanAndPackagesController@postDelete');
Route::get('plan/dataJson','PlanController@dataJson');
//-------------------\\
Route::resource('about_us','AboutUsController');
Route::resource('promo_and_offers','PromoAndOfferController');
Route::resource('contacts','ContactController');
Route::resource('navbar','NavbarController');
Route::resource('banners','BannerController');
Route::resource('slider','SliderController');
Route::resource('our_sites','OurSitesController');
Route::resource('partner','PartnerController');
Route::resource('client','ClientController');
Route::resource('about_us','AboutUsController');
Route::resource('contact_us','ContactUsController');
Route::resource('about','AboutController');