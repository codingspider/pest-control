@extends('master')
@section('title', 'Home')

@section('content')

<div class="col-md-12">
        <!-- Carousel Slideshow -->
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
                <!-- Carousel Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example" data-slide-to="1"></li>
                    <li data-target="#carousel-example" data-slide-to="2"></li>
                </ol>
                <div class="clearfix"></div>
                <!-- End Carousel Indicators -->
                <!-- Carousel Images -->
                <div class="carousel-inner">
                        @foreach ($data as $key => $slide)
                        <div class="item{{ $key == 0 ? ' active' : '' }}">
                            <img class = "img-responsive" style="width:100%; height:600px" src="{{ asset('storage/'.$slide->images) }}">
                        </div>
                    @endforeach
                     <!-- Carouse Images -->
                <!-- Carousel Controls -->
                <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
                <!-- End Carousel Controls -->
            </div>
            <!-- End Carousel Slideshow -->
        </div>
 
        
<br>
<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-service">
						<i class="fa fa-dribbble"></i>
						<h4>Free Service Delivery</h4>
						<p>No Hidden Charges </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-service">
						<i class="fa fa-rocket"></i>
						<h4>Instant Service Delivery</h4>
						<p>You will get instant services </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-service">
						<i class="fa fa-clock-o"></i>
						<h4>24/7 Customer Support</h4>
						<p>Our customer manager always ready to discuss about your pest problem. </p>
					</div>
				</div>
			
			</div>
		</div>
	  </section>
        
        

        
        <!--Default Section / Services Section-->
        <section class="default-section services-section bg-parallax" style="background-image:url({{ asset('images/homepage-banner.png')}});">
            <div class="auto-container">
                
                <div class="row clearfix">
                    
                    <!--Column-->
                    <article class="column icon-column default-icon-column col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box text-left">
                            <div class="icon img-circle"><span class="flaticon-check64"></span></div>
                            <h3 class="text-uppercase">Cockroach Control</h3>
                            <div class="text">There are about 3,000 cockroach species, but few specious only can found in UAE. Three of the most common roaches are the German cockroach, the American cockroach, and the brown banded cockroach.</div>
                        </div>
                    </article>
                    
                    <!--Column-->
                    <article class="column icon-column default-icon-column col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box text-left">
                            <div class="icon img-circle"><span class="flaticon-check64"></span></div>
                            <h3 class="text-uppercase">Bed Bug Control </h3>
                            <div class="text">Bed bugs are parasitic insects that feed exclusively on blood. Cimex lectularius, the common bed bug, is the best known as it prefers to feed on human blood; other Cimex species specialize in other animals, e.g., bugs. </div>
                        </div>
                    </article>
                    
                    <!--Column-->
                    <article class="column icon-column default-icon-column col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box text-left">
                            <div class="icon img-circle"><span class="flaticon-check64"></span></div>
                            <h3 class="text-uppercase">Termite Control</h3>
                            <div class="text">Termites can cause severe damage to homes, offices etc.and can affect the integrity and structure of your house and office. If you discover termites or suspect you have termites, it’s important to contact a professional pest control company immediately.</div>
                        </div>
                    </article>
                    
                    <!--Column-->
                    <article class="column icon-column default-icon-column col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box text-left">
                            <div class="icon img-circle"><span class="flaticon-check64"></span></div>
                            <h3 class="text-uppercase">Ants Control </h3>
                            <div class="text">It’s hard to be certain without a visual identification. Ants often make nests close to the house under paving, patios, in walls or in plant pots or lawns. They’re attracted to food, particularly if it’s sticky and sugary – which is why they make their way indoors on the forage! Keep your worksurfaces and floors clean and free of stickiness. Clean up spills and store opened food and drinks in the fridge. If there’s nothing sweet around, they will search elsewhere.</div>
                        </div>
                    </article>
                    
                    <!--Column-->
                    <article class="column icon-column default-icon-column col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box text-left">
                            <div class="icon img-circle"><span class="flaticon-check64"></span></div>
                            <h3 class="text-uppercase">Flies Control </h3>
                            <div class="text">Flies have been a nuisance insect for thousands of years. They affect human welfare because they can transmit diseases. Flies such as the common house fly are classified as filth flies because they breed in rotten food, manure, and garbage. A fly can mature from egg to adult in as few as ten days. This quick maturity can cause a severe fly problem in a short period of time. Getting rid of flies long term begins with proper sanitation and exclusion. To kill the existing fly population insecticides are used. The insecticides come in residual forms, aerosols, fogging materials, and baits. </div>
                        </div>
                    </article>
                    
                    <!--Column-->
                    <article class="column icon-column default-icon-column col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box text-left">
                            <div class="icon img-circle"><span class="flaticon-check64"></span></div>
                            <h3 class="text-uppercase">Rat Control </h3>
                            <div class="text">Rats are considered as pest worldwide as they are very harmful to human’s health by spreading life-threatening diseases. They can be the reason for lots of structural damage to your property and number one suspect for stealing food.

                                    The genus Rattus proper contains 64 extant species. The best method of rodent control is prevention through sanitation and exclusion. But these clever creatures can enter a home or building through spaces much smaller than seems possible, and they are constantly seeking food, water, and shelter.</div>
                        </div>
                    </article>
                    
                </div>
            </div>
        </section>
        
        
        
        <!--Normal Section-->
        <section class="normal-section half-section">
            <div class="auto-container">
                
                <div class="row clearfix">
                    <!--Column-->
                    <div class="column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-box">
                            <div class="sec-title">
                                <h2 class="default-title text-uppercase">WHAT WE DO</h2>
                                <div class="theme-subtitle">Our Customer Satisfaction Guaranteed</div>
                            </div>
                            
                            <div class="text">
                                <p>As with any other company in the service industry, there are many environmental factors that may affect the end result of our services/ products. All our services are guaranteed to our customer’s satisfaction and we will focus on your complete happiness on our service results! We promise that in the event our customers are dissatisfied, we’ll find a way to provide you with a satisfactory solution.</p>
                            </div>
                            <br>
                            
                            <div class="row clearfix">
                                <!--Column-->
                                <div class="col-lg-6 col-md-6 col-xs-12 column">
                                    <ul class="styled-list-one">
                                        <li>Cockroach Control</li>
                                        <li>BedBug Control </li>
                                        <li>Termite Control </li>
                                        <li>Rat Control </li>
                                    </ul>
                                </div>
                                
                                <!--Column-->
                                <div class="col-lg-6 col-md-6 col-xs-12 column">
                                    <ul class="styled-list-one">
                                        <li>Mosquito Contol </li>
                                        <li>Flies Control </li>
                                        <li>Lizard Control </li>
                                        <li>Spider Control </li>
                                       
                                    </ul>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                    <!--Column-->
                    <div class="column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-box">
                            
                            
                            <!--Progress Levels-->
                            <div class="progress-levels">
                                
                                <h2 class="default-title text-uppercase">Our skills on services</h2>
                                <br>
                                        
                                <!--Skill Box-->
                                <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                    <div class="box-title">Conckroach Control </div>
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner"><div class="bar-fill" data-percent="100"><div class="percent"></div></div></div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <!--Skill Box-->
                                <div class="progress-box wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <div class="box-title">Termite Control</div>
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner"><div class="bar-fill" data-percent="99"><div class="percent"></div></div></div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <!--Skill Box-->
                                <div class="progress-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <div class="box-title">Bed Bug Control</div>
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner"><div class="bar-fill" data-percent="100"><div class="percent"></div></div></div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <!--Skill Box-->
                                <div class="progress-box wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
                                    <div class="box-title">Rat Control</div>
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner"><div class="bar-fill" data-percent="88"><div class="percent"></div></div></div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        
        
        
        <!--Section Intro-->
        <section class="section-intro" style="background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQt5aq9SdSMOLykwpisD59Abp7Ip8h9r72odhM3yzMBPSAr5Vl8);">
            <div class="auto-container">
                <div class="sec-title">
                    <h2 class="default-title text-uppercase white_color">our plans &amp; PRICINGS</h2>
                    <div class="theme-subtitle">Please have a look our special price list for you. </div>
                </div>
            </div>
            <!--Down Arrow-->
            <div class="down-arrow scroll-to-target" data-target=".scroll-to-this"></div>
        </section>
        
        
        <!--Pricing Section-->
        <section class="pricing-section scroll-to-this">
            <div class="auto-container">
                            
                <div class="row clearfix">
                    
                    <!--Pricing Column-->
                    <article class="pricing-column col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="plan-header">
                                <h3 class="plan-title">Flat 1000 SFT</h3>
                                <span class="plan-price">3000/=</span>
                                <div class="plan-duration">One time payment</div>
                            </div>
                            <ul class="plan-stats">
                                <li><span class="icon fa fa-check"></span> Treatment for Cockroach, Spider, Lizard, Bed Bugs and Ants</li>
                                <li><span class="icon fa fa-check"></span> Instant service Delivery</li>
                                <li><span class="icon fa fa-check"></span> 12 Months Guarantee</li>
                                <li><span class="icon fa fa-check"></span> Free inspection</li>
                                <li><span class="icon fa fa-check"></span> 30 days money back gurantee</li>
                            </ul>
                            
                            <a href="{{ URL::to('/contact')}}" class="theme-btn rounded-btn">Contact Us</a>
                        </div>
                    </article>
                    
                    
                    <!--Pricing Column-->
                    <article class="pricing-column col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="plan-header">
                                    <h3 class="plan-title">Flat 1500 SFT</h3>
                                    <span class="plan-price">4500/=</span>
                                    <div class="plan-duration">One time payment</div>
                                </div>
                                <ul class="plan-stats">
                                    <li><span class="icon fa fa-check"></span> Treatment for Cockroach, Spider, Lizard, Bed Bugs and Ants</li>
                                    <li><span class="icon fa fa-check"></span> Instant service Delivery</li>
                                    <li><span class="icon fa fa-check"></span> 12 Months Guarantee</li>
                                    <li><span class="icon fa fa-check"></span> Free inspection</li>
                                    <li><span class="icon fa fa-check"></span> 30 days money back gurantee</li>
                                </ul>
                                
                                <a href="{{ URL::to('/contact')}}" class="theme-btn rounded-btn">Contact Us</a>
                            </div>
                        </article>
                    
                    
                    <!--Pricing Column-->
                    <article class="pricing-column col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="plan-header">
                                    <h3 class="plan-title">Flat 2000 SFT</h3>
                                    <span class="plan-price">6000/=</span>
                                    <div class="plan-duration">One time payment</div>
                                </div>
                                <ul class="plan-stats">
                                    <li><span class="icon fa fa-check"></span> Treatment for Cockroach, Spider, Lizard, Bed Bugs and Ants</li>
                                    <li><span class="icon fa fa-check"></span> Instant service Delivery</li>
                                    <li><span class="icon fa fa-check"></span> 12 Months Guarantee</li>
                                    <li><span class="icon fa fa-check"></span> Free inspection</li>
                                    <li><span class="icon fa fa-check"></span> 30 days money back gurantee</li>
                                </ul>
                                
                                <a href="{{ URL::to('/contact')}}" class="theme-btn rounded-btn">Contact Us</a>
                            </div>
                        </article>
                    
                    
                    <!--Pricing Column-->
                    <article class="pricing-column col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="plan-header">
                                <h3 class="plan-title">Pre Construction </h3>
                                <h2 class="plan-price">5/= Sqft</h2>
                                <div></div>
                               
                            </div>
                            <ul class="plan-stats">
                                <li><span class="icon fa fa-check"></span> Effective for Termite</li>
                                <li><span class="icon fa fa-check"></span> 10 years guaranteed</li>
                                <li><span class="icon fa fa-check"></span> Instant service Delivery</li>
                                <li><span class="icon fa fa-check"></span> Free inspection</li>
                                <li><span class="icon fa fa-check"></span> 30 days money back gurantee</li>
                            </ul>
                            
                            <a href="{{ URL::to('/contact')}}" class="theme-btn rounded-btn">Contact Us</a>
                        </div>
                    </article>
                    
                    
                </div>
            </div>
        </section>
        
        

        
        
        <!--Featured Three Column-->
        <section class="default-section featured-three-col">
            <div class="auto-container">
                
                <!--Section Title-->
                <div class="sec-title main-title text-center">
                    <h2 class="default-title text-uppercase">Latest News</h2>
                    <div class="theme-subtitle">Read our latest blog post about pest problems. </div>
                </div>
                
                <div class="row clearfix">
                    @foreach ($blogs as $item)
                        
                    <!--Column-->
                    <div class="col-md-4 col-sm-6 col-xs-12 column">
                        <article class="inner-box">
                        <figure class="image-box"><a href="{{URL::to('blogs/details/'.$item->id )}}"><img src="{{asset('storage/'.$item->image)}}" alt="" title=""></a></figure>
                            <div class="content">
                                <div class="author-thumb"><img src="{{asset('storage/'.$item->image)}}" alt=""></div>
                                <ul class="post-info clearfix">
                                <li><span class="icon flaticon-calendars12"></span> <a href="{{URL::to('blogs/details/'.$item->id )}}">{{date('d-m-Y', strtotime($item->created_at))}}</a></li>
                                    <li><span class="icon flaticon-tags23"></span><a href="#">markerting</a> , <a href="#">SEO</a></li>
                                </ul>
                            <h3><a href="{{URL::to('blogs/details/'.$item->id )}}">{{$item->title}}</a></h3>
                                
                            </div>
                        </article>
                    </div>
                    
                    <!--Column-->
              
                    @endforeach
                    
                </div>
            </div>
        </section>
        
        
        <!-- Client Testimonials -->
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
        
        
        <!-- Client Logos -->
        <section class="logos-section" style="background-image:url(https://image.freepik.com/free-psd/abstract-background-design_1297-84.jpg);">
            <div class="auto-container">
                
                <div class="text-center">
                    @foreach ($companies as $item)
                        
                <a href="#" class="image-box"><img style="height:100px; width:150px;" src="{{asset('storage/'.$item->image)}}" alt=""></a>
                    @endforeach

                </div>
                
            </div>
        </section>

        <script>
        
   wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
        
        </script>

        <style>
   
.single-service i.fa {
  width: 60px;
  height: 60px;
  background-color: #ff3636;
  font-size: 25px;
  color: #fff;
  line-height: 60px;
  text-align:center;
  margin-bottom:20px;
}
.single-service i.fa {
	-webkit-transition: .4s;
	transition: .4s;
}
.single-service:hover i.fa {
	border-radius: 50%;
}
.single-service h4 {
	text-transform: capitalize;
	font-size: 22px;
	margin-bottom: 5px;
	font-weight: 500;
}

        </style>
        
@endsection