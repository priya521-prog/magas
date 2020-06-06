@extends('layout.main-front')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-white error-404-wrap">
                    <h1>
                        Oops!</h1>
                    <h2>
                        404 Not Found</h2>
                    <div class="error-details" stylle="height:400px;" style="height: 400px;margin-top: 110px;font-size: 30px;">
                        Sorry, an error has occured, Requested page not found!
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
