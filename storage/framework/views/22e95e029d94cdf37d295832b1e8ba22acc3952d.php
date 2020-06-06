
<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<?php

	error_reporting(0);

//	function encrypt($plainText,$key)
//	{
//		$secretKey = hextobin(md5($key));
//		$initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
//	  	$openMode = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '','cbc', '');
//	  	$blockSize = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128, 'cbc');
//		$plainPad = pkcs5_pad($plainText, $blockSize);
//	  	if (mcrypt_generic_init($openMode, $secretKey, $initVector) != -1) 
//		{
//		      $encryptedText = mcrypt_generic($openMode, $plainPad);
//	      	      mcrypt_generic_deinit($openMode);
//		      			
//		} 
//		return bin2hex($encryptedText);
//	}

//	function decrypt($encryptedText,$key)
//	{
//		$secretKey = hextobin(md5($key));
//		$initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
//		$encryptedText=hextobin($encryptedText);
//	  	$openMode = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '','cbc', '');
//		mcrypt_generic_init($openMode, $secretKey, $initVector);
//		$decryptedText = mdecrypt_generic($openMode, $encryptedText);
//		$decryptedText = rtrim($decryptedText, "\0");
//	 	mcrypt_generic_deinit($openMode);
//		return $decryptedText;
//		
//	}
	//*********** Padding Function *********************

	 function pkcs5_pad ($plainText, $blockSize)
	{
	    $pad = $blockSize - (strlen($plainText) % $blockSize);
	    return $plainText . str_repeat(chr($pad), $pad);
	}

	//********** Hexadecimal to Binary function for php 4.0 version ********

	function hextobin($hexString) 
   	 { 
        	$length = strlen($hexString); 
        	$binString="";   
        	$count=0; 
        	while($count<$length) 
        	{       
        	    $subString =substr($hexString,$count,2);           
        	    $packedString = pack("H*",$subString); 
        	    if ($count==0)
		    {
				$binString=$packedString;
		    } 
        	    
		    else 
		    {
				$binString.=$packedString;
		    } 
        	    
		    $count+=2; 
        	} 
  	        return $binString; 
    	  } 
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
                           <?php
//dd($request);
	error_reporting(0);

	$merchant_data='';
	$working_key = "613D1BE3D0429590012156A5BF6C67D3";
	$access_code = "AVQF02DB34AD02FQDA";
//   $request->_token;                             
// $request->merchant_id;
//                                $request->amount;
//                                $request->currency;
//                                $request->billing_name;
//                                $request->billing_address;
//                                  $request->billing_state;
//                                 $request->billing_zip;
//                                 $request->billing_country;
//                                  $request->billing_tel;
//                                  $request->billing_email;
//                                "_token" => "hyt6vh3JByA45ReoH4MJo6izeFUJbDxNsvOTKoT5"
//      "merchant_id" => "43613"
//      "language" => "EN"
//      "amount" => "1"
//      "currency" => "INR"
//      "billing_name" => "vbv"
//      "billing_address" => "bv"
//      "billing_state" => "bvb"
//      "billing_zip" => "vbv"
//      "billing_country" => "bvbvb"
//      "billing_tel" => "3456"
//      "billing_email" => "gffh@fcg"
//                                    
//                                    $merchant_data.="_token"
	foreach($request as $keys=>$values){
       //dd($values);
    }
       // echo $keys->billing_name;
     //  dd($keys->billing_name);
		//$merchant_data.=$key.'='.$value.'&';
      
	//}
      
//    foreach ($request as $re){
//        dd($re);
//		$merchant_data.=$key.'='.$value.'&';
//      
//	}
//      
//	$merchant_data .= "order_id=".$orderId;
                                $merchant_data .= $request;
//dd($merchant_data);
	$encrypted_data=encrypt($merchant_data,$working_key); 
 //dd($encrypted_data);
?>
<!--<form method="post" name="redirect" action="https://test.ccavenue.ae/transaction/transaction.do?command=initiateTransaction">-->
                                <!--<form method="post" name="redirect" action="https://test.ccavenue.ae/transaction/transaction.do?command=initiateTransaction">-->
                                     <form method="post" name="redirect" action="https://secure.ccavenue.ae/transaction/transaction.do?command=initiateTransaction">
<?php
echo "<input type=hidden name=encRequest value=$encrypted_data>";
echo "<input type=hidden name=access_code value=$access_code>";
?>
</form>
</center>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
<link rel="stylesheet" href="<?php echo e(asset('assets/css/globalp.css')); ?>">
<!--
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
-->
<link rel="stylesheet" href="<?php echo e(asset('assets/css/globalp.css')); ?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.debug.js"></script>
<script language='javascript'>document.redirect.submit();</script>
<script type="text/javascript">


    
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/resources/views/admin/request_handle.blade.php ENDPATH**/ ?>