@extends('layout.main-front')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')
<?php



?>
<!--<style type="text/css">-->
<!--    table{-->
<!--        color:#1e2152;-->
<!--        border: 1px solid black;-->
<!--    }-->
<!--    .price-buy {-->
<!--    background: #1e2152;-->
<!--    display: inline-block;-->
<!--    color: #FFF;-->
<!--        padding: 4px 20px;-->

   
<!--}-->
<!--td{-->
<!--    border:1px solid black;-->
<!--}-->
<!--th{-->
<!--    border:1px solid black;-->
<!--}-->
<!--tr{-->
<!--    border:1px solid black;-->
<!--}-->
<!--body .section.packages-content .box .table>tbody>tr>td {-->
<!--    padding: 10px 25px;-->
<!--    box-sizing: border-box;-->
<!--    border: 1px solid black;-->
<!--</style>-->
<div class="main">
            <div class="custom-container">
                <div class="listingbody">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-tabs" style="cursor: pointer;">
                                    <ul>
                                        <!--<li class="invoice-tab each-form-tab active" >-->
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
                                          <!--<h2>PAYMENT GATEWAY IS COMING SOON</h2>-->
                                          <!--<p style="color:red">** Please  email info@magas.services for alternate Payment Method</p>-->
                                          
                                          
                                          
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
        <td>START UP
</td>
        <td>999$</td>
      </tr>
      <tr>
        <td>
                                                        <input id="checkbox-8" class="checkbox-custom" name="checkbox-8" type="checkbox" checked>
                                                    </td>
        <td>TOTAL</td>
        <td>999$</td>
      </tr>
     
    </tbody>
  </table>
                                            </div>


							<div class="input-row ">
								<div class="link">
 <?php
 //dd($payment);
    ?>
                     <a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" name="pay" id="pay" data-amount="76153" data-id="<?php echo $invoice; ?>">Pay Now</a> 




		                                    		</div>



							</div>

                                        </div>
                                      
                                        <div class="clearfix"></div>
                                    </div>
                                      <div class="invoice-content tab">
                                          <!--<button id="cmd1" class="custom-button"  type="button" onclick="demoFromHTML();">DOWNLOAD PDF</button><br>-->
                                          <div class="box-left">
                                            <div class="form-text" id="content1">
                                                 <table class="table" style="width:100%">
                                             <div class="row">
                                                 
                                    <div class="col-md-12">
                                        <div class="col-md-4">
                                            
                                                       
                                            
                                             <p><b>PURCHASE ORDER: </b><?php echo $invoice; ?></p>
                                              <p><b>NAME: </b><?php echo $user->name; ?></p>
                                             
                                              <!--<p><b>AFFILIATE CODE: </b><?php //echo $ad->affiliate_code; ?></p>-->
                                
 
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
        <td>START UP PACKAGE</td>
        <td>999$</td>
      </tr>
      <tr>
        <td>
          
                                                    </td>
        <td>TOTAL</td>
        <td>999$</td>
      </tr>
     
    </tbody>
  </table>
                                            </div>


						
                                        </div>
                                       
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

<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.debug.js"></script>
<script type="text/javascript">

function demoFromHTML() {
  
    var pdf = new jsPDF('p', 'pt', 'letter');
  
      //alert(pdf);
    // source can be HTML-formatted string, or a reference
    // to an actual DOM element from which the text will be scraped.
    // source = $('#content')[0];
     source = $('#content1')[0];
//alert(source);
    // we support special element handlers. Register them with jQuery-style 
    // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
    // There is no support for any other type of selectors 
    // (class, of compound) at this time.
    specialElementHandlers = {
        // element with id of "bypass" - jQuery style selector
        '#bypassme': function (element, renderer) {
            // true = "handled elsewhere, bypass text extraction"
            return true
        }
    };
   
    
    margins = {
        top: 80,
        bottom: 60,
        left: 10,
        width: 700
    };
      
    // all coords and widths are in jsPDF instance's declared units
    // 'inches' in this case
    pdf.fromHTML(
    source, // HTML string or DOM elem ref.
    margins.left, // x coord
    margins.top, { // y coord
        'width': margins.width, // max width of content on PDF
        'elementHandlers': specialElementHandlers
    },

    function (dispose) {
        // dispose: object with X, Y of the last line add to the PDF 
        //          this allow the insertion of new lines after html
        pdf.save('Test.pdf');
    }, margins);
}
    
</script>

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
           var id= '<?php echo $user->id ;?>';;
         //  var invoice=  $(this).attr("data-invoice");
           var options = {
          // "key": "rzp_test_OFpixcmNapdglU",
           "key": "rzp_live_vGGlK2Hyoju73e",
           "amount": (totalAmount*100), // 2000 paise = INR 20
           "name": "MAGAS",
           "description": "Start Up Package",
           "image": "https://www.magas.services/assets/img/logo.png",
           "handler": function (response){
                // console.log(response);
                 $.ajax({
                    // url: SITEURL + 'pay-success',

                 //  url: SITEURL + '/pay-success/' + product_id,
                  // url: SITEURL + '/pay-success',
                  url: '{{ route('startup-payment') }}',
              // url: 'magas.services/pay-success',
                   type: 'get',
                   dataType: 'json',
                                                          
//encode  : true,
                   data: {
                      // _token:"{{csrf_token()}}",
                    razorpay_payment_id: response.razorpay_payment_id , 
                     totalAmount : totalAmount ,product_id : product_id, ad_id:id
                   }, 
    
    

                  success: function (msg) {
                //       console.log('Ajax was Successful!')
                //       console.log(response.razorpay_payment_id);
                        //     alert("success" + data );

       // response.setHeader("Set-Cookie", "HttpOnly;Secure;SameSite=Strict");

                    //  window.location.href = SITEURL + 'thank-you';
                      window.location.href = '{{ route('startup-success') }}';
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
@endsection
