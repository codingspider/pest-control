@extends('master')

@section('title', 'Cockroach Control')

@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('images/homepage-banner.png')}});">
    <div class="auto-container">
        <div class="sec-title">
        <h1>{{$data->title }}</h1>
           
        </div>
    </div>

</section>

<!--Default Section-->
<section class="default-section">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!--Column-->
            <div class="column col-md-10 col-sm-10 col-xs-10">
            <figure class="image"><img class="img-responsive" src="{{ asset('storage/'.$data->image)}}" alt=""></figure>
            </div>
            
            
            <!--Column-->
            <div class="column text-column col-md-10 col-sm-10 col-xs-10">
                <div class="inner-box">
                    
                    <br>
             
                    <!-- Accordion Box -->
                    <div class="accordion-box style-one">
                        {!! $data->body!!}
                    </div>
                    
                    <br>
                <a class="theme-btn radial-btn bg_green" href="{{ URL::to('/contact')}}"><span class="txt">Get Started Now</span> <span class="img-circle fa fa-arrow-right"></span></a>
                    
                </div>
            </div>
            
            
        </div>
    </div>
</section>


@endsection 