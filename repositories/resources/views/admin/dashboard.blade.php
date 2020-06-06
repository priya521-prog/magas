<?php
  namespace App\Http\Controllers;

use App\Ad;
use App\Contact_query;
use App\Payment;
use App\Report_ad;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Relations;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
?>
@if($lUser->is_admin()|| $lUser->is_superadmin())
@extends('layout.main-front')
@endif


@section('main')

    <div class="main">
	<div class="custom-container">
		<div class="listingbody">


    <div id="wrapper">
        <?php
       //echo "<pre>";
$paymentmade = $lUser->payment;
$nameboth = $lUser->name;
$user_type = $lUser->user_type;
$user = Auth::user();
                  $user_id=$user->id;
                  $pay = Payment::whereUserId($user_id)->first();
                  ?>
          @include('admin.sidebar_menu')
        <div id="page-wrapper">

            @if(session('error'))
                <div class="row">
                    <div class="col-lg-12">
                        <br />
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    </div>
                </div>
            @endif

            <!--<div class="row">-->
            <!--    <div class="col-lg-12">-->
            <!--        <h1 class="page-header" style="color:black;font-size:19px;">@lang('app.dashboard')</h1>-->
            <!--    </div>-->
                 <!--/.col-lg-12 -->
            <!--</div>-->

	 


			

@if($lUser->account_type=='premiumplan')

<div class="row">
                <div class="col-lg-3 col-md-6" >
                    <div class="panel" style="background-color:#591546;color:white;">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12" >
                                    <div class="huge" >{{ $businessadscount }}</div>
                                    <div  >Business Listing Counts</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel" style="background-color:#f7f701;color:black;">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="huge">{{ $classifiedscount }}</div>
                                    <div>Classifieds Counts</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel" style="background-color:#016dd0;color:white;">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="huge">{{ $prolistscounts }}</div>
                                    <div>Profile Listing Counts</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		<div class="col-lg-3 col-md-6">
                    <div class="panel" style="background-color:#03bd96;color:white;">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="huge">{{ $oppurtunitiescounts }}</div>
                                    <div>Projects Listing Counts</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


</div>

@endif
 @if($lUser->is_superadmin())



 		 @endif

                @if($lUser->is_admin()|| $lUser->is_superadmin())

<div class="row">
                <div class="col-lg-3 col-md-6" >
                    <div class="panel" style="background-color:#591546;color:white;">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12" >
                                    <div class="huge" >{{ $businessadscount }}</div>
                                    <div  >Business Listing Counts</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel" style="background-color:#f7f701;color:black;">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="huge">{{ $classifiedscount }}</div>
                                    <div>Classifieds Counts</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel" style="background-color:#016dd0;color:white;">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="huge">{{ $prolistscounts }}</div>
                                    <div>Profile Listing Counts</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		<div class="col-lg-3 col-md-6">
                    <div class="panel" style="background-color:#03bd96;color:white;">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="huge">{{ $oppurtunitiescounts }}</div>
                                    <div>Projects Listing Counts</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


</div>

 		 @endif

            <div class="row">
                
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="huge">{{ $pending_ads }}</div>
                                    <div>Pending Items</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="huge">{{ $blocked_ads }}</div>
                                    <div>Blocked Items</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="panel " style="background-color:#122067;color:white;">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="huge">{{ $blocked_ads }}</div>
                                    <div>White Paper</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="panel " style="background-color:#c94574;color:white;">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="huge">{{ $blocked_ads }}</div>
                                    <div>Packages</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="huge">{{ $approved_ads }}</div>
                                    <div>Total Approved Items</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @if($ten_contact_messages)
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="huge">{{ $total_users }}</div>
                                    <div>Total Users</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="huge">{{ $total_reports }}</div>
                                    <div>@lang('app.reports')</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="huge">{{ $total_payments }}</div>
                                    <div>@lang('app.success_payments')</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="huge">  {{ $total_payments_amount }} <sup>{{ get_option('currency_sign') }}</sup></div>
                                    <div>@lang('app.total_payment')</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

            </div>
             <!--/.row -->

                  @if($lUser->is_admin()|| $lUser->is_superadmin())
            <div class="row">
                @if($ten_contact_messages)
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            @lang('app.latest_ten_contact_messages')
                        </div>
                        <div class="panel-body">

<table class="table">
  <thead>
    <tr>
      <th scope="col">@lang('app.sender')</th>
      <th scope="col">@lang('app.message')</th>
      <th scope="col">Referal Page</th>

    </tr>
  </thead>
  <tbody>
                                @foreach($ten_contact_messages as $message)
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

    </tr>
                                    @endforeach
  </tbody>
</table>




                           
                        </div>
                    </div>
                </div>
                @endif

                @if($reports)
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Latest 10 Reported Classifieds Listings
                        </div>
                        <div class="panel-body">

                            @if($reports->count() > 0)
                                <table class="table table-bordered table-striped table-responsive">
                                    <tr>
                                        <th>@lang('app.reason')</th>
                                        <th>@lang('app.email')</th>
                                        <th>@lang('app.message')</th>
                                        <th>@lang('app.ad_info')</th>
                                    </tr>

                                    @foreach($reports as $report)
                                        <tr>
                                            <td>{{ $report->reason }}</td>
                                            <td> {{ $report->email }}  </td>
                                            <td>
                                                {{ $report->message }}
                                                <hr />
                                                <p class="text-muted"> <i>@lang('app.date_time'): {{ $report->posting_datetime() }}</i></p>
                                            </td>
                                            <td>
                                                @if($report->ad)
                                                    <a href="{{ route('single_ad', [$report->ad->id, $report->ad->slug]) }}" target="_blank">@lang('app.view_ad')</a>
                                                    <i class="clearfix"></i>
                                                    <a href="{{ route('reports_by_ads', $report->ad->slug) }}">
                                                        <i class="fa fa-exclamation-triangle"></i> @lang('app.reports') : {{ $report->ad->reports->count() }}
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            @endif

                        </div>
                    </div>
                </div>
                @endif
            </div>
            @endif



        </div>
         <!--/#page-wrapper -->
    </div>
     <!--/#wrapper -->

    </div> <!-- /#container -->

@endsection
