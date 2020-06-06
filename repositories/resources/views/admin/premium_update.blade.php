@extends('layout.main-front')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')

     <div class="main" ><div class="custom-container"><div class="listingbody">

        <div id="wrapper">

            @include('admin.sidebar_menu')

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
                        <p style="color: red;
    font-size: 16px;">** Please Select Affiliate code if applicable</p>

                        <form action="{{ route('premium_save')}}" class="form-horizontal" enctype="multipart/form-data" method="post"> @csrf
                      
                       
                      

                         <div class="form-group">
                            <label for="Affiliate" class="col-sm-4 control-label">Update Affiliate Code</label>
                            <div class="col-sm-8">
                                <select id="utilized_code" name="utilized_code" class="form-control select2">
                                    <option value="">Select Code</option>
                                    @foreach($aff_code as $code)
                                        <option value="{{ $code->affiliate_code }}">{{ $code->affiliate_code }}</option>
                                    @endforeach
                                </select>
                              
                            </div>
                        </div>
                        

                        <!--<div class="form-group {{ $errors->has('address')? 'has-error':'' }}">-->
                        <!--    <label for="address" class="col-sm-4 control-label">Update Address</label>-->
                        <!--    <div class="col-sm-8">-->
                        <!--        <input type="text" class="form-control" id="address" required value="{{ old('address')? old('address') : $user->address }}" name="address" placeholder="@lang('app.address')">-->
                        <!--        {!! $errors->has('address')? '<p class="help-block">'.$errors->first('address').'</p>':'' !!}-->
                        <!--    </div>-->
                        <!--</div>-->

                      

                         
                        <div class="form-group">
                              <input name="account_type" type="hidden"  value="premiumplan"/>
                          
                        </div>
                       

                        <hr />

                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-4">
                                <button type="submit" class="btn btn-primary">Next</button>
                            </div>
                        </div>

                        </form>

                    </div>
                </div>

            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
</div> 
</div> 
@endsection

@section('page-js')
    <script src="{{ asset('assets/js/bootstrap-filestyle.min.js') }}"></script>
    <script>
        $(":file").filestyle({buttonName: "btn-primary", buttonBefore: true});
    </script>
@endsection
