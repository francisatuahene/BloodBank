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
            
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card shadow-lg">
                    <div class="card-header text-white bg-primary"> Announcements
                      <a href="/admin/announcements/create" class="btn btn-success btn-sm pull-right">ADD</a>
                    </div> 
                    <div class="card-body">
                      @if(count($announcements)>0)
                      <table class="table table-striped table-responsive-sm table-responsive-md">
                        <thead>
                          <tr>
                            <th>#SN</th>
                            <th>Title</th>
                            <th>Blood Type Needed</th>
                            <th>Date</th>
                            <th>Organizer</th>
                            <th>Requirement</th>
                           
                            
                            
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($announcements as $announcement)
                          <tr>
                            <td>{{ $announcement->id }}</td>
                            <td>{{ $announcement->title }}</td>
                            <td>{{ $announcement->blood_type_needed }}</td>
                            <td>{{ $announcement->date }}</td>
                            <td>{{ $announcement->organizer}}
                            </td>
                            <td>{{ $announcement->requirement }}</td>
                         
                            
                            
          
                            
                            <td>
                              <a href="/admin/announcements/{{ $announcement->id }}/edit" class="btn btn-primary btn-sm">EDIT</a>
                              
                            </td>
                            <td>
                              {!! Form::open(['action'=>['AnnouncementsController@destroy',$announcement->id],'method'=>'POST']) !!}
                              {!! Form::hidden('_method', 'DELETE' ) !!}
                              {!! Form::submit('DEL', ['class'=>'btn btn-danger btn-sm']) !!}
                              {!! Form::close() !!}
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      @else
                      <h3><strong>There are no announcements made</strong></h3>
                      @endif
                      
                      
                      
                    </div>
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
  
  
  @endsection()