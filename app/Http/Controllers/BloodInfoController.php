<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\blood_info;

class BloodInfoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::all();
        $bloods = blood_info::all();
        return view('blood_info.view_blood')->with('admins',$admins)->with('bloods',$bloods);

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admins = Admin::all();
        return view('blood_info.add_blood')->with('admins',$admins);
   }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate form data 
        $request->validate([
            'donor_full_name'=>'required',  
            'blood_group'=>'required',
            'gender'=> 'required',
            'quantity'=>'required',
            'collection_date'=> 'required',
            
        ]);
    
             //inserting data into the database 
            $blood = new blood_info();
            $blood->donor_full_name = $request->input('donor_full_name');
            $blood->blood_group= $request->input('blood_group');
            $blood->gender= $request->input('gender');
            $blood->quantity = $request->input('quantity');
            $blood->collection_date= $request->input('collection_date');
            $blood->save();
     
             return redirect('/admin/blood-info');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bloods = blood_info::find($id);
        $admins = Admin::all();
       return view('blood_info.edit_blood')->with('admins',$admins)->with('bloods',$bloods);
   
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
           //validate form data 
        $request->validate([
            'donor_full_name'=>'required',  
            'blood_group'=>'required',
            'gender'=> 'required',
            'quantity'=>'required',
            'collection_date'=> 'required',
            
        ]);
    
             //inserting data into the database 
            $blood = blood_info::find($id);
            $blood->donor_full_name = $request->input('donor_full_name');
            $blood->blood_group= $request->input('blood_group');
            $blood->gender= $request->input('gender');
            $blood->quantity = $request->input('quantity');
            $blood->collection_date= $request->input('collection_date');
            $blood->save();
     
            return redirect('/admin/blood-info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bloods = blood_info::find($id);
        $bloods->delete();

        return redirect('/admin/blood-info');
    }
}
