@extends('layout.main-front')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('social-meta')
    <meta property="og:title" content="{{ $ad->title }}">
    <meta property="og:description" content="{{ substr(trim(preg_replace('/\s\s+/', ' ',strip_tags($ad->description) )),0,160) }}">
    @if($ad->media_img->first())
        <meta property="og:image" content="{{ media_url($ad->media_img->first(), true) }}">
    @else
        <meta property="og:image" content="{{ asset('uploads/placeholder.png') }}">
    @endif
    <meta property="og:url" content="{{  route('single_ad', [$ad->id, $ad->slug]) }}">
    <meta name="twitter:card" content="summary_large_image">
    <!--  Non-Essential, But Recommended -->
    <meta name="og:site_name" content="{{ get_option('site_name') }}">
@endsection

@section('page-css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/fotorama-4.6.4/fotorama.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/owl.carousel/assets/owl.carousel.css') }}">
@endsection

@section('main')





	<div class="main">
		<div class="custom-container">
			<div class="listingbody">
				<div class="searchprt">
					<label>Search</label>
					<div class="innersearchpanel">
						<div class="form-group">
							<p>Service</p>
							<select>
								<option>test</option>
							</select>
						</div>
						<div class="form-group">
							<p>Industry</p>
							<select>
								<option>test</option>
							</select>
						</div>
						<div class="form-group">
							<p>Location</p>
							<select>
								<option>test</option>
							</select>
						</div>
						<div class="form-group">
							<p>Country</p>
							<input type="text">
						</div>

						<button>GO</button>
					</div>
				</div>

				<div class="detailbannerprt">
							<div class="innerheading violet">
								BIZZ
							</div>
							<img src="../../uploads/theme/banner.jpg">

							<div class="innercontDetail">
								<div class="leftDetailimg">
									<img src="{{ $ad->user->get_gravatar() }}">
								</div>

								<div class="rightDetailcont">
									<h2>Switch to</h2>
									<img src="../../uploads/theme/sustainable-bag.png">
									<h3><span>Refuse</span> plastic bags<br> and <span>save lives</span> of<br> thousands of vulnerable creatures!</h3>
								</div>
							</div>
				</div>

				<div class="twodetailpanel row">
					<div class="col-md-8">
						<div class="leftquestionprt">
							<h2>Sustainable brandz</h2>

							<div class="innerinfopannel">
									<h3>About</h3>
									<p>{{ $ad->description }}</p>
								</div>

								<div class="innerinfopannel">
										<h3>Our customers</h3>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									</div>
									<div class="innerinfopannel">
											<h3>The Substainable Brandz Team</h3>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
										</div>
										<div class="innerinfopannel">
												<h3>Responsibility</h3>
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
											</div>
											<div class="innerinfopannel">
													<h3>Our Mission</h3>
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
												</div>

												<div class="innerinfopannel">
														<h3>Services</h3>
														<ul>
															<li>Lorem Ipsum is simply dummy text</li>
															<li>Lorem Ipsum is simply dummy text</li>
															<li>Lorem Ipsum is simply dummy text</li>
															<li>Lorem Ipsum is simply dummy text</li>
															<li>Lorem Ipsum is simply dummy text</li>
															<li>Lorem Ipsum is simply dummy text</li>
															<li>Lorem Ipsum is simply dummy text</li>
															<li>Lorem Ipsum is simply dummy text</li>
															<li>Lorem Ipsum is simply dummy text</li>
															<li>Lorem Ipsum is simply dummy text</li>
														</ul>
														
												</div>
												<div class="arrowprt">
													<span>
														<img src="../../uploads/theme/previous-arrow.png">
														Previous
													</span>
													<span>
															<img src="../../uploads/theme/next-arrow.png">
															Next
														</span>
												</div>

						</div>
					</div>
					<div class="col-md-4">
						<div class="gettouchprt">
							<h2>Get in touch</h2>
							<button>Download Brochure</button>
							<span>{{ $ad->seller_email }}</span>
							<span>{{ $ad->seller_phone }}</span>
							<span>{{ $ad->website }}</span>
							<span>{{ $ad->category->category_name }}</span>
                                                        
							<span>
									<i class="fa fa-map-marker"></i>
									{!! $ad->full_address() !!}
							</span>
							<div class="googlemapprt">
								<label>Google Map</label>
								<img src="../../uploads/theme/map.jpg">
							</div>
							<div class="viewsPrt">
								<i class="fa fa-share-alt"></i>
								10 views
							</div>

<!--							<div class="rateprt">
								<p>Rate</p>
								<ul>
									<li>
										<i class="fa fa-star-o"></i>
									</li>
									<li>
											<i class="fa fa-star-o"></i>
										</li>
										<li>
												<i class="fa fa-star-o"></i>
											</li>
											<li>
													<i class="fa fa-star-o"></i>
												</li>
												<li>
														<i class="fa fa-star-o"></i>
													</li>
								</ul>
							</div>-->

<a href="{{ route('contact_us_page') }}"><button>send a private feedback</button></a>
							<div class="sendqueryprt">
								<label>Send an enquiry</label>
								<textarea></textarea>
                                                                <a href="{{ route('contact_us_page') }}"><button>enquire</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="clearfix"></div>





@endsection

@section('page-js')
    <script src="{{ asset('assets/plugins/fotorama-4.6.4/fotorama.js') }}"></script>
    <script src="{{ asset('assets/plugins/SocialShare/SocialShare.js') }}"></script>
    <script src="{{ asset('assets/plugins/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/form-validator/form-validator.min.js') }}"></script>

    <script>
        $('.share').ShareLink({
            title: '{{ $ad->title }}', // title for share message
            text: '{{ substr(trim(preg_replace('/\s\s+/', ' ',strip_tags($ad->description) )),0,160) }}', // text for share message

            @if($ad->media_img->first())
            image: '{{ media_url($ad->media_img->first(), true) }}', // optional image for share message (not for all networks)
            @else
            image: '{{ asset('uploads/placeholder.png') }}', // optional image for share message (not for all networks)
            @endif
            url: '{{  route('single_ad', [$ad->id, $ad->slug]) }}', // link on shared page
            class_prefix: 's_', // optional class prefix for share elements (buttons or links or everything), default: 's_'
            width: 640, // optional popup initial width
            height: 480 // optional popup initial height
        })
    </script>
    <script>
        $.validate();
    </script>
    <script>
        $(document).ready(function(){
            $(".themeqx_new_regular_ads_wrap").owlCarousel({
                loop:true,
                margin:10,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true
                    },
                    600:{
                        items:3,
                        nav:false
                    },
                    1000:{
                        items:4,
                        nav:true,
                        loop:false
                    }
                },
                navText : ['<i class="fa fa-arrow-circle-o-left"></i>','<i class="fa fa-arrow-circle-o-right"></i>']
            });
        });
    </script>
    <script>
        $(function(){
            $('#onClickShowPhone').click(function(){
                $('#ShowPhoneWrap').html('<i class="fa fa-phone"></i> {{ $ad->seller_phone }}');
            });

            $('#save_as_favorite').click(function(){
                var selector = $(this);
                var slug = selector.data('slug');

                $.ajax({
                    type : 'POST',
                    url : '{{ route('save_ad_as_favorite') }}',
                    data : { slug : slug, action: 'add',  _token : '{{ csrf_token() }}' },
                    success : function (data) {
                        if (data.status == 1){
                            selector.html(data.msg);
                        }else {
                            if (data.redirect_url){
                                location.href= data.redirect_url;
                            }
                        }
                    }
                });
            });

            $('button#report_ad').click(function(){
                var reason = $('[name="reason"]').val();
                var email = $('[name="email"]').val();
                var message = $('[name="message"]').val();
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

                var error = 0;
                if(reason.length < 1){
                    $('#reason_info').html('<p class="text-danger">Reason required</p>');
                    error++;
                }else {
                    $('#reason_info').html('');
                }
                if(email.length < 1){
                    $('#email_info').html('<p class="text-danger">Email required</p>');
                    error++;
                }else {
                    if ( ! regex.test(email)){
                        $('#email_info').html('<p class="text-danger">Valid email required</p>');
                        error++;
                    }else {
                        $('#email_info').html('');
                    }
                }
                if(message.length < 1){
                    $('#message_info').html('<p class="text-danger">Message required</p>');
                    error++;
                }else {
                    $('#message_info').html('');
                }

                if (error < 1){
                    $('#loadingOverlay').show();
                    $.ajax({
                        type : 'POST',
                        url : '{{ route('report_ads_pos') }}',
                        data : { reason : reason, email: email,message:message, slug:'{{ $ad->slug }}',  _token : '{{ csrf_token() }}' },
                        success : function (data) {
                            if (data.status == 1){
                                toastr.success(data.msg, '@lang('app.success')', toastr_options);
                            }else {
                                toastr.error(data.msg, '@lang('app.error')', toastr_options);
                            }
                            $('#reportAdModal').modal('hide');
                            $('#loadingOverlay').hide();
                        }
                    });
                }
            });

            $('#replyByEmailForm').submit(function(e){
                e.preventDefault();
                var reply_email_form_data = $(this).serialize();

                $('#loadingOverlay').show();
                $.ajax({
                    type : 'POST',
                    url : '{{ route('reply_by_email_post') }}',
                    data : reply_email_form_data,
                    success : function (data) {
                        if (data.status == 1){
                            toastr.success(data.msg, '@lang('app.success')', toastr_options);
                        }else {
                            toastr.error(data.msg, '@lang('app.error')', toastr_options);
                        }
                        $('#replyByEmail').modal('hide');
                        $('#loadingOverlay').hide();
                    }
                });
            });

        });
    </script>

@endsection
