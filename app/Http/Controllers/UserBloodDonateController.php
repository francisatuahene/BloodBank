<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\donors;

class UserBloodDonateController extends Controller
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
        return view('donate-blood');
        //
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
            'donor_name'=>'required',  
            'gender'=>'required',
            'blood_group'=>'required',
            'address'=> 'required',
            'date_of_birth'=>'required',
            'contact'=>'required',
            'username'=>'required',
            'e_mail'=>'required',
            'guardian_name'=>'required',    
            'profile_pic'=>'image|nullable|max:1999'
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
      $donors = new donors();
      $donors->name = $request->input('donor_name');
      $donors->gender = $request->input('gender');
      $donors->blood_group = $request->input('blood_group');
      
      $donors->date_of_birth = $request->input('date_of_birth');
      $donors->e_mail= $request->input('e_mail'); 
      $donors->address = $request->input('address');
      $donors->contact = $request->input('contact');
      
      $donors->username = $request->input('username');
      $donors->guardian_name= $request->input('guardian_name');
      $donors->profile_pic = $fileNameToStore;
     
      
    

      
      $donors->save();

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
        //
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
        //
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
