@extends('layout.main-front')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')

    <div class="jumbotron jumbotron-xs">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <h2>@lang('app.contact_with_us')</h2>
                </div>
            </div>
        </div>
    </div>

<div class="container" style="margin-top: 65px;">
        <div class="row">
             <div class="col-md-12">
                
              <div class="col-md-7">
                      <form>
                    <!--<legend><span class="glyphicon glyphicon-globe"></span> @lang('app.our_office')</legend>-->
                     <legend><span class="glyphicon glyphicon-globe"></span> Contact Us</legend>
                    <!--<address>-->
                        <!--<strong>{{ get_text_tpl(get_option('footer_company_name')) }}</strong>-->
                        <!--@if(get_option('footer_address'))-->
                            <!--<br />-->
                            <!--<i class="fa fa-map-marker"></i>-->
                            <!--MAGAS International LLC ,<br>-->
                            <!--MAGAS Accounting & Auditing Services-->
                            <!--Office 901-A5, Gulf Tower, Block A2,<br>-->
                            <!--PO Box 122705, Oud Mehta, Dubai, UAE-->
                            <!--{!! get_option('footer_address') !!}-->
                        <!--@endif-->
                        <!--@if(get_option('site_phone_number'))-->
                        <!-- <strong>Phone</strong>-->
                        <!--    <br><i class="fa fa-phone"></i>-->
                        <!--    <abbr title="Phone">{!! get_option('site_phone_number') !!}</abbr>-->
                        <!--@endif-->

                    <!--</address>-->

                    @if(get_option('site_email_address'))
                        <address>
                            <strong>@lang('app.email')</strong>
                         
                            <br> <i class="fa fa-envelope-o"></i>
                            
                            <a href="mailto:{{ get_option('site_email_address') }}"> {{ get_option('site_email_address') }} </a>
                            
                        </address>
                        <p>*Kindly input Affiliate Code (if any) in the subject line of the email</p> 
                        <P style="font-size:18px">For Registration: <a href="{{ route('user.create') }}" class="authTitle" target="_blank" style="color:#d33a70"> Sign up</a> Here</p>
                    @endif

                </form><br>
                
                 <div class="col-sm-12 col-md-12">
                                                 <a href="#" class="custom-button" style="color: #d33a70;
    background: none;
    font-weight: 800;
    font-size: 22px;;margin: 0px 81px;">
                                                             PLATFORM PRODUCTS
                                                        </a>
                  <!--<div class="well well-sm">-->
<!--                    <form action="" method="post" onsubmit="return submitUserForm();"> @csrf-->

<!--                        <div class="row">-->
<!--                            <div class="col-md-12">-->
<!--                                <div class="form-group {{ $errors->has('name')? 'has-error':'' }}">-->
<!--                                    <label for="name">@lang('app.name')</label>-->
<!--                                    <input type="text" class="form-control" id="name" name="name" placeholder="@lang('app.enter_name')" value="{{ old('name') }}" required="required" />-->
<!--                                    {!! $errors->has('name')? '<p class="help-block">'.$errors->first('name').'</p>':'' !!}-->
<!--                                </div>-->
<!--                                <div class="form-group {{ $errors->has('email')? 'has-error':'' }}">-->
<!--                                    <label for="email">@lang('app.email_address')</label>-->
<!--                                    <div class="input-group">-->
<!--                                <span class="input-group-addon">-->
<!--                                    <span class="glyphicon glyphicon-envelope"></span>-->
<!--                                </span>-->
<!--                                        <input type="email" class="form-control" id="email" placeholder="@lang('app.enter_email_address')" name="email" value="{{ old('email') }}" required="required" />-->
<!--                                    </div>-->
<!--                                    {!! $errors->has('email')? '<p class="help-block">'.$errors->first('email').'</p>':'' !!}-->

<!--                                </div>-->

<!--                                <div class="form-group {{ $errors->has('message')? 'has-error':'' }}">-->
<!--                                    <label for="name">@lang('app.message')</label>-->
<!--                                    <textarea name="message" id="message" class="form-control" required="required" placeholder="@lang('app.message')">{{ old('message') }}</textarea>-->
<!--                                    {!! $errors->has('message')? '<p class="help-block">'.$errors->first('message').'</p>':'' !!}-->
<!--                                </div>-->
                                
<!--                                  <div class="form-group">-->
<!--                            <label for="code">Affiliate Code</label>-->

                          
<!--                                <select class="form-control select2" name="aff_code">-->
<!--                                    <option value="">Select Code</option>-->
<!--                                    @foreach($query as $queries)-->
<!--                                        <option value="{{ $queries->affiliate_code }}">{{ $queries->affiliate_code }}</option>-->
<!--                                    @endforeach-->
<!--                                </select>-->



<!--                        </div>-->

                               <!--<div class="g-recaptcha" data-sitekey="6LcKK-IUAAAAACWTn0Tqr1Xehgxh8lnlaJoXl7om"></div>-->
                          
<!--    <div class="g-recaptcha" data-sitekey="6LcKK-IUAAAAACWTn0Tqr1Xehgxh8lnlaJoXl7om" data-callback="verifyCaptcha"></div>-->
<!--    <div id="g-recaptcha-error"></div>-->
<!--      </div>-->
                           
<!--<input type ="hidden" name="rating" id="rating">-->
<!--<input type ="hidden" name="fullpageurl" id="fullpageurl"  value="<?php echo url()->full();?>">-->
<!--                            <div class="col-md-12">-->
<!--                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs"> @lang('app.send_message')</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </form>-->
                <!--</div>-->
                 <div class="p-features">

                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            Buy a Bizz
                                                        </div>
                                                        <div class="p-desc">
                                                            Add your business
                                                        </div>
                                                        <div class="p-rate" style="text-transform: none;">
                                                          
                                                            $99 p.a.
                                                        </div>
                                                        <div class="link">
                                                             <a href="#" class="custom-button" data-toggle="modal" data-target="#myModal">Bizz Benefits</a>
                                                            <!--<a href="" class="custom-button">View a Bizz</a>-->
                                                        </div>
                                                    </div>

                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            Post a Whitepaper
                                                        </div>
                                                        <div class="p-desc">
                                                            List a whitepaper
                                                        </div>
                                                         <div class="p-rate" style="text-transform: none;">
                                                            $499 p.a.
                                                        </div>
                                                        <div class="link">
                                                            <!--<a href="" class="custom-button">List a Whitepaper</a>-->
                                                              <a href="#" class="custom-button" data-toggle="modal" data-target="#myModal1">Whitepaper Benefits</a>
                                                        </div>
                                                    </div>

                                                    <div class="feature">
                                                        <div class="p-heading">
                                                           Associate and Earn 
                                                        </div>
                                                        <div class="p-desc">
                                                            Become an associate
                                                        </div>
                                                          <div class="p-rate" style="text-transform: none;">
                                                            $999 p.a.
                                                        </div>
                                                        <div class="link">
                                                            <!--<a href="../endorsements" class="custom-button" data-toggle="modal" data-target="#myModal1">Associate Benefits</a>-->
                                                        <a href="#" class="custom-button" data-toggle="modal" data-target="#myModal2">Associate Benefits</a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="feature">-->
                                                    <!--    <div class="p-heading">-->
                                                    <!--       KYC FOR ASSOCIATES-->
                                                    <!--    </div>-->
                                                        
                                                    <!--    <div class="link">-->
                                                    <!--         <a href="{{ asset('assets/downloads/MAGAS-FORM-KYC.pdf') }}"  class="custom-button" download>KYC FOR ASSOCIATES PDF</a>-->
                                                    <!--    </div>-->
                                                    <!--</div>-->
                                                    <div class="clearfix"></div>

                                                </di
                
                </div>
         

            <!--<div class="col-md-4">-->
            <!--    {!! get_option('google_map_embedded_code') !!}-->
            <!--</div>-->
            
                 
            <!--   <div class="col-md-2">-->
                <!--{!! get_option('google_map_embedded_code') !!}-->
                   
            <!--</div>-->
         
             <!--<div class="col-md-2">-->
                 	 
             <!--    </div>-->
                  </div>
        </div>
       
    </div>
       <div class="col-md-5">

            
                <a class="twitter-timeline" data-tweet-limit="1" data-width="30"
  data-height="0" href="https://twitter.com/magasintl?ref_src=twsrc%5Etfw">Tweets by magasintl</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

           
            </div>
     <div class="row">
          
            
        </div>

@endsection

@section('page-js')

<script src='https://www.google.com/recaptcha/api.js'></script>

    <script>
        @if(session('success'))
        toastr.success('{{ session('success') }}', '<?php echo trans('app.success') ?>', toastr_options);
        @endif
    </script>
    
    <script>
function submitUserForm() {
    var response = grecaptcha.getResponse();
    if(response.length == 0) {
        document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
        return false;
    }
    return true;
}
 
function verifyCaptcha() {
    document.getElementById('g-recaptcha-error').innerHTML = '';
}
</script>
<link rel="stylesheet" href="{{ asset('assets/css/globalp.css') }}">
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#191a50">BIZZ BENEFITS</h4>
      </div>
      <div class="modal-body">
        <!--<p>Some text in the modal.</p>-->
        <ol>
            
  <!--<li>Premium Homepage highlighter</li>-->
  <!--<li>Full Page Profile with one Image & File Upload/Download for Free </li>-->
  <!--<li>Dimensions 100&100</li>-->
  <!--<li>Viewership Analytics</li>-->
  <!--<li>Hyperlinking to your Website </li>-->
  <!--<li>Intergrated SEO Benefit</li>-->
  <!--<li>Generate Direct Leads</li>-->
  
  <li>Premium Homepage highlighter with Free Edit Option

</li>
  <li>Full Page Profile with one Image, Banner & File Upload</li>
  <li>Dimensions 100&100</li>
  <li>Viewership Analytics & Private Feedback Channel</li>
  <li>Hyperlinking to website </li>
  <li>Intergrated SEO Benefit</li>
  <li>Generate Direct Leads

</li>
</ol> 
      </div>
      <!--<div class="modal-footer">-->
      <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
      <!--</div>-->
    </div>

  </div>
</div>
 <div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#191a50">WHITEPAPER BENEFITS</h4>
      </div>
      <div class="modal-body">
        <!--<p>Some text in the modal.</p>-->
        <ol>
            
  <li>Promotion & Visibility on MAGAS and its Affiliate Marketing Channels</li>
  <li>Receive Direct Enquiries and Feedback</li>
  <li>Lisitng on Platform & Viewership Analytics </li>
  <li>PAAS Benefits in terms of Networking & Service Delivery </li>
  <li>Discount on all Services Listed on Portal </li>
 
</ol> 
      </div>
      <!--<div class="modal-footer">-->
      <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
      <!--</div>-->
    </div>

  </div>
</div>
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#191a50">ASSOCIATE BENEFITS</h4>
      </div>
      <div class="modal-body">
        <!--<p>Some text in the modal.</p>-->
        <ol>
            
  <li>Brand License to operate as "Associate" </li>
  <li>Recurring Commission upto 1 year </li>
  <li>Discount on Peer 2 Peer Services  </li>
  <li>PAAS Benefits in terms of Networking & Service Delivery  </li>
  <li> Free BIZZ Listing/PRO Listing on our Platform  </li>
 
</ol> 
      </div>
      <!--<div class="modal-footer">-->
      <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
      <!--</div>-->
    </div>

  </div>
</div>
@endsection
