<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\announcements;

class AnnouncementsController extends Controller
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
        $announcements = announcements::all();
        return view('announcements.view_announcements')->with('admins',$admins)->with('announcements',$announcements);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
        $admins = Admin::all();
         return view('announcements.add_announcement')->with('admins',$admins);
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
            'announcement_title'=>'required',  
            'blood_type_needed'=>'required',
            'organizer'=> 'required',
            'requirement'=>'required',
            
        ]);
    
             //inserting data into the database 
            $announcement = new announcements();
            $announcement->title = $request->input('announcement_title');
            $announcement->blood_type_needed = $request->input('blood_type_needed');
            $announcement->organizer= $request->input('organizer');
            $announcement->requirement = $request->input('requirement');
            $announcement->date= $request->input('announcement_date');
            $announcement->save();
     
             return redirect('/admin/announcements');
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
        $announcement = announcements::find($id);
        $admins = Admin::all();
       return view('announcements.edit_announcement')->with('admins',$admins)->with('announcement',$announcement);
   
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
                'announcement_title'=>'required',  
                'blood_type_needed'=>'required',
                'organizer'=> 'required',
                'requirement'=>'required',
                
            ]);
                //inserting data
            $announcement = announcements::find($id);
            $announcement->title = $request->input('announcement_title');
            $announcement->blood_type_needed = $request->input('blood_type_needed');
            $announcement->organizer= $request->input('organizer');
            $announcement->requirement = $request->input('requirement');
            $announcement->date= $request->input('announcement_date');
            $announcement->save();
                return redirect('/admin/announcements');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $announcement = announcements::find($id);
        $announcement->delete();

        return redirect('/admin/announcements');
    }
}
