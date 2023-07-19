<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title', 'ContactApp')</title>

    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jasny-bootstrap.min.css') }}" rel="stylesheet">
 

      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- navbar -->
    <header>
         <div class="header">
            <div class="container-fluid">
               <div class="row d_flex">
                  <div class=" col-md-2 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="{{ route('contacts.index')}}"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="{{ route('contacts.index')}}">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('contacts.index')}}">All Contacts</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('contacts.create')}}">Add New</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Contact Us</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
                  <div class="col-md-2 d_none">
                     <ul class="email text_align_right">
                        <li> <a href="Javascript:void(0)"> Login </a></li>
                        <li> <a href="Javascript:void(0)"> <i class="fa fa-search" style="cursor: pointer;" aria-hidden="true"> </i></a> </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>

@yield('content')

<footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-3">
                     <a class="logo_footer" href="#"><img src="images/logo_footer.png" alt="#" /></a>
                  </div>
                  <div class="col-md-9">
                     <form class="newslatter_form">
                        <input class="ente" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="subs_btn">Subscribe Now</button>
                     </form>
                  </div>
                  <div class="col-md-3 col-sm-6"
                  >
                     <div class="Informa helpful">
                        <h3>Useful  Link</h3>
                        <ul>
                           <li><a href="#">Home</a></li>
                           <li><a href="{{ route('contacts.index')}}">About</a></li>
                           <li><a href="{{ route('contacts.index')}}">What we do</a></li>
                           <li><a href="{{ route('contacts.index')}}">Portfolio</a></li>
                           <li><a href="{{ route('contacts.index')}}">Contact us</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <div class="Informa">
                        <h3>News</h3>
                        <ul>
                           <li>It is a long established                            
                           </li>
                           <li>fact that a reader will                           
                           </li>
                           <li>be distracted by the                           
                           </li>
                           <li>readable content of a                              
                           </li>
                           <li>page when                          
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <div class="Informa">
                        <h3>company</h3>
                        <ul>
                           <li>It is a long established                             
                           </li>
                           <li>fact that a reader will                            
                           </li>
                           <li>be distracted by the                          
                           </li>
                           <li>readable content of a                              
                           </li>
                           <li>page when                          
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <div class="Informa conta">
                        <h3>contact Us</h3>
                        <ul>
                           <li> <a href="Javascript:void(0)"> <i class="fa fa-map-marker" aria-hidden="true"></i> Location
                              </a>
                           </li>
                           <li> <a href="Javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i> Call +01 1234567890
                              </a>
                           </li>
                           <li> <a href="Javascript:void(0)"> <i class="fa fa-envelope" aria-hidden="true"></i> demo@gmail.com
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright text_align_left">
               <div class="container">
                  <div class="row d_flex">
                     <div class="col-md-6">
                        <p>© 2020 All Rights Reserved.  <a href="https://html.design/"> Free Html Template</a></p>
                     </div>
                     <div class="col-md-6">
                        <ul class="social_icon text_align_center">
                           <li> <a href="Javascript:void(0)"><i class="fa fa-facebook-f"></i></a></li>
                           <li> <a href="Javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                           <li> <a href="Javascript:void(0)"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                           <li> <a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                           <li> <a href="Javascript:void(0)"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ asset('js/custom.js') }}"></script>
    <script>
    $("#add-new-group").hide();
    $('#add-group-btn').click(function () {      
      $("#add-new-group").slideToggle(function() {
        $('#new_group').focus();
      });
      return false;
    });
    </script>
  </body>
</html>
