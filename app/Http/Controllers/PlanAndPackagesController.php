<?php
  
namespace App\Http\Controllers;
  
use App\Models\PlanAndPackages;
use App\Models\Plan;
use App\Models\Packages;
use Illuminate\Http\Request;
use Datatables;
  
class PlanAndPackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('plan_and_packages.index');
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $package_list = Packages::orderBy('packages.package_name','ASC')->get();
        $plan_list = Plan::orderBy('plans.package_id','plans.plan_name','ASC')
                         ->get();

        return view('plan_and_packages.create',compact('package_list','plan_list'));
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
           
            'plan_image' => 'required',
            'plan_image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'package_id' => 'required',
            'information' => 'required',
            'plan_id' => 'required',
            'details' => 'required',
            'status' => 'required',
           
            ]);
            // $plan_and_packages = new PlanAndPackages([
            //     'package_id' => $request->get('package_id'),
            //     'information' => $request->get('information'),
            //     'plan_image' => $request->get('plan_image'),
            //     'plan_id' => $request->get('plan_id'),
            //     'details' => $request->get('details'),
            //     'status' => $request->get('status'),
            // ]);

            if($request->hasfile('plan_image'))
         {

            foreach($request->file('plan_image') as $image)
            {
                $name = $image->getClientOriginalName();
                $image->move(public_path().'/assets/sites/images/plan', $name);
                $data = $name; 

                $plan_and_packages = new PlanAndPackages();
                $plan_and_packages->plan_image = $data;
                $plan_and_packages->plan_image = $request -> plan_image;
               
            }
         }
           
                $plan_and_packages = new PlanAndPackages();
                $plan_and_packages->plan_image = $data;
                $plan_and_packages->package_id = $request->get('package_id');
                $plan_and_packages->information = $request->get('information');
                $plan_and_packages->plan_id = $request->get('plan_id');
                $plan_and_packages->details = $request->get('details');
                $plan_and_packages->status = $request->get('status');
                $plan_and_packages->save();
            return redirect('/plan_and_packages');
    }

    public function getEdit($id){
 

        return view('');
          

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plan and Package  $Plan and Package
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $plan_and_packages = PlanAndPackages::join('packages','plan_and_packages.package_id','packages.id')
                            ->join('plans','plan_and_packages.plan_id','plans.id')
                            ->select('plan_and_packages.id','packages.package_name','plan_and_packages.information','plans.plan_name','plan_and_packages.plan_image',  'plan_and_packages.details','plan_and_packages.status')
                            ->get();

        // dd($plan_and_packages);
                            
        return Datatables::of($plan_and_packages)
        ->addColumn('action','<a class="btn btn-primary" href="{{{URL::to(\'plan_and_packages/\' .$id. \'/edit\') }}}">edit</a>
            <a class="btn btn-danger" href="{{{URL::to(\'plan_and_packages/\' .$id. \'/delete\') }}}">delete</a>')
        ->make();
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plan and Package  $Plan and Package
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plan_and_packages = PlanAndPackages::find($id);
        $package_list = Packages::orderBy('packages.package_name','ASC')->get();
        $plan_list = Plan::orderBy('plans.package_id','plans.plan_name','ASC')->get();
        return view('plan_and_packages.edit',compact('plan_and_packages','package_list','plan_list'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plan and Package  $Plan and Package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  PlanAndPackages $plan_and_packages , $id)
    {
        

        $plan_and_packages->update($request->all());

        $request->validate([
           
            'plan_image' => 'required',
            'plan_image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'package_id' => 'required',
            'information' => 'required',
            'plan_id' => 'required',
            'details' => 'required',
            'status' => 'required',
           
            ]);
            // $plan_and_packages = new PlanAndPackages([
            //     'package_id' => $request->get('package_id'),
            //     'information' => $request->get('information'),
            //     'plan_image' => $request->get('plan_image'),
            //     'plan_id' => $request->get('plan_id'),
            //     'details' => $request->get('details'),
            //     'status' => $request->get('status'),
            // ]);

            if($request->hasfile('plan_image'))
         {

            foreach($request->file('plan_image') as $image)
            {
                $name = $image->getClientOriginalName();
                $image->move(public_path().'/assets/sites/images/plan', $name);
                $data = $name; 

               
            }
         }
           
                
                $plan_and_packages = PlanAndPackages::find($id);
                $plan_and_packages->plan_image = $data;      
                $plan_and_packages->package_id = $request->get('package_id');
                $plan_and_packages->information = $request->get('information');
                $plan_and_packages->plan_id = $request->get('plan_id');
                $plan_and_packages->details = $request->get('details');
                $plan_and_packages->status = $request->get('status');
                $plan_and_packages->save();
  
        return redirect()->route('plan_and_packages.index')
                        ->with('success','Plan and Package updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plan and Package  $Plan and Package
     * @return \Illuminate\Http\Response
     */

     public function getDelete($id){

        $plan_and_packages = PlanAndPackages::find($id);
        $package_list = Packages::orderBy('packages.package_name','ASC')->get();
        $plan_list = Plan::orderBy('plans.package_id','plans.plan_name','ASC')->get();

        // return view('plan_and_packages');

        // return view()->route('plan_and_packages./'.$id.'/delete');

        return view('plan_and_packages/delete',compact('plan_and_packages','package_list','plan_list'));

    }

    public function destroy($id)
    {

        $plan_and_packages = PlanAndPackages::find($id);

        $plan_and_packages->delete();
  
        return redirect()->route('plan_and_packages.index')
                        ->with('success','Plan and Package deleted successfully');
    }
}