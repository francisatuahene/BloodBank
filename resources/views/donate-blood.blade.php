<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/main.css')}}">
  </head>
  <body>
      <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-lg-0 pr-5">
                <li class="nav-item active ">
                    <a class="nav-link pr-5" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pr-5" href="/blood-donation/donate-blood/create">Donate Blood</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link pr-5" href="/blood-donation/about">About Us</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link pr-5" href="/blood-donation/contact">Contact</a>
              </li>
                
            </ul>
            
          </div>
      </nav>
        
      <!--donate blood container-->
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 donate-blood-now-container contact-container mb-5">
                <h1 class="mt-5 ptl pl-5 text-bolder ">Give Blood Now</h1>
               
            </div>
        </div>
    </div>


      
    <!--Donate Blood Form-->
    <div class="container">
        <div class="row justify-content-center">

            

            <div class="col-md-12">
         <div class="card shadow-lg">
           <div class="card-header bg-primary text-white">
             ADD A DONOR
           </div>
           <div class="card-body">

            <div class="container-fluid">
                {!! Form::open(['method'=>'POST','action'=>'UserBloodDonateController@store','enctype'=>'multipart/form-data']) !!}
    
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            Full Name Of Donor
                            {!! Form::text('donor_name', '', ['class'=>'form-control','placeholder'=>'full name of donor','required'=>'required']) !!} <br>
                        
            
                          Gender
                              {!! Form::select('gender', ['Male'=>'Male','Female'=>'Female'],'' ,['class'=>'form-control','placeholder'=>'-Gender- ','required'=>'required']) !!} <br>
            
                          Blood Group
                          {!! Form::select('blood_group', ['O'=>'O','O+'=>'O+','O-'=>'O-','A'=>'A','A+'=>'A+','A-'=>'A-','B'=>'B','B+'=>'B+','B-'=>'B-','AB'=>'AB','AB+'=>'AB+','AB-'=>'AB-'],'' ,['class'=>'form-control','placeholder'=>'-Blood type- ','required'=>'required']) !!} <br>
          
                             
                            Date Of Birth
                           {!! Form::date('date_of_birth', \Illuminate\Support\Carbon::now(), ['class'=>'form-control','required'=>'required']) !!} <br>
            
                           E-mail Of Donor
                            {!! Form::text('e_mail','', ['class'=>'form-control','placeholder'=>'E-mail','required'=>'required']) !!} <br>
            
                            
                        </div>
                        
                    </div>

                    <div class="col-md-6">
                       <div class="form-group">

                        Address Of Donor
                            {!! Form::text('address','', ['class'=>'form-control','placeholder'=>'Address']) !!} <br>
            
                        Contact Of Donor
                        {!! Form::text('contact','', ['class'=>'form-control','placeholder'=>'Contact']) !!} <br>
            
                 
                  User name 
                        {!! Form::text('username','', ['class'=>'form-control','placeholder'=>'Username']) !!} <br>
               
                Full Name Of Guardian
                        {!! Form::text('guardian_name','', ['class'=>'form-control','placeholder'=>'Name of Guardian ']) !!} <br>
        
               Upload a Profile Picture
                         {!! Form::file('profile_pic', ['class'=>'form-control']) !!}<br><br> 
                        
               {!! Form::submit('add', ['class'=>'btn btn-primary mt-3 ']) !!} 

                       </div>
        
                    
                    </div>
                </div>
            </div>
            {!! Form::close() !!}  

             
           </div>
         
         </div>
    
      
                </div>
            </div>
           </div>
    <!--End Doanate Blood Form-->


    
        <!--Footer-container-->
        <div class="container-fluid">
            <div class="row mt-5">

                <div class="col-md-4 footer-container">
                   <h2 class="text-white text-bolder pt-5 pl-5 pr-1">Blood Donation System</h2>
                  <p class="text-muted pt-5 pl-5 pr-5" style="line-height: 35px">
                    It is a long established fact that a reader will be distracted by the 
                    readable content of a page when looking at its layout. 
                    
                   </p>
            </div>

            <div class="col-md-4 footer-container ">
                <div class="hr-sm mt-5 mb-5 "></div> 
                <h5 class=" text-bolder text-white">Quick Links</h5>
                <ul class="list-styled  pt-5">
                    <li><span class="text-muted">Home</li>
                   
                    <li><span class="text-muted">About Us</li>
                    <li><span class="text-muted">Contact Us</li>
                </ul>  
               
               </div>

               <div class="col-md-4 footer-container">
                    
                <div class="hr-sm mt-5 mb-5 "></div> 
                <h5 class="text-bolder text-white">Contact Us</h5>
                <ul class="list-styled  pt-5">
                    <li><span class="text-muted">Oxford street Avenue  365</li>
                    <li><span class="text-muted">Phone (+233)5424234555</li>
                    <li><span class="text-muted">info@bloodsystems.gh</li>
                    <li><span class="text-white"></i></li>
                </ul> 
                
               
                
               </div>
                  
            </div>

            
                  
            </div>

        </div>
        <!-- End Footer container-->

       
        
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>