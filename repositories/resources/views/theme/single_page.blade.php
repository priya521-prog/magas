@extends('layout.main-front')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')

    
   <div class="main" ><div class="custom-container"><div class="listingbody">
      
       <div class="jumbotron jumbotron-xs">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <h2>{{ $page->title }}</h2>
                </div>
            </div>
        </div>
    </div>

<div class="row">
                                    <div class="col-md-12">
                                        <img class="img-responsive" alt="{{ $page->title }}" title="{{ $page->title }}" src="{{ media_url($page->feature_img, true) }}" >
                                    </div>
                                </div>


        <div class="row">
            <div class="col-md-12">
                <div class="page_wrapper page-{{ $page->id }}">
                    {!! $page->post_content !!}

                </div>
            </div>
        </div>
    </div>

@endsection

@section('page-js')
    <script>
        @if(session('success'))
            toastr.success('{{ session('success') }}', '<?php echo trans('app.success') ?>', toastr_options);
        @endif
    </script>
@endsection
