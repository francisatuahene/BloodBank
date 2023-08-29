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

     <!--Announcements container-->
     <div class="container-fluid">
      <div class="row">
          <div class="col-md-12 donate-blood-now-container contact-container mb-5">
              <h1 class="mt-5 ptl pl-5 text-bolder ">Announcements</h1>
             
          </div>
      </div>
  </div>
  <!--End Announcements container-->

      <!--Announcements section-->
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card shadow-lg">
              <div class="card-header text-white bg-primary"> Announcements
                
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
                   
                      
                      
    
                      
                     
                     
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                @else
                <h3><strong>There are no announcements</strong></h3>
                @endif
                
                
                
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!--End Announcements section-->


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