
@extends('layouts.app')
<link href= "{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">
@section('content')



    {{-- sidebarr --}}

<div class="page-wrapper toggled">
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <a href="#" id="toggle-sidebar">
      <div class="sidebar-brand">
        <a href="#">BLOOD DONATION SYSTEM</a>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="{{asset('images/download.jpeg')}}" alt="admin-profile" width="60px">
        </div>
        <div class="user-info">
          <span class="user-name">
            @foreach($admins as $admin)
            {{ $admin->name }}
            @endforeach
          </span>

          <span class="user-role">Administrator</span>
          <div class="user-status">
            <a href="#">
              <i class="fa fa-circle"></i>
              <span>Online</span></a>
          </div>
        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
      
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu"><span>General</span></li>
          <li class="sidebar-dropdown">
            <a href="/admin"><i class="fa fa-dashboard"></i><span>DASHBOARD</span></a>
           
          </li>
          <li class="sidebar-dropdown">
            <a href="#"><i class="fa fa-user"></i><span>DONORS</span></a>
            <div class="sidebar-submenu">
              <ul>
                <li><a href="/admin/donors">View All Donors<span class="badge"></span></a></li>
                <li><a href="admin/donors/create">Add new Donor</a></li>
               
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#"><i class="fa fa-fire"></i><span>BLOOD REQUESTS</span></a>
            <div class="sidebar-submenu">
              <ul>
                <li><a href="/admin/blood-request">View Blood Requests</a></li>
                <li><a href="/admin/blood-request/create">Add Blood Requests</a></li>              
              </ul>
            </div>
          </li>

          <li class="sidebar-dropdown">
            <a href="#"><i class="fa fa-fire"></i><span>BLOOD INFO</span></a>
            <div class="sidebar-submenu">
              <ul>
                <li><a href="/admin/blood-info">View Blood Info</a></li>
                <li><a href="/admin/blood-info/create">Add New Blood</a></li>              
              </ul>
            </div>
          </li>

          <li class="sidebar-dropdown">
            <a href="#"><i class="fa fa-fire"></i><span>ANNOUNCEMENTS<span></a>
            <div class="sidebar-submenu">
              <ul>
                <li><a href="/admin/announcements">View Announcements</a></li>
                <li><a href="/admin/announcements/create">Add New Announcement</a></li>              
              </ul>
            </div>
          </li>

          <li class="sidebar-dropdown">
            <a href="#"><i class="fa fa-fire"></i><span>CAMPAIGNS<span></a>
            <div class="sidebar-submenu">
              <ul>
                <li><a href="/admin/campaign">View Campaigns</a></li>
                <li><a href="/admin/campaign/create">Add New Campaign</a></li>              
              </ul>
            </div>
          </li>

        </ul>
      </div>
      <!-- sidebar-menu  -->
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->

    
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <div class="row">
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
           <div class="card-header bg-primary text-white ">
             ANNOUNCEMENT
           </div>
            <div class="card-body shadow-lg">
             
              <div class="form-group">


             
                {!! Form::open(['method'=>'POST','action'=>'AnnouncementsController@store']) !!}
          
                      
                <b>Enter Title of Announcement</b> 
                 {!! Form::text('announcement_title', '', ['class'=>'form-control','placeholder'=>'--announcement title-- ','required'=>'required']) !!} <br><br>
             
          
          
                <b>Select Blood type </b>
                {!! Form::select('blood_type_needed', ['O'=>'O','O+'=>'O+','O-'=>'O-','A'=>'A','A+'=>'A+','A-'=>'A-','B'=>'B','B+'=>'B+','B-'=>'B-','AB'=>'AB','AB+'=>'AB+','AB-'=>'AB-'],'' ,['class'=>'form-control','placeholder'=>'-Blood type- ' ,'required'=>'required']) !!} <br>
          
          
               <b>Enter Date Of Announcement</b>
                {!! Form::date('announcement_date', \Illuminate\Support\Carbon::now(), ['class'=>'form-control','placeholder'=>'dd/mm/yy','required'=>'required']) !!} <br><br>
           
              <b>Enter Name Of Organizer</b>
                 {!! Form::text('organizer','', ['class'=>'form-control','placeholder'=>'--Eg:Unity Health Center--','required'=>'required']) !!} <br><br>
          
          
                 <b>Enter the Requirement</b>
                 {!! Form::text('requirement','', ['class'=>'form-control','placeholder'=>'--Eg:Healthy person with blood type O needed--','required'=>'required']) !!} <br>
          
                 
          {!! Form::submit('add', ['class'=>'btn btn-primary mt-3 ']) !!} 
          
                 
                    {!! Form::close() !!}  
                  </div>

            </div>
          </div>
   
            </div>
        </div>
       </div>
    </div>
  </main>
  <!-- page-content" -->
</div>
<!-- page-wrapper -->



   

    <!-- Load sidebar Toggle Script -->
    <script src="{{ asset('/js/sidebar.js') }}">
    </script>






  
@endsection






