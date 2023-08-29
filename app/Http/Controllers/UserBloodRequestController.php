<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blood_request;

class UserBloodRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('request-blood');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           //validate the user form data 
           $request->validate([
            'patient_name'=>'required',  
            'gender'=>'required',
            'date_required'=>'required',
            'address'=> 'required',
            'contact'=>'required',
            'reason_for_request'=>'required',
            'unit_of_blood'=>'required',
            'hospital_address'=>'required',    
            'profile_pic'=>'image|nullable|max:199'
                      ]);

      //handle the file upload 
      if ($request->hasFile('profile_pic')) {

          $filenamewithExt = $request->file('profile_pic')->getClientOriginalName();
          $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
          $ext = $request->file('profile_pic')->getClientOriginalExtension();

          $fileNameToStore =$filename.time().'.'.$ext;

          //upload the image 
          $path =$request->file('profile_pic')->storeAs('public/profile_pics',$fileNameToStore);
          
      }else {
          
          $fileNameToStore ='noimage.jpg';
      }






      //inserting data into the database 
      $blood_requests = new blood_request();
      $blood_requests->patient_name = $request->input('patient_name');
      $blood_requests->gender = $request->input('gender');
      $blood_requests->date_required = $request->input('date_required');
      $blood_requests->address = $request->input('address');
      $blood_requests->contact = $request->input('contact');
      $blood_requests->reason_for_request = $request->input('reason_for_request');
      $blood_requests->profile_pic = $fileNameToStore;
      $blood_requests->unit_of_blood = $request->input('unit_of_blood');
      $blood_requests->hospital_address= $request->input('hospital_address');
     
      
    

      
      $blood_requests->save();

      //redirecting to the user dashboard after creating a new member
      return redirect('/');
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
       
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
