<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Payment;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use DB;
use Redirect,Response;

class PaymentController extends Controller
{
    
    public function index(){
        $title = trans('app.payments');

        $user = Auth::user();
        if ($user->is_admin() || $user->is_superadmin()){
            $payments = Payment::with('ad', 'user')->paginate(50);
            
        }else{
            $payments = Payment::whereUserId($user->id)->with('ad', 'user')->paginate(50);
        }

        return view('admin.payments', compact('title', 'payments'));
    }

    public function paymentInfo($tran_id){
        $payment = Payment::where('local_transaction_id', $tran_id)->first() ;

        if (!$payment){
            return view('admin.error.error_404');
        }

        $title = trans('app.payment_info');
        return view('admin.payment_info', compact('title', 'payment'));

    }
    
    // public function checkout($transaction_id){
    //     dd($transaction_id);
     
    //     // dd($user_id);
    //     $user = Auth::user();
    //      $user_id=$user->id;
    //     $payment = Payment::whereLocalTransactionId($transaction_id)->whereStatus('initial')->first();
    //   //  $title = trans('app.checkout');
    //   // dd($payment);
    //     if ($payment){
    //       // return view('admin.checkout', compact('title','payment'));
    //         return view('admin.checkout', compact('title','payment','user'));
    //     }
    //     return view('admin.error.invalid_transaction', compact('title','payment'));
    // }
      public function checkout($transaction_id){
       //dd($transaction_id);
     
        // dd($user_id);
        $user = Auth::user();
         $user_id=$user->id;
        $payment = Payment::whereLocalTransactionId($transaction_id)->whereStatus('initial')->first();
      //  $title = trans('app.checkout');
       // dd($payment);
        if ($payment){
           // return view('admin.checkout', compact('title','payment'));
            return view('admin.checkout', compact('title','payment','user'));
        }
        return view('admin.error.invalid_transaction', compact('title','payment'));
    }
    
    public function bizzcheckout($transaction_id){
     //  dd($transaction_id);
     
        // dd($user_id);
        $user = Auth::user();
         $user_id=$user->id;
       //  $payment = Payment::whereLocalTransactionId($transaction_id)->wherePayCatStatus('initial')->first();
       //  $payment = Payment::whereBizzTransid($transaction_id)->wherePayCatStatus('initial')->first();
         $payment = DB::select('select * from payments where bizz_transid=$transaction_id');
//         $payment = DB::table('payments')->where([
//     ['pay_cat_status', '=', 'initial'],
//     ['bizz_transid', '=',$transaction_id ],
   
// ])->first();
    dd($payment);
      
        
      //  $title = trans('app.checkout');
       // dd($payment);
        if ($payment){
           // return view('admin.checkout', compact('title','payment'));
            return view('admin.bizz_payment', compact('payment','user'));
        }
        return view('admin.error.invalid_transaction', compact('title','payment'));
    }
    
    public function invoice($transaction_id){
         $title = trans('Invoice');
         $user = Auth::user();
         $user_id=$user->id;
        
           $payment = Payment::whereLocalTransactionId($transaction_id)->whereStatus('initial')->first();
          // dd($payment);
        if ($user_id){
          
            // return view('theme.invoice_form', compact('title','payment','user'));
            
           // return redirect(route('payment_checkout'));
        }
        // return view('admin.error.invalid_transaction', compact('title','payment'));
    }

  public function initiatePayments(Request $request){
//dd($request);
		$user = Auth::user();
	        $user_id = $user->id;
	     //  dd($user_id);
	        $emailId = $user->email;

  		$ads_price =1;
// 	$ads_price =1;
      		$transaction_id = 'tran_'.time().str_random(6);
                while( ( Payment::whereLocalTransactionId($transaction_id)->count() ) > 0) {
                    $transaction_id = 'reid'.time().str_random(5);
                }
                $transaction_id = strtoupper($transaction_id);
      //  dd($transaction_id);
//                $currency = get_option('currency_sign');
                $invoice="MA".date('ym').rand(10,100) .$user->id;
                $payments_data = [
                    'ad_id'     => '8',
                    'user_id'   => $user_id,
                    'amount'    => $ads_price,
                    'payment_method'    => 'cc avenue',
                    'status'    => 'initial',
                    'currency'  => 'AED',
                    'local_transaction_id'  => $transaction_id,
                    'invoice' => $invoice
                ];
                
               
                //   	$updateentry= DB::table('ads')->where('id',$id)->update($values);
                $created_payment = Payment::create($payments_data);
             //  dd($created_payment);
               // $user_pay=User::update($user_data)->$user
              //   dd($created_payment);
              
            return redirect(route('checkout', $created_payment->local_transaction_id));
                // return redirect(route('invoice', $created_payment->local_transaction_id));
    }
    
    
    public function ccavRequestHandler(Request $request){
 //     dd($request);
        //request_handle
      //  return redirect(route('request_handle', $created_payment->local_transaction_id));
          return view('admin.request_handle',compact('request'));
    }
    
//     public function initiatePayments(Request $request){

// 		$user = Auth::user();
// 	        $user_id = $user->id;
// 	       // dd($user_id);
// 	        $emailId = $user->email;

//   		$ads_price =1;
// // 	$ads_price =1;
//       		$transaction_id = 'tran_'.time().str_random(6);
//                 while( ( Payment::whereLocalTransactionId($transaction_id)->count() ) > 0) {
//                     $transaction_id = 'reid'.time().str_random(5);
//                 }
//                 $transaction_id = strtoupper($transaction_id);
//                 $currency = get_option('currency_sign');
//                 $invoice="MA".date('ym').rand(10,100) .$user->id;
//                 $payments_data = [
//                     'ad_id'     => '8',
//                     'user_id'   => $user_id,
//                     'amount'    => $ads_price,
//                     'payment_method'    => 'paypal',
//                     'status'    => 'initial',
//                     'currency'  => $currency,
//                     'local_transaction_id'  => $transaction_id,
//                     'invoice' => $invoice
//                 ];
                
               
//                 //   	$updateentry= DB::table('ads')->where('id',$id)->update($values);
//                 $created_payment = Payment::create($payments_data);
//               //  dd($test);
//               // $user_pay=User::update($user_data)->$user
//               //   dd($created_payment);
              
//                  return redirect(route('payment_checkout', $created_payment->local_transaction_id));
//                 // return redirect(route('invoice', $created_payment->local_transaction_id));
//     }
    
    
//       public function initiatebizzPayments(Request $request){

// //dd($request);
// 		$user = Auth::user();
// 	        $user_id = $user->id;
// 	       // dd($user_id);
// 	        $emailId = $user->email;

//   		$ads_price =5;
// // 	$ads_price =1;
//       		$transaction_id = 'tranbizz_'.time().str_random(6);
//                 while( ( Payment::whereLocalTransactionId($transaction_id)->count() ) > 0) {
//                     $transaction_id = 'reid'.time().str_random(5);
//                 }
//                 $transaction_id = strtoupper($transaction_id);
//                 //dd($transaction_id);
//                 $currency = get_option('currency_sign');
//                 $invoice="BIZZ".date('ym').rand(10,100) .$user->id;
//               // dd($invoice);
//                 $payments_data = [
//                     'ad_id'     => '8',
//                     'user_id'   => $user_id,
//                     'amount'    => '99',
//                     'payment_method'    => 'paypal',
//                     'status'    => 'initial',
//                     'currency'  => $currency,
//                     'bizz_transid'  => $transaction_id,
//                     'invoicebizz' => $invoice
//                 ];
                
//              //  dd($payments_data);
//                 //   	$updateentry= DB::table('ads')->where('id',$id)->update($values);
//                 $created_paymentbizz = Payment::create($payments_data);
//               //   dd($created_paymentbizz);
//               //  dd($test);
//               // $user_pay=User::update($user_data)->$user
//               //   dd($created_payment);
              
//                  return redirect(route('bizz_payments', $created_paymentbizz->bizz_transid));
                
//                 //  return view('admin.bizz_checkout',$created_paymentbizz->bizz_transid);
//                 // return redirect(route('invoice', $created_payment->local_transaction_id));
//     }

    /**
     * @param Request $request
     * @param $transaction_id
     * @return array
     *
     * Used by Stripe
     */

    
    // public function bizz_payment(){
    //     $title = trans('BIZZ PAYMENT');
    //   // dd("bhbj");
    //   return view('theme.bizz_payment');
    // }
    
    
   public function show_products(Request $request)
	{
	    	$user = Auth::user();
	        $user_id = $user->id;
	     //  dd($user_id);
	        $emailId = $user->email;

  		$ads_price =1;
// 	$ads_price =1;
      	//	$transaction_id = 'tran_'.time().str_random(6);
      			$transaction_id = 'PO'.time().str_random(6);
                while( ( Payment::whereLocalTransactionId($transaction_id)->count() ) > 0) {
                    $transaction_id = 'reid'.time().str_random(5);
                }
                $transaction_id = strtoupper($transaction_id);
      //  dd($transaction_id);
//                $currency = get_option('currency_sign');
                $invoice="MA".date('ym').rand(10,100) .$user->id;
                $payments_data = [
                    'ad_id'     => '8',
                    'user_id'   => $user_id,
                    'amount'    => $ads_price,
                    'payment_method'    => 'razorpay',
                    'status'    => 'initial',
                    'currency'  => 'INR',
                    'local_transaction_id'  => $transaction_id,
                    'invoice' => $invoice
                ];
                
               
                //   	$updateentry= DB::table('ads')->where('id',$id)->update($values);
                $payment = Payment::create($payments_data);
             //  dd($created_payment);
               // $user_pay=User::update($user_data)->$user
              //   dd($created_payment);
              
                // return redirect(route('checkout', $created_payment->local_transaction_id));
                // return redirect(route('invoice', $created_payment->local_transaction_id));
		//return view('admin.razor_index');
	//	dd($payment);
			return view('admin.razor_index',compact('payment','user'));
	}

	public function pay_success(Request $Request){
	    	$user = Auth::user();
	        $user_id = $user->id;
	        $timestamp = date("Y-m-d H:i:s"); 
	        	$expiry=date('Y-m-d H:i:s', strtotime('+1 years'));
  //dd($user_id);
	   //$data = $request->all();
		$data = [
	//	'id' => $user_id,
		'account_type' => 'premiumplan',
		'payment_paid'=>$timestamp,
		'expiry_date'=>$expiry,
		'payment' =>'paid',
		'payment_id' => $Request->razorpay_payment_id,
		'invoiceId' => $Request->product_id,
		];
//	dd($data);
	//getId = Payment::insertGetId($data);  
		$update_value= DB::table('users')->where('id',$user_id)->update($data);
//	$data= User::create($data);
		$arr = array('msg' => 'Payment successful.', 'status' => true);
		return Response()->json($arr);    
	
	//	return view('admin.thankyou')>with('success', trans('Success : Payment Completed Succesfully'));
	
//	return view('razorpay.thankyou');
Session::flash('success', 'Your payment is successfull');
	}

	public function thank_you()
	
	{
	    	$user = Auth::user();
	        $user_id = $user->id;
	        $data = DB::table('users')->select('name','email','utilized_code','payment_id','invoiceId','address')->where('id',$user_id)->first();

//	  dd($data->name);
	  	return view('admin.thankyou',compact('data'));
		//return view('razorpay.thankyou');
	}
	
	


	public function bizz_payment(Request $Request){
	    	$user = Auth::user();
	        $user_id = $user->id;
  //dd($user_id);
	   //$data = $request->all();
		$data = [
		 //   'id'=>$Request->ad_id,
	//	'id' => $user_id,
	//	'account_type' => 'premiumplan',
		'payment_status' =>'paid',
		'payment_id' => $Request->razorpay_payment_id,
		'po_id' => $Request->product_id,
		];
	//dd($data);
	//getId = Payment::insertGetId($data);  
		$update_value= DB::table('ads')->where('id',$Request->ad_id)->update($data);
//	$data= User::create($data);
		$arr = array('msg' => 'Payment successful.', 'status' => true);
		return Response()->json($arr);    
	
	//	return view('admin.thankyou')>with('success', trans('Success : Payment Completed Succesfully'));
	
//	return view('razorpay.thankyou');
Session::flash('success', 'Your payment is successfull');
	}
	
	
		public function bizz_success()
	
	{
	    	$user = Auth::user();
	    	  $user_id = $user->id;
	    	$ad = DB::table('ads')->where('user_id',$user_id)->latest()->first();
	    //	dd($ad);
	    //	$user = Auth::user();
	    //	dd($user);
	      
	        $data = DB::table('users')->select('name','email','address')->where('id',$user_id)->first();

//	  dd($data);
	  	return view('admin.bizzsuccess',compact('data','ad'));
		//return view('razorpay.thankyou');
	}
	
	 public function startup(){
       	    	$user = Auth::user();
	    	  $user_id = $user->id;
	   
        	 $invoice="ST".date('ym').rand(10,100).$user_id;
        //	dd($invoice);
         return view('theme.package_payment', compact('user','invoice'));


}

  	public function startup_payment(Request $Request){
	    	$user = Auth::user();
	        $user_id = $user->id;
  //dd($user);
	   //$data = $request->all();
		$data = [
		 //   'id'=>$Request->ad_id,
		'user_id' => $user_id,
		'package_type' => 'start up',
	//	'payment_status' =>'paid',
		'package_invoice' => $Request->razorpay_payment_id,
		'package_poid' => $Request->product_id,
		];
//	dd($data);

	$data= Payment::create($data);
		$arr = array('msg' => 'Payment successful.', 'status' => true);
		return Response()->json($arr);    
	
	//	return view('admin.thankyou')>with('success', trans('Success : Payment Completed Succesfully'));
	
//	return view('razorpay.thankyou');
Session::flash('success', 'Your payment is successfull');
	}

	public function startup_success()
	
	{
	    
	    	$user = Auth::user();
	    	  $user_id = $user->id;
	    //	  dd($user_id);
	    	$ad = DB::table('payments')->where('user_id',$user_id)->where('package_type','start up')->latest()->first();
	    //	dd($ad);
	    //	$user = Auth::user();
	    //	dd($user);
	      
	        $data = DB::table('users')->select('name','email','address')->where('id',$user_id)->first();

//	  dd($data);
	  	return view('admin.startupsuccess',compact('data','ad'));
		//return view('razorpay.thankyou');
	}
	
	
	
		 public function growth(){
       	    	$user = Auth::user();
	    	  $user_id = $user->id;
	   
        	 $invoice="GR".date('ym').rand(10,100).$user_id;
        //	dd($invoice);
         return view('theme.growth_payment', compact('user','invoice'));


}

  	public function growth_payment(Request $Request){
	    	$user = Auth::user();
	        $user_id = $user->id;
  //dd($user);
	   //$data = $request->all();
		$data = [
		 //   'id'=>$Request->ad_id,
		'user_id' => $user_id,
		'package_type' => 'growth',
	//	'payment_status' =>'paid',
		'package_invoice' => $Request->razorpay_payment_id,
		'package_poid' => $Request->product_id,
		];
//	dd($data);

	$data= Payment::create($data);
		$arr = array('msg' => 'Payment successful.', 'status' => true);
		return Response()->json($arr);    
	
	//	return view('admin.thankyou')>with('success', trans('Success : Payment Completed Succesfully'));
	
//	return view('razorpay.thankyou');
Session::flash('success', 'Your payment is successfull');
	}

	public function growth_success()
	
	{
	    
	    	$user = Auth::user();
	    	  $user_id = $user->id;
	    //	  dd($user_id);
	    	$ad = DB::table('payments')->where('user_id',$user_id)->where('package_type','growth')->latest()->first();
	    //	dd($ad);
	    //	$user = Auth::user();
	    //	dd($user);
	      
	        $data = DB::table('users')->select('name','email','address')->where('id',$user_id)->first();

//	  dd($data);
	  	return view('admin.growthsuccess',compact('data','ad'));
		//return view('razorpay.thankyou');
	}
	
	
	
	public function sail(){
       	    	$user = Auth::user();
	    	  $user_id = $user->id;
	   
        	 $invoice="SA".date('ym').rand(10,100).$user_id;
        //	dd($invoice);
         return view('theme.sail_payment', compact('user','invoice'));


}

  	public function sail_payment(Request $Request){
	    	$user = Auth::user();
	        $user_id = $user->id;
  //dd($user);
	   //$data = $request->all();
		$data = [
		 //   'id'=>$Request->ad_id,
		'user_id' => $user_id,
		'package_type' => 'sail',
	//	'payment_status' =>'paid',
		'package_invoice' => $Request->razorpay_payment_id,
		'package_poid' => $Request->product_id,
		];
//	dd($data);

	$data= Payment::create($data);
		$arr = array('msg' => 'Payment successful.', 'status' => true);
		return Response()->json($arr);    
	
	//	return view('admin.thankyou')>with('success', trans('Success : Payment Completed Succesfully'));
	
//	return view('razorpay.thankyou');
Session::flash('success', 'Your payment is successfull');
	}

	public function sail_success()
	
	{
	    
	    	$user = Auth::user();
	    	  $user_id = $user->id;
	    //	  dd($user_id);
	    	$ad = DB::table('payments')->where('user_id',$user_id)->where('package_type','sail')->latest()->first();
	    //	dd($ad);
	    //	$user = Auth::user();
	    //	dd($user);
	      
	        $data = DB::table('users')->select('name','email','address')->where('id',$user_id)->first();

//	  dd($data);
	  	return view('admin.sailsuccess',compact('data','ad'));
		//return view('razorpay.thankyou');
	}


	

	

}
