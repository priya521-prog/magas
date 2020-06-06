
@extends('layout.main-front')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')
     <div class="main" ><div class="custom-container"><div class="listingbody">
        <div id="wrapper">
           

            <div id="page-wrapper">
                @if( ! empty($title))
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"> {{ $title }}  </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                @endif

                @include('admin.flash_msg')

                <div class="row">
                    <div class="col-xs-12">

                        @if($user_messages->count())
                           <table class="table">
  <thead>
    <tr>
      <th scope="col">@lang('app.sender')</th>
      <th scope="col">@lang('app.message')</th>
      <th scope="col">Referal Page</th>
<th scope="col">@lang('app.created_at')</th>   

    </tr>
  </thead>
  <tbody>
                                @foreach($user_messages as $message)
    <tr>
      <th scope="row"><i class="fa fa-user"></i> {{ $message->name }} <br />
                                            <i class="fa fa-envelope-o"></i> {{ $message->email }} <br />
                                            <i class="fa fa-phone"></i> {{ $message->contact }} <br />
                                            <i class="fa fa-clock-o"></i> {{ $message->created_at->diffForHumans() }}</th>
      <td>{{ $message->message }} <br/>
<?php if($message->rating!='') { ?> 
Ratings : {{ $message->rating }}
<?php } ?>   
</td>
      <td>{{ $message->fullpageurl }}</td>
                                                                         <td>{!! $message->created_at_datetime() !!}</td>
                                                                         
               <!--<td><a href="{{  route('deletecontact',[$message->id]) }}">Delete</a></td>-->
             
             
               <td><a href="{{  route('deleteusermessage',[$message->id]) }}">Delete</a></td>
             
    </tr>
                                    @endforeach
                                    
  </tbody>
</table>
                            {!! $user_messages->links() !!}
                        @else
                            <div class="alert alert-info">No data</div>
                        @endif

                    </div>
                </div>

            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
 </div>
 </div>
@endsection
