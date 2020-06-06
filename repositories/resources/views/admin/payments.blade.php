@extends('layout.main-front')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')

     <div class="main"><div class="custom-container"><div class="listingbody">
        <div id="wrapper">
            @include('admin.sidebar_menu')
            <div id="page-wrapper">
                @if( ! empty($title))
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header" style="font-size:19px;color:black"> Payment Transactions  </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                @endif

                @include('admin.flash_msg')

                <div class="row">
                    <div class="col-xs-12">

                        @if($payments->count())
                            <table class="table table-bordered table-striped" >
                                <tr>
                                    <th>@lang('app.user')</th>
                                    <th>@lang('app.amount')</th>
                                    <th>@lang('app.payment_method')</th>
                                    <th>@lang('app.status')</th>
                                    <th>@lang('app.created_at')</th>
                                </tr>

                                @foreach($payments as $payment)
                                    <tr>
                                       
                                        <td>
                                            @if($payment->user)
                                                <a href="{{route('user_info', $payment->user->id)}}"  target="_blank"> {{$payment->user->name}}</a>
                                            @else
                                                Deleted user
                                            @endif
                                        </td>
                                        <td>{!! $payment->amount !!}</td>
                                        <td>{!! $payment->payment_method !!}</td>
                                        <td><a href="{{route('payment_info', $payment->local_transaction_id)}}"  target="_blank">{{$payment->status}}</a></td>
                                        <td>{!! $payment->created_at_datetime() !!}</td>
                                    </tr>
                                @endforeach
                            </table>
                            {!! $payments->links() !!}
                        @else
                            <div class="alert alert-info">
                                No payment data
                            </div>
                        @endif

                    </div>
                </div>
            </div>   <!-- /#page-wrapper -->
        </div>   <!-- /#wrapper -->
    </div> <!-- /#container -->
@endsection
