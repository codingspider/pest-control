@extends('master')

@section('title', 'All Blog Post')

@section('content')
    
    <!--Page Title-->
    <section>
    	<div class="auto-container">
        	<div class="sec-title">
                    <h1 class="text-center">Blog Details</h1>
                    <div class="page-subtitle text-center">Stay connected with for more new updates.</div>
            </div>
        </div>
        <!--Down Arrow-->
        <div class="down-arrow scroll-to-target" data-target=".scroll-to-this"></div>
    </section>
    
    
    <!--Sidebar Page-->
    <div class="sidebar-page scroll-to-this">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Side-->	
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                    
                    <section class="default-section featured-three-col three-column no-padd-top">
                        <div class="row clearfix">
                            @foreach ($blogs as $item)
                                
                            <!--Blog Post-->
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
                            @endforeach
                            
                        </div>
                    </section>
                    
                    <br>
                    <!-- Centered Pagination -->
                    <div class="centered-pagination text-center">
                        <ul>
                                <li>{!! $blogs->render() !!}</li>
                        </ul>
                    </div>
                
                    
                </div>
                
                
            </div>
        </div>
    </div>
    <style>
            section {
              width: 100%;
              padding: 0 7%;
              display: table;
              margin: 0;
              max-width: none;
              background-color: #373B44;
              height: 300px;
             
           
        
              /*added here*/
              background-image:url({{ asset('images/homepage-banner.png')}});
               /*added here*/ }
        
              section:nth-of-type(2n) {
                background-color: #FE4B74;
              }
            </style>
@endsection