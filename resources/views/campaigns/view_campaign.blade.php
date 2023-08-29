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
            
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white"> Campaigns
                      <a href="/admin/campaign/create" class="btn btn-success btn-sm pull-right">ADD</a>
                    </div>
                    <div class="card-body">
                      @if(count($campaigns)>0)
                      <table class="table table-striped table-responsive-sm table-responsive-md">
                        <thead>
                          <tr>
                            <th>#SN</th>
                            <th>Name</th>
                            <th>Organizer Name</th>
                            <th>Contact</th>
                            <th>Date</th>
                            <th>Description</th>
                           

                           
                            
                            
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($campaigns as $campaign)
                          <tr>
                            <td>{{ $campaign->id }}</td>
                            <td>{{ $campaign->name }}</td>
                            <td>{{ $campaign->organizer_name }}</td>
                            <td>{{ $campaign->contact }}</td>
                             <td>{{ $campaign->date }}</td>
                            <td>{{ $campaign->description }}</td>
                        
                            <td>
                              <a href="/admin/campaign/{{ $campaign->id }}/edit" class="btn btn-primary btn-sm">EDIT</a>
                              
                            </td>
                            <td>
                              {!! Form::open(['action'=>['CampaignController@destroy',$campaign->id],'method'=>'POST']) !!}
                              {!! Form::hidden('_method', 'DELETE' ) !!}
                              {!! Form::submit('DEL', ['class'=>'btn btn-danger btn-sm']) !!}
                              {!! Form::close() !!}
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      @else
                      <h3><strong>There are no Campaigns </strong></h3>
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