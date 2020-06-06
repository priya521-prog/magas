<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
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
                                      //  dd($user);
                                        ?>
                                        <a  style="cursor: pointer;" href="<?php echo e(asset('assets/Bespoke Solutions.pdf
')); ?>" download>
                                            Download Invoice
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="box">
                                <!--<div class="a-content tab">-->
                                <!--    À LA CARTE-->
                                <!--    <div class="clearfix"></div>-->
                                <!--</div>-->
                                <div class="p-content tab">
                                    <div class="table-responsive">          
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>
                                                       <p><?php echo $user->name; ?></p>
                                                       <p><?php echo $user->address; ?></p>
                                                       <p>Affiliate Code: <?php echo $user->affiliate_code; ?></p>
<!--<p>Date: <?php echo e(now()->toDateTimeString('Y-m-d')); ?>-->
<!--</p>-->
<p>Date: <?php //$dt = Carbon::now();
echo now()->toDateString(); ?></p>

                                                    </th>
                                                    <th>
                                                       
                                                    </th>
                                                    <th>
                                                       <img itemprop="image" src="http://beta1.magas.services/assets/img/logo.png" class="img-responsive">
                                                    </th>
                                                    <th>
                                                      
                                                    </th>
                                                   
                                                    <th>
                                                      <p>John Doe</p>
                                                       <p>Location:UAE</p>
               
<p>Date: 2018-01-01</p>
                                                    </th>
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
        <td></td>
        <td>PREMIUM</td>
        <td>49$</td>
      </tr>
      <tr>
        <td>
             1.                                          
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>

<link rel="stylesheet" href="<?php echo e(asset('assets/css/globalp.css')); ?>">

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/beta1magas/public_html/resources/views/theme/invoice_form.blade.php ENDPATH**/ ?>