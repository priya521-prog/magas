@extends('layout.main-front')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')

    

<div class="main">
            <div class="custom-container">
                <div class="listingbody">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <?php
                               echo '<script>alert("click on the links to view purchase order and make payment")</script>'; 
  
?> 
                                <div class="form-tabs" style="cursor: pointer;">
                                    <ul>
                                        <!--<li class="invoice-tab each-form-tab active" >-->
                                         <!--<li class="invoice-up-tab each-form-tab active" onclick="showTab('invoice-tab', 'invoice-content');">-->
                                         
                                          <li class="invoice-up-tab each-form-tab active" onclick="showTab('invoice-tab', 'invoice-content');">
                                            <div class="circle">
                                                1
                                            </div>
                                            <div class="circle-title">
                                                View Purchase Order
                                            </div>
                                        </li>

                                        <!--<li class="payment-tab each-form-tab active" >-->
                                         <li class="sign-up-tab each-form-tab" onclick="showTab('payment-tab', 'payment-content');">
                                            <div class="circle">
                                                2
                                            </div>
                                            <div class="circle-title">
                                               Make Payment
                                            </div>
                                        </li>
                                                                                
					 <li style="float:right;">
                                           
                                            
                                               <strong><a href="{{ route('dashboard') }} ">  Go Back To Dashboard </a></strong>
                                            
                                        </li>
                                        
                                    </ul>
                                    <div class="clearfix"></div>
                                   
                                    
                                    <!--<div class="payment-content ">-->
                                    <div class="payment-content tab">
                                        <div class="box-left" style="width:100%">
                                            <div class="form-text">
                                                <table class="table" style="width:100%">
    <thead class="thead-dark">
      <tr>
        <th>SELECT</th>
        <th>TYPE OF SOLUTION</th>
        <th>COST</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td>PREMIUM</td>
        <td>49$</td>
      </tr>
      <tr>
        <td>
                                                        <input id="checkbox-8" class="checkbox-custom" name="checkbox-8" type="checkbox" checked>
                                                    </td>
        <td>TOTAL</td>
        <td>49$</td>
      </tr>
     
    </tbody>
  </table>
                                            </div>


							<div class="input-row ">
								<div class="link">
 <?php
 //dd($payment);
    ?>
                     <a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" name="pay" id="pay" data-amount="3733" data-id="<?php echo $payment->local_transaction_id; ?>">Pay Now</a> 




		                                    		</div>



							</div>

                                        </div>
                                        <!--<div class="box-right">-->
                                        <!--    <div class="box-heading">-->
                                        <!--        BENIFITS OF PREMIUM FOR AS LOW AS $49 PER ANNUM-->

                                        <!--    </div>-->
                                        <!--    <div class="container-fluid">-->
                                        <!--        <div class="row">-->
                                        <!--            <div class="col-sm-12">-->
                                        <!--                <ul class="p-list">-->
                                        <!--                    <li>Post for <span class="text-pink">Free</span> in <span class="bold">pro</span> your Full Profile with Photo with One</li>-->
                                        <!--                    <li>File Upload</li>-->
                                        <!--                    <li>Unlimited <span class="bold">Classifieds</span> Listings</li>-->
                                        <!--                    <li>Post a <span class="bold">Project</span> for <span class="text-pink">Free</span> Evaluation</li>-->
                                        <!--                    <li>Post unlimited <span class="bold">Blogs</span></li>-->
                                        <!--                    <li>Access to all <span class="bold">Content</span> on the platform</li>-->
                                        <!--                </ul>-->
                                        <!--            </div>-->
                                        <!--        </div>-->
                                        <!--        <div class="clearfix"></div>-->
                                        <!--        <div class="p-features">-->

                                        <!--            <div class="feature">-->
                                        <!--                <div class="p-heading">-->
                                        <!--                    Buy a Bizz-->
                                        <!--                </div>-->
                                        <!--                <div class="p-desc">-->
                                        <!--                    Add your business-->
                                        <!--                </div>-->
                                        <!--                <div class="p-rate">-->
                                        <!--                    $99-->
                                        <!--                </div>-->
                                        <!--                <div class="link">-->
                                        <!--                    <a href="" class="custom-button">View a Bizz</a>-->
                                        <!--                </div>-->
                                        <!--            </div>-->

                                        <!--            <div class="feature">-->
                                        <!--                <div class="p-heading">-->
                                        <!--                    Whitepaper-->
                                        <!--                </div>-->
                                        <!--                <div class="p-desc">-->
                                        <!--                    List a whitepaper-->
                                        <!--                </div>-->
                                        <!--                <div class="p-rate">-->
                                        <!--                    $499-->
                                        <!--                </div>-->
                                        <!--                <div class="link">-->
                                        <!--                    <a href="" class="custom-button">List a Whitepaper</a>-->
                                        <!--                </div>-->
                                        <!--            </div>-->

                                        <!--            <div class="feature">-->
                                        <!--                <div class="p-heading">-->
                                        <!--                    Earn and Associate-->
                                        <!--                </div>-->
                                        <!--                <div class="p-desc">-->
                                        <!--                    Become a member-->
                                        <!--                </div>-->
                                        <!--                <div class="p-rate">-->
                                        <!--                    $999-->
                                        <!--                </div>-->
                                        <!--                <div class="link">-->
                                        <!--                    <a href="" class="custom-button">Membership Benefits</a>-->
                                        <!--                </div>-->
                                        <!--            </div>-->
                                        <!--            <div class="clearfix"></div>-->

                                        <!--        </div>-->

                                        <!--    </div>-->
                                        <!--</div>-->
                                        <div class="clearfix"></div>
                                    </div>
                                      <div class="invoice-content tab" active>
                                          <!--<button id="cmd1" class="custom-button"  type="button" onclick="demoFromHTML();">DOWNLOAD PDF</button><br>-->
                                          <div class="box-left1">
                                            <div class="form-text" id="content1">
                                                 <table class="table" style="width:100%">
                                             <div class="row">
                                                 
                                    <div class="col-md-12">
                                        <div class="col-md-4">
                                            
                                                       
                                            
                                             <p><b>PURCHASE ORDER: </b><?php echo $payment->local_transaction_id; ?></p>
                                
 <p><b>NAME:</b> <?php echo $user->name; ?></p>
                                                       <p><B>LOCATION:</B> <?php echo $user->address; ?></p>
                                                       <p><b>Affiliate Code:</b> <?php echo $user->utilized_code; ?></p>
                                        </div>
                                         <div class="col-md-4">
                                               <img itemprop="image" src="http://magas.services/assets/img/logo.png" class="img-responsive">
                                             </div>
                                        <div class="col-md-4">
                                             <p><b>DATE:</b> <?php //$dt = Carbon::now();
echo now()->toDateString(); ?></p>
                                             <p>MAGAS International LLC</p>
                                                       <!--<p><b>LOCATION:</b> Dubai,UAE</p>-->
                                                      
               

                                        </div>
                                    </div>
                                </div>
                                            <thead>
                                                <tr>
                                                    
                                                   
                                                    <th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                  <div class="payment-content ">
                                        <div class="box-left">
                                            <div class="form-text">
                                                <table class="table">
    <thead class="thead-dark">
     
      <tr>
        <th>SL No.</th>
        <th>TYPE OF SOLUTION</th>
        <th>COST</th>
      
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>   1.                                          </td>
        <td>PREMIUM</td>
        <td>49$</td>
      </tr>
      <tr>
        <td>
          
                                                    </td>
        <td>TOTAL</td>
        <td>49$</td>
      </tr>
     
    </tbody>
  </table>
                                            </div>


						
                                        </div>
                                        <p style="color:red">** If Payment Gateway is not successful then please  email info@magas.services for alternate Payment Method</p>
                                        <div class="clearfix"></div>
                                    </div>
                                                  
                                                
                                            </tbody>
                                        </table>
                                          </div>


						

                                        </div>
                                          </div>
                                        
                                    <div class="thankyou-content tab">
                                        <div class="box-left">
                                             <div class="box-heading">
                                                Thank you
                                            </div>
                                            <div class="box-title">
                                                You now have Standard User Privileges 
                                            </div>
                                            <div class="clearfix"></div>
                                                <div class="p-features">

                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            Buy a Bizz
                                                        </div>
                                                        <div class="p-desc">
                                                            Add your business
                                                        </div>
                                                        <div class="p-rate">
                                                            $99
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="custom-button">View a Bizz</a>
                                                        </div>
                                                    </div>

                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            Whitepaper
                                                        </div>
                                                        <div class="p-desc">
                                                            List a whitepaper
                                                        </div>
                                                        <div class="p-rate">
                                                            $499
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="custom-button">List a Whitepaper</a>
                                                        </div>
                                                    </div>

                                                   
                                                    <div class="clearfix"></div>

                                                </div>
                                        </div>
                                        <div class="box-right">
                                            <div class="link">
                                                <a href="" class="custom-button">Upgrade To Premium</a>
                                            </div>
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-5">
                                                        <div class="p-rate">
                                                            $49
                                                        </div>
                                                        <div class="p-text">
                                                            Upgrade & Enjoy the Premium Features as low as $49 per annum
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-7">
                                                        <ul class="p-list">
                                                            <li>Post for <span class="text-pink">Free</span> in <span class="bold">pro</span> your Full Profile with Photo with One</li>
                                                            <li>File Upload</li>
                                                            <li>Unlimited <span class="bold">Classifieds</span> Listings</li>
                                                            <li>Post a <span class="bold">Project</span> for <span class="text-pink">Free</span> Evaluation</li>
                                                            <li>Post unlimited <span class="bold">Blogs</span></li>
                                                            <li>Access to all <span class="bold">Content</span> on the platform</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="p-features">

                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            Buy a Bizz
                                                        </div>
                                                        <div class="p-desc">
                                                            Add your business
                                                        </div>
                                                        <div class="p-rate">
                                                            $99
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="custom-button">View a Bizz</a>
                                                        </div>
                                                    </div>

                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            Whitepaper
                                                        </div>
                                                        <div class="p-desc">
                                                            List a whitepaper
                                                        </div>
                                                        <div class="p-rate">
                                                            $499
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="custom-button">List a Whitepaper</a>
                                                        </div>
                                                    </div>

                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            Earn and Associate
                                                        </div>
                                                        <div class="p-desc">
                                                            Become a member
                                                        </div>
                                                        <div class="p-rate">
                                                            $999
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="custom-button">Membership Benefits</a>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
<link rel="stylesheet" href="{{ asset('assets/css/globalp.css') }}">
<script>
     function showTab(tabButton, tabContent) {
                $('.each-form-tab').removeClass("active");
                $('.' + tabButton).addClass("active");
                $('.tab').hide();
                $('.' + tabContent).show();
            }
             function showTab(tabButton, tabContent) {
                $('.each-invoice-tab').removeClass("active");
                $('.' + tabButton).addClass("active");
                $('.tab').hide();
                $('.' + tabContent).show();
            }
</script>

<link rel="stylesheet" href="{{ asset('assets/css/globalp.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  


<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.debug.js"></script>
      <!--container.//-->
      <br><br><br>
      
      <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
      <script>
        
         $('body').on('click', '#pay', function(e){
      //   alert("hu");
       var SITEURL = '{{URL::to('')}}';
         $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            // '_token': $('meta[name="csrf-token"]').attr('content')
              
          }
         }); 
         
           var totalAmount = $(this).attr("data-amount");
           var product_id =  $(this).attr("data-id");
         //  var invoice=  $(this).attr("data-invoice");
           var options = {
          // "key": "rzp_test_OFpixcmNapdglU",
           "key": "rzp_live_vGGlK2Hyoju73e",
           "amount": (totalAmount*100), // 2000 paise = INR 20
           "name": "MAGAS",
           "description": "Premium Payment",
           "image": "https://www.magas.services/assets/img/logo.png",
           "handler": function (response){
                // console.log(response);
                 $.ajax({
                    // url: SITEURL + 'pay-success',

                 //  url: SITEURL + '/pay-success/' + product_id,
                  // url: SITEURL + '/pay-success',
                  url: '{{ route('pay-success') }}',
              // url: 'magas.services/pay-success',
                   type: 'get',
                   dataType: 'json',
                                                          
//encode  : true,
                   data: {
                      // _token:"{{csrf_token()}}",
                    razorpay_payment_id: response.razorpay_payment_id , 
                     totalAmount : totalAmount ,product_id : product_id,
                   }, 
    
    

                  success: function (msg) {
                //       console.log('Ajax was Successful!')
                //       console.log(response.razorpay_payment_id);
                        //     alert("success" + data );

       // response.setHeader("Set-Cookie", "HttpOnly;Secure;SameSite=Strict");

                    //  window.location.href = SITEURL + 'thank-you';
                      window.location.href = '{{ route('thank-you') }}';
                    //   window.location.href = SITEURL + '/pay-success';
                   }
               });
             
           },
          "prefill": {
               "contact": 'enter your contact number',
               "email":   'enter your email',
           },
           "theme": {
               "color": "#528FF0"
           }
         };
         var rzp1 = new Razorpay(options);
       
         rzp1.open();
         e.preventDefault();
         });
      </script>
   