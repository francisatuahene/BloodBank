<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\campaigns;
use App\Admin;

class CampaignController extends Controller
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
        $campaigns = campaigns::all();
        return view('campaigns.view_campaign')->with('campaigns',$campaigns)->with('admins',$admins);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admins = Admin::all();
        return view('campaigns.add_campaign')->with('admins',$admins);
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
            'campaign_name'=>'required',  
            'organizer_name'=>'required',
            'contact'=>'required',
            'date'=> 'required',
            'description'=>'required',
            
                      ]);

      






      //inserting data into the database 
      $campaigns = new campaigns();
      $campaigns->name = $request->input('campaign_name');
      $campaigns->organizer_name = $request->input('organizer_name');
      $campaigns->contact = $request->input('contact');
      $campaigns->date = $request->input('date');
      $campaigns->description = $request->input('description');
      
    

      
      $campaigns->save();

      //redirecting to the user dashboard after creating a new member
      return redirect('/admin/campaign');
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
        $admins = Admin::all();
        $campaigns = campaigns::find($id);
        return view('campaigns.edit_campaign')->with('campaigns',$campaigns)->with('admins',$admins);
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
        
          //validate the user form data 
          $request->validate([
            'campaign_name'=>'required',  
            'organizer_name'=>'required',
            'contact'=>'required',
            'date'=> 'required',
            'description'=>'required',
            
                      ]);

      






      //inserting data into the database 
      $campaigns = campaigns::find($id);
      $campaigns->name = $request->input('campaign_name');
      $campaigns->organizer_name = $request->input('organizer_name');
      $campaigns->contact = $request->input('contact');
      $campaigns->date = $request->input('date');
      $campaigns->description = $request->input('description');
      
    

      
      $campaigns->save();

      //redirecting to the user dashboard after creating a new member
      return redirect('/admin/campaign');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $campaigns = campaigns::find($id);
        $campaigns->delete();


        return redirect('/admin/campaign');
    }
}
