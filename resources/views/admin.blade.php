@extends('layouts.app')

<link href= "{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">

@section('content');
 {{-- sidebar --}}

<div class="page-wrapper toggled" style="background-color: rgb(247, 247, 247)">
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
                <li><a href="/admin/donors/create">Add new Donor</a></li>
               
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#"><i class="fas fa-hand-holding-water"></i><span>BLOOD REQUESTS</span></a>
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
    <div class="row ">
        <div class="col-md-8">


         {{-- admin dashboard --}}
         <div class="card  shadow-lg" style="height: 120px; width: 450px; background-color: #00D3FFFF;color: white" >
            <div class="card-body ">
              <strong>Announcements</strong><br>
  
              <span style="font-weight: bolder;font-size: 50px;">{{ count($announcements)}}</span>
  
              <span class="float-right"><i class="fas fa-bullhorn fa-5x" style = "color: black;opacity: 0.2"></i></span>
            </div>
              </div>


              <div class="card   shadow-lg" style="height: 120px; width: 450px;position: relative;left: 480px;top: -120px;background-color: #06C546C4;color: white">
            <div class="card-body">
              <strong>Campaigns</strong><br>
  
               <span style="font-weight: bolder;font-size: 50px;">{{ count($campaigns)}}</span>
  
              <span class="float-right"><i class="fa fa-users fa-5x " style = "color: black;opacity: 0.2"></i></span>
              </div>
              </div>
              
             <div class="card shadow-lg" style="height: 120px; width: 450px;position: relative;left: 5px;top: 20px;background-color: #E8A800FF;color: white">
            <div class="card-body">
              <strong>Donors</strong><br>
              <span style="font-weight: bolder;font-size: 50px;">{{ count($donors)}}</span>
            
  
               <span class="float-right"><i class="fas fa-user fa-5x" style = "color: black;opacity: 0.2"></i></span>
              
              </div>
              </div>
  
              <div class="card shadow-lg" style="height: 120px; width: 450px;position: relative;left: 480px;top: -100px;background-color: #D63532DB; color: white">
            <div class="card-body">
              <strong>Requests</strong><br>
  
              <span style="font-weight: bolder;font-size: 50px;">{{ count($requests)}}</span>
  
               <span class="float-right"><i class="fas fa-hand-holding-water fa-5x" style = "color: black;opacity: 0.2"></i></span>
             
              </div>
              </div>

              <div class="card shadow-lg" style="height: 120px; width: 450px;position: relative;left: 5px;top: -10px;background-color: #D63532DB; color: white">
                <div class="card-body">
                  <strong>Bloods</strong><br>
      
                  <span style="font-weight: bolder;font-size: 50px;">{{ count($bloods)}}</span>
      
                   <span class="float-right"><i class="fa fa-fire fa-5x " style = "color: black;opacity: 0.2"></i></span>
                 
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