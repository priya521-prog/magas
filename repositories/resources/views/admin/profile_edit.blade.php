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

                        <form action="" class="form-horizontal" enctype="multipart/form-data" method="post"> @csrf
                        <div class="form-group {{ $errors->has('name')? 'has-error':'' }}">
                            <label for="name" class="col-sm-4 control-label">@lang('app.name')</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="name" value="{{ old('name')? old('name') : $user->name }}" name="name" placeholder="@lang('app.name')">
                                {!! $errors->has('name')? '<p class="help-block">'.$errors->first('name').'</p>':'' !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('email')? 'has-error':'' }}">
                            <label for="email" class="col-sm-4 control-label">@lang('app.email')</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="email" value="{{ old('email')? old('email') : $user->email }}" name="email" placeholder="@lang('app.email')">
                                {!! $errors->has('email')? '<p class="help-block">'.$errors->first('email').'</p>':'' !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('gender')? 'has-error':'' }}">
                            <label for="gender" class="col-sm-4 control-label">@lang('app.gender')</label>
                            <div class="col-sm-8">
                                <select id="gender" name="gender" class="form-control select2">
                                    <option value="">Select Gender</option>
                                    <option value="male" {{ $user->gender == 'male'?'selected':'' }}>Male</option>
                                    <option value="female" {{ $user->gender == 'female'?'selected':'' }}>Fe-Male</option>
                                    <option value="third_gender" {{ $user->gender == 'third_gender'?'selected':'' }}>Third Gender</option>
                                </select>

                                {!! $errors->has('gender')? '<p class="help-block">'.$errors->first('gender').'</p>':'' !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('mobile')? 'has-error':'' }}">
                            <label for="mobile" class="col-sm-4 control-label">@lang('app.mobile')</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="mobile" value="{{ old('mobile')? old('mobile') : $user->mobile }}" name="mobile" placeholder="@lang('app.mobile')">
                                {!! $errors->has('mobile')? '<p class="help-block">'.$errors->first('mobile').'</p>':'' !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('phone')? 'has-error':'' }}">
                            <label for="phone" class="col-sm-4 control-label">@lang('app.phone')</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="phone" value="{{ old('phone')? old('phone') : $user->phone }}" name="phone" placeholder="@lang('app.phone')">
                                {!! $errors->has('phone')? '<p class="help-block">'.$errors->first('phone').'</p>':'' !!}
                            </div>
                        </div>


                        <div class="form-group {{ $errors->has('country_id')? 'has-error':'' }}">
                            <label for="phone" class="col-sm-4 control-label">@lang('app.country')</label>
                            <div class="col-sm-8">
                                <select id="country_id" name="country_id" class="form-control select2">
                                    <option value="">@lang('app.select_a_country')</option>
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id }}" {{ $user->country_id == $country->id ? 'selected' :'' }}>{{ $country->country_name }}</option>
                                    @endforeach
                                </select>
                                {!! $errors->has('country_id')? '<p class="help-block">'.$errors->first('country_id').'</p>':'' !!}
                            </div>
                        </div>


                        <div class="form-group {{ $errors->has('address')? 'has-error':'' }}">
                            <label for="address" class="col-sm-4 control-label">@lang('app.address')</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="address" value="{{ old('address')? old('address') : $user->address }}" name="address" placeholder="@lang('app.address')">
                                {!! $errors->has('address')? '<p class="help-block">'.$errors->first('address').'</p>':'' !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('website')? 'has-error':'' }}">
                            <label for="website" class="col-sm-4 control-label">@lang('app.website')</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="website" value="{{ old('website')? old('website') : $user->website }}" name="website" placeholder="@lang('app.website')">
                                {!! $errors->has('website')? '<p class="help-block">'.$errors->first('website').'</p>':'' !!}
                            </div>
                        </div>
                        <!-- <div class="form-group">-->
                        <!--    <label for="Affiliate" class="col-sm-4 control-label">Affiliate Code</label>-->
                        <!--    <div class="col-sm-8">-->
                        <!--        <input type="text" class="form-control" id="affiliate_code" value="{{ old('affiliate_code')? old('affiliate_code') : $user->affiliate_code }}" name="affiliate_code" placeholder="Enter affiliate code to upgrade profile to premium">-->
                                <!--{!! $errors->has('affiliate_code')? '<p class="help-block">'.$errors->first('affiliate_code').'</p>':'' !!}-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="form-group">-->
                        <!--    <label for="account_type" class="col-sm-4 control-label">Account Type</label>-->
                        <!--    <div class="col-sm-8">-->
                        <!--        <select id="account_type" name="account_type" class="form-control select2">-->
                        <!--            <option value="">Select Account Type</option>-->
                        <!--            <option value="standardaccess" {{ $user->account_type == 'standardaccess'?'selected':'' }}>standardaccess</option>-->
                        <!--            <option value="premiumplan" {{ $user->account_type == 'premiumplan'?'selected':'' }}>premiumplan</option>-->
                                   
                        <!--        </select>-->

                              
                        <!--    </div>-->
                        <!--</div>-->
                        <!--  <div class="form-group">-->
                        <!--    <label for="Affiliate" class="col-sm-4 control-label">Account Type</label>-->
                        <!--    <div class="col-sm-8">-->
                        <!--        <input type="text" class="form-control" id="account_type" value="{{ old('affiliate_code')? old('affiliate_code') : $user->affiliate_code }}" name="account_type">-->
                                <!--{!! $errors->has('affiliate_code')? '<p class="help-block">'.$errors->first('affiliate_code').'</p>':'' !!}-->
                        <!--    </div>-->
                        <!--</div>-->

                        <div class="form-group  {{ $errors->has('photo')? 'has-error':'' }}">
                            <label class="col-sm-4 control-label">@lang('app.change_avatar')</label>
                            <div class="col-sm-8">
                                <input type="file" id="photo" name="photo" class="filestyle" >
                                {!! $errors->has('photo')? '<p class="help-block">'.$errors->first('photo').'</p>':'' !!}
                            </div>
                        </div>

                        <hr />

                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-4">
                                <button type="submit" class="btn btn-primary">@lang('app.edit')</button>
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
