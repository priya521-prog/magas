</div>
</div>
	<footer>

		<div class="upfooter">
			<div class="container">
				<div class="row">

					<div class="col-sm-3 footermid">
						<h3>In-House Services</h3>
						<ul>
							<li>
								<a href="<?php echo url('/');?>/page/business-Valuation">Business Valuation</a>
							</li>
							<li>
								<a href="<?php echo url('/');?>/page/deal-sourcing">Deal Sourcing</a>
							</li>
							<li>
								<a href="<?php echo url('/');?>/page/deal-structuring">Deal Structuring</a>
							</li>
							<li>
								<a href="<?php echo url('/');?>/page/deals-execution">Deals Execution</a>
							</li>
							<li>
								<a href="<?php echo url('/');?>/page/due-diligence">Due Diligence</a>
							</li>
							<li>
								<a href="<?php echo url('/');?>/page/joint-ventures">Joint Ventures</a>
							</li>
							<li>
								<a href="<?php echo url('/');?>/page/sensitivity-analysis">Sensitivity Analysis </a>
							</li>
							<li>
								<a href="<?php echo url('/');?>/page/sustainability-testing-and-analysis">Sustainability Testing</a>
							</li>						
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="col-sm-3 footermid">
						<!--<h3>Specialised Services</h3>-->
						<h3>Managed Services</h3>
						<ul>
							
							<li>
								<a href="<?php echo url('/');?>/page/business-liquidation">Business Liquidation</a>
							</li>
							<li>
								<a href="<?php echo url('/');?>/page/business-setup"> Business Setup</a>
							</li>
							<li>
								<a href="<?php echo url('/');?>/page/content-development">Content Development</a>
							</li>
							<li>
								<a href="<?php echo url('/');?>/page/crisis-management">Crisis Management</a>
							</li>
							<li>
								<a href="<?php echo url('/');?>/page/intellectual-property">Intellectual Property</a>
							</li>

							<li>
								<a href="<?php echo url('/');?>/page/kyc-credit-check"> KYC & Credit Check</a>
							</li>
							<li>
								<a href="<?php echo url('/');?>/page/manpower-supply"> Manpower Supply</a>
							</li>
							<li>
								<a href="<?php echo url('/');?>/page/multilingual-translation">Multilingual Translation</a>
							</li>
							
							
						</ul>

						
						<div class="clearfix"></div>
					</div>
					<div class="col-sm-3 footermid">
						<!--<h3>Outsource Services</h3>-->
							<!--<h3>Managed Services</h3>-->
							<h3>Outsource to Us</h3>
						<ul>
							<li>
								<a href="<?php echo url('/');?>/page/accounting">Accounting</a>
							</li>
							<li>
								<a href="<?php echo url('/');?>/page/auditing">Auditing</a>
							</li>
							<li>
								<a href="<?php echo url('/');?>/page/advertising">Advertising</a>
							</li>
							<li>
								<a href="<?php echo url('/');?>/page/business-advisory">Business Advisory</a>
							</li>
							<li>
								<a href="<?php echo url('/');?>/page/business-plan-writing">Business Plan Writing</a>
							</li>
							<li>
								<a href="<?php echo url('/');?>/page/brand-consultancy">Brand Consultancy</a>
							</li>
							<li>
								<a href="<?php echo url('/');?>/page/feasibility-studies">Feasibility Studies</a>
							</li>
							<li>
								<a href="<?php echo url('/');?>/page/insurance">Insurance</a>
							</li>
							<li>
								<a href="<?php echo url('/');?>/page/management-consultancy">Management Consultancy</a>
							</li>
							
						</ul>


						<div class="clearfix"></div>
					</div>
					<div class="col-sm-3 footermid">
						<h3>Sectors</h3>
						<ul>
							<li>
								<a href="<?php echo url('/');?>/page/education">Education</a>
							</li>
							<li>
								<a href="<?php echo url('/');?>/page/healthcare">Healthcare</a>
							</li>
							<li>
								<a href="<?php echo url('/');?>/page/media">Media</a>
							</li>
							<li>
								<a href="<?php echo url('/');?>/page/oil-gas">Oil & Gas</a>
							</li>
							<li>
								<a href="<?php echo url('/');?>/page/real-estate">Real Estate</a>
							</li>
							<li>
								<a href="<?php echo url('/');?>/page/trading">Trading</a>
							</li>
							<li>
								<a href="<?php echo url('/');?>/page/travel-tourism">Travel & Tourism</a>
							</li>
						</ul>

						<div class="clearfix"></div>
					</div>



				</div>
			</div>
		</div>

		<div class="lowerfooter">
			<div class="container">
				<div class="footercont">
					<ul class="footerLink">
						<li>
							<a href="<?php echo url('/');?>/about-us">
								ABOUT US
							</a>
						</li>
						
						<li>
							<!--<a href="<?php echo url('/');?>/page/terms-and-condition">-->
							<!--	TERMS OF USE-->
							<!--</a>-->
								<a href="{{route('terms')}}">
								TERMS OF USE
							</a>
						</li>
						<li>
							<a href="{{route('contact_us')}}">
								CONTACT US
							</a>
						</li>

					</ul>

					<ul class="footersocial">
						<li>
									<a  href="https://www.linkedin.com/company/magasintl/" target="_BLANK">
										<i class="fa fa-linkedin"></i>
									</a>
								</li>
								<li>
									<a  href="https://twitter.com/magasintl" target="_BLANK">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
								<li>
									<a  href="https://www.instagram.com/magasintl/" target="_BLANK">
										<i class="fa fa-instagram"></i>
									</a>
								</li>
								<li>
									<a  href="https://www.facebook.com/MAGASINTL/" target="_BLANK">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li>
									<a  href="{{ route('contact_us_page') }}">
										<i class="fa fa-envelope"></i>
									</a>
								</li>

					</ul>

					<p>© 2017-2020 MAGAS International. All Rights Reserved. </p>
				</div>
			</div>
		</div>

	</footer>

<div id="loadingOverlay" style="display: none;">
    <div class="circleLoader"></div>
    <p>@lang('app.loading')...</p>
</div>


<script src="{{ asset('assets/js/vendor/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('assets/select2-3.5.3/select2.min.js') }}"></script>
<script src="{{ asset('assets/plugins/nprogress/nprogress.js') }}"></script>
<script type="text/javascript">
    NProgress.start();
    NProgress.done();
</script>
<!-- Conditional page load script -->
@if(request()->segment(1) === 'dashboard')
    <script src="{{ asset('assets/plugins/metisMenu/dist/metisMenu.min.js') }}"></script>
    <script>
        $(function() {
            $('#side-menu').metisMenu();
        });
    </script>
@endif
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
    var toastr_options = {closeButton : true};
</script>
@yield('page-js')


@if(get_option('additional_js'))
    {!! get_option('additional_js') !!}
@endif
<script>
    $(document).on('click', '.ghuranti', function(){
        $('.themeqx-demo-chooser-wrap').toggleClass('open');
    });
</script>

</body>
</html>
