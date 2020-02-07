@extends('master')
@section('title', 'Contact')
@section('content')

    <section class="page-title" style="background-image:url(images/homepage-banner.png);">
    	<div class="auto-container">
        	<div class="sec-title">
                <h1>Contact Us</h1>
                <div class="page-subtitle">Please drop a line to us for any kind of pest control information </div>
            </div>
        </div>

    </section>

    
    <!--Contact Section-->
    <!--Section: Contact v.2-->
<section class="section">

        <!--Section heading-->
        <h2 class="section-heading h1 pt-4 mb-5">Contact us</h2>
      
        <div class="card">
      
          <div class="card-body">
      
            <!--Google map-->
            <div id="map-container-google-12" class="z-depth-1-half map-container-7" style="height: 200px">
              <iframe src="https://maps.google.com/maps?q=dhanmondi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                style="border:0" allowfullscreen></iframe>
            </div>
      <br>
            <div class="contact-us">
      
                    <div class="form-container">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                            </div><br />
                          @endif

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
                    <form method="post" action="{{ URL::to('contact/message/send')}}">
                        @csrf 
                                
                                <div class="row clearfix">
                                    <div class="form-group col-lg-3 col-md-6 col-xs-12">
                                        <div class="field-label">Name <span class="req">*</span></div>
                                        <input type="text" name="name" value="" placeholder="Your Name">
                                    </div>
                                    
                                    <div class="form-group col-lg-3 col-md-6 col-xs-12">
                                        <div class="field-label">Email ddress <span class="req">*</span></div>
                                        <input type="email" name="email" value="" placeholder="Your Email">
                                    </div>
                                    
                                    <div class="form-group col-lg-3 col-md-6 col-xs-12">
                                        <div class="field-label">Phone <span class="req">*</span></div>
                                        <input type="text" name="phone" value="" placeholder="Phone">
                                    </div>
                                    
                                    <div class="form-group col-lg-3 col-md-6 col-xs-12">
                                        <div class="field-label">Subject <span class="req">*</span></div>
                                        <input type="text" name="subject" value="" placeholder="Subject">
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Message <span class="req">*</span></div>
                                        <textarea name="message" placeholder="Your Message"></textarea>
                                    </div>
                                    
                                    <div class="form-group col-md-12 col-xs-12">
                                        <div class="text-right"><button type="submit" name="submit" class="theme-btn rounded-btn-blue">Send Message</button></div>
                                    </div>
                                
                                </div>
                            </form>
                        </div>
              <!--Grid column-->
      
            </div>
      
          </div>
      
        </div>
      
      </section>
      <!--Section: Contact v.2--><style>
      .map-container-7{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container-7 iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
      </style>
    
@endsection