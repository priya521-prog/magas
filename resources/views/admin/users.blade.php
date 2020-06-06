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
                            <h1 class="page-header" style="color:black;font-size:17px;padding:10px;"> ALL USERS LISTING </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                @endif

                @include('admin.flash_msg')


                <div class="row">
                    <div class="col-xs-12">

                        <table class="table" >
                            <tr>
                                <th>@lang('app.name')</th>
                                <th>@lang('app.email')</th>
                                 <th>Affiliate Code</th>
                                  <th>Utilized Code</th>
                                <th>Location</th>
                                <th>Phone No</th>
                                <th>Interests</th>
                                <th>Account Type</th>
                                <th>@lang('app.created_at')</th>
                                 <th>Expiry</th>
                            </tr>
                            @foreach($users as $user)
                                <tr>
                                    <td><a href="{{route('user_info', $user->id)}}">{{$user->name}}</a></td>
                                    <td>{!! $user->email !!}</td>
                                    <td>{!! $user->affiliate_code  !!}</td>
                                       <td>{!! $user->utilized_code  !!}</td>
				    <td>{!! $user->country->country_name  !!}</td>
				     
				   
				    <td>{!! $user->phone !!},{!! $user->mobile  !!}</td>
				    <td>{!! $user->interests  !!}</td>
				    <td><?php if($user->payment == 'pending') { 
						echo "<span style='color:green;'>Standard Access</span>";
						} else { 
						echo "<span style='color:#c94574;'>Premium Access</span>";
					 }?>
				   </td>
                                    <td>{!! $user->signed_up_datetime() !!}</td>
                                     <td>{!! $user->expiry_date !!}</td>

                                </tr>
                            @endforeach
                        </table>
                        {!! $users->links() !!}

                    </div>
                </div>

            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->

</div></div>
@endsection
