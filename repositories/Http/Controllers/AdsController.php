<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Slider;
use App\Post;
use App\Brand;
use App\Category;
use App\City;
use App\Country;
use App\Media;
use App\Payment;
use App\Report_ad;
use App\State;
use App\Sub_Category;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = trans('app.all_ads');
       // $ads = Ad::with('city', 'country', 'state')->whereStatus('1')->orderBy('id', 'desc')->paginate(20);
        
        $user = Auth::user();
        //dd($user);
        // $ads = $user->ads()->with('city', 'country', 'state')->orderBy('id', 'desc')->paginate(20);
       if($user->user_type=='admin'){
            $ads = Ad::with('city', 'country', 'state')->whereStatus('1')->orderBy('id', 'desc')->paginate(20);
           
          //$ads = $user->ads()->with('city', 'country', 'state')->orderBy('id', 'desc')->paginate(20);
       }else if($user->user_type=='super_admin'){
       $ads = Ad::with('city', 'country', 'state')->whereStatus('1')->orderBy('id', 'desc')->paginate(20);
       
       }else{
           
            $ads = $user->ads()->with('city', 'country', 'state')->where('status','1')->orderBy('id', 'desc')->paginate(20);
        //    $ads = $user->ads()->with('city', 'country', 'state')->whereStatus('1')->orderBy('id', 'desc')->paginate(20);
       }
        
        return view('admin.all_ads', compact('title', 'ads'));
    }

    public function adminPendingAds()
    {
        $title = trans('app.pending_ads');
       $ads = Ad::with('city', 'country', 'state')->whereStatus('0')->orderBy('id', 'desc')->paginate(20);
        
    //  dd($ads->id);
       

        return view('admin.all_ads', compact('title', 'ads'));
    }
    public function adminBlockedAds()
    {
        $title = trans('app.blocked_ads');
      //  $ads = Ad::with('city', 'country', 'state')->whereStatus('2')->orderBy('id', 'desc')->paginate(20);
         $user = Auth::user();
        //dd($user);
        // $ads = $user->ads()->with('city', 'country', 'state')->orderBy('id', 'desc')->paginate(20);
       if($user->user_type=='admin'){
            $ads = Ad::with('city', 'country', 'state')->whereStatus('2')->orderBy('id', 'desc')->paginate(20);
           
        //   $ads = $user->ads()->with('city', 'country', 'state')->whereStatus('2')->orderBy('id', 'desc')->paginate(20);
       }else if($user->user_type=='super_admin'){
      $ads = Ad::with('city', 'country', 'state')->whereStatus('2')->orderBy('id', 'desc')->paginate(20);
    //  $ads = $user->ads()->with('city', 'country', 'state')->whereStatus('2')->orderBy('id', 'desc')->paginate(20);
       
       }else{
           // $ads = $user->ads()->with('city', 'country', 'state')->orderBy('id', 'desc')->paginate(20);
            // $ads = $user->ads()->with('city', 'country', 'state')->whereStatus('2')->orderBy('id', 'desc')->paginate(20);
             $ads = $user->ads()->whereStatus('2')->with('city', 'country', 'state')->orderBy('id', 'desc')->paginate(20);
       }

        return view('admin.all_ads', compact('title', 'ads'));
    }
    
    public function myAds(){
        $title = trans('app.my_ads');

        $user = Auth::user();
        //dd($user);
        // $ads = $user->ads()->with('city', 'country', 'state')->orderBy('id', 'desc')->paginate(20);
       if($user->user_type=='admin'){
           $ads = Ad::with('city', 'country', 'state')->orderBy('id', 'desc')->paginate(20);
          //$ads = $user->ads()->with('city', 'country', 'state')->orderBy('id', 'desc')->paginate(20);
       }else if($user->user_type=='super_admin'){
       $ads = Ad::with('city', 'country', 'state')->orderBy('id', 'desc')->paginate(20);
       
       }else{
            $ads = $user->ads()->with('city', 'country', 'state')->orderBy('id', 'desc')->paginate(20);
            // $ads = Ad::with('city', 'country', 'state')->orderBy('id', 'desc')->paginate(20);
       }
       // dd($ads);
        return view('admin.my_ads', compact('title', 'ads'));
    }

    public function pendingAds(){
        $title = trans('app.my_ads');

        $user = Auth::user();
        $ads = $user->ads()->whereStatus('0')->with('city', 'country', 'state')->orderBy('id', 'desc')->paginate(20);

        return view('admin.pending_ads', compact('title', 'ads'));
    }

public function user_blocked_ads(){
        $title = trans('app.my_ads');

        $user = Auth::user();
        $ads = $user->ads()->whereStatus('2')->with('city', 'country', 'state')->orderBy('id', 'desc')->paginate(20);

        return view('admin.block_ads', compact('title', 'ads'));
    }
    
    public function user_approvedads(){
        $title = trans('app.my_ads');

        $user = Auth::user();
        $ads = $user->ads()->whereStatus('1')->with('city', 'country', 'state')->orderBy('id', 'desc')->paginate(20);

        return view('admin.user_approvedads', compact('title', 'ads'));
    }
    
    
    public function favoriteAds(){
        $title = trans('app.favourite_ads');

        $user = Auth::user();
        $ads = $user->favourite_ads()->with('city', 'country', 'state')->orderBy('id', 'desc')->paginate(20);
        
        return view('admin.favourite_ads', compact('title', 'ads'));
    }
    
     public function downloadMedia(Request $request){
       
  // dd($request);
         $arr = explode('pdf/', $request->url);
         
        $filename = $arr[1];
       // dd($filename)
        if($filename){
            $query=DB::table('pdf_record')->insert(
    ['name' => $request->name, 'email' => $request->email,'url'=>$request->url1,'full_url'=>$request->fullpageurl]
);
            return redirect(route('downloadfile',[$request->url]));
        }
        
    
    
      return redirect()->back();
        
    }
    
    public function downloadFile($url){
          return response()->download($url);
    }
    
    // public function download_pdf(){
        
    //     $query = DB::table('pdf_record')->get();
    //     // return view('admin.utilized',compact('query'));
    //       return view('admin.pdf_report',compact('query'));
    //     // return redirect(route('pdf_report',compact('query')));
    // }
    
    public function nextAd($id){
          $ad = Ad::active();
         $ads = $ad->where('id',$id)->get();
         $ads=$ads[0];
         $type=$ads->type;
         
          $ad = Ad::active();
         $next=$ad->whereType($type)->where('id','>',$id)->get()->first();
         
         if($next){
             return redirect(route('single_ad',[$next->id, $next->slug]));
         }
         
         return redirect(route('single_ad',[$ads->id, $ads->slug]));
         
    }
    
    public function previousAd($id){
          $ad = Ad::active();
         $ads = $ad->where('id',$id)->get();
         $ads=$ads[0];
         $type=$ads->type;
         
          $ad = Ad::active();
         $previous=$ad->whereType($type)->where('id','<',$id)->get()->last();
         
         if($previous){
             return redirect(route('single_ad',[$previous->id, $previous->slug]));
             
         }
         return redirect(route('single_ad',[$ads->id, $ads->slug]));
         
         
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth::user()->id;
        
//        print_r($user_id);exit;
        $title = trans('app.post_an_ad');
        $categories = Category::where('category_id', 0)->get();
        $countries = Country::all();
        $ads_images = Media::whereUserId($user_id)->whereAdId(0)->whereRef('ad')->get();
        
        $previous_brands = Brand::where('category_id', old('category'))->get();
        $previous_states = State::where('country_id', old('country'))->get();
        $previous_cities = City::where('state_id', old('state'))->get();

        return view('admin.create_ad', compact('title', 'categories', 'countries', 'ads_images', 'previous_brands', 'previous_states', 'previous_cities'));
    }


    public function createproad()
    {
        $user_id = Auth::user()->id;
        

        $title = trans('app.post_an_ad');
        $categories = Category::where('category_id', 0)->get();
        $countries = Country::all();
        $ads_images = Media::whereUserId($user_id)->whereAdId(0)->whereRef('ad')->get();
        $previous_states = State::where('country_id', old('country'))->get();
        $previous_cities = City::where('state_id', old('state'))->get();

        return view('admin.create_proad', compact('title', 'categories', 'countries', 'ads_images', 'previous_brands', 'previous_states', 'previous_cities'));
    }
    
    public function editProad($id)
    {
         $user_id = Auth::user()->id;
         $title = trans("Edit Profile ");
        $categories = Category::where('category_id', 0)->get();
        $countries = Country::all();
        $ads_images = Media::whereUserId($user_id)->whereAdId(0)->whereRef('ad')->get();
        $previous_states = State::where('country_id', old('country'))->get();
        $previous_cities = City::where('state_id', old('state'))->get();
        
        //$ads = Ad::active();
        // $ads = $ads->whereType('pro')->where('id',$id)->get();
        // $ads=$ads[0];
        // dd($ads);
         $ads = Ad::whereType('pro')->where('id',$id)->first();
         
         $states = State::where('country_id',$ads->country_id)->get();
        $cities = City::where('state_id',$ads->state_id)->get();
        
        return view('theme.edit_pro', compact('title', 'categories', 'countries', 'ads_images', 'previous_brands', 'previous_states', 'previous_cities','ads','states','cities'));
	
    }
    
    public function updateProad(Request $request, $id){
        //  'filescustommedia'  => 'required',

	$rules = [
            'category'  => 'required',
            'ad_title'  => 'required',
            'ad_description'  => 'required',
            'servicetype'  => 'required',
            'country'  => 'required',
            'designation'  => 'required',
            'seller_email'  => 'required',
            'seller_phone'  => 'required',

        ];	
	$this->validate($request, $rules);
	 $title = $request->ad_title;

//            'company_name'  => 'required',


        $slug = unique_slug($title);
        $sub_category = Category::find($request->category);
        $is_negotialble = $request->negotiable ? $request->negotiable : 0;
        $brand_id = $request->brand ? $request->brand : 0;
        $mark_ad_urgent = $request->mark_ad_urgent ? $request->mark_ad_urgent : 0;
        $video_url = $request->video_url ? $request->video_url : '';


 	//Check ads moderation settings
        if (get_option('ads_moderation') == 'direct_publish'){
            $data['status'] = '1';
        }

        //if price_plan not in post data, then set a default value, although mysql will save it as enum first value
        if ( ! $request->price_plan){
            $data['price_plan'] = 'regular';
        }
        $pdffilename ='';
	if($_FILES["filescustom"]['name'] !='') {
		$file = $request->file('filescustom');
       		$pdffilename = now().$file->getClientOriginalName();
   	        $destinationPath = 'uploads/pdf';
      		$file->move($destinationPath,now().$file->getClientOriginalName());
	}

	$businesslogoupload ='';
	if($_FILES["filescustommedia"]['name'] !='') {
		$filethree = $request->file('filescustommedia');
       		$businesslogoupload = now().$filethree->getClientOriginalName();
   	        $destinationPath = 'uploads/businesslogo';
      		$filethree->move($destinationPath,now().$filethree->getClientOriginalName());
	}


	$timestamp = date("Y-m-d H:i:s"); 

        $user_id = Auth::user()->id;
	//echo "<pre>";
	$values=[];
	$values['title'] = $request->ad_title;
	        $values['slug'] = $slug;
            $values['description'] = $request->ad_description;
            $values['category_id'] = $sub_category->category_id;
            $values['sub_category_id'] = $request->category;
            
            if($pdffilename){
                $values['pdffilename'] = $pdffilename;
            }
            
            $values['ad_condition'] = 'new';
	    $values['seller_name'] = $request->ad_title;
            $values['seller_email'] = $request->seller_email;
            $values['seller_phone'] = $request->seller_phone;
	    $values['country_id'] = $request->country;
            $values['state_id'] = $request->state;
            $values['city_id'] = $request->city;
            $values['servicename'] = $request->servicetype;
            $values['designation'] = $request->designation;
            
            if($businesslogoupload){
              $values['business_image'] = $businesslogoupload;  
            }
            
            $values['company_name'] = $request->company_name;
            // $values['price_plan'] = 'regular',
            // 'status' => '1',
            $values['status']='0';
            $values['user_id'] = $user_id;
           // $values['updated_at'] = $timestamp;
               $values['editupdated_at'] = $timestamp;
            
        	$updateentry= DB::table('ads')->where('id',$id)->update($values);
	
	if ($updateentry){
            return redirect()->back()->with('success', trans('Success : Profile Updated Succesfully  for Content Moderation.'));
        }
        return redirect()->back()->with('error', trans('app.error_msg'));

// 	return redirect(route('createproad'))->with('success', trans('Success : Your Profile details are saved succesfully.'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     
    public function headlines(){
       // dd("vj");
       return view('theme.headline');
    }
    // public function headlinesnew(){
    //   // dd("vj");
    //   return view('theme.bizz_payment');
    // }
    public function terms(){
        return view('theme.terms_of_use');
    }
     public function Videos(){
        return view('theme.videos');
    }
    public function listyourbusiness()
    {
        //$user_id = Auth::user()->id;
        $title = trans("List Your Business on Magas");
        $categories = Category::where('category_id', 0)->get();
        $countries = Country::all();
        //$ads_images = Media::whereUserId($user_id)->whereAdId(0)->whereRef('ad')->get();
        $previous_states = State::where('country_id', old('country'))->get();
        $previous_cities = City::where('state_id', old('state'))->get();
          $query = DB::table('users')->where('affiliate_code','<>', '')->get();
        // return view('theme.create_bizzad', compact('title', 'categories', 'countries', 'ads_images', 'previous_brands', 'previous_states', 'previous_cities'));
       // return view('theme.previewbizz', compact('title', 'categories', 'countries', 'previous_brands', 'previous_states', 'previous_cities','query'));
        return view('theme.create_bizzad', compact('title', 'categories', 'countries', 'previous_brands', 'previous_states', 'previous_cities','query'));
    }
    //  public function previewbusiness(Request $request)
    // {
    //   // dd($request);
    //     $title = trans("List Your Business on Magas");
    //     $categories = Category::where('category_id', 0)->get();
    //     $countries = Country::all();
    //     //$ads_images = Media::whereUserId($user_id)->whereAdId(0)->whereRef('ad')->get();
    //     $previous_states = State::where('country_id', old('country'))->get();
    //     $previous_cities = City::where('state_id', old('state'))->get();
    //       $query = DB::table('users')->where('affiliate_code','<>', '')->get();
    //     return view('theme.previewbizz', compact('request','title', 'categories', 'countries', 'previous_brands', 'previous_states', 'previous_cities','query'));
    //     // return view('theme.create_bizzad', compact('title', 'categories', 'countries', 'ads_images', 'previous_brands', 'previous_states', 'previous_cities'));
    //   // return view('theme.create_bizzad', compact('title', 'categories', 'countries', 'previous_brands', 'previous_states', 'previous_cities','query'));
    // }
    
      public function businessStore(Request $request) {
        
 
	$rules = [
            'category'  => 'required',
            'filescustommedia'  => 'required',
            'ad_title'  => 'required',
            'ad_description'  => 'required',
            'servicetype'  => 'required',
            'country'  => 'required',
            'seller_name'  => 'required',
            'seller_email'  => 'required',
            'seller_phone'  => 'required',
            'address'  => 'required',
            'company_name'  => 'required',
             'state'=>'',
              'city'=>'',
        ];	
        $this->validate($request, $rules);
	 $title = $request->ad_title;
        	$user = Auth::user();
            $user_id=$user->id;

        $slug = unique_slug($title);
        $sub_category = Category::find($request->category);
        $is_negotialble = $request->negotiable ? $request->negotiable : 0;
        $brand_id = $request->brand ? $request->brand : 0;
        $mark_ad_urgent = $request->mark_ad_urgent ? $request->mark_ad_urgent : 0;
        $video_url = $request->video_url ? $request->video_url : '';


 	//Check ads moderation settings
        if (get_option('ads_moderation') == 'direct_publish'){
            $data['status'] = '1';
        }

        //if price_plan not in post data, then set a default value, although mysql will save it as enum first value
        if ( ! $request->price_plan){
            $data['price_plan'] = 'regular';
        }
        
         
        $pdffilename ='';
	if($_FILES["filescustom"]['name'] !='') {
		$file = $request->file('filescustom');
      		$pdffilename = now().$file->getClientOriginalName();
  	        $destinationPath = 'uploads/pdf';
      		$file->move($destinationPath,now().$file->getClientOriginalName());
	}
	

	$coverimageupload ='';
	if($_FILES["filescustomone"]['name'] !='') {
		$fileone = $request->file('filescustomone');
      		$coverimageupload = now().$fileone->getClientOriginalName();
  	        $destinationPath = 'uploads/coverimage';
      		$fileone->move($destinationPath,now().$fileone->getClientOriginalName());
	}

	$bizzdocumentname ='';
	if($_FILES["filescustomtwo"]['name'] !='') {
		$filetwo = $request->file('filescustomtwo');
      		$bizzdocumentname = now().$filetwo->getClientOriginalName();
  	        $destinationPath = 'uploads/businessdoc';
      		$filetwo->move($destinationPath,now().$filetwo->getClientOriginalName());
	}


	$businesslogoupload ='';
	if($_FILES["filescustommedia"]['name'] !='') {
		$filethree = $request->file('filescustommedia');
      		$businesslogoupload = now().$filethree->getClientOriginalName();
  	        $destinationPath = 'uploads/businesslogo';
      		$filethree->move($destinationPath,now().$filethree->getClientOriginalName());
	}
	
	


	$timestamp = date("Y-m-d H:i:s"); 
		$expiry=date('Y-m-d H:i:s', strtotime('+1 years'));
    
	
	//echo "<pre>";
	$values = array('title' => $request->ad_title,'slug' => $slug,
            'description' => $request->ad_description,
            'category_id' => $sub_category->category_id,
            'sub_category_id' => $request->category,
            'brand_id' => $brand_id,
            'type' => 'bizz',
            'pdffilename' => $pdffilename,
            'ad_condition' => 'new',
	    'seller_name' => $request->seller_name,
            'seller_email' => $request->seller_email,
            'seller_phone' => $request->seller_phone,
	    'country_id' => $request->country,
            'state_id' => $request->state,
            'city_id' => $request->city,
            'address' => $request->address,
          'servicename' => $request->servicetype,
             'coverimagefilename' => $coverimageupload,
             'business_image' => $businesslogoupload,
             'business_document' => $bizzdocumentname,
            'company_name' => $request->company_name,
	    'video_url' => $video_url,
            'price_plan' => 'regular',
            'mark_ad_urgent' => $mark_ad_urgent,
            'status' => '0',
            'user_id' => $user_id,
            'affiliate_code' => $request->affilate_code,
            'created_at' => $timestamp,
             'expiry'=>$expiry,
             'editupdated_at' => $timestamp,
            'updated_at' => $timestamp);
          // dd($request);
           
	$creatnewentry= DB::table('ads')->insert($values);
	$lastinsertid = DB::getPdo()->lastInsertId();
	$ad = DB::table('ads')->latest()->first();
	$categories = Category::all();
        	//	dd($categories);
        	
        	
      // return view($this->theme.'bizz_payment', compact('user','invoice'));

//return view($this->theme.'bizz_preview', compact('ad', 'title'));
//	dd($lastinsertid);

//	return redirect(route('bizzfetch'))->with('success', trans('Success : Business Listing Stored Succesfully for Content moderation and Proceeding towards the payments.'));;

	return redirect(route('listyourbusiness'))->with('success', trans('Success : Business Listing Stored Succesfully for Content and Payment Moderation.'));
  }
    
    public function addVideos()
    {
        $user_id = Auth::user()->id;
        $title = trans("List Videos on Magas");
        $categories = Category::where('category_id', 0)->get();
        $countries = Country::all();
        $ads_images = Media::whereUserId($user_id)->whereAdId(0)->whereRef('ad')->get();
        $previous_states = State::where('country_id', old('country'))->get();
        $previous_cities = City::where('state_id', old('state'))->get();
        return view('theme.create_video', compact('title', 'categories', 'countries', 'ads_images', 'previous_brands', 'previous_states', 'previous_cities'));
    }
    
      public function videoStore(Request $request) {

	$rules = [
           // 'category'  => 'required',
            'filescustommedia'  => '',
            'ad_title'  => 'required',
           // 'ad_description'  => 'required',
            // 'servicetype'  => 'required',
            // 'country'  => 'required',
          //  'seller_name'  => 'required',
            // 'seller_email'  => 'required',
            // 'seller_phone'  => 'required',
            // 'address'  => 'required',
            // 'seller_website' => '',
            // 'social_media_link' => '',
           // 'company_name'  => 'required',
        ];	
	$this->validate($request, $rules);
	 $title = $request->ad_title;


        $slug = unique_slug($title);
        $sub_category = Category::find($request->category);
        $is_negotialble = $request->negotiable ? $request->negotiable : 0;
        $brand_id = $request->brand ? $request->brand : 0;
        $mark_ad_urgent = $request->mark_ad_urgent ? $request->mark_ad_urgent : 0;
        $video_url = $request->video_url ? $request->video_url : '';


 	//Check ads moderation settings
        if (get_option('ads_moderation') == 'direct_publish'){
            $data['status'] = '1';
        }

        //if price_plan not in post data, then set a default value, although mysql will save it as enum first value
        if ( ! $request->price_plan){
            $data['price_plan'] = 'regular';
        }
        $pdffilename ='';
// 	if($_FILES["filescustom"]['name'] !='') {
// 		$file = $request->file('filescustom');
//       		$pdffilename = now().$file->getClientOriginalName();
//   	        $destinationPath = 'uploads/pdf';
//       		$file->move($destinationPath,now().$file->getClientOriginalName());
// 	}

// 	$coverimageupload ='';
// 	if($_FILES["filescustomone"]['name'] !='') {
// 		$fileone = $request->file('filescustomone');
//       		$coverimageupload = now().$fileone->getClientOriginalName();
//   	        $destinationPath = 'uploads/coverimage';
//       		$fileone->move($destinationPath,now().$fileone->getClientOriginalName());
// 	}

// 	$bizzdocumentname ='';
// 	if($_FILES["filescustomtwo"]['name'] !='') {
// 		$filetwo = $request->file('filescustomtwo');
//       		$bizzdocumentname = now().$filetwo->getClientOriginalName();
//   	        $destinationPath = 'uploads/businessdoc';
//       		$filetwo->move($destinationPath,now().$filetwo->getClientOriginalName());
// 	}


	$videoupload ='';
	if($_FILES["filescustommedia"]['name'] !='') {
		$filethree = $request->file('filescustommedia');
       		$videoupload = now().$filethree->getClientOriginalName();
   	        $destinationPath = 'uploads/videos';
      		$filethree->move($destinationPath,now().$filethree->getClientOriginalName());
	}


	$timestamp = date("Y-m-d H:i:s"); 


	//echo "<pre>";
	$values = array('title' => $request->ad_title,'slug' => $slug,
            // 'description' => $request->ad_description,
            // 'category_id' => $sub_category->category_id,
            // 'sub_category_id' => $request->category,
            // 'brand_id' => $brand_id,
            // 'type' => 'whitepapers',
            // 'pdffilename' => $pdffilename,
            // 'ad_condition' => 'new',
	   // 'seller_name' => $request->seller_name,
    //         'seller_email' => $request->seller_email,
    //         'social_media_link' => $request->social_media_link,
    //         'website' => $request->seller_website,
    //         'seller_phone' => $request->seller_phone,
	   // 'country_id' => $request->country,
    //         'state_id' => $request->state,
    //         'city_id' => $request->city,
    //         'address' => $request->address,
    //         'servicename' => $request->servicetype,
    //         'coverimagefilename' => $coverimageupload,
          //  'business_image' => $businesslogoupload,
          // 'business_document' => $bizzdocumentname,
          
	    'video_url' => $videoupload,
            'price_plan' => 'regular',
            'mark_ad_urgent' => $mark_ad_urgent,
            'status' => '1',
            'user_id' => '12',
           
            'created_at' => $timestamp,
            'updated_at' => $timestamp);
	$creatnewentry= DB::table('ads')->insert($values);
	$lastinsertid = DB::getPdo()->lastInsertId();
	return redirect(route('add_videos'))->with('success', trans('Success : video Stored Succesfully'));
   }
     public function create_your_whitepaper()
    {
        if (Auth::user()) {
        $user_id = Auth::user()->id;
        //dd($user_id);
        $title = trans("List Whitepapers on Magas");
        $categories = Category::where('category_id', 0)->get();
        $countries = Country::all();
        //$ads_images = Media::whereUserId($user_id)->whereAdId(0)->whereRef('ad')->get();
        $previous_states = State::where('country_id', old('country'))->get();
        $previous_cities = City::where('state_id', old('state'))->get();
        return view('theme.create_whitepaper', compact('title', 'categories', 'countries', 'ads_images', 'previous_brands', 'previous_states', 'previous_cities'));
        }else {
	return redirect(route('login'))->with('message', trans('Please Signup/login to post project '));
    }
    }
    
    public function editWhitepaper($id){
         $user_id = Auth::user()->id;
         $title = trans("Edit Whitepaper ");
        $categories = Category::where('category_id', 0)->get();
        $countries = Country::all();
        $ads_images = Media::whereUserId($user_id)->whereAdId(0)->whereRef('ad')->get();
        $previous_states = State::where('country_id', old('country'))->get();
        $previous_cities = City::where('state_id', old('state'))->get();
        
       // $ads = Ad::active();
        //  $ads = $ads->whereType('whitepapers')->where('id',$id)->get();
        //  $ads=$ads[0];
        // dd($ads);
           $ads = Ad::whereType('whitepapers')->where('id',$id)->first();
         $states = State::where('country_id',$ads->country_id)->get();
        $cities = City::where('state_id',$ads->state_id)->get();
        
        return view('theme.edit_whitepaper', compact('title', 'categories', 'countries', 'ads_images', 'previous_brands', 'previous_states', 'previous_cities','ads','states','cities'));
	
        
    }

     public function whitepaperStore(Request $request) {

	$rules = [
            'category'  => 'required',
            'filescustommedia'  => 'required',
            'ad_title'  => 'required',
            'ad_description'  => 'required',
            'servicetype'  => 'required',
            'country'  => 'required',
          //  'seller_name'  => 'required',
            'seller_email'  => 'required',
            'seller_phone'  => 'required',
            'address'  => 'required',
            'seller_website' => '',
            'social_media_link' => '',
             'state'=>'',
              'city'=>'',
           // 'company_name'  => 'required',
        ];	
	$this->validate($request, $rules);
	 $title = $request->ad_title;

$user = Auth::user();

        $user_id = $user->id;
        $slug = unique_slug($title);
        $sub_category = Category::find($request->category);
        $is_negotialble = $request->negotiable ? $request->negotiable : 0;
        $brand_id = $request->brand ? $request->brand : 0;
        $mark_ad_urgent = $request->mark_ad_urgent ? $request->mark_ad_urgent : 0;
        $video_url = $request->video_url ? $request->video_url : '';


 	//Check ads moderation settings
        if (get_option('ads_moderation') == 'direct_publish'){
            $data['status'] = '1';
        }

        //if price_plan not in post data, then set a default value, although mysql will save it as enum first value
        if ( ! $request->price_plan){
            $data['price_plan'] = 'regular';
        }
        $pdffilename ='';
	if($_FILES["filescustom"]['name'] !='') {
		$file = $request->file('filescustom');
       		$pdffilename = now().$file->getClientOriginalName();
   	        $destinationPath = 'uploads/pdf';
      		$file->move($destinationPath,now().$file->getClientOriginalName());
	}

	$coverimageupload ='';
	if($_FILES["filescustomone"]['name'] !='') {
		$fileone = $request->file('filescustomone');
       		$coverimageupload = now().$fileone->getClientOriginalName();
   	        $destinationPath = 'uploads/coverimage';
      		$fileone->move($destinationPath,now().$fileone->getClientOriginalName());
	}

// 	$bizzdocumentname ='';
// 	if($_FILES["filescustomtwo"]['name'] !='') {
// 		$filetwo = $request->file('filescustomtwo');
//       		$bizzdocumentname = now().$filetwo->getClientOriginalName();
//   	        $destinationPath = 'uploads/businessdoc';
//       		$filetwo->move($destinationPath,now().$filetwo->getClientOriginalName());
// 	}


	$businesslogoupload ='';
	if($_FILES["filescustommedia"]['name'] !='') {
		$filethree = $request->file('filescustommedia');
       		$businesslogoupload = now().$filethree->getClientOriginalName();
   	        $destinationPath = 'uploads/businesslogo';
      		$filethree->move($destinationPath,now().$filethree->getClientOriginalName());
	}


	$timestamp = date("Y-m-d H:i:s"); 
	$expiry=date('Y-m-d H:i:s', strtotime('+1 years'));
    

	//echo "<pre>";
	$values = array('title' => $request->ad_title,'slug' => $slug,
            'description' => $request->ad_description,
            'category_id' => $sub_category->category_id,
            'sub_category_id' => $request->category,
            'brand_id' => $brand_id,
            'type' => 'whitepapers',
            'pdffilename' => $pdffilename,
            'ad_condition' => 'new',
	   // 'seller_name' => $request->seller_name,
            'seller_email' => $request->seller_email,
            'social_media_link' => $request->social_media_link,
            'website' => $request->seller_website,
            'seller_phone' => $request->seller_phone,
	    'country_id' => $request->country,
            'state_id' => $request->state,
            'city_id' => $request->city,
            'address' => $request->address,
            'servicename' => $request->servicetype,
            'coverimagefilename' => $coverimageupload,
            'business_image' => $businesslogoupload,
            'expiry'=>$expiry,
          // 'business_document' => $bizzdocumentname,
          
	    'video_url' => $video_url,
            'price_plan' => 'regular',
            'mark_ad_urgent' => $mark_ad_urgent,
            'status' => '0',
            'user_id' => $user_id,
            'editupdated_at' => $timestamp,
            'created_at' => $timestamp,
            'updated_at' => $timestamp);
	$creatnewentry= DB::table('ads')->insert($values);
	$lastinsertid = DB::getPdo()->lastInsertId();
	return redirect(route('create_your_whitepaper'))->with('success', trans('Success : Whitepaper  Stored Succesfully for Content Moderation'));
   }
   
    public function whitepaper_list(Request $request){
       // dd($request);
        $ads = Ad::active();
        $ads = $ads->whereType('whitepapers')->orderBy('editupdated_at', 'desc');
      // $ads= Ad::activeWhitepapers()->with('category','sub_category', 'city', 'media_img', 'feature_img')->limit($limit_premium_ads)->orderBy('editupdated_at', 'desc')->get();
      //dd($ads);
        $business_ads_count = Ad::active()->business();
       // $personal_ads_count = Ad::active()->personal();

        //$premium_ads = Ad::activePremium();
       

        if ($request->q){
            $ads = $ads->where(function($ads) use($request){
                $ads->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
            });
            
            $business_ads_count = $business_ads_count->where(function($business_ads_count) use($request){
                $business_ads_count->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
            });

            //$personal_ads_count = $personal_ads_count->where(function($personal_ads_count) use($request){
              //  $personal_ads_count->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
            //});
        }
        if ($request->category){
            $ads = $ads->whereCategoryId($request->category);
            $business_ads_count = $business_ads_count->whereCategoryId($request->category);
            //$personal_ads_count = $personal_ads_count->whereCategoryId($request->category);

            //$premium_ads = $premium_ads->whereCategoryId($request->category);
        }

	if ($request->sub_category){
            $ads = $ads->whereSubCategoryId($request->sub_category);
            $business_ads_count = $business_ads_count->whereSubCategoryId($request->sub_category);
        }
        
        if ($request->country){
            $ads = $ads->whereCountryId($request->country);
            $business_ads_count = $business_ads_count->whereCountryId($request->country);
            //$personal_ads_count = $personal_ads_count->whereCountryId($request->country);
        }
        if ($request->state){
            $ads = $ads->whereStateId($request->state);
            $business_ads_count = $business_ads_count->whereStateId($request->state);
            //$personal_ads_count = $personal_ads_count->whereStateId($request->state);
        }
        
       
        if ($request->user_id){
            $ads = $ads->whereUserId($request->user_id);
            $business_ads_count = $business_ads_count->whereUserId($request->user_id);
            //$personal_ads_count = $personal_ads_count->whereUserId($request->user_id);
        }
        
            $ads = $ads->orderBy('editupdated_at', 'desc');
            $ads = $ads->with('category');
            $ads = $ads->paginate(12);

        $business_ads_count = $business_ads_count->count();
        //$personal_ads_count = $personal_ads_count->count();

        $title = trans('Post Your Profile online on Magas global platform for free and get hired');
	$categories = Category::where('category_id', 0)->get();
	 //dd($categories);
        $countries = Country::all();
        //$categories = Category::where('category_id', 0)->get();


        return view($this->theme.'whitepaper', compact( 'ads', 'title', 'categories', 'countries', 'business_ads_count', 'selected_categories', 'selected_sub_categories', 'selected_countries', 'selected_states'));
        
        
        

    }
    
     public function updateWhitepaper(Request $request,$id) {

	$rules = [
            'category'  => 'required',
            'filescustommedia'  => '',
            'ad_title'  => 'required',
            'ad_description'  => 'required',
            'servicetype'  => 'required',
            'country'  => 'required',
          //  'seller_name'  => 'required',
            'seller_email'  => 'required',
            'seller_phone'  => 'required',
            'address'  => 'required',
            'seller_website' => '',
            'social_media_link' => '',
           // 'company_name'  => 'required',
        ];	
	$this->validate($request, $rules);
	 $title = $request->ad_title;


        $slug = unique_slug($title);
        $sub_category = Category::find($request->category);
        $is_negotialble = $request->negotiable ? $request->negotiable : 0;
        $brand_id = $request->brand ? $request->brand : 0;
        $mark_ad_urgent = $request->mark_ad_urgent ? $request->mark_ad_urgent : 0;
        $video_url = $request->video_url ? $request->video_url : '';


 	//Check ads moderation settings
        if (get_option('ads_moderation') == 'direct_publish'){
            $data['status'] = '1';
        }

        //if price_plan not in post data, then set a default value, although mysql will save it as enum first value
        if ( ! $request->price_plan){
            $data['price_plan'] = 'regular';
        }
        $pdffilename ='';
	if($_FILES["filescustom"]['name'] !='') {
		$file = $request->file('filescustom');
       		$pdffilename = now().$file->getClientOriginalName();
   	        $destinationPath = 'uploads/pdf';
      		$file->move($destinationPath,now().$file->getClientOriginalName());
	}

	$coverimageupload ='';
	if($_FILES["filescustomone"]['name'] !='') {
		$fileone = $request->file('filescustomone');
       		$coverimageupload = now().$fileone->getClientOriginalName();
   	        $destinationPath = 'uploads/coverimage';
      		$fileone->move($destinationPath,now().$fileone->getClientOriginalName());
	}

// 	$bizzdocumentname ='';
// 	if($_FILES["filescustomtwo"]['name'] !='') {
// 		$filetwo = $request->file('filescustomtwo');
//       		$bizzdocumentname = now().$filetwo->getClientOriginalName();
//   	        $destinationPath = 'uploads/businessdoc';
//       		$filetwo->move($destinationPath,now().$filetwo->getClientOriginalName());
// 	}


	$businesslogoupload ='';
	if($_FILES["filescustommedia"]['name'] !='') {
		$filethree = $request->file('filescustommedia');
       		$businesslogoupload = now().$filethree->getClientOriginalName();
   	        $destinationPath = 'uploads/businesslogo';
      		$filethree->move($destinationPath,now().$filethree->getClientOriginalName());
	}

	$timestamp = date("Y-m-d H:i:s"); 

	$values['title'] = $request->ad_title;
	$values['slug'] = $slug;
            $values['description'] = $request->ad_description;
            $values['category_id'] = $sub_category->category_id;
            $values['sub_category_id'] = $request->category;
            $values['brand_id' ]= $brand_id;
            $values['type'] = 'whitepapers';
            
            if($pdffilename){
                $values['pdffilename'] = $pdffilename;
            }
            
            $values['ad_condition'] = 'new';
	   // 'seller_name' => $request->seller_name;
            $values['seller_email'] = $request->seller_email;
            $values['social_media_link'] = $request->social_media_link;
            $values['website'] = $request->seller_website;
            $values['seller_phone'] = $request->seller_phone;
	    $values['country_id'] = $request->country;
            $values['state_id' ]= $request->state;
            $values['city_id'] = $request->city;
            $values['address'] = $request->address;
            $values['servicename'] = $request->servicetype;
            
            if($coverimageupload){
                 $values['coverimagefilename'] = $coverimageupload;
            }
            if($businesslogoupload){
                 $values['business_image'] = $businesslogoupload;
            }
           
            
          // 'business_document' => $bizzdocumentname;
          if($video_url){
             $values['video_url'] = $video_url; 
          }
	    
            $values['price_plan'] = 'regular';
            
            if($mark_ad_urgent){
           $values[ 'mark_ad_urgent'] = $mark_ad_urgent;
            }
             $values['status'] = '0';
            // 'user_id' => '12',
           
            // 'created_at' => $timestamp,
            $values['updated_at'] = $timestamp;
             $values['editupdated_at'] = $timestamp;
            
    $updateentry= DB::table('ads')->where('id',$id)->update($values);
	if ($updateentry){
            return redirect()->back()->with('success', trans('Success : Whitepaper Updated  Succesfully for Content Moderation.'));
        }
        return redirect()->back()->with('error', trans('app.error_msg'));

   }

    public function createclassifieds()
    {
    if (Auth::user()) {   // Check is user logged in
    $user_id = Auth::user()->id;
    //dd($user_id);
        $title = trans("List Free Classified Listing on Magas");
        $categories = Category::where('category_id', 0)->get();
        $countries = Country::all();
        //$ads_images = Media::whereUserId($user_id)->whereAdId(0)->whereRef('ad')->get();
        $previous_states = State::where('country_id', old('country'))->get();
        $previous_cities = City::where('state_id', old('state'))->get();
        return view('theme.createclassifieds', compact('title', 'categories', 'countries', 'ads_images', 'previous_brands', 'previous_states', 'previous_cities','user_id'));
    } else {
	return redirect(route('login'))->with('message', trans('Please Signup/login to list the classified '));
    }
    }
    
    //-----new----- 
    public function editClassifieds($id)
    {
        $user_id = Auth::user()->id;
        $title = trans('edit Classified');
        
        $categories = Category::where('category_id', 0)->get();
        $countries = Country::all();
        
        //$ads_images = Media::whereUserId($user_id)->whereAdId(0)->whereRef('ad')->get();
        $previous_states = State::where('country_id', old('country'))->get();
        $previous_cities = City::where('state_id', old('state'))->get();
        
       //   $ads = Ad::active();
        //  $ads = $ads->whereType('classifieds')->where('id',$id)->get();
        //  $ads=$ads[0];
          $ads = Ad::whereType('classifieds')->where('id',$id)->first();
         $states = State::where('country_id',$ads->country_id)->get();
        $cities = City::where('state_id',$ads->state_id)->get();
        
        return view('theme.edit_classifieds', compact('title', 'categories', 'countries', 'ads_images', 'previous_brands', 'previous_states', 'previous_cities','ads','states','cities'));
   
    }
    
    public function updateClassifieds(Request $request, $id){
       // dd($request);
        $user_id = Auth::user()->id;
       $rules = [
            'category'  => 'required',
            'ad_title'  => 'required',
            'ad_description'  => 'required',
            'servicetype'  => 'required',
            'country'  => 'required',
            'seller_name'  => 'required',
            'seller_email'  => 'required',
            'seller_phone'  => 'required',
        ];	
	$this->validate($request, $rules);
	 $title = $request->ad_title;

	$user = Auth::user();
        $user_id = $user->id;
        $slug = unique_slug($title);
        $sub_category = Category::find($request->category);



        //if price_plan not in post data, then set a default value, although mysql will save it as enum first value
        if ( ! $request->price_plan){
            $data['price_plan'] = 'regular';
        }
        
	$timestamp = date("Y-m-d H:i:s"); 

	//echo "<pre>";
	$values = array('title' => $request->ad_title,'slug' => $slug,
            'description' => $request->ad_description,
            'category_id' => $sub_category->category_id,
            'sub_category_id' => $request->category,
            'type' => 'classifieds',
            'ad_condition' => 'new',
	    'seller_name' => $request->seller_name,
            'seller_email' => $request->seller_email,
            'seller_phone' => $request->seller_phone,
	    'country_id' => $request->country,
            'state_id' => $request->state,
            'city_id' => $request->city,
            'servicename' => $request->servicetype,
            'company_name' => $request->company_name,
            'price_plan' => 'regular',
             'status' => '0',
            'user_id' => $user_id,
             'editupdated_at' => $timestamp,
            'updated_at' => $timestamp);
	$updateentry= DB::table('ads')->where('id',$id)->update($values);
// 	$lastinsertid = DB::getPdo()->lastInsertId();
// 	return redirect(route('createclassifieds'))->with('success', trans('Success : Classified Listing Updated Succesfully for Content Moderation.'));
        
        
        
        
        if ($updateentry){
            

            return redirect()->back()->with('success', trans('Success : Classified Listing Updated Succesfully for Content Moderation.'));
        }
        return redirect()->back()->with('error', trans('app.error_msg'));
    }
    
    
    
     public function editPost($slug)
    {
        $user_id = Auth::user()->id;
        $title = trans('app.edit_post');
        $post = Post::whereSlug($slug)->first();

        return view('admin.edit_post', compact('title', 'post'));
    }


    public function createprojects()
    {
        if (Auth::user()) {   // Check is user logged in
         $title = trans("List New Project Listing on Magas");
        $categories = Category::where('category_id', 0)->get();
        $countries = Country::all();
        //$ads_images = Media::whereUserId($user_id)->whereAdId(0)->whereRef('ad')->get();
        $previous_states = State::where('country_id', old('country'))->get();
        $previous_cities = City::where('state_id', old('state'))->get();
        return view('theme.createprojects', compact('title', 'categories', 'countries', 'ads_images', 'previous_brands', 'previous_states', 'previous_cities'));
	} else {
		return redirect(route('login'))->with('message', trans('Please Signup/login to list the classified '));
	}
    }
    
    public function editProject($id)
    {
        
         $user_id = Auth::user()->id;
         $title = trans("Edit Project ");
        $categories = Category::where('category_id', 0)->get();
        $countries = Country::all();
        //$ads_images = Media::whereUserId($user_id)->whereAdId(0)->whereRef('ad')->get();
        $previous_states = State::where('country_id', old('country'))->get();
        $previous_cities = City::where('state_id', old('state'))->get();
        
      //  $ads = Ad::active();
        //  $ads = $ads->whereType('opportunities')->where('id',$id)->get();
        //  $ads=$ads[0];
         
           $ads = Ad::whereType('opportunities')->where('id',$id)->first();
        //  dd($ads);
        
         
         $states = State::where('country_id',$ads->country_id)->get();
        $cities = City::where('state_id',$ads->state_id)->get();
        
        return view('theme.edit_project', compact('title', 'categories', 'countries', 'ads_images', 'previous_brands', 'previous_states', 'previous_cities','ads','states','cities'));
	
    }
    
    public function updateProject(Request $request,$id){
       // dd($request);
        $rules = [
            'category'  => 'required',
            // 'filescustommedia'  => 'required',
            'ad_title'  => 'required',
            'ad_description'  => 'required',
            'servicetype'  => 'required',
            'country'  => 'required',
            'seller_name'  => 'required',
            'seller_email'  => 'required',
            'seller_phone'  => 'required',
            'company_name'  => 'required',
             'requirement'  => '',
        ];	
	$this->validate($request, $rules);
	 $title = $request->ad_title;


        $slug = unique_slug($title);
        $sub_category = Category::find($request->category);
        $is_negotialble = $request->negotiable ? $request->negotiable : 0;
        $brand_id = $request->brand ? $request->brand : 0;
        $mark_ad_urgent = $request->mark_ad_urgent ? $request->mark_ad_urgent : 0;
        $video_url = $request->video_url ? $request->video_url : '';


 	//Check ads moderation settings
        if (get_option('ads_moderation') == 'direct_publish'){
            $data['status'] = '1';
        }

        //if price_plan not in post data, then set a default value, although mysql will save it as enum first value
        if ( ! $request->price_plan){
            $data['price_plan'] = 'regular';
        }
        $pdffilename ='';
	if($_FILES["filescustom"]['name'] !='') {
		$file = $request->file('filescustom');
       		$pdffilename = now().$file->getClientOriginalName();
   	        $destinationPath = 'uploads/pdf';
      		$file->move($destinationPath,now().$file->getClientOriginalName());
	}

	$coverimageupload ='';
	if($_FILES["filescustomone"]['name'] !='') {
		$fileone = $request->file('filescustomone');
       		$coverimageupload = now().$fileone->getClientOriginalName();
   	        $destinationPath = 'uploads/coverimage';
      		$fileone->move($destinationPath,now().$fileone->getClientOriginalName());
	}

	

	$businesslogoupload ='';
	if($_FILES["filescustommedia"]['name'] !='') {
		$filethree = $request->file('filescustommedia');
      		$businesslogoupload = now().$filethree->getClientOriginalName();
  	        $destinationPath = 'uploads/businesslogo';
      		$filethree->move($destinationPath,now().$filethree->getClientOriginalName());
	}


	$timestamp = date("Y-m-d H:i:s"); 

	$user = Auth::user();
        $user_id = $user->id;
	//echo "<pre>";
	$data=[];
	$data['title']=$request->ad_title;
	$data['slug']=$slug;
	$data['description']=$request->ad_description;
	$data['requirement']=$request->seller_req;
	$data['category_id']=$sub_category->category_id;
	$data['sub_category_id']=$request->category;
	$data['brand_id']=$brand_id;
	
	if($pdffilename){
	    $data['pdffilename']=$pdffilename;
	}
	
	$data['seller_name']=$request->seller_name;
	$data['seller_email']=$request->seller_email;
	$data['seller_phone']=$request->seller_phone;
	$data['country_id']=$request->country;
	$data['state_id']=$request->state;
	$data['city_id']=$request->city;
	$data['address']=$request->address;
	$data['servicename']=$request->servicetype;
// 	$data['status']='0';
	
	if($coverimageupload){
	    $data['coverimagefilename']=$coverimageupload;
	}
	
	if($businesslogoupload){
        $data['business_image']=$businesslogoupload;
	}
	
	if($video_url){
        $data['video_url']=$video_url;
	}
	$data['company_name']=$request->company_name;
	
	if($mark_ad_urgent){
	    $data['mark_ad_urgent']=$mark_ad_urgent;
	}
	
	$data['updated_at']=$timestamp;
		$data['editupdated_at']=$timestamp;
	
	$updateentry= DB::table('ads')->where('id',$id)->update($data);
	
	if ($updateentry){
            return redirect()->back()->with('success', trans('Success : Project Updated Succesfully.'));
        }
        return redirect()->back()->with('error', trans('app.error_msg'));
// 	return redirect(route('createprojects'))->with('success', trans('Success : Project Listing Stored Succesfully'));
    }

   public function advertise()
    {
        if (Auth::user()) {   // Check is user logged in
         return redirect(route('dashboard'));
        // return view('theme.freeevaluation', compact('title', 'categories', 'countries', 'ads_images', 'previous_brands', 'previous_states', 'previous_cities'));
    } else {
	return redirect(route('login'))->with('message', trans('Please Signup/login to post project '));
    }
    } 
 public function projectevaluation()
    {
        if (Auth::user()) {   // Check is user logged in
         $title = trans("List Free Project Listing on Magas");
        $categories = Category::where('category_id', 0)->get();
        $countries = Country::all();
      //  dd($categories);
        //$ads_images = Media::whereUserId($user_id)->whereAdId(0)->whereRef('ad')->get();
        $previous_states = State::where('country_id', old('country'))->get();
        
        $previous_cities = City::where('state_id', old('state'))->get();
        return view('theme.freeevaluation', compact('title', 'categories', 'countries', 'ads_images', 'previous_brands', 'previous_states', 'previous_cities'));
    } else {
	return redirect(route('login'))->with('message', trans('Please Signup/login to post project '));
    }
    }
	public function evaluationStore(Request $request)
		
    		{
    		 	 $rules = [
            'category'  => '',
            'ad_title'  => '',
            'ad_description'  => '',
            'servicetype'  => '',
            'country'  => '',
            'seller_name'  => '',
            'seller_email'  => '',
            'seller_phone'  => '',
        ];	
	$this->validate($request, $rules);
// 	 $title = $request->ad_title;
// dd($title);
	$user = Auth::user();
        $user_id = $user->id;
      //  $slug = unique_slug($title);
        $sub_category = Category::find($request->category);



        //if price_plan not in post data, then set a default value, although mysql will save it as enum first value
        if ( ! $request->price_plan){
            $data['price_plan'] = 'regular';
        }
         $pdffilename ='';
	if($_FILES["filescustom"]['name'] !='') {
		$file = $request->file('filescustom');
       		$pdffilename = now().$file->getClientOriginalName();
   	        $destinationPath = 'uploads/pdf';
      		$file->move($destinationPath,now().$file->getClientOriginalName());
	}
        
	$timestamp = date("Y-m-d H:i:s"); 

	//echo "<pre>";
	$values = array('title' =>$request->seller_name,
	'slug' => $request->seller_name,
            'description' => $request->ad_description,
           
            'type' => 'proevaluation',
            'ad_condition' => 'new',
	   // 'seller_name' => $request->seller_name,
            'seller_email' => $request->seller_email,
            'seller_phone' => $request->seller_phone,
             'pdffilename' => $pdffilename,
	   
            'price_plan' => 'regular',
            'status' => '0',
            'user_id' => $user_id,
            'created_at' => $timestamp,
            'updated_at' => $timestamp);
           // dd($values);
       	$creatnewentry= DB::table('ads')->insert($values);
     
	$lastinsertid = DB::getPdo()->lastInsertId();
	
	return redirect(route('projectevaluation'))->with('success', trans('Success : Project posted Succesfully'));
    		}
    		
   public function evaluationList(Request $request){
         
    //   dd("test");
       $ads = Ad::active();
        $ads = $ads->whereType('proevaluation');
      
        $business_ads_count = Ad::active()->business();
       // $personal_ads_count = Ad::active()->personal();

        //$premium_ads = Ad::activePremium();

        // if ($request->q){
            
        //     $ads = $ads->where(function($ads) use($request){
        //         $ads->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
        //     });
            
        //     $business_ads_count = $business_ads_count->where(function($business_ads_count) use($request){
        //         $business_ads_count->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
        //     });
            
            

        //     //$personal_ads_count = $personal_ads_count->where(function($personal_ads_count) use($request){
        //       //  $personal_ads_count->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
        //     //});
        // }
       
       
        $ads = DB::table('ads')->whereType('proevaluation')->get();
      //  dd($ads);
      

        // $ads = $ads->orderBy('id', 'desc');
        

        // $ads = $ads->with('category');
        // $ads = $ads->paginate(20);

        // $business_ads_count = $business_ads_count->count();
        //$personal_ads_count = $personal_ads_count->count();

        $title = trans('Project evaluation lists');
//	dd($title);
        //$categories = Category::where('category_id', 0)->get();


      return view($this->theme.'evaluation_list', compact( 'ads', 'title'));

    }
    

    public function projectsStore(Request $request)
    {
        //dd($request);
        $rules = [
            'category'  => 'required',
            'filescustommedia'  => 'required',
            'ad_title'  => 'required',
            'ad_description'  => 'required',
            'servicetype'  => 'required',
            'country'  => 'required',
            'seller_name'  => 'required',
            'seller_email'  => 'required',
            'seller_phone'  => 'required',
            'company_name'  => 'required',
            'seller_req'=>'required',
            'address'=>'required',
             'state'=>'',
              'city'=>'',
        ];	
	$this->validate($request, $rules);
	 $title = $request->ad_title;


        $slug = unique_slug($title);
        $sub_category = Category::find($request->category);
        $is_negotialble = $request->negotiable ? $request->negotiable : 0;
        $brand_id = $request->brand ? $request->brand : 0;
        $mark_ad_urgent = $request->mark_ad_urgent ? $request->mark_ad_urgent : 0;
        $video_url = $request->video_url ? $request->video_url : '';


 	//Check ads moderation settings
        if (get_option('ads_moderation') == 'direct_publish'){
            $data['status'] = '1';
        }

        //if price_plan not in post data, then set a default value, although mysql will save it as enum first value
        if ( ! $request->price_plan){
            $data['price_plan'] = 'regular';
        }
        $pdffilename ='';
	if($_FILES["filescustom"]['name'] !='') {
		$file = $request->file('filescustom');
       		$pdffilename = now().$file->getClientOriginalName();
   	        $destinationPath = 'uploads/pdf';
      		$file->move($destinationPath,now().$file->getClientOriginalName());
	}

	$coverimageupload ='';
	if($_FILES["filescustomone"]['name'] !='') {
		$fileone = $request->file('filescustomone');
       		$coverimageupload = now().$fileone->getClientOriginalName();
   	        $destinationPath = 'uploads/coverimage';
      		$fileone->move($destinationPath,now().$fileone->getClientOriginalName());
	}

	

	$businesslogoupload ='';
	if($_FILES["filescustommedia"]['name'] !='') {
		$filethree = $request->file('filescustommedia');
      		$businesslogoupload = now().$filethree->getClientOriginalName();
  	        $destinationPath = 'uploads/businesslogo';
      		$filethree->move($destinationPath,now().$filethree->getClientOriginalName());
	}


	$timestamp = date("Y-m-d H:i:s"); 
		$expiry=date('Y-m-d H:i:s', strtotime('+1 years'));
    

	$user = Auth::user();
        $user_id = $user->id;
	//echo "<pre>";
	$values = array('title' => $request->ad_title,'slug' => $slug,
             'description' => $request->ad_description,
             'category_id' => $sub_category->category_id,
            'sub_category_id' => $request->category,
            'brand_id' => $brand_id,
            'type' => 'opportunities',
            'pdffilename' => $pdffilename,
            'ad_condition' => 'new',
	    'seller_name' => $request->seller_name,
            'seller_email' => $request->seller_email,
            'seller_phone' => $request->seller_phone,
            'requirement'=> $request->seller_req,
	    'country_id' => $request->country,
            'state_id' => $request->state,
            'city_id' => $request->city,
            'address' => $request->address,
            'servicename' => $request->servicetype,
            'coverimagefilename' => $coverimageupload,
            'business_image' => $businesslogoupload,
            'company_name' => $request->company_name,
	    'video_url' => $video_url,
            'price_plan' => 'regular',
            'mark_ad_urgent' => $mark_ad_urgent,
            'status' => '0',
            'user_id' => $user_id,
            'created_at' => $timestamp,
            'expiry'=>$expiry,
            'editupdated_at' => $timestamp,
            'updated_at' => $timestamp);
       //	dd($values);     
	$creatnewentry= DB::table('ads')->insert($values);
//	dd($creatnewentry);
	$lastinsertid = DB::getPdo()->lastInsertId();
	return redirect(route('createprojects'))->with('success', trans('Success : Project Listing Stored Succesfully'));

	}
	
	public function editBizz($id)
    {
       // dd($id);
         $user_id = Auth::user()->id;
         $title = trans("Edit Profile ");
        $categories = Category::where('category_id', 0)->get();
        
        $countries = Country::all();
        $ads_images = Media::whereUserId($user_id)->whereAdId(0)->whereRef('ad')->get();
        $previous_states = State::where('country_id', old('country'))->get();
        $previous_cities = City::where('state_id', old('state'))->get();
       // dd($previous_states);
      //  $ads = Ad::active();
         //$ads = $ads->whereType('bizz')->where('id',$id)->get();
         $ads = Ad::whereType('bizz')->where('id',$id)->first();
          $query = DB::table('users')->where('affiliate_code','<>', '')->get();
        // dd($ads);
        // $ads=$ads[0];
     //    dd($ads);
         
         $states = State::where('country_id',$ads->country_id)->get();
        $cities = City::where('state_id',$ads->state_id)->get();
        
        return view('theme.edit_bizz', compact('title', 'categories', 'countries', 'ads_images', 'previous_brands', 'previous_states', 'previous_cities','ads','states','cities','query'));
	
    }
    
    public function destroyAd($id){
         $user_id = Auth::user()->id;
        
        $ad = Ad::find($id);

        $ads = Ad::active();
         $ads = $ads->where('id',$id)->delete();
         
         
         if($ads){
             
             if($ad->type == 'bizz'){
                 return redirect(route('bizz'))->with('success', trans('Success : Deleted Successfully.'));
                }
                elseif($ad->type == 'whitepapers'){
                    return redirect(route('whitepaper_list'))->with('success', trans('Success : Deleted Successfully.'));
                }
                elseif($ad->type == 'pro'){
                    return redirect(route('pro'))->with('success', trans('Success : Deleted Successfully.'));
                }elseif($ad->type == 'opportunities'){
                    return redirect(route('projects'))->with('success', trans('Success : Deleted Successfully.'));
                }else{
                     return redirect(route('classifieds'))->with('success', trans('Success : Deleted Successfully.'));
                }
         }
        return ['success' => 0, 'msg' => trans('app.error_msg')];
         
        // $slug = $request->slug;
        // $page = Post::whereSlug($slug)->first();
        // if ($page){
        //     $page->delete();
        //     return ['success' => 1, 'msg' => trans('app.operation_success')];
        // }
        // return ['success' => 0, 'msg' => trans('app.error_msg')];
    }
    
   
    
    public function updateBizz(Request $request,$id) {
       //dd($request);
	$rules = [
            'category'  => 'required',
            // 'filescustommedia'  => 'required',
            'ad_title'  => 'required',
            'ad_description'  => 'required',
            'servicetype'  => 'required',
            'country'  => 'required',
            'seller_name'  => 'required',
            'seller_email'  => 'required',
            'seller_phone'  => 'required',
            'address'  => 'required',
            'company_name'  => 'required',
            'status'=>'',
        ];	
        $this->validate($request, $rules);
	 $title = $request->ad_title;

        $slug = unique_slug($title);
        $sub_category = Category::find($request->category);
        $is_negotialble = $request->negotiable ? $request->negotiable : 0;
        $brand_id = $request->brand ? $request->brand : 0;
        $mark_ad_urgent = $request->mark_ad_urgent ? $request->mark_ad_urgent : 0;
        $video_url = $request->video_url ? $request->video_url : '';


 	//Check ads moderation settings
        // if (get_option('ads_moderation') == 'direct_publish'){
        //     $data['status'] = '1';
        // }

        //if price_plan not in post data, then set a default value, although mysql will save it as enum first value
        if ( ! $request->price_plan){
            $data['price_plan'] = 'regular';
        }
        
         
        $pdffilename ='';
	if($_FILES["filescustom"]['name'] !='') {
		$file = $request->file('filescustom');
      		$pdffilename = now().$file->getClientOriginalName();
  	        $destinationPath = 'uploads/pdf';
      		$file->move($destinationPath,now().$file->getClientOriginalName());
	}
	

	$coverimageupload ='';
	if($_FILES["filescustomone"]['name'] !='') {
		$fileone = $request->file('filescustomone');
      		$coverimageupload = now().$fileone->getClientOriginalName();
  	        $destinationPath = 'uploads/coverimage';
      		$fileone->move($destinationPath,now().$fileone->getClientOriginalName());
	}

	$bizzdocumentname ='';
	if($_FILES["filescustomtwo"]['name'] !='') {
		$filetwo = $request->file('filescustomtwo');
      		$bizzdocumentname = now().$filetwo->getClientOriginalName();
  	        $destinationPath = 'uploads/businessdoc';
      		$filetwo->move($destinationPath,now().$filetwo->getClientOriginalName());
	}


	$businesslogoupload ='';
	if($_FILES["filescustommedia"]['name'] !='') {
		$filethree = $request->file('filescustommedia');
      		$businesslogoupload = now().$filethree->getClientOriginalName();
  	        $destinationPath = 'uploads/businesslogo';
      		$filethree->move($destinationPath,now().$filethree->getClientOriginalName());
	}
	$timestamp = date("Y-m-d H:i:s"); 
	
	$values['title'] = $request->ad_title;
	$values['slug'] = $slug;
            $values['description'] = $request->ad_description;
            $values['category_id'] = $sub_category->category_id;
            $values['sub_category_id'] = $request->category;
            $values['brand_id'] = $brand_id;
            $values['type'] = 'bizz';
            
            if($pdffilename){
            $values['pdffilename'] = $pdffilename;
            }
            
            $values['ad_condition'] = 'new';
	    $values['seller_name'] = $request->seller_name;
          $values[ 'seller_email'] = $request->seller_email;
            $values['seller_phone'] = $request->seller_phone;
	    $values['country_id'] = $request->country;
          $values[ 'state_id'] = $request->state;
            $values['city_id'] = $request->city;
            $values['address'] = $request->address;
          $values['servicename'] = $request->servicetype;
          
          if($coverimageupload){
            $values[ 'coverimagefilename'] = $coverimageupload;
          }
          if($businesslogoupload){
            $values[ 'business_image'] = $businesslogoupload;
          }
          if($bizzdocumentname){
             $values['business_document'] = $bizzdocumentname;
          }
          
            $values['company_name'] = $request->company_name;
            if($video_url){
	    $values['video_url'] = $video_url;
            }
            $values['price_plan'] = 'regular';
            $values['mark_ad_urgent'] = $mark_ad_urgent;
            
      
            // $values['user_id'] = '2';
            $values['affiliate_code'] = $request->affilate_code;
          //  $values['updated_at'] = $timestamp;
           $values['editupdated_at'] = $timestamp;
             $values['status'] = '0';
          
          
             $updateentry= DB::table('ads')->where('id',$id)->update($values);
           //  dd($updateentry);
            // $updateentry=$updateentry[0];
             // $updateentry= DB::table('ads')->where('id',$id)->update(['status' => '0']);
	
            // $updateentry= DB::table('ads')->where('id',$id)->update($values,$status);
	
	if ($updateentry){
            return redirect()->back()->with('success', trans('Success : Bizz Updated Succesfully for Content Moderation.'));
        }
        return redirect()->back()->with('error', trans('app.error_msg'));

// 	return redirect(route('listyourbusiness'))->with('success', trans('Success : Business Listing Stored Succesfully for Content and Payment Moderation.'));
  }



 public function classifiedsStore(Request $request)
    {
        $rules = [
            'category'  => 'required',
            'ad_title'  => 'required',
            'ad_description'  => 'required',
            'servicetype'  => 'required',
            'country'  => 'required',
            'seller_name'  => 'required',
            'seller_email'  => 'required',
            'seller_phone'  => 'required',
             'state'=>'',
              'city'=>'',
        ];	
	$this->validate($request, $rules);
	 $title = $request->ad_title;

	$user = Auth::user();
        $user_id = $user->id;
        $slug = unique_slug($title);
        $sub_category = Category::find($request->category);



        //if price_plan not in post data, then set a default value, although mysql will save it as enum first value
        if ( ! $request->price_plan){
            $data['price_plan'] = 'regular';
        }
        
	$timestamp = date("Y-m-d H:i:s"); 
//	$param = '182h';
$expiry=date('Y-m-d H:i:s', strtotime('+6 months'));

	//echo "<pre>";
	$values = array('title' => $request->ad_title,'slug' => $slug,
            'description' => $request->ad_description,
            'category_id' => $sub_category->category_id,
            'sub_category_id' => $request->category,
            'type' => 'classifieds',
            'ad_condition' => 'new',
	    'seller_name' => $request->seller_name,
            'seller_email' => $request->seller_email,
            'seller_phone' => $request->seller_phone,
	    'country_id' => $request->country,
            'state_id' => $request->state,
            'city_id' => $request->city,
            'servicename' => $request->servicetype,
            'company_name' => $request->company_name,
            'price_plan' => 'regular',
            'status' => '0',
            'user_id' => $user_id,
            'created_at' => $timestamp,
            'editupdated_at' => $timestamp,
            'expiry'=>$expiry,
            'updated_at' => $timestamp);
	$creatnewentry= DB::table('ads')->insert($values);

	$lastinsertid = DB::getPdo()->lastInsertId();
	return redirect(route('createclassifieds'))->with('success', trans('Success : Classified Listing Stored Succesfully for Content Moderation.'));

    }
  

//     public function classifiedsStore(Request $request)
//     {
//       //  dd($request);
//         $rules = [
//             'category'  => '',
//             'ad_title'  => '',
//             'ad_description'  => '',
//             'servicetype'  => '',
//             'country'  => '',
//             'seller_name'  => '',
//             'seller_email'  => '',
//             'seller_phone'  => '',
//         ];	
// 	$this->validate($request, $rules);
// 	 $title = $request->ad_title;

// 	$user = Auth::user();
//         $user_id = $user->id;
//         $slug = unique_slug($title);
//         $sub_category = Category::find($request->category);



//         //if price_plan not in post data, then set a default value, although mysql will save it as enum first value
//         if ( ! $request->price_plan){
//             $data['price_plan'] = 'regular';
//         }
        
// 	$timestamp = date("Y-m-d H:i:s"); 
// //	$param = '182h';
// $expiry=date('Y-m-d H:i:s', strtotime('+6 months'));

// 	//echo "<pre>";
// 	$values = array('title' => $request->ad_title,'slug' => $slug,
//             'description' => $request->ad_description,
//           'category_id' => $sub_category->category_id,
//             'sub_category_id' => $request->category,
//             'type' => 'classifieds',
//             'ad_condition' => 'new',
// 	    'seller_name' => $request->seller_name,
//             'seller_email' => $request->seller_email,
//             'seller_phone' => $request->seller_phone,
// 	    'country_id' => $request->country,
//             'state_id' => $request->state,
//             'city_id' => $request->city,
//             'servicename' => $request->servicetype,
//             'company_name' => $request->company_name,
//             'price_plan' => 'regular',
//             'status' => '0',
//             'user_id' => $user_id,
//             'created_at' => $timestamp,
//             'expiry'=>$expiry,
//             'updated_at' => $timestamp);
// 	$creatnewentry= DB::table('ads')->insert($values);

// 	$lastinsertid = DB::getPdo()->lastInsertId();
// 	return redirect(route('createclassifieds'))->with('success', trans('Success : Classified Listing Stored Succesfully for Content Moderation.'));

//     }
  
  
   
   public function fetchbizz(Request $request){
       	    	$user = Auth::user();
	    	  $user_id = $user->id;
	    //	$ad = DB::table('ads')->where('user_id',$user_id)->latest()->first();
       $lastinsertid = DB::getPdo()->lastInsertId();
	//$ad = DB::table('ads')->latest()->first();
		$ad = DB::table('ads')->where('user_id',$user_id)->latest()->first();
      //dd($ad);
      //	$ad = DB::table('users')->latest()->first();
      $user = User::find($ad->user_id);
// $user= DB::table('users')->select('name')->where('id',$ad->user_id)->get();
//$user= DB::table('users')->where('id',$ad->user_id)->get();
        //	dd($user);
        	 $invoice="PO".date('ym').rand(10,100).$ad->user_id;
        //	dd($invoice);
         return view('theme.bizz_payment', compact('user','invoice','ad'));
//return view($this->theme.'bizz_payment', compact('user','invoice'));

}
      public function profilestoring(Request $request) {
//dd($request);
//            'filescustommedia'  => 'required',

	$rules = [
            'category'  => 'required',
            'ad_title'  => 'required',
            'ad_description'  => 'required',
            'servicetype'  => 'required',
            'country'  => 'required',
            'designation'  => 'required',
            'seller_email'  => 'required',
            'seller_phone'  => 'required',
            'filescustommedia'=>'required',
            'state'=>'',
            'city'=>'',
            'filescustom'=>'required',

        ];	
	$this->validate($request, $rules);
	 $title = $request->ad_title;

//            'company_name'  => 'required',

       $user = Auth::user();
       $user_id=$user->id;
        $slug = unique_slug($title);
        $sub_category = Category::find($request->category);
        $is_negotialble = $request->negotiable ? $request->negotiable : 0;
        $brand_id = $request->brand ? $request->brand : 0;
        $mark_ad_urgent = $request->mark_ad_urgent ? $request->mark_ad_urgent : 0;
        $video_url = $request->video_url ? $request->video_url : '';


 	//Check ads moderation settings
        if (get_option('ads_moderation') == 'direct_publish'){
            $data['status'] = '1';
        }

        //if price_plan not in post data, then set a default value, although mysql will save it as enum first value
        if ( ! $request->price_plan){
            $data['price_plan'] = 'regular';
        }
        $pdffilename ='';
	if($_FILES["filescustom"]['name'] !='') {
		$file = $request->file('filescustom');
       		$pdffilename = now().$file->getClientOriginalName();
   	        $destinationPath = 'uploads/pdf';
      		$file->move($destinationPath,now().$file->getClientOriginalName());
	}

	$businesslogoupload ='';
	if($_FILES["filescustommedia"]['name'] !='') {
		$filethree = $request->file('filescustommedia');
       		$businesslogoupload = now().$filethree->getClientOriginalName();
   	        $destinationPath = 'uploads/businesslogo';
      		$filethree->move($destinationPath,now().$filethree->getClientOriginalName());
	}


	$timestamp = date("Y-m-d H:i:s"); 
		$expiry=date('Y-m-d H:i:s', strtotime('+1 years'));
    
	

        $user_id = Auth::user()->id;
	//echo "<pre>";
	$values = array('title' => $request->ad_title,'slug' => $slug,
            'description' => $request->ad_description,
            'category_id' => $sub_category->category_id,
            'sub_category_id' => $request->category,
            'type' => 'pro',
            'pdffilename' => $pdffilename,
            'ad_condition' => 'new',
	    'seller_name' => $request->ad_title,
            'seller_email' => $request->seller_email,
            'seller_phone' => $request->seller_phone,
	    'country_id' => $request->country,
            'state_id' => $request->state,
            'city_id' => $request->city,
            'servicename' => $request->servicetype,
            'designation' => $request->designation,
            'business_image' => $businesslogoupload,
            'company_name' => $request->company_name,
            'price_plan' => 'regular',
            'status' => '0',
            'user_id' => $user_id,
            'created_at' => $timestamp,
            'editupdated_at' => $timestamp,
            'expiry'=>$expiry,
            'updated_at' => $timestamp);
	$creatnewentry= DB::table('ads')->insert($values);
	$lastinsertid = DB::getPdo()->lastInsertId();
	return redirect(route('createproad'))->with('success', trans('Success : Your Profile details are saved succesfully for Content Moderation.'));
   }



    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        $ads_price_plan = get_option('ads_price_plan');
        $rules = [
            'category'  => 'required',
            'ad_title'  => 'required',
            'ad_description'  => 'required',
            'type'  => 'required',
            'condition'  => 'required',
            'country'  => 'required',
            'seller_name'  => 'required',
            'seller_email'  => 'required',
            'seller_phone'  => 'required',
            'address'  => 'required',
        ];

        if( $ads_price_plan != 'all_ads_free'){
            $rules['price_plan'] = 'required';
        }

        $this->validate($request, $rules);

        $title = $request->ad_title;
        $slug = unique_slug($title);
       

        $sub_category = Category::find($request->category);

        $is_negotialble = $request->negotiable ? $request->negotiable : 0;
        $brand_id = $request->brand ? $request->brand : 0;
        $mark_ad_urgent = $request->mark_ad_urgent ? $request->mark_ad_urgent : 0;
        $video_url = $request->video_url ? $request->video_url : '';
$pdffilename ='';
	if($_FILES["filescustom"]['name'] !='') {
       	$pdffilename = now().$_FILES["filescustom"]['name'];
		if (move_uploaded_file($_FILES['filescustom']['tmp_name'],'/public_html/magas/uploads/pdf/'.$pdffilename)) {
		    //echo "Uploaded";
		} else {
		   //echo "File was not uploaded";
		}
	}



        $data = [
            'title' => $request->ad_title,
            'slug' => $slug,
            'description' => $request->ad_description,
            'category_id' => $sub_category->category_id,
            'sub_category_id' => $request->category,
            'brand_id' => $brand_id,
            'type' => $request->type,
            'designation' => $request->designation,
            'pdffilename' => $pdffilename,
            'ad_condition' => $request->condition,
            'price' => $request->price,
            'is_negotiable' => $is_negotialble,
            'seller_name' => $request->seller_name,
            'seller_email' => $request->seller_email,
            'seller_phone' => $request->seller_phone,
            'country_id' => $request->country,
            'state_id' => $request->state,
            'city_id' => $request->city,
            'address' => $request->address,
            'video_url' => $video_url,
            'price_plan' => $request->price_plan,
            'mark_ad_urgent' => $mark_ad_urgent,
            'status' => '0',
            'user_id' => $user_id,
        ];

        //Check ads moderation settings
        if (get_option('ads_moderation') == 'direct_publish'){
            $data['status'] = '1';
        }

        //if price_plan not in post data, then set a default value, although mysql will save it as enum first value
        if ( ! $request->price_plan){
            $data['price_plan'] = 'regular';
        }



        $created_ad = Ad::create($data);


        /**
         * iF add created
         */
        if ($created_ad){
            //Attach all unused media with this ad
            Media::whereUserId($user_id)->whereAdId(0)->whereRef('ad')->update(['ad_id'=>$created_ad->id]);

            /**
             * Payment transaction login here
             */
            $ads_price = get_ads_price($created_ad->price_plan);
            if ($mark_ad_urgent){
                $ads_price = $ads_price + get_option('urgent_ads_price');
            }

            if ($ads_price){
                //Insert checkout Logic

                $transaction_id = 'tran_'.time().str_random(6);
                // get unique recharge transaction id
                while( ( Payment::whereLocalTransactionId($transaction_id)->count() ) > 0) {
                    $transaction_id = 'reid'.time().str_random(5);
                }
                $transaction_id = strtoupper($transaction_id);

                $currency = get_option('currency_sign');
                $payments_data = [
                    'ad_id'     => $created_ad->id,
                    'user_id'   => $user_id,
                    'amount'    => $ads_price,
                    'payment_method'    => $request->payment_method,
                    'status'    => 'initial',
                    'currency'  => $currency,
                    'local_transaction_id'  => $transaction_id
                ];
                $created_payment = Payment::create($payments_data);

                return redirect(route('payment_checkout', $created_payment->local_transaction_id));
            }

            return redirect(route('pending_ads'))->with('success', trans('app.ad_created_msg'));

        }
        

        //dd($request->input());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $user_id = $user->id;

        $title = trans('app.edit_ad');
        $ad = Ad::find($id);
        

        if (!$ad)
            return view('admin.error.error_404');

        if (! $user->is_admin()){
            if ($ad->user_id != $user_id){
                return view('admin.error.error_404');
            }
        }
        
        $categories = Category::where('category_id', 0)->get();
        $countries = Country::all();
        $ads_images = Media::whereUserId($user_id)->whereAdId(0)->whereRef('ad')->get();

        $previous_brands = Brand::where('category_id', $ad->sub_category_id)->get();
        $previous_states = State::where('country_id', $ad->country_id)->get();
        $previous_cities = City::where('state_id', $ad->state_id)->get();
        
        return view('admin.edit_ad', compact('title', 'categories', 'countries', 'ads_images', 'ad', 'previous_brands', 'previous_states', 'previous_cities'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ad = Ad::find($id);
        $user = Auth::user();
        $user_id = $user->id;

        if (! $user->is_admin()){
            if ($ad->user_id != $user_id){
                return view('admin.error.error_404');
            }
        }
        $mark_ad_urgent = $request->mark_ad_urgent ? $request->mark_ad_urgent : '0';

        $rules = [
            'category'  => 'required',
            'ad_title'  => 'required',
            'ad_description'  => 'required',
            'type'  => 'required',
            'condition'  => 'required',
            'country'  => 'required',
            'seller_name'  => 'required',
            'seller_email'  => 'required',
            'seller_phone'  => 'required',
            'address'  => 'required',
        ];

        $this->validate($request, $rules);

        $title = $request->ad_title;
        //$slug = unique_slug($title);
        
        $sub_category = Category::find($request->category);
        $is_negotialble = $request->negotiable ? $request->negotiable : '0';
        $brand_id = $request->brand ? $request->brand : 0;
        $video_url = $request->video_url ? $request->video_url : '';
	
	if($_FILES["filescustom"]['name'] !='') {
       	$pdffilename = now().$_FILES["filescustom"]['name'];
		if (move_uploaded_file($_FILES['filescustom']['tmp_name'],'/public_html/magas/uploads/pdf/'.$pdffilename)) {
		    //echo "Uploaded";
		} else {
		   //echo "File was not uploaded";
		}
	}

	if($_FILES["filescustom"]['name'] !='') {
        $data = [
            'title' => $request->ad_title,
            'description' => $request->ad_description,
            'category_id' => $sub_category->category_id,
            'sub_category_id' => $request->category,
            'brand_id' => $brand_id,
            'type' => $request->type,
            'designation' => $request->designation,
            'pdffilename' => $pdffilename,
            'ad_condition' => $request->condition,
            'price' => $request->price,
            'is_negotiable' => $is_negotialble,
            'seller_name' => $request->seller_name,
            'seller_email' => $request->seller_email,
            'seller_phone' => $request->seller_phone,
            'country_id' => $request->country,
            'state_id' => $request->state,
            'city_id' => $request->city,
            'address' => $request->address,
            'video_url' => $video_url,
            'price_plan' => $request->price_plan,
            'mark_ad_urgent' => $mark_ad_urgent,

        ];
	} else {

	$data = [
            'title' => $request->ad_title,
            'description' => $request->ad_description,
            'category_id' => $sub_category->category_id,
            'sub_category_id' => $request->category,
            'brand_id' => $brand_id,
            'type' => $request->type,
            'designation' => $request->designation,
            'ad_condition' => $request->condition,
            'price' => $request->price,
            'is_negotiable' => $is_negotialble,
            'seller_name' => $request->seller_name,
            'seller_email' => $request->seller_email,
            'seller_phone' => $request->seller_phone,
            'country_id' => $request->country,
            'state_id' => $request->state,
            'city_id' => $request->city,
            'address' => $request->address,
            'video_url' => $video_url,
            'price_plan' => $request->price_plan,
            'mark_ad_urgent' => $mark_ad_urgent,

        ];



	}
        
        $updated_ad = $ad->update($data);

        /**
         * iF add created
         */
        if ($updated_ad){
            //Attach all unused media with this ad
            Media::whereUserId($user_id)->whereAdId(0)->whereRef('ad')->update(['ad_id'=>$ad->id]);
        }

        return redirect()->back()->with('success', trans('app.ad_updated'));
    }


    public function catalogueDisplay(){
        $title = trans('Catalogue (Alacarte) Listing of Magas Platform');
        return view('theme.catalogue', compact('title'));
   }
    public function packagesDisplay(){
        $title = trans('Packages Listing of Magas Platform');
        return view('theme.packages', compact('title'));
   }
    public function bespokeDisplay(){
        $title = trans('Bespoke Listing of Magas Platform');
        return view('theme.bespoke', compact('title'));
   }

    public function adStatusChange(Request $request){
      
        $slug = $request->slug;
       // dd($slug);
        $ad = Ad::whereSlug($slug)->first();
       // dd($ad);
        if ($ad){
            $value = $request->value;
           // dd($value);
            /*
            $ad->status = $value;
            $ad->save();*/
            ad_status_change($ad->id, $value);
            if ($value ==1){
                return ['success'=>1, 'msg' => trans('app.ad_approved_msg')];
            }elseif($value ==2){
                return ['success'=>1, 'msg' => trans('app.ad_blocked_msg')];
            }
            elseif($value ==3){
                return ['success'=>1, 'msg' => trans('app.ad_archived_msg')];
            }
        }
        return ['success'=>0, 'msg' => trans('app.error_msg')];

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $slug = $request->slug;
        $ad = Ad::whereSlug($slug)->first();
        if ($ad){
            $media = Media::whereAdId($ad->id)->get();
            if ($media->count() > 0){
                foreach($media as $m){
                    $storage = Storage::disk($m->storage);
                    if ($storage->has('uploads/images/'.$m->media_name)){
                        $storage->delete('uploads/images/'.$m->media_name);
                    }
                    if ($m->type == 'image'){
                        if ($storage->has('uploads/images/thumbs/'.$m->media_name)){
                            $storage->delete('uploads/images/thumbs/'.$m->media_name);
                        }
                    }
                    $m->delete();
                }
            }
            $ad->delete();
             return ['success'=>1, 'msg' => trans('app.media_deleted_msg')];
            // $this->myAds();
            
        }
         return ['success'=>0, 'msg' => trans('app.error_msg')];
        
    }

    public function getSubCategoryByCategory(Request $request){
        $category_id = $request->category_id;
        $brands = Sub_Category::whereCategoryId($category_id)->select('id', 'category_name', 'category_slug')->get();
        return $brands;
    }

    public function getBrandByCategory(Request $request){
        $category_id = $request->category_id;
        $brands = Brand::whereCategoryId($category_id)->select('id', 'brand_name')->get();
        return $brands;
    }

    public function getStateByCountry(Request $request){
        $country_id = $request->country_id;
        $states = State::whereCountryId($country_id)->select('id', 'state_name')->get();
        return $states;
    }

    public function getCityByState(Request $request){
        $state_id = $request->state_id;
        $cities = City::whereStateId($state_id)->select('id', 'city_name')->get();
        return $cities;
    }
    
    // public function getUser(Request $request){
    //     $user_id = $request->user_id;
    //     $users = User::whereStateId($user_id)->select('id', 'name')->get();
    //     return $users;
    // }

    public function getParentCategoryInfo(Request $request){
        $category_id = $request->category_id;
        $sub_category = Category::find($category_id);
        $category = Category::find($sub_category->category_id);
        return $category;
    }

    public function uploadAdsImage(Request $request){
        $user_id = Auth::user()->id;

        if ($request->hasFile('images')){
            $image = $request->file('images');
            $valid_extensions = ['jpg','jpeg','png'];

            if ( ! in_array(strtolower($image->getClientOriginalExtension()), $valid_extensions) ){
                return ['success' => 0, 'msg' => implode(',', $valid_extensions).' '.trans('app.valid_extension_msg')];
            }

            $file_base_name = str_replace('.'.$image->getClientOriginalExtension(), '', $image->getClientOriginalName());

            $resized = Image::make($image)->resize(640, null, function ($constraint) {
                $constraint->aspectRatio();
            })->stream();
            $resized_thumb = Image::make($image)->resize(320, 213)->stream();

            $image_name = strtolower(time().str_random(5).'-'.str_slug($file_base_name)).'.' . $image->getClientOriginalExtension();

            $imageFileName = 'uploads/images/'.$image_name;
            $imageThumbName = 'uploads/images/thumbs/'.$image_name;

            try{
                //Upload original image
                $is_uploaded = current_disk()->put($imageFileName, $resized->__toString(), 'public');

                if ($is_uploaded) {
                    //Save image name into db
                    $created_img_db = Media::create(['user_id' => $user_id, 'media_name'=>$image_name, 'type'=>'image', 'storage' => get_option('default_storage'), 'ref'=>'ad']);

                    //upload thumb image
                    current_disk()->put($imageThumbName, $resized_thumb->__toString(), 'public');
                    $img_url = media_url($created_img_db, false);
                    return ['success' => 1, 'img_url' => $img_url];
                } else {
                    return ['success' => 0];
                }
            } catch (\Exception $e){
                return $e->getMessage();
            }

        }
    }
    /**
     * @param Request $request
     * @return array
     */

    public function deleteMedia(Request $request){
        $media_id = $request->media_id;
        $media = Media::find($media_id);

        $storage = Storage::disk($media->storage);
        if ($storage->has('uploads/images/'.$media->media_name)){
            $storage->delete('uploads/images/'.$media->media_name);
        }

        if ($media->type == 'image'){
            if ($storage->has('uploads/images/thumbs/'.$media->media_name)){
                $storage->delete('uploads/images/thumbs/'.$media->media_name);
            }
        }

        $media->delete();
        return ['success'=>1, 'msg'=>trans('app.media_deleted_msg')];
    }

    /**
     * @param Request $request
     * @return array
     */
    public function featureMediaCreatingAds(Request $request){
        $user_id = Auth::user()->id;
        $media_id = $request->media_id;

        Media::whereUserId($user_id)->whereAdId(0)->whereRef('ad')->update(['is_feature'=>'0']);
        Media::whereId($media_id)->update(['is_feature'=>'1']);

        return ['success'=>1, 'msg'=>trans('app.media_featured_msg')];
    }

    /**
     * @return mixed
     */
    
    public function appendMediaImage(){
        $user_id = Auth::user()->id;
        $ads_images = Media::whereUserId($user_id)->whereAdId(0)->whereRef('ad')->get();
        

        return view('admin.append_media', compact('ads_images'));
    }
      public function bizzListing(Request $request){
      //dd($request);
       $ads = Ad::active();
        $ads = $ads->whereType('bizz')->orderBy('editupdated_at', 'desc');
        
      // $ads = DB::table('ads')->where('type', '=', 'bizz')->latest();
      // $ads=DB::table('ads')->where('type', '=', 'bizz')->latest('updated_at')->first();

      
        $business_ads_count = Ad::active()->business();
        // dd($business_ads_count);
       // $personal_ads_count = Ad::active()->personal();

        //$premium_ads = Ad::activePremium();
        
        $itemss = "";
        $itemssc = "";
       

        if ($request->q){
            
            // print_r($request->q);
            // die();
            
                Session::push('cart', $request->q);
                $items = Session::get('cart');
                
                if($request->q == $items[0]){
                    
                    $itemss = Session::get('cart');
                    Session::forget('cart');
                    
                }else{
                    
                    Session::forget('cart');
                    $itemss = Session::get('cart');
                    
                }
            
                $ads = $ads->where(function($ads) use($request){
                $ads->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
                
          
               
               //  dd($ads->first()->id);
            });
            
            
            $business_ads_count = $business_ads_count->where(function($business_ads_count) use($request){
                $business_ads_count->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
            });
            
            

            //$personal_ads_count = $personal_ads_count->where(function($personal_ads_count) use($request){
              //  $personal_ads_count->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
            //});
        }
        
        
        if ($request->category){
            
            $ads = $ads->whereCategoryId($request->category);
            $business_ads_count = $business_ads_count->whereCategoryId($request->category);
            
            //$personal_ads_count = $personal_ads_count->whereCategoryId($request->category);

            //$premium_ads = $premium_ads->whereCategoryId($request->category);
        }
        
      
	if ($request->sub_category){
	    
	            Session::push('sub_category', $request->sub_category);
                $itemsc = Session::get('sub_category');
                
                if($request->sub_category == $itemsc[0]){
                    
                    $itemssc = Session::get('sub_category');
                    Session::forget('sub_category');
                    
                }else{
                    
                    Session::forget('sub_category');
                    $itemssc = Session::get('sub_category');
                    
                }
                
            $ads = $ads->whereSubCategoryId($request->sub_category);
            $business_ads_count = $business_ads_count->whereSubCategoryId($request->sub_category);
        }
        
        if ($request->country){
            
                Session::push('country', $request->country);
                $itemscc = Session::get('country');
                
                if($request->country == $itemscc[0]){
                    
                    $itemsscc = Session::get('country');
                    Session::forget('country');
                    
                }else{
                    
                    Session::forget('country');
                    $itemsscc = Session::get('country');
                    
                }
                
                
            $ads = $ads->whereCountryId($request->country);
            $business_ads_count = $business_ads_count->whereCountryId($request->country);
            //$personal_ads_count = $personal_ads_count->whereCountryId($request->country);
        }
        if ($request->state){
            
            Session::push('state', $request->state);
                $itemscck = Session::get('state');
                
                if($request->state == $itemscck[0]){
                    
                    $itemsscck = Session::get('state');
                    Session::forget('state');
                    
                }else{
                    
                    Session::forget('state');
                    $itemsscck = Session::get('state');
                    
                }
                
            $ads = $ads->whereStateId($request->state);
            $business_ads_count = $business_ads_count->whereStateId($request->state);
            //$personal_ads_count = $personal_ads_count->whereStateId($request->state);
        }
        
       // $ads = $ads->orderBy('id', 'desc');
        // $ads = $ads->orderBy('id', 'desc')->where('status', 1);
    $ads = $ads->orderBy('editupdated_at', 'desc');
//$ads=DB::table('ads')->where('type', '=', 'bizz')->latest('updated_at');
        $ads = $ads->with('category');
        $ads = $ads->paginate(20);

        $business_ads_count = $business_ads_count->count();
        //$personal_ads_count = $personal_ads_count->count();

        $title = trans('Business Listings Online');
	$categories = Category::where('category_id', 0)->get();
        $countries = Country::all();
        //dd($request->sub_category);
//dd($countries);
        //$categories = Category::where('category_id', 0)->get();


       return view($this->theme.'bizz', compact( 'ads', 'title','itemss','itemssc','itemsscc','itemsscck','categories', 'countries', 'business_ads_count', 'selected_categories', 'selected_sub_categories', 'selected_countries', 'selected_states'));

    }

    public function proListing(Request $request){
         // $user = Auth::user();
       //   dd($user);
        $ads = Ad::active();
        $ads = $ads->whereType('pro')->orderBy('editupdated_at', 'desc');
        $business_ads_count = Ad::active()->business();
        //$personal_ads_count = Ad::active()->personal();

        //$premium_ads = Ad::activePremium();

        if ($request->q){
            $ads = $ads->where(function($ads) use($request){
                $ads->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
            });
            
            $business_ads_count = $business_ads_count->where(function($business_ads_count) use($request){
                $business_ads_count->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
            });

            //$personal_ads_count = $personal_ads_count->where(function($personal_ads_count) use($request){
              //  $personal_ads_count->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
            //});
        }
        if ($request->category){
            $ads = $ads->whereCategoryId($request->category);
            $business_ads_count = $business_ads_count->whereCategoryId($request->category);
            //$personal_ads_count = $personal_ads_count->whereCategoryId($request->category);

            //$premium_ads = $premium_ads->whereCategoryId($request->category);
        }

	if ($request->sub_category){
            $ads = $ads->whereSubCategoryId($request->sub_category);
            $business_ads_count = $business_ads_count->whereSubCategoryId($request->sub_category);
        }
        
        if ($request->country){
            $ads = $ads->whereCountryId($request->country);
            $business_ads_count = $business_ads_count->whereCountryId($request->country);
            //$personal_ads_count = $personal_ads_count->whereCountryId($request->country);
        }
        if ($request->state){
            $ads = $ads->whereStateId($request->state);
            $business_ads_count = $business_ads_count->whereStateId($request->state);
            //$personal_ads_count = $personal_ads_count->whereStateId($request->state);
        }
        
       
        if ($request->user_id){
            $ads = $ads->whereUserId($request->user_id);
            $business_ads_count = $business_ads_count->whereUserId($request->user_id);
            //$personal_ads_count = $personal_ads_count->whereUserId($request->user_id);
        }
        
            $ads = $ads->orderBy('updated_at', 'desc');
            $ads = $ads->with('category');
            $ads = $ads->paginate(12);

        $business_ads_count = $business_ads_count->count();
        //$personal_ads_count = $personal_ads_count->count();

        $title = trans('Post Your Profile online on Magas global platform for free and get hired');
	$categories = Category::where('category_id', 0)->get();
        $countries = Country::all();
        //$categories = Category::where('category_id', 0)->get();
//dd($categories);

       return view($this->theme.'pro', compact( 'ads', 'title','categories', 'countries', 'business_ads_count', 'selected_categories', 'selected_sub_categories', 'selected_countries', 'selected_states'));


    }
    public function classifiedsListing(Request $request){
       $curr_date=date('Y-m-d H:i:s');
      
        $ads = Ad::active();
        $ads = $ads->whereType('classifieds')->orderBy('editupdated_at', 'desc');
        //dd($ads);
         
      // dd($curr_date);
        $business_ads_count = Ad::active()->business();
       // $personal_ads_count = Ad::active()->personal();

        //$premium_ads = Ad::activePremium();

        if ($request->q){
            $ads = $ads->where(function($ads) use($request){
                $ads->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
            });
            
            $business_ads_count = $business_ads_count->where(function($business_ads_count) use($request){
                $business_ads_count->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
            });

            //$personal_ads_count = $personal_ads_count->where(function($personal_ads_count) use($request){
              //  $personal_ads_count->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
            //});
        }
        if ($request->category){
            $ads = $ads->whereCategoryId($request->category);
            $business_ads_count = $business_ads_count->whereCategoryId($request->category);
            //$personal_ads_count = $personal_ads_count->whereCategoryId($request->category);

            //$premium_ads = $premium_ads->whereCategoryId($request->category);
        }

	if ($request->sub_category){
            $ads = $ads->whereSubCategoryId($request->sub_category);
            $business_ads_count = $business_ads_count->whereSubCategoryId($request->sub_category);
        }
        
        if ($request->country){
            $ads = $ads->whereCountryId($request->country);
            $business_ads_count = $business_ads_count->whereCountryId($request->country);
            //$personal_ads_count = $personal_ads_count->whereCountryId($request->country);
        }
        if ($request->state){
            $ads = $ads->whereStateId($request->state);
            $business_ads_count = $business_ads_count->whereStateId($request->state);
            //$personal_ads_count = $personal_ads_count->whereStateId($request->state);
        }
        
       
        if ($request->user_id){
            $ads = $ads->whereUserId($request->user_id);
            $business_ads_count = $business_ads_count->whereUserId($request->user_id);
            //$personal_ads_count = $personal_ads_count->whereUserId($request->user_id);
        }
        
            $ads = $ads->orderBy('updated_at', 'desc');
        
        $ads = $ads->with('category');
        $ads = $ads->paginate(12);



        $business_ads_count = $business_ads_count->count();
        //$personal_ads_count = $personal_ads_count->count();

        $title = trans('Classifieds - Post free ads');
	    $categories = Category::where('category_id', 0)->get();
        $countries = Country::all();
        //$categories = Category::where('category_id', 0)->get();


        return view($this->theme.'classifieds', compact( 'ads', 'title', 'categories', 'countries', 'business_ads_count', 'selected_categories', 'selected_sub_categories', 'selected_countries', 'selected_states'));
    }
    
    public function mainSearch(Request $request){
      
      $ads = Ad::active();
        $ads = $ads->where('type','<>', 'opportunities')->orderBy('editupdated_at', 'desc');
        //dd($ads);
         
      // dd($curr_date);
        $business_ads_count = Ad::active()->business();
       // $personal_ads_count = Ad::active()->personal();

        //$premium_ads = Ad::activePremium();

        if ($request->q){
            
           
            $ads = $ads->where(function($ads) use($request){
                $ads->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
            });
            
            $business_ads_count = $business_ads_count->where(function($business_ads_count) use($request){
                $business_ads_count->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
            });

            //$personal_ads_count = $personal_ads_count->where(function($personal_ads_count) use($request){
              //  $personal_ads_count->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
            //});
        }
        if ($request->category){
            $ads = $ads->whereCategoryId($request->category);
            $business_ads_count = $business_ads_count->whereCategoryId($request->category);
            //$personal_ads_count = $personal_ads_count->whereCategoryId($request->category);

            //$premium_ads = $premium_ads->whereCategoryId($request->category);
        }

	if ($request->sub_category){
            $ads = $ads->whereSubCategoryId($request->sub_category);
            $business_ads_count = $business_ads_count->whereSubCategoryId($request->sub_category);
        }
        
        if ($request->country){
            $ads = $ads->whereCountryId($request->country);
            $business_ads_count = $business_ads_count->whereCountryId($request->country);
            //$personal_ads_count = $personal_ads_count->whereCountryId($request->country);
        }
        if ($request->state){
            $ads = $ads->whereStateId($request->state);
            $business_ads_count = $business_ads_count->whereStateId($request->state);
            //$personal_ads_count = $personal_ads_count->whereStateId($request->state);
        }
        
       
        if ($request->user_id){
            $ads = $ads->whereUserId($request->user_id);
            $business_ads_count = $business_ads_count->whereUserId($request->user_id);
            //$personal_ads_count = $personal_ads_count->whereUserId($request->user_id);
        }
        
            $ads = $ads->orderBy('updated_at', 'desc');
        
        $ads = $ads->with('category');
        $ads = $ads->paginate(12);



        $business_ads_count = $business_ads_count->count();
        //$personal_ads_count = $personal_ads_count->count();

        $title = trans('Classifieds - Post free ads');
	$categories = Category::where('category_id', 0)->get();
        $countries = Country::all();
        //$categories = Category::where('category_id', 0)->get();


 
 //$ads = Ad::active();
 
//  if ($request->q){
//             $ads = $ads->where(function($ads) use($request){
//                 $ads->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
//             });
            
//             $business_ads_count = $business_ads_count->where(function($business_ads_count) use($request){
//                 $business_ads_count->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
//             });

//             //$personal_ads_count = $personal_ads_count->where(function($personal_ads_count) use($request){
//               //  $personal_ads_count->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
//             //});
//         }
//dd($request);
//$ads = $ads->whereSubCategoryId($request->sub_category);
//dd($ads);
// if ($request->sub_category){
//             $ads = $ads->whereSubCategoryId($request->sub_category);
//             dd($ads);
//           $business_ads_count = $business_ads_count->whereSubCategoryId($request->sub_category);
//         }
        //  $ads = DB::table('ads')->where('title','like', "%{$request->q}%")->get();
        
      //  DB::raw("CONCAT(users.first_name,' ',users.last_name)
      //  $selected_countries =  DB::table('countries')->where('id','like',"%{$request->q}%")->get();
       // dd($selected_countries);
        
       
        
    //   dd($ads);
       // dd($ad->sub_category->category_name);
 //print_r($users);
       // return view('search')->with('ads', $users);
//  if ($request->q){
//             $ads = $ads->where(function($ads) use($request){
//               // dd($ads);
//                 $ads->where('title','like', "%{$request->q}%");
//               // dd($ads);
                
//             });-*
          
  
//  }
 
 //$ads = $ads->orderBy('id', 'desc');
//$ads=array("test","test123");

 // $ads = $ads->orderBy('id', 'desc');
// return view($this->theme.'search',compact( 'ads'));
     return view($this->theme.'search', compact( 'ads', 'title', 'categories', 'countries', 'business_ads_count', 'selected_categories', 'selected_sub_categories', 'selected_countries', 'selected_states'));
   
    }
    public function opportunitiesListing(Request $request){
       
	   $ads = Ad::active();
       $ads = $ads->whereType('opportunities')->orderBy('editupdated_at', 'desc');
         
        $business_ads_count = Ad::active()->business();

        if ($request->q){
           
            $ads = $ads->where(function($ads) use($request){
                $ads->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
            });
            
            $business_ads_count = $business_ads_count->where(function($business_ads_count) use($request){
                $business_ads_count->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
            });
        }
        if ($request->category){
            $ads = $ads->whereCategoryId($request->category);
            $business_ads_count = $business_ads_count->whereCategoryId($request->category);

        }

	if ($request->sub_category){
            $ads = $ads->whereSubCategoryId($request->sub_category);
            $business_ads_count = $business_ads_count->whereSubCategoryId($request->sub_category);
        }
        
        if ($request->country){
            $ads = $ads->whereCountryId($request->country);
            $business_ads_count = $business_ads_count->whereCountryId($request->country);
        }
        if ($request->state){
            $ads = $ads->whereStateId($request->state);
            $business_ads_count = $business_ads_count->whereStateId($request->state);
        }
        
       
        if ($request->user_id){
            $ads = $ads->whereUserId($request->user_id);
            $business_ads_count = $business_ads_count->whereUserId($request->user_id);
        }
        
            $ads = $ads->orderBy('editupdated_at', 'desc');
        
        $ads = $ads->with('category');
        $ads = $ads->paginate(12);



        $business_ads_count = $business_ads_count->count();
        //$personal_ads_count = $personal_ads_count->count();

        $title = trans('Projects Online - Submit your project for free evaluation');
	$categories = Category::where('category_id', 0)->get();
        $countries = Country::all();
        //$categories = Category::where('category_id', 0)->get();


        return view($this->theme.'opportunities', compact( 'ads', 'title', 'categories', 'countries', 'business_ads_count', 'selected_categories', 'selected_sub_categories', 'selected_countries', 'selected_states'));
  

    }
    public function insightListing(Request $request){
//        echo '<pre>';print_r($request->all());exit;
         $insight_ads = Ad::activeWhitepapers()->with('category','sub_category', 'city', 'media_img', 'feature_img')->orderBy('id', 'desc')->get();
        $ads = Ad::active();
        $business_ads_count = Ad::active()->business();
        $personal_ads_count = Ad::active()->personal();

        $premium_ads = Ad::activePremium();

        $countries = Country::all();
        $top_categories = Category::whereCategoryId(0)->with('sub_categories')->orderBy('category_name', 'asc')->get();

        if ($request->q){
//            $ads = $ads->where(function($ads) use($request){
//                $ads->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
//            });
//            
//            $business_ads_count = $business_ads_count->where(function($business_ads_count) use($request){
//                $business_ads_count->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
//            });
//
//            $personal_ads_count = $personal_ads_count->where(function($personal_ads_count) use($request){
//                $personal_ads_count->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
//            });
             $insight_ads = Ad::activeWhitepapers()->where('title','like', "%{$request->q}%")->where('type','like', "whitepapers")->orWhere('description','like', "%{$request->q}%")->with('category','sub_category', 'city', 'media_img', 'feature_img')->orderBy('id', 'desc')->get();
        }
        if ($request->category){
            $ads = $ads->whereCategoryId($request->category);
            $business_ads_count = $business_ads_count->whereCategoryId($request->category);
            $personal_ads_count = $personal_ads_count->whereCategoryId($request->category);

            $premium_ads = $premium_ads->whereCategoryId($request->category);
        }
        if ($request->sub_category){
            $ads = $ads->whereSubCategoryId($request->sub_category);
            $business_ads_count = $business_ads_count->whereSubCategoryId($request->sub_category);
            $personal_ads_count = $personal_ads_count->whereSubCategoryId($request->sub_category);

            $premium_ads = $premium_ads->whereSubCategoryId($request->sub_category);
        }
        if ($request->brand){
            $ads = $ads->whereBrandId($request->brand);
            $business_ads_count = $business_ads_count->whereBrandId($request->brand);
            $personal_ads_count = $personal_ads_count->whereBrandId($request->brand);
        }
        if ($request->condition){
            $ads = $ads->whereAdCondition($request->condition);
            $business_ads_count = $business_ads_count->whereAdCondition($request->condition);
            $personal_ads_count = $personal_ads_count->whereAdCondition($request->condition);
        }
        if ($request->type){
            $ads = $ads->whereType($request->type);
            $business_ads_count = $business_ads_count->whereType($request->type);
            $personal_ads_count = $personal_ads_count->whereType($request->type);
        }
        if ($request->country){
            $ads = $ads->whereCountryId($request->country);
            $business_ads_count = $business_ads_count->whereCountryId($request->country);
            $personal_ads_count = $personal_ads_count->whereCountryId($request->country);
        }
        if ($request->state){
            $ads = $ads->whereStateId($request->state);
            $business_ads_count = $business_ads_count->whereStateId($request->state);
            $personal_ads_count = $personal_ads_count->whereStateId($request->state);
        }
        if ($request->city){
            $ads = $ads->whereCityId($request->city);
            $business_ads_count = $business_ads_count->whereCityId($request->city);
            $personal_ads_count = $personal_ads_count->whereCityId($request->city);
        }
        if ($request->min_price){
            $ads = $ads->where('price', '>=', $request->min_price);
            $business_ads_count = $business_ads_count->where('price', '>=', $request->min_price);
            $personal_ads_count = $personal_ads_count->where('price', '>=', $request->min_price);
        }
        if ($request->max_price){
            $ads = $ads->where('price', '<=', $request->max_price);
            $business_ads_count = $business_ads_count->where('price', '<=', $request->max_price);
            $personal_ads_count = $personal_ads_count->where('price', '<=', $request->max_price);
        }
        if ($request->adType){
            if ($request->adType == 'business') {
                $ads = $ads->business();
            }elseif ($request->adType == 'personal'){
                $ads = $ads->personal();
            }
        }
        if ($request->user_id){
            $ads = $ads->whereUserId($request->user_id);
            $business_ads_count = $business_ads_count->whereUserId($request->user_id);
            $personal_ads_count = $personal_ads_count->whereUserId($request->user_id);
        }
        if ($request->shortBy){
            switch ($request->shortBy){
                case 'price_high_to_low':
                    $ads = $ads->orderBy('price', 'desc');
                    break;
                case 'price_low_to_height':
                    $ads = $ads->orderBy('price', 'asc');
                    break;
                case 'latest':
                    $ads = $ads->orderBy('id', 'desc');
                    break;
            }
        }else{
            $ads = $ads->orderBy('id', 'desc');
        }


        $ads_per_page = get_option('ads_per_page');
        $ads = $ads->with('category','sub_category', 'city', 'media_img', 'feature_img');
        $ads = $ads->paginate($ads_per_page);


        //Check max impressions
        $max_impressions = get_option('premium_ads_max_impressions');
        $premium_ads = $premium_ads->where('max_impression', '<', $max_impressions);
        $take_premium_ads = get_option('number_of_premium_ads_in_listing');
        if ($take_premium_ads > 0){
            $premium_order_by = get_option('order_by_premium_ads_in_listing');
            $premium_ads = $premium_ads->take($take_premium_ads);
            $last_days_premium_ads = get_option('number_of_last_days_premium_ads');

            $premium_ads = $premium_ads->where('created_at', '>=', Carbon::now()->timezone(get_option('default_timezone'))->subDays($last_days_premium_ads));

            if ($premium_order_by == 'latest'){
                $premium_ads = $premium_ads->orderBy('id', 'desc');
            }elseif ($premium_order_by == 'random'){
                $premium_ads = $premium_ads->orderByRaw('RAND()');
            }

            $premium_ads = $premium_ads->get();

        }else{
            $premium_ads = false;
        }

        $business_ads_count = $business_ads_count->count();
        $personal_ads_count = $personal_ads_count->count();

        $title = trans('app.post_an_ad');
        $categories = Category::where('category_id', 0)->get();
        $countries = Country::all();

        $selected_categories = Category::find($request->category);
        $selected_sub_categories = Category::find($request->sub_category);

        $selected_countries = Country::find($request->country);
        $selected_states = State::find($request->state);
  
        return view($this->theme.'insight', compact( 'ads', 'title', 'categories', 'countries', 'selected_categories', 'selected_sub_categories', 'selected_countries', 'selected_states', 'personal_ads_count', 'business_ads_count', 'premium_ads','countries','top_categories','insight_ads'));
    }
      public function homeListing(Request $request){
//        echo '<pre>';print_r($request->all());exit;
         if($request->q =='') {
		return redirect(route('home'))->with('success', trans(''));
	 } else {
        $ads = Ad::active();
                // echo '<pre>';print_r($ads);exit;
        $business_ads_count = Ad::active()->business();
        $personal_ads_count = Ad::active()->personal();

        $premium_ads = Ad::activePremium();

        $countries = Country::all();
        $top_categories = Category::whereCategoryId(0)->with('sub_categories')->orderBy('category_name', 'asc')->get();

        if ($request->q){
            $ads = $ads->where(function($ads) use($request){
                $ads->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
            });
            
            $business_ads_count = $business_ads_count->where(function($business_ads_count) use($request){
                $business_ads_count->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
            });

            $personal_ads_count = $personal_ads_count->where(function($personal_ads_count) use($request){
                $personal_ads_count->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
            });
           
        }else{
            
$top_categories = Ad::whereStatus(1)->get();

        }
        if ($request->category){
            $ads = $ads->whereCategoryId($request->category);
            $business_ads_count = $business_ads_count->whereCategoryId($request->category);
            $personal_ads_count = $personal_ads_count->whereCategoryId($request->category);

            $premium_ads = $premium_ads->whereCategoryId($request->category);
        }
        if ($request->sub_category){
            $ads = $ads->whereSubCategoryId($request->sub_category);
            $business_ads_count = $business_ads_count->whereSubCategoryId($request->sub_category);
            $personal_ads_count = $personal_ads_count->whereSubCategoryId($request->sub_category);

            $premium_ads = $premium_ads->whereSubCategoryId($request->sub_category);
        }
        if ($request->brand){
            $ads = $ads->whereBrandId($request->brand);
            $business_ads_count = $business_ads_count->whereBrandId($request->brand);
            $personal_ads_count = $personal_ads_count->whereBrandId($request->brand);
        }
        if ($request->condition){
            $ads = $ads->whereAdCondition($request->condition);
            $business_ads_count = $business_ads_count->whereAdCondition($request->condition);
            $personal_ads_count = $personal_ads_count->whereAdCondition($request->condition);
        }
        if ($request->type){
            $ads = $ads->whereType($request->type);
            $business_ads_count = $business_ads_count->whereType($request->type);
            $personal_ads_count = $personal_ads_count->whereType($request->type);
        }
        if ($request->country){
            $ads = $ads->whereCountryId($request->country);
            $business_ads_count = $business_ads_count->whereCountryId($request->country);
            $personal_ads_count = $personal_ads_count->whereCountryId($request->country);
        }
        if ($request->state){
            $ads = $ads->whereStateId($request->state);
            $business_ads_count = $business_ads_count->whereStateId($request->state);
            $personal_ads_count = $personal_ads_count->whereStateId($request->state);
        }
        if ($request->city){
            $ads = $ads->whereCityId($request->city);
            $business_ads_count = $business_ads_count->whereCityId($request->city);
            $personal_ads_count = $personal_ads_count->whereCityId($request->city);
        }
        if ($request->min_price){
            $ads = $ads->where('price', '>=', $request->min_price);
            $business_ads_count = $business_ads_count->where('price', '>=', $request->min_price);
            $personal_ads_count = $personal_ads_count->where('price', '>=', $request->min_price);
        }
        if ($request->max_price){
            $ads = $ads->where('price', '<=', $request->max_price);
            $business_ads_count = $business_ads_count->where('price', '<=', $request->max_price);
            $personal_ads_count = $personal_ads_count->where('price', '<=', $request->max_price);
        }
        if ($request->adType){
            if ($request->adType == 'business') {
                $ads = $ads->business();
            }elseif ($request->adType == 'personal'){
                $ads = $ads->personal();
            }
        }
        if ($request->user_id){
            $ads = $ads->whereUserId($request->user_id);
            $business_ads_count = $business_ads_count->whereUserId($request->user_id);
            $personal_ads_count = $personal_ads_count->whereUserId($request->user_id);
        }
        if ($request->shortBy){
            switch ($request->shortBy){
                case 'price_high_to_low':
                    $ads = $ads->orderBy('price', 'desc');
                    break;
                case 'price_low_to_height':
                    $ads = $ads->orderBy('price', 'asc');
                    break;
                case 'latest':
                    $ads = $ads->orderBy('id', 'desc');
                    break;
            }
        }else{
            // $ads = $ads->orderBy('id', 'desc');
        }


        $ads_per_page = get_option('ads_per_page');
        $ads = $ads->with('category','sub_category', 'city', 'media_img', 'feature_img');
        $ads = $ads->paginate($ads_per_page);


        //Check max impressions
        $max_impressions = get_option('premium_ads_max_impressions');
        $premium_ads = $premium_ads->where('max_impression', '<', $max_impressions);
        $take_premium_ads = get_option('number_of_premium_ads_in_listing');
        if ($take_premium_ads > 0){
            $premium_order_by = get_option('order_by_premium_ads_in_listing');
            $premium_ads = $premium_ads->take($take_premium_ads);
            $last_days_premium_ads = get_option('number_of_last_days_premium_ads');

            $premium_ads = $premium_ads->where('created_at', '>=', Carbon::now()->timezone(get_option('default_timezone'))->subDays($last_days_premium_ads));

            if ($premium_order_by == 'latest'){
                $premium_ads = $premium_ads->orderBy('id', 'desc');
            }elseif ($premium_order_by == 'random'){
                $premium_ads = $premium_ads->orderByRaw('RAND()');
            }

            $premium_ads = $premium_ads->get();

        }else{
            $premium_ads = false;
        }

        $business_ads_count = $business_ads_count->count();
        $personal_ads_count = $personal_ads_count->count();

        $title = trans('app.post_an_ad');
        $categories = Category::where('category_id', 0)->get();
        $countries = Country::all();

        $selected_categories = Category::find($request->category);
        $selected_sub_categories = Category::find($request->sub_category);

        $selected_countries = Country::find($request->country);
        $selected_states = State::find($request->state);
  
        return view($this->theme.'homelisting', compact( 'ads', 'title', 'categories', 'countries', 'selected_categories', 'selected_sub_categories', 'selected_countries', 'selected_states', 'personal_ads_count', 'business_ads_count', 'premium_ads','countries','top_categories'));

	}
    }

    
    /**
     * Listing
     */

    public function listing(Request $request){
//        echo '<pre>';print_r($request->all());exit;
         $bizz_ads = Ad::activeBizz()->with('category','sub_category', 'city', 'media_img', 'feature_img')->orderBy('id', 'desc')->get();
        $ads = Ad::active();
        $business_ads_count = Ad::active()->business();
        $personal_ads_count = Ad::active()->personal();

        $premium_ads = Ad::activePremium();

        $countries = Country::all();
        $top_categories = Category::whereCategoryId(0)->with('sub_categories')->orderBy('category_name', 'asc')->get();

        if ($request->q){
            
            //  print_r($request->q);
            // die();
//            $ads = $ads->where(function($ads) use($request){
//                $ads->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
//            });
//            
//            $business_ads_count = $business_ads_count->where(function($business_ads_count) use($request){
//                $business_ads_count->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
//            });
//
//            $personal_ads_count = $personal_ads_count->where(function($personal_ads_count) use($request){
//                $personal_ads_count->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%");
//            });
             $bizz_ads = Ad::activeBizz()->where('title','like', "%{$request->q}%")->orWhere('description','like', "%{$request->q}%")->with('category','sub_category', 'city', 'media_img', 'feature_img')->orderBy('id', 'desc')->get();
        }
        if ($request->category){
            $ads = $ads->whereCategoryId($request->category);
            $business_ads_count = $business_ads_count->whereCategoryId($request->category);
            $personal_ads_count = $personal_ads_count->whereCategoryId($request->category);

            $premium_ads = $premium_ads->whereCategoryId($request->category);
        }
        if ($request->sub_category){
            $ads = $ads->whereSubCategoryId($request->sub_category);
            $business_ads_count = $business_ads_count->whereSubCategoryId($request->sub_category);
            $personal_ads_count = $personal_ads_count->whereSubCategoryId($request->sub_category);

            $premium_ads = $premium_ads->whereSubCategoryId($request->sub_category);
        }
        if ($request->brand){
            $ads = $ads->whereBrandId($request->brand);
            $business_ads_count = $business_ads_count->whereBrandId($request->brand);
            $personal_ads_count = $personal_ads_count->whereBrandId($request->brand);
        }
        if ($request->condition){
            $ads = $ads->whereAdCondition($request->condition);
            $business_ads_count = $business_ads_count->whereAdCondition($request->condition);
            $personal_ads_count = $personal_ads_count->whereAdCondition($request->condition);
        }
        if ($request->type){
            $ads = $ads->whereType($request->type);
            $business_ads_count = $business_ads_count->whereType($request->type);
            $personal_ads_count = $personal_ads_count->whereType($request->type);
        }
        if ($request->country){
            $ads = $ads->whereCountryId($request->country);
            $business_ads_count = $business_ads_count->whereCountryId($request->country);
            $personal_ads_count = $personal_ads_count->whereCountryId($request->country);
        }
        if ($request->state){
            $ads = $ads->whereStateId($request->state);
            $business_ads_count = $business_ads_count->whereStateId($request->state);
            $personal_ads_count = $personal_ads_count->whereStateId($request->state);
        }
        if ($request->city){
            $ads = $ads->whereCityId($request->city);
            $business_ads_count = $business_ads_count->whereCityId($request->city);
            $personal_ads_count = $personal_ads_count->whereCityId($request->city);
        }
        if ($request->min_price){
            $ads = $ads->where('price', '>=', $request->min_price);
            $business_ads_count = $business_ads_count->where('price', '>=', $request->min_price);
            $personal_ads_count = $personal_ads_count->where('price', '>=', $request->min_price);
        }
        if ($request->max_price){
            $ads = $ads->where('price', '<=', $request->max_price);
            $business_ads_count = $business_ads_count->where('price', '<=', $request->max_price);
            $personal_ads_count = $personal_ads_count->where('price', '<=', $request->max_price);
        }
        if ($request->adType){
            if ($request->adType == 'business') {
                $ads = $ads->business();
            }elseif ($request->adType == 'personal'){
                $ads = $ads->personal();
            }
        }
        if ($request->user_id){
            $ads = $ads->whereUserId($request->user_id);
            $business_ads_count = $business_ads_count->whereUserId($request->user_id);
            $personal_ads_count = $personal_ads_count->whereUserId($request->user_id);
        }
        if ($request->shortBy){
            switch ($request->shortBy){
                case 'price_high_to_low':
                    $ads = $ads->orderBy('price', 'desc');
                    break;
                case 'price_low_to_height':
                    $ads = $ads->orderBy('price', 'asc');
                    break;
                case 'latest':
                    $ads = $ads->orderBy('id', 'desc');
                    break;
            }
        }else{
            $ads = $ads->orderBy('id', 'desc');
        }



        $ads = $ads->with('category','sub_category', 'city', 'media_img', 'feature_img');
        $ads = $ads->paginate(12);


        //Check max impressions
        $max_impressions = get_option('premium_ads_max_impressions');
        $premium_ads = $premium_ads->where('max_impression', '<', $max_impressions);
        $take_premium_ads = get_option('number_of_premium_ads_in_listing');
        if ($take_premium_ads > 0){
            $premium_order_by = get_option('order_by_premium_ads_in_listing');
            $premium_ads = $premium_ads->take($take_premium_ads);
            $last_days_premium_ads = get_option('number_of_last_days_premium_ads');

            $premium_ads = $premium_ads->where('created_at', '>=', Carbon::now()->timezone(get_option('default_timezone'))->subDays($last_days_premium_ads));

            if ($premium_order_by == 'latest'){
                $premium_ads = $premium_ads->orderBy('id', 'desc');
            }elseif ($premium_order_by == 'random'){
                $premium_ads = $premium_ads->orderByRaw('RAND()');
            }

            $premium_ads = $premium_ads->get();

        }else{
            $premium_ads = false;
        }

        $business_ads_count = $business_ads_count->count();
        $personal_ads_count = $personal_ads_count->count();

        $title = trans('app.post_an_ad');
        $categories = Category::where('category_id', 0)->get();
        $countries = Country::all();

        $selected_categories = Category::find($request->category);
        $selected_sub_categories = Category::find($request->sub_category);

        $selected_countries = Country::find($request->country);
        $selected_states = State::find($request->state);
  
        return view($this->theme.'listing', compact( 'ads', 'title', 'categories', 'countries', 'selected_categories', 'selected_sub_categories', 'selected_countries', 'selected_states', 'personal_ads_count', 'business_ads_count', 'premium_ads','countries','top_categories','bizz_ads'));
    }

    /**
     * @param $slug
     * @return mixed
     */
    public function singleAd($id, $slug){
      // dd($id);
        $limit_regular_ads = get_option('number_of_free_ads_in_home');
        //$ad = Ad::whereSlug($slug)->first();
        $ad = Ad::find($id);
        
      //  dd($ad);
     //   dd($ad);

       

        $title = $ad->title;
        
        // 	$categories = Category::where('category_id', 1)->get();
        		$categories = Category::all();
        	//	dd($categories);
        $countries = Country::all();

        //Get Related Ads, add [->whereCountryId($ad->country_id)] for more specific results
        $related_ads = Ad::active()->whereCategoryId($ad->category_id)->where('id', '!=',$ad->id)->with('category', 'city')->limit($limit_regular_ads)->orderByRaw('RAND()')->get();
       
//dd($ad);
$url=url()->full();
$price = DB::table('contact_queries')
                ->where('fullpageurl',$url)
                ->avg('rating');


          $login_user= Auth::user();
          $user=$ad->user_id;
           if (! $ad){
            return view('theme.error_404');
        }
        if ( ! $ad->is_published()){
            // if (Auth::check()){
            //     $user_id = Auth::user()->id;
            //     if ($user_id != $ad->user_id){
            //         return view('theme.error_404');
            //     }
            // }else{
            //     return view('theme.error_404');
            // }
        }else{
            $ad->view = $ad->view+1;
            $ad->save();
        }
      
        // dd($user);
        if($ad->type == 'bizz'){
           // dd($ad);
           // dd("hello");
            if($login_user){
                return view($this->theme.'bizz_adedit', compact('ad', 'title', 'related_ads','categories','countries','price'));
              
            }else{
                
                  return view($this->theme.'bizz_ad', compact('ad', 'title', 'related_ads','categories','countries','price'));
            }
           //  dd($price);
          
           // $query= "SELECT AVG(rating) from contact_queries WHERE fullpageurl= 'http://beta1.magas.services/ad/86/dream-days'";
         //   dd($query);
      // return view($this->theme.'bizz_ad', compact('ad', 'title', 'related_ads','categories','countries','price','login_id','login_type','login_user'));
       
        }
        elseif($ad->type == 'whitepapers'){
          //  dd("bjn");
             if($login_user){
                // dd("l");
                 return view($this->theme.'whitepaper_adedit', compact('ad', 'title', 'related_ads','categories','countries','price'));
               
            }else{
                dd("n");
                 return view($this->theme.'whitepaper_ad', compact('ad', 'title', 'related_ads','categories','countries','price'));
                  
            }
          //  return view($this->theme.'whitepaper_ad', compact('ad', 'title', 'related_ads','categories','countries','price','login_id','login_type','login_user'));
        }
        elseif($ad->type == 'pro'){
              
            //dd("hiu");
            if($login_user){
                
                 return view($this->theme.'pro_adedit', compact('ad', 'title', 'related_ads','categories','countries'));
            }else{
                
                     return view($this->theme.'pro_ad', compact('ad', 'title', 'related_ads','categories','countries'));
            }
            
            
          //  return view($this->theme.'pro_ad', compact('ad', 'title', 'related_ads','categories','countries','login_id','login_type','login_user'));
        }elseif($ad->type == 'opportunities'){
            if($login_user){
                  return view($this->theme.'opportunities_adedit', compact('ad', 'title', 'related_ads','categories','countries','price'));
               
            }else{
                   return view($this->theme.'opportunities_ad', compact('ad', 'title', 'related_ads','categories','countries','price'));
                  
            }
           // return view($this->theme.'opportunities_ad', compact('ad', 'title', 'related_ads','categories','countries','price','login_id','login_type','login_user'));
        }
        elseif($ad->type == 'proevaluation'){
           
            return view($this->theme.'evaluation_ad', compact('ad', 'title', 'related_ads','categories','countries'));
        }
        else{
           // dd("class");
            if($login_user){
                 return view($this->theme.'classifieds_adedit', compact('ad', 'title', 'related_ads','categories','countries'));
               
            }else{
                 return view($this->theme.'classifieds_ad', compact('ad', 'title', 'related_ads','categories','countries'));
                  
            }
            
            
            // return view($this->theme.'classifieds_ad', compact('ad', 'title', 'related_ads','categories','countries','login_id','login_type','login_user'));
        }
        
        
    }
    
    public function switchGridListView(Request $request){
        session(['grid_list_view' => $request->grid_list_view]);
    }

    /**
     * @param Request $request
     * @return array
     */
    public function reportAds(Request $request){
        $ad = Ad::whereSlug($request->slug)->first();
        if ($ad) {
            $data = [
                'ad_id' => $ad->id,
                'reason' => $request->reason,
                'email' => $request->email,
                'message' => $request->message,
            ];
            Report_ad::create($data);
            return ['status'=>1, 'msg'=>trans('app.ad_reported_msg')];
        }
        return ['status'=>0, 'msg'=>trans('app.error_msg')];
    }
    
    
    public function reports(){
        $reports = Report_ad::orderBy('id', 'desc')->with('ad')->paginate(20);
        $title = trans('app.ad_reports');

        return view('admin.ad_reports', compact('title', 'reports'));
    }

    public function deleteReports(Request $request){
        Report_ad::find($request->id)->delete();
        return ['success'=>1, 'msg' => trans('app.report_deleted_success')];
    }
    
    public function reportsByAds($slug){
        $user = Auth::user();

        if ($user->is_admin()){
            $ad = Ad::whereSlug($slug)->first();
        }else{
            $ad = Ad::whereSlug($slug)->whereUserId($user->id)->first();
        }

        if (! $ad){
            return view('admin.error.error_404');
        }

        $reports = $ad->reports()->paginate(20);

        $title = trans('app.ad_reports');
        return view('admin.reports_by_ads', compact('title', 'ad', 'reports'));

    }
    
    public function pendingComment(Request $request){
   // dd($request);   
    $ads = Ad::with('city', 'country', 'state')->whereStatus('0')->orderBy('id', 'desc')->paginate(20);
        $url = explode('/', $request->dataid);
 $articleurl = array_pop($url);
 $full=implode('/', $url); 
      // dd($a);
      
      	$timestamp_new = date("Y-m-d H:i:s"); 

       
       // $id=$request->dataid;
        
        	$values = array('name' => 'admin',
            'message' => $request->name,
            'fullpageurl' => $full,
            'userid'=>$articleurl,
            'created_at'=>$timestamp_new,
           
           );
   
            	$creatnewentry= DB::table('contact_queries')->insert($values);
       
    //	$values['comments'] = $request->name;
    	
   // $updatecomment= DB::table('ads')->where('id',$id)->update($values);
   
   
     return view('admin.all_ads', compact('title', 'ads'));
    }
    //  public function bizzpayment(){
    //     $title = trans('Invoice');
    //     dd("bhbj");
    //     //return view('admin.bizz_payment');
    // }

	public function editslider($id)
    {
      //  dd($id);
        // $user_id = Auth::user()->id;
         $title = trans("Edit Slider ");
        // $media_id = $request->media_id;
        $media = Slider::where('id',$id);
       // $slider = DB::table('sliders')
                // ->where('id',$id)->get();
                  $slider = Slider::where('id',$id)->first();
     // dd($slider);
        //$ads_images = Media::whereUserId($user_id)->whereAdId(0)->whereRef('ad')->get();
       
       // dd($previous_states);
      //  $ads = Ad::active();
         //$ads = $ads->whereType('bizz')->where('id',$id)->get();
        // $ads = Ad::whereType('bizz')->where('id',$id)->first();
          
        return view('admin.edit_slider', compact('title', 'slider'));
	
    }
    
    public function updateslider(Request $request, $id){
        	$coverimageupload ='';
	if($_FILES["filescustomone"]['name'] !='') {
		$fileone = $request->file('filescustomone');
      		$coverimageupload = now().$fileone->getClientOriginalName();
  	        $destinationPath = 'uploads/sliders';
      		$fileone->move($destinationPath,now().$fileone->getClientOriginalName());
	}
	
	if($coverimageupload){
            $values[ 'media_name'] = $coverimageupload;
          }
            $updateentry= DB::table('sliders')->where('id',$id)->update($values);
          	if ($updateentry){
            return redirect()->back()->with('success', trans('Success : Slider Updated Succesfully.'));
        }
        return redirect()->back()->with('error', trans('app.error_msg'));

      // dd($request);
    }


}


