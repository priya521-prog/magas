<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
<?php
//echo "<pre>";
$paymentmade = $lUser->payment;
$nameboth = $lUser->name;
$user_type = $lUser->user_type;

?>
<?php
dd($created_payment->local_transaction_id);
?>
<style type="text/css">
    table{
        color:#1e2152;
        border: 1px solid black;
    }
    .price-buy {
    background: #1e2152;
    display: inline-block;
    color: #FFF;
        padding: 4px 20px;

   
}
td{
    border:1px solid black;
}
th{
    border:1px solid black;
}
tr{
    border:1px solid black;
}
body .section.packages-content .box .table>tbody>tr>td {
    padding: 10px 25px;
    box-sizing: border-box;
    border: 1px solid black;
</style>

<div id="content">
    <h3>Sample h3 tag</h3>
    <p>Sample pararaph</p>
    <table>
        <tr><td>ghj</td></tr>
    </table>
</div>
<div class="body packages">

            <div class="main">
                <div class="section packages-content" style="margin-bottom: 150px;">
                    <div class="tabpanel">
                        <div class="custom-container">
                            <div class="alacarte-menu" style="margin-top: 30px;">
                                <div class="tabpanel">
                                    <ul>
                                       
                                        <li class="each-form-tab active" onclick="showTab('p-tab', 'p-content');">
                                            <div class="curved-buttons">
                                                INVOICE
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="nav nav-tabs fullnavtablog">
                                    <li class="active">
                                        <?php
                                     //   dd($user);
                                        ?>
<!--                                        <a  style="cursor: pointer;" href="<?php echo e(asset('assets/Bespoke Solutions.pdf-->
<!--')); ?>" download>-->
<!--                                            Download Invoice-->
<!--                                        </a>-->
<button id="cmd1" class="btn"  type="button" onclick="demoFromHTML();">DOWNLOAD PDF</button>
<!--<a href="#" id="cmd" >hguh</a>-->
                                    </li>
                                </ul>
                            </div>
                            <div class="box"  id="content1">
                              

                                
                                <div class="p-content tab">
                                    <div class="table-responsive">          
                                        <table class="table" style="width:100%">
                                             <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-4">
                                            
                                                       
                                             <!--<p><b>INVOICE NO:</b> <?php echo "MA".date('ym').rand(10,100) .$user->id; ?> </p>-->
                                
 <p><b>NAME:</b> <?php echo $user->name; ?></p>
                                                       <p><B>LOCATION:</B> <?php echo $user->address; ?></p>
                                                       <p><b>Affiliate Code:</b> <?php echo $user->affiliate_code; ?></p>
                                        </div>
                                         <div class="col-md-4">
                                               <img itemprop="image" src="http://magas.services/assets/img/logo.png" class="img-responsive">
                                             </div>
                                        <div class="col-md-4">
                                             <p><b>DATE:</b> <?php //$dt = Carbon::now();
echo now()->toDateString(); ?></p>
                                             <p>MAGAS International LLC</p>
                                                       <p><b>LOCATION:</b> Dubai,UAE</p>
                                                      
               

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
                                        
                                        <div class="clearfix"></div>
                                    </div>
                                                  
                                                
                                            </tbody>
                                        </table>
                                      
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!--<a href="<?php echo e(route('initiatepayments')); ?>">NEXT</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>

<link rel="stylesheet" href="<?php echo e(asset('assets/css/globalp.css')); ?>">
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/resources/views/theme/invoice_form.blade.php ENDPATH**/ ?>