
@extends('layouts.app')
<link href= "{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">
@section('content')



    {{-- sidebarr --}}

<div class="page-wrapper toggled">
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <a href="#" id="toggle-sidebar">
      <div class="sidebar-brand">
        <a href="#">BLOOD MANAGEMENT SYSTEM</a>
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
          <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
              EDIT BLOOD REQUEST
            </div>
            <div class="card-body">
              <div class="form-group">


             
                {!! Form::open(['action'=>['BloodRequestController@update',$blood_requests->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}   
           
               Full Name Of Patient 
                   {!! Form::text('patient_name', $blood_requests->patient_name, ['class'=>'form-control','placeholder'=>'full name of patient','required'=>'required']) !!} <br>
               
   
                Gender
                     {!! Form::select('Gender', ['Male'=>'Male','Female'=>'Female'],$blood_requests->gender ,['class'=>'form-control','placeholder'=>'-Gender- ','required'=>'required']) !!} <br>
   
   
                    
                  Date  Required
                  {!! Form::date('date_required', $blood_requests->date_required, ['class'=>'form-control','required'=>'required']) !!} <br>
             
             Address
                   {!! Form::text('address',$blood_requests->address, ['class'=>'form-control','placeholder'=>'Address','required'=>'required']) !!} <br>
   
   
               Contact 
                   {!! Form::text('contact',$blood_requests->contact, ['class'=>'form-control','placeholder'=>'Contact','required'=>'required']) !!} <br>
       
            
             Reason For Request 
                   {!! Form::text('reason_for_request',$blood_requests->reason_for_request, ['class'=>'form-control','placeholder'=>'Reason for Request','required'=>'required']) !!} <br>
          
           Unit Of Blood 
                   {!! Form::text('unit_of_blood',$blood_requests->unit_of_blood, ['class'=>'form-control','placeholder'=>'Unit Of Blood ','required'=>'required']) !!} <br>
      
       
          Hospital Address
                   {!! Form::text('hospital_address',$blood_requests->hospital_address, ['class'=>'form-control','placeholder'=>'Hospital Address','required'=>'required']) !!} <br>
      
   
   
      Upload Profile Picture
                    {!! Form::file('profile_pic', ['class'=>'form-control','required'=>'required']) !!}<br><br> 
                   
           {!! Form::hidden('_method', 'PUT') !!} 
   
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







































