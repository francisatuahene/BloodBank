<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\blood_info;
use App\announcements;
use App\donors;
use App\blood_request;
use App\campaigns;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $admins = Admin::all();
        $announcements = announcements::all();
        $campaigns = campaigns::all();
        $donors = donors::all();
        $requests = blood_request::all();
        $bloods = blood_info::all();

        return view('admin')->with('admins',$admins)->with('announcements',$announcements)->with('campaigns',$campaigns)->with('donors',$donors)->with('bloods',$bloods)->with('requests',$requests);
    }
}
