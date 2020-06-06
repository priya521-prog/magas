@extends('layout.main-front')
@section('page-css')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@endsection
@section('main')


    <!--<div class="jumbotron jumbotron-xs" style='margin-top:10%'>-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-6">-->
    <!--                <h2>{{ $title }}</h2>-->
    <!--            </div>-->
    <!--            <div class="col-md-6">-->
    <!--                <div class="blog-breadcrumb">-->
    <!--                    <ul class="breadcrumb">-->
    <!--                        <li>-->
    <!--                            <a href="{{ route('home') }}">@lang('app.home')</a>-->
    <!--                        </li>-->
    <!--                        <li>-->
    <!--                            <span>@lang('app.blog')</span>-->
    <!--                        </li>-->
    <!--                    </ul>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    
    	<div class="main">
    <div class="custom-container">
        	<div class="listingbody">
			    		
				<div class="innerListingbody">
				    	<div class="innerheading violet" style="background: #EA1C57!important;">
						BLOGS
					</div>
					<div class="main" style="margin-top:-29px">
          
		<div class="custom-container">
<div style="margin-bottom:100px;width:100%">
<div class="tab-content responsive">
	<div class="tab-pane active" id="home" role="tabpanel">
		<div class="container-fluid">
			<div class="row mt-3">
     	<div class="col-12" style="padding: 0;">
         	<div class="headline_outter">
         	    <div class="row">
                     
                     <div class="col-md-12">

                          <!--<div class="col-md-10">-->
				<div style="width: 100%;">
                @foreach($posts as $post)

                    <section class="post">
                        <div class="row">

                            <div itemscope itemtype="http://schema.org/NewsArticle">
                                <div class="col-md-3">
                                    <div class="image" style="height: 196px;">
                                        <a href="{{ route('blog_single', $post->slug) }}">
                                            @if($post->feature_img)
                                                <img class="img-responsive" alt="{{ $post->title }}" src="{{ media_url($post->feature_img) }}">
                                            @else
                                                <img class="img-responsive" alt="{{ $post->title }}" src="{{ asset('uploads/placeholder.png') }}">
                                            @endif
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7" style="margin-top: -24px;">
                                    <h3 itemprop="headline"><a href="{{ route('blog_single', $post->slug) }}" class="blog-title">{{ $post->title }}</a></h3>
                                    <div class="clearfix">
                                        @if($post->author)
                                            <p class="author-category"  itemprop="author" itemscope itemtype="https://schema.org/Person">By <a href="{{ route('author_blog_posts', $post->author->id) }}"  itemprop="name">{{ $post->author->name }}</a></p>
                                        @endif
                                        <p class="date-comments">
                                            <i class="fa fa-calendar"></i> {{ $post->created_at_datetime() }}
                                        </p>
                                    </div>
                                    <p class="intro" itemprop="description"> {{ str_limit(strip_tags($post->post_content), 250) }} </p>
                                    
                                    <p></p>
                                </div>
                                <div class="col-md-2">
                                 <a href="{{ route('blog_single', $post->slug) }}"><button  style="background:#1d1d53;color:white;padding: 6px;width:91%;
    border: #1d1d53;">READ MORE</button></a>
                                   	
                                    </div>

                                <meta itemprop="datePublished" content="{{ $post->created_at->toW3cString() }}"/>
                            </div>
                        </div>
                    </section>
                      <hr style="color:pink">
                @endforeach
                </div>
                <!--</div>-->
                </div>
                
                </div>

            </div>
              
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </div>
    <div>

@endsection

@section('page-js')
    <script>
        @if(session('success'))
            toastr.success('{{ session('success') }}', '<?php echo trans('app.success') ?>', toastr_options);
        @endif
    </script>
@endsection
