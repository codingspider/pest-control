@extends('master')

@section('title', $data->title)

@section('content')
    <!--Page Title-->
    <section>
    	<div class="auto-container">
        	<div class="sec-title">
            <h1 class="text-center">Blog Details/ {{$data->title}}</h1>
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
                <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12">
                    <section class="blog-container blog-detail">
                        
                        <div class="blog-detail">
                        
                        	<!--Blog Post-->
                            <article class="blog-post">
                                <div class="post-inner">
                                    <div class="image">
                                        <img style="height:400px; width:780px;" src="{{asset('storage/'.$data->image)}}" alt="">
                                    </div>
                                    <div class="post-header">
                                        <ul class="post-info">
                                            <li><span class="fa fa-clock-o"></span>&ensp; {{date('d-m-Y', strtotime($data->created_at))}}</li>
                                            <li><span class="fa fa-user"></span>&ensp; Posted by <a href="#">Admin</a></li>
                                            <li><span class="fa fa-server"></span>&ensp; <a href="#">Marketing</a> , <a href="#">SEO</a></li>
                                        </ul>
                                    <h2><a href="#">{{$data->title }}</a></h2>
                                    </div>
                                    <div class="post-desc">
                                        <div class="text">
                                           <p>{!!$data->description!!}</p>

                                        </div>
                                        
                                    </div>
                                </div>
                            </article>
                            
                           
                        </div>
					
                    </section>
                
                    
                </div>
                <!--Content Side-->
                
                <!--Sidebar-->	
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <aside class="sidebar">
                    
                        <!-- Search Form -->
                        <div class="widget search-box">
                            
                            <form method="post" action="index.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search">
                                    <button type="submit"><span class="icon flaticon-right11"></span></button>
                                </div>
                            </form>
                            
                        </div>

                        
                        <!-- Recent Posts -->
                        <div class="widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sidebar-title"><h3>Latest News</h3></div>
                            @foreach ($blogs as $item)
                                
                            <div class="post">
                            <div class="post-thumb"><a href="#"><img src="{{ asset('storage/'.$item->image)}}" alt=""></a></div>
                            <h4><a href="{{URL::to('blogs/details/'.$item->id )}}">{{$item->title}}</a></h4>
                                <div class="post-info"><span class="icon flaticon-calendars12"></span> {{date('d-m-Y', strtotime($item->created_at))}} </div>
                            </div>
                            @endforeach
                          
                            
                        </div>
                                
                    </aside>
                
                    
                </div>
                <!--Sidebar-->
                
                
            </div>
        </div>
    </div>

    <div id="disqus_thread"></div>
    
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