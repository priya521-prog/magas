<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Contact_query;
use App\Payment;
use App\Report_ad;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;


class DashboardController extends Controller
{
    public function dashboard(){
        $user = Auth::user();
        
       
        // echo '<pre>'; print_r($user);exit;
        $user_id = $user->id;
        //dd($user->account_type);
        $total_users = 0;
        $total_reports = 0;
        $total_payments = 0;
        $ten_contact_messages = 0;
        $reports = 0;
        $total_payments_amount = 0;

        if ($user->is_admin() || $user->is_superadmin()){
            $approved_ads = Ad::whereStatus('1')->count();
            $pending_ads = Ad::whereStatus('0')->count();
            $blocked_ads = Ad::whereStatus('2')->count();

	    $adsone = Ad::active();
            $businessadscount = $adsone->whereType('bizz')->count();
            
	    $adstwo = Ad::active();
            $classifiedscount = $adstwo->whereType('classifieds')->count();
           // dd($classifiedscount);
	    $adsthree = Ad::active();
            $prolistscounts = $adsthree->whereType('pro')->count();
	    $adsfour = Ad::active();
            $oppurtunitiescounts = $adsfour->whereType('opportunities')->count();


            $total_users = User::count();
            $total_reports = Report_ad::count();
            $total_payments = Payment::whereStatus('success')->count();
            $total_payments_amount = Payment::whereStatus('success')->sum('amount');
            $ten_contact_messages = Contact_query::take(10)->where('name','<>','admin')->orderBy('id', 'desc')->get();
            $reports = Report_ad::orderBy('id', 'desc')->with('ad')->take(10)->get();
        }
       
        
        
        else if($user->account_type=='premiumplan'){
             $adsone = Ad::active();
            $businessadscount = $adsone->whereType('bizz')->whereUserId($user_id)->count();
	    $adstwo = Ad::active();
            $classifiedscount = $adstwo->whereType('classifieds')->whereUserId($user_id)->count();
            
	    $adsthree = Ad::active();
            $prolistscounts = $adsthree->whereType('pro')->whereUserId($user_id)->count();
            
           
            
	    $adsfour = Ad::active();
            $oppurtunitiescounts = $adsfour->whereType('opportunities')->whereUserId($user_id)->count();
            
            $approved_ads = Ad::whereStatus('1')->whereUserId($user_id)->count();
            $pending_ads = Ad::whereStatus('0')->whereUserId($user_id)->count();
            $blocked_ads = Ad::whereStatus('2')->whereUserId($user_id)->count();
        }else{
             $approved_ads = Ad::whereStatus('1')->whereUserId($user_id)->count();
            $pending_ads = Ad::whereStatus('0')->whereUserId($user_id)->count();
            $blocked_ads = Ad::whereStatus('2')->whereUserId($user_id)->count();
        }

        return view('admin.dashboard', compact('user','approved_ads', 'pending_ads', 'blocked_ads', 'total_users', 'total_reports', 'total_payments', 'total_payments_amount', 'ten_contact_messages', 'reports','businessadscount','classifiedscount','prolistscounts','oppurtunitiescounts'));
    }

public function fetch_user(){
   $query = DB::table('users')->get();
   
  //  dd($query);
   return view('admin.fetch_user',compact('query'));
}

public function assign_aduser(){
    
    $query = DB::table('users')->get();
    $adsbizz = DB::table('ads')->where('type','bizz')->where('status','1')->get();
       $adspro = DB::table('ads')->where('type','pro')->where('status','1')->get();
          $adsclass = DB::table('ads')->where('type','classifieds')->where('status','1')->get();
   
//  dd($adsbizz);
   return view('admin.assign_aduser',compact('adsbizz','adspro','adsclass','query'));
}

public function fetch_bizz(){
   //$query = DB::table('ads')->get();
   
    $ads = DB::table('ads')->where('type','bizz')->where('status','1')->get();
   
  //  dd($query);
   return view('admin.fetch_bizz',compact('ads'));
}
 public function assign_bizz(Request $request){
 
 $rules = [
            'name' => 'required',
             'code' => 'required',
          ];
        
       
         $this->validate($request, $rules);
      $res= DB::table('ads')
            ->where('id', $request->name)
            ->update(['user_id' =>$request->code]);
          //  dd($res);

        return back()->with('success', trans('Success'));
        
    }
    public function set_expiry(Request $request){
  // dd($request);
        $rules = [
            'name' => 'required',
             'code' => 'required',
          ];
        
       
         $this->validate($request, $rules);
     
      
      
// 	$values['expiry'] = $request->code;
//      $updatecomment= DB::table('ads')->where('id',$request->name)->update($values);
      $res= DB::table('ads')
            ->where('id', $request->name)
            ->update(['expiry' =>$request->code]);
          //  dd($res);

        return back()->with('success', trans('expiry date set'));
        
    }


 public function saveCode(Request $request){
   //dd($request);
        $rules = [
            'affiliate_code' => 'required',
             'affiliate_code' => 'unique:users',
           // 'affiliate_code' => 'required|unique:users,affiliate_code'.$request->name,
         //   'affiliate_code' => 'required|affiliate_code|unique',
            
           'notes'=>'',
        ];
        
       
         $this->validate($request, $rules);
         $duplicate= DB::table('users')->where('affiliate_code',$request->code)->count();
        if($duplicate>0){
            //echo "Code already exists";
             return back()->with('error', trans('Code already exists'));
            
        }else{
//dd($duplicate);
        // $duplicate = State::whereStateName($request->state_name)->count();
        // if ($duplicate > 0){
        //     return back()->with('error', trans('app.state_exists_in_db'));
        // }

       
     //   dd($request->name);
     
      $res=  DB::table('users')
            ->where('id', $request->name)
            ->update(['affiliate_code' =>$request->code,'notes'=>$request->notes]);
//dd($res);
       // State::create($data);
        return back()->with('success', trans('code updated'));
        }
    }
    
    public function code_utilize(){
          $user = Auth::user();
       //   dd($user);
       $query = DB::table('users')->where('utilized_code',$user->affiliate_code)->get(); 
         return view('admin.utilized',compact('query'));
       //dd($query);
    }
    
      public function code_report(){
           $users = Auth::user();
          
 $codes = DB::table('users')->where('affiliate_code','<>', '')->get();
         
        // dd($username);
        $user = DB::table('users')->get();
      
        // $bizz=DB::table('ads')->whereNotNull('affiliate_code')->where('payment_status','paid')->get();
        // $code= DB::table('ads')
        //     ->join('users', function ($join) {
        //         $join->on('users.id', '=', 'ads.user_id')->select('ads.user_id','ads.affiliate_code as used_code','users.name as user','users.utilized_code as used')->where('ads.payment_status','paid');//you add more joins here
        //     })// and you add more joins here
        // ->get();
        // dd($code);
        // $code= DB::table('ads')
        //     ->join('users', function ($join) {
        //         $join->on('users.utilized_code', '=', 'ads.utilized_code')->select('ads.user_id','ads.utilized_code as used_code','users.name as user','users.utilized_code as used')->where('ads.payment','paid')->where('users.payment','paid');//you add more joins here
        //     })// and you add more joins here
        // ->get();
    
        // dd($code);
        
        $bizz = Ad::with('ad','user')->where('payment_status','paid')->where('affiliate_code','<>', '')->paginate(20);
    // dd($bizz);
       $query = DB::table('users')->where('payment','paid')->where('utilized_code','<>', '')->get(); 
   //    $bizz = DB::table('ads')->where('payment','paid')->get(); 
      // dd($bizz);
       //$bizz = DB::table('ads')->where('affiliate_code','<>', '')->get(); 
       
     //   dd($bizz['user_id']);
      // $username = User::with('id', $bizz->user_id)->paginate(50);
     // $user= DB::table('ads')->select('user_id')->where('affiliate_code','<>', '')->get();
     // $comments = User::where('id',$user)->first();
     // dd($comments);
   //   $previous_states = State::where('country_id', old('country'))->get();
        // $username= DB::table('users')->select('name')->where('id',$user);
     // $username = User::with('id', $bizz->user_id)->paginate(50);
      // $results = User::with('ads')->select('name')->where('id',$user);
        
  //  $users = DB::table('users')->select('name', 'email as user_email')->get();

      // $username = DB::table('users')->select('name')->where('id',$user); 
    // $username = User::where('id',$user)->get();
    //  dd($username);
         return view('admin.code_report',compact('query','user','bizz','codes'));
       //dd($query);
    }
    
    public function display_code(Request $request){
          $users = Auth::user();
          
 $codes = DB::table('users')->where('affiliate_code','<>', '')->get();
           $bizz = Ad::with('ad','user')->where('payment_status','paid')->where('affiliate_code','<>', '')->paginate(20);
    // dd($bizz);
       $query = DB::table('users')->where('payment','paid')->where('utilized_code','<>', '')->get(); 
        // dd($username);
        $user = DB::table('users')->get();
    //    dd($request->affilate_code);
        
        $code=  DB::table('users')->where('utilized_code',$request->affilate_code)->where('payment','paid')->get(); 
        
         $bizz_code = Ad::with('ad','user')->where('payment_status','paid')->where('affiliate_code',$request->affilate_code)->paginate(20);
       //$bizz_code= DB::table('ads')->where('affiliate_code',$request->affilate_code)->where('payment_status','paid')->get(); ;
        
      // dd($bizz_code);
          return view('admin.display_code',compact('query','user','bizz','codes','code','bizz_code'));
       // dd($code);
    }
   
      public function display_pdf(Request $request){
          $fetch=DB::table('ads')->where('pdffilename','<>', '')->get();
        
        $pdf=  DB::table('pdf_record')->where('url',$request->affilate_code)->get(); 
      //  dd($pdf);
        // $bizz_code = Ad::with('ad','user')->where('payment_status','paid')->where('affiliate_code',$request->affilate_code)->paginate(20);
       //$bizz_code= DB::table('ads')->where('affiliate_code',$request->affilate_code)->where('payment_status','paid')->get(); ;
        
      // dd($bizz_code);
          return view('admin.display_pdf',compact('pdf','fetch'));
       // dd($code);
    }
    
public function premiumStatus(){
   $query = DB::table('users')->get();
   
  //  dd($query);
   return view('admin.premium_status',compact('query'));
}

public function savepremiumStatus(Request $request){
  // dd($request);
        // $rules = [
        //     'country_id' => 'required',
        //     'state_name' => 'required',
        // ];
        // $this->validate($request, $rules);

        // $duplicate = State::whereStateName($request->state_name)->count();
        // if ($duplicate > 0){
        //     return back()->with('error', trans('app.state_exists_in_db'));
        // }

       
     //   dd($request->name);
     $timestamp = date("Y-m-d H:i:s"); 
		$expiry=date('Y-m-d H:i:s', strtotime('+1 years'));
      $res=  DB::table('users')
            ->where('id', $request->name)
            ->update(['payment' =>$request->payment,'account_type'=>$request->account_type,'expiry_date'=>$expiry,'payment_paid'=>$timestamp]);
//dd($res);
       // State::create($data);
        return back()->with('success', trans('status updated'));
    }

public function save_download_data(Request $request){
    dd($request);
}
    public function logout(){
        if (Auth::check()){
            Auth::logout();
        }

        return redirect(route('login'));
    }
}
