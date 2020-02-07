@extends('master')

@section('title', 'About')

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('images/homepage-banner.png')}});">
    	<div class="auto-container">
        	<div class="sec-title">
                <h1>Contact Us</h1>
                <div class="page-subtitle">Please drop a line to us for any kind of pest control information </div>
            </div>
        </div>

    </section>
    
    
    <!--Default Section-->
    <section class="default-section scroll-to-this">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Column-->
                <div class="column text-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-box">
                        
                        <div class="sec-title">
                            <h2 class="bigger-title">We are no. 1 pest control service provider in Bangladesh. </h2>
                            <h2 class="bigger-title">we work for <span class="color_blue">your safty</span></h2>
                        </div>
                        
                        <div class="text">
                        	<p>What's Different About Quality Pro Pest Control
                                Since 2015, Quality Pro Pest Control has provided the finest pest control and turf-and-ornamental care experience you will find, anywhere. That's Quality Pro Pest Control.
                                
                                We're proud to be one of the largest family-owned pest control companies in the Bangladesh. We love our jobs and we take our Pest-A-Way® mission seriously. We offer premier customer service through highly trained, friendly technicians who are responsive and proactive. Then we go beyond these services to guarantee our work 100 percent. When you go with Quality Pro, you're going with the best in pest control.</p>
                        </div>
                        <br>
                    <div class="signature"><img src="{{ asset('images/dh63635.gif') }}" alt=""><span class="color_blue"> Founder. qualitypro Pest control ltd.</span></h2></div>
                        
                    </div>
                </div>
                
                <!--Column / Image Column-->
                <div class="column image-column col-md-6 col-sm-12 col-xs-12">
                	<figure class="image"><img class="img-responsive" src="{{asset('images/office.jpg') }}" alt=""></figure>
                </div>
                
                
            </div>
        </div>
    </section>
    
    <!--Video Section-->
    <div class="video" style="background-image:url({{ asset('images/homepage-banner.png')}});">
 
    	<div id="wrapper"> 
            <video id="home1" width="400" height="300" controls="controls" preload="none"> 
            <source type="video/mp4" src="{{ asset('storage/services.mp4')}}" /> 
            </video>
            <video id="home2" width="400" height="300" controls="controls" preload="none"> 
            <source type="video/mp4" src="{{ asset('storage/qualitypro.mp4')}}" /> 
            </video>
            <div class="clear"></div> 
        </div>
    </div>
    
    <section class="client-testimonials style-one">
        <div class="auto-container">
            <!--Section Title-->
            <div class="sec-title main-title text-center">
                <h2 class="default-title white_color">CLIENT TESTIMONIALS</h2>
                <div class="line-centered"></div>
            </div>
            
            <div class="testimonial-slider-full">
                @foreach ($testimonials as $item)
                    
                <article class="slide">
                <div class="text">“{{ $item->body }}”</div>
                <div class="author-info">{{$item->client}}<div class="time">{{date('d-m-Y', strtotime($item->created_at))}}</div></div>
                </article>
                @endforeach
               
            </div>
            
        </div>
    </section>

    <style>
#wrapper { 
    width: 920px; 
    height: auto; 
    margin: 0 auto;
  
} 
#home1 { 
    width: 47.5%; 
    height: 300px; 
    float: left; 
    margin-right: 5%;
} 

#home2 { 
    width: 47.5%; 
    height: 300px; 
    float: left; 
}

.clear{
    clear: both;
}

@media (max-width:767px) {
    #wrapper{
        width: 100%;
        height: auto;
    }
    #home1 {
        width: 100%;
        height: auto;
        float: none;
    }
    #home2 {
        width: 100%;
        height: auto;
        float: none;
    }
}
    </style>
    
@endsection