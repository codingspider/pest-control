<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>@yield('title') | QualityPro</title>
<!-- Stylesheets -->
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('css/revolution-slider.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--  Widget Code -->
<script type="text/javascript">((function(){
                var load=function(){
                    var script="https://s.acquire.io/a-2be7c/init.js?full";
                    var x=document.createElement('script');
                    x.src=script;x.async=true;
                    var sx=document.getElementsByTagName('script')[0];
                    sx.parentNode.insertBefore(x, sx);
                    
};
                if(document.readyState === "complete")
                    load();
                else if (window.addEventListener)  
                    window.addEventListener('load',load,false);
                else if (window.attachEvent) {
                    window.attachEvent("onload", load);
                }
            })())</script>
 <noscript><a href="https://www.acquire.io?welcome" title="live chat software">Acquire</a></noscript>
<!-- / Widget Code -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header -->
    <header class="main-header">
    	<!-- Header Top -->
    	<div class="header-top">
        	<div class="auto-container clearfix">
            	<!-- Top Left -->
            	<div class="top-left">
                	<ul class="clearfix">
                    <li><a href="{{ URL::to('/')}}">Welcome to QualityPro Pest Control</a></li>
                        <li><a href="#"><span class="icon flaticon-phone325"></span> Call us +880 1829-343706</a></li>
                    </ul>
                </div>
                
                <!-- Top Right -->
                <div class="top-right">
                	<!--Social Links Style One-->
                	<div class="social-links-one clearfix">
                    	<a href="#" class="facebook"><span class="fa fa-facebook-f"></span></a>
                        <a href="#" class="twitter"><span class="fa fa-twitter"></span></a>
                        <a href="#" class="google-plus"><span class="fa fa-google-plus"></span></a>
                        <a href="#" class="linkedin"><span class="fa fa-linkedin"></span></a>
                        <a href="#" class="pinterest"><span class="fa fa-pinterest-p"></span></a>
                        <a href="#" class="instagram"><span class="fa fa-instagram"></span></a>
                    </div>
                </div>
                
            </div>
        </div><!-- Header Top End -->
        
        <!-- Header Lower -->
        <div class="header-lower">
        	<div class="auto-container clearfix">
            	
                <!--Outer Box-->
                <div class="outer-box">
                
                    <!-- Logo -->
                    <div class="logo">
                        <a href="{{URL::to('/')}}"><img style="height:100px; witdh:100px;" src="{{asset('images/pest.jpg')}}"></a>
                     </div>
                     
                     <!--Search Box-->
                    <div class="search-box">
                
                        	<div class="form-group">
                            	<input id="search" name="search" type="text" class="form-control" placeholder="Search" />
                              
                            </div>

                      
                    </div>
                    <script type="text/javascript">
                        var route = "{{ url('search') }}";
                        $('#search').typeahead({
                            source:  function (search, process) {
                            return $.get(route, { search: search }, function (data) {
                                    return process(data).html('<a href="blogs/' + data.id + '</a>');
                                    
                                });
                            }
                        });
                    </script>
                    -
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation">
                            <li class="current"><a href="{{ URL::to('/')}}">Home</a>
                                   
                                </li>
                            <li><a href="{{URL::to('/about')}}">About</a>
                            </li>
                            <li class="dropdown"><a href="#">Services</a>
                                    <ul class="submenu-dropdown">
                                    <li><a href="{{URL::to('cockroach/control/service')}}">Cockroach Control </a></li>
                                    <li><a href="{{URL::to('termite/control/service')}}">Termite Control </a></li>
                                    <li><a href="{{URL::to('bedbug/control/service')}}">Bedbug Control </a></li>
                                    <li><a href="{{URL::to('rat/control/service')}}">Rat Control </a></li>
                                        
                                    </ul>
                                </li>
                            <li><a href="{{URL::to('blogs')}}">Blog</a>
                                   
                                </li>
                                
                            <li><a href="{{URL::to('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                    
                </div>
            </div>
        </div><!-- Header Lower End-->
        
    </header><!--End Main Header -->
    
    
@yield('content')
    
    
    <!--Main Footer-->
    <footer class="main-footer">
    	
        <!--Footer Upper-->        
        <div class="footer-upper">
            <div class="auto-container">
                <div class="row clearfix">
                
                	<div class="col-lg-4 col-sm-6 col-xs-12 column">
                        <div class="footer-widget about-widget">
                            <h2>About Us</h2>
                            <div class="text">
                            	<p>WE ARE NO. 1 PEST CONTROL SERVICE PROVIDER IN BANGLADESH.
                                    WE WORK FOR YOUR SAFTY. </p>
                            </div>
                            
                            <div class="social-links">
                                <a href="https://www.facebook.com/qualitypropestcontrol/"><span class="fa fa-facebook-f"></span></a>
                                <a href="#"><span class="fa fa-twitter"></span></a>
                                <a href="#"><span class="fa fa-dribbble"></span></a>
                                <a href="#"><span class="fa fa-google-plus"></span></a>
                                <a href="#"><span class="fa fa-pinterest"></span></a>
                                <a href="#"><span class="fa fa-instagram"></span></a>
                            </div>
                            
                        </div>
                    </div>
                    
                    <!--Footer Column-->
                    <div class="col-lg-4 col-sm-6 col-xs-12 column">
                    	
                    	<div class="row clearfix">
                        	
                            <div class="col-lg-6 col-sm-6 col-xs-12">
                                
                            </div>
                            
                            <div class="col-lg-6 col-sm-6 col-xs-12">
                               
                            </div>
                            
                        </div>
                    </div>
 @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    <!--Footer Column-->
                    <div class="col-lg-4 col-sm-12 col-xs-12 column">
                        <div class="footer-widget newsletter-widget">
                            <h2>Subscribe Newsletter</h2>	
                   
                                <input type="hidden" name="_token" id="csrf" value="{{Session::token()}}">
                            	<div class="form-group">
                                    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                                </div>
                                <div class="form-group">
                                	<button type="submit" id="butsave" class="theme-btn radial-btn bg_orange"><span class="txt">Subscribe Now</span> <span class="img-circle fa fa-arrow-right"></span></button>
                                </div>
                         
                        </div>
                    </div>
                    
                    
                </div>

                <script>
                        $(document).ready(function() {
                           
                            $('#butsave').on('click', function() {
                              var name = $('#name').val();
                              var email = $('#email').val();
                        
                              if(name!="" && email!=""){
                                $("#butsave").attr("disabled", "disabled");
                                  $.ajax({
                                      url: "/userData",
                                      type: "POST",
                                      data: {
                                          _token: $("#csrf").val(),
                                          type: 1,
                                          name: name,
                                          email: email,
                                       
                                      },
                                      cache: false,
                                      success: function(dataResult){
                                          console.log(dataResult);
                                          var dataResult = JSON.parse(dataResult);
                                          if(dataResult.statusCode==200){
                                            //window.location = "/userData";
                                            alert("You have succesfully subscribed to our newsletter.");				
                                          }
                                          else if(dataResult.statusCode==201){
                                             alert("Error occured !");
                                          }
                                          
                                      }
                                  });
                              }
                              else{
                                  alert('Please fill all the field !');
                              }
                          });
                        });
                        </script>
                
                <!--Contact Info-->
                <div class="contact-info">
                	<ul>
                    	<li><span class="bullet">&bull;</span> #H-224 ModhuBazar</li>
                        <li><span class="bullet">&bull;</span> Dhanmondi, Dhaka</li>
                        <li><span class="bullet">&bull;</span> Phone: (880) 1829-343706</li>
                        <li><span class="bullet">&bull;</span> E-mail:  engrokon.rok@gmail.com</li>
                                                                             
                    </ul>
                </div>
                
            </div>
        </div>
        
        <!--Footer Bottom-->
    	<div class="footer-bottom">
            <div class="auto-container clearfix">
            	<div class="logo pull-left"><a href="#"><img height="200px" width="100px" src="https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwiy1a2vsc7kAhUkheYKHa_uBjcQjRx6BAgBEAQ&url=https%3A%2F%2Fwww.npmaqualitypro.org%2F&psig=AOvVaw2T0VpTWHIMVyPYvqeTwQ9p&ust=1568484262138533" alt=""></a></div>
                <!--Copyright-->
                <div class="copyright pull-right">Copyright 2019 &copy; <strong>Quality Pro &amp; Pest Control </strong> | All Rights Reservedd</div>
            </div>
        </div>
        
    </footer>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa fa-arrow-up"></span></div>

<script src="{{ asset('js/jquery.js') }}"></script> 
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/revolution.min.js') }}"></script>
<script src="{{ asset('js/bxslider.js') }}"></script>
<script src="{{ asset('js/owl.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox-media.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>


</body>
</html>
