<?php

namespace App\Http\Controllers;
use Auth;
use App\Ad;
use Validator;

use App\Category;
use App\Contact_query;
use App\Country;
use App\Post;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
//use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    /**
     * @return mixed
     *
     * Installation view
     */
    public function installation(){
        if ( file_exists(base_path('.env')) ) {
            return redirect(route('home'));
        }

        return view('theme/installation');
    }

    /**
     * @param Request $request
     * @return mixed
     *
     * Installation post
     */
    public function installationPost(Request $request){

exit;
        if ( file_exists(base_path('.env')) ) {
            return redirect(route('home'));
        }

        $rules = [
            'hostname' => 'required',
            'dbport' => 'required',
            'username' => 'required',
            'password' => 'required',
            'database_name' => 'required',
            'envato_purchase_code' => 'required',
        ];

        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()){
            $eror_msg = '';
            foreach ($validation->errors()->toArray() as $key => $value){
                $eror_msg .= "<p>{$value[0]}</p>";
            }
            return ['success' => 0, 'msg' => $eror_msg];
        }

        $verify_envato_license = file_get_contents('https://themeqx.com/?envato_purchase_code='.$request->envato_purchase_code);
        $verify_envato_license = \GuzzleHttp\json_decode($verify_envato_license);
        if($verify_envato_license->success == 0){
            return ['success' => 0, 'msg' => trans('app.envato_purchase_code_invalid')];
        }

        try{
            $mysqli_link = mysqli_connect($request->hostname, $request->username, $request->password, $request->database_name);

            // Name of the file
            $database = base_path('database-backup/classified_laravel_5_3.sql');
            // Temporary variable, used to store current query
            $templine = '';
            // Read in entire file
            $lines = file($database);
            // Loop through each line
            foreach ($lines as $line) {
                // Skip it if it's a comment
                if (substr($line, 0, 2) == '--' || $line == '')
                    continue;
                // Add this line to the current segment
                $templine .= $line;
                // If it has a semicolon at the end, it's the end of the query
                if (substr(trim($line), -1, 1) == ';') {
                    // Perform the query
                    mysqli_query($mysqli_link, $templine);
                    // Reset temp variable to empty
                    $templine = '';
                }
            }

        } catch (\Exception $e) {
            $db_error = '';
            $db_error .= "<p>Error: Unable to connect to Database. </p>";
            $db_error .= "<p>Debugging errno: " . mysqli_connect_errno() . "</p>";
            $db_error .= "<p>Debugging error: " . mysqli_connect_error() . "</p>";
            return ['success' => 0, 'msg' => $db_error];
        }
        mysqli_close($mysqli_link);


        $home_url = url('/');

        $conf = "";
        $conf .= "APP_ENV=local\n";
        $conf .= "APP_DEBUG=false\n";
        $conf .= "APP_KEY=base64:fpVldiLoOG+L562vfMat8+vPmxUzvVJOjXRd4wgMA/A=\n";
        $conf .= "APP_URL={$home_url}\n\n";

        $conf .= "DB_CONNECTION=mysql\n";
        $conf .= "DB_HOST={$request->hostname}\n";
        $conf .= "DB_PORT={$request->dbport} \n";
        $conf .= "DB_DATABASE={$request->database_name}\n";
        $conf .= "DB_USERNAME={$request->username}\n";
        $conf .= "DB_PASSWORD={$request->password}\n\n";
        //$conf .= "ENVATO_PURCHASE_CODE={$request->envato_purchase_code}\n\n";

        $conf .= "CACHE_DRIVER=file\n";
        $conf .= "SESSION_DRIVER=database\n";
        $conf .= "QUEUE_DRIVER=sync \n\n";

        $conf .= "REDIS_HOST=127.0.0.1\n";
        $conf .= "REDIS_PASSWORD=null\n";
        $conf .= "REDIS_PORT=6379\n\n";

        $conf .= "MAIL_DRIVER=smtp\n";
        $conf .= "MAIL_HOST=mailtrap.io\n";
        $conf .= "MAIL_PORT=2525\n";
        $conf .= "MAIL_USERNAME=null\n";
        $conf .= "MAIL_PASSWORD=null\n";
        $conf .= "MAIL_ENCRYPTION=null\n";

        $unable_to_open = "Unable to open file! <br /> please create a <b>.env</b> file manually in your document root with below content (this is configuration) <br /><br />";

        $unable_to_open .= "<pre>{$conf}</pre>";

        $open_env_file = fopen(base_path(".env"), "w") or die($unable_to_open);
        fwrite($open_env_file, $conf);
        fclose($open_env_file);
        chmod(base_path(".env"), 0777);

        //Return to home
        //return redirect(route('home'));
        return ['success' => 1, 'msg' => '.env file has been created'];
    }

    public function index(){
    //    dd("hi");

        /**
         * For installation
         */
        /*if ( ! file_exists(base_path('.env')) ) {
            return redirect(route('installation'));
        }*/
        
        
        $categories = Category::where('category_id', 0)->get();
      //  $countries = Country::all();
        
          $limit_premium_ads = get_option('number_of_premium_ads_in_home');
        // $limit_premium_ads = "50";
        $limit_regular_ads = get_option('number_of_free_ads_in_home');
        $limit_urgent_ads = get_option('number_of_urgent_ads_in_home');
         $partners = DB::table('media')->where('ref', 'partners')->orderBy('created_at', 'DESC')->get();
         $clients = DB::table('media')->where('ref', 'clients')->orderBy('created_at', 'DESC')->get();
//        print_r($limit_premium_ads);exit;

        $sliders = Slider::all();
      //  dd($sliders);
        $countries = Country::all();
        $top_categories = Category::whereCategoryId(0)->with('sub_categories')->orderBy('category_name', 'asc')->get();
        $premium_ads = Ad::activePremium()->with('category','sub_category', 'city', 'media_img', 'feature_img')->limit($limit_premium_ads)->orderBy('id', 'desc')->get();
        // $bizz_ads = Ad::activeBizz()->with('category','sub_category', 'city', 'media_img', 'feature_img')->limit($limit_premium_ads)->orderBy('id', 'desc')->get();
        $bizz_ads = Ad::activeBizz()->with('category','sub_category', 'city', 'media_img', 'feature_img')->orderBy('editupdated_at', 'desc')->get();
        //   $bizz_ads = Ad::activeBizz()->with('category','sub_category', 'city', 'media_img', 'feature_img')->orderBy('id', 'desc')->get();
        
        $pro_ads = Ad::activePro()->with('category','sub_category', 'city', 'media_img', 'feature_img')->limit($limit_premium_ads)->orderBy('editupdated_at', 'desc')->get();
        $classifieds_ads = Ad::activeClassifieds()->with('category','sub_category', 'city', 'media_img', 'feature_img')->limit(5)->orderBy('editupdated_at', 'desc')->get();
        $opportunities_ads = Ad::activeOpportunities()->with('category','sub_category', 'city', 'media_img', 'feature_img')->limit($limit_premium_ads)->orderBy('editupdated_at', 'desc')->get();
        
        // $whitepapers_ads = DB::table('ads')->whereType('whitepapers')->orderBy('editupdated_at', 'desc')->get();
        // dd($whitepapers_ads);
         
         $whitepapers_ads = Ad::activeWhitepapers()->with('category','sub_category', 'city', 'media_img', 'feature_img')->limit($limit_premium_ads)->orderBy('editupdated_at', 'desc')->get();
        
        $regular_ads = Ad::activeRegular()->with('category','sub_category', 'city', 'media_img', 'feature_img')->limit($limit_regular_ads)->orderBy('id', 'desc')->get();
        $urgent_ads = Ad::activeUrgent()->with('category','sub_category', 'city', 'media_img', 'feature_img')->limit($limit_urgent_ads)->orderBy('id', 'desc')->get();
      //   $blog_ads = Ad::activeBlogs()->with('category','sub_category', 'city', 'media_img', 'feature_img')->limit($limit_premium_ads)->orderBy('id', 'desc')->get();
        $posts = Post::whereType('post')->with('author', 'feature_img')->whereStatus('1')->orderBy('updated_at', 'desc')->limit(get_option('blog_post_amount_in_homepage'))->get();

        return view($this->theme.'index', compact('top_categories','categories', 'premium_ads','bizz_ads','pro_ads','classifieds_ads','opportunities_ads','whitepapers_ads','regular_ads','urgent_ads', 'countries', 'sliders', 'posts','partners','clients'));
    }

    public function contactUs(){
        $title = trans('app.contact_us');
        $query = DB::table('users')->where('affiliate_code','<>', '')->get();
       // dd($query);
        
        return view('theme.contact_us', compact('title','query'));
    }
     public function associate(){
        $title = trans('ASSOCIATE & EARN');
        return view('theme.associate', compact('title'));
    }

    public function contactUsPost(Request $request){
         $email='info@magas.services';
       
        //$data="notification";
       $data=$request->sel_email;
       // dd($request);
        $rules = [
            // 'name'  => 'required',
            // 'email'  => 'required|email',
             'message'  => 'required',
             'contact' =>'',
             'userid'=>'',
             'g-recaptcha-response' => 'required|captcha',
        ];
        
        if($request->name){
            $rules = [
            'name'  => 'required',
            'email'  => 'required|email',
            'message'  => 'required',
            'aff_code'=>'',
            'contact' =>'',
            'userid'=>'',
        ];
            
        }
       // dd($request);
        
        $this->validate($request, $rules);
        if($request->name){
            Contact_query::create(array_only($request->input(), ['name', 'email', 'message', 'fullpageurl', 'rating','contact','userid','aff_code']));
           
        
        }else{
            Contact_query::create(array_only($request->input(), ['','','message','fullpageurl', 'rating','','','','aff_code']));
            //  Mail::send('emails.feedback', ['data' => $data], function ($m) use ($data) {
            //             // $m->from(get_option('email_address'), get_option('site_name'));
            //              $m->from($email, get_option('site_name'));
            //             $m->to($user)->subject('Feedback from magas');
            //           // $m->replyTo($data['email'], $data['name']);
            //         });
            
        }
        
       
             Mail::send('emails.feedback', ['data' => $data], function ($m) use ($data) {
                 
                          $m->from(get_option('email_address'), get_option('site_name'));
                         //$m->from($email, get_option('site_name'));
                        $m->to($data)->subject('Notification from MAGAS');
                      // $m->replyTo($data['email'], $data['name']);
                    });
            
        return redirect()->back()->with('success', trans('app.your_message_has_been_sent'));
    }
       public function deletecontact($id){
         // dd($id);
        //  $user_id = Auth::user()->id;
        
        // $ad = Ad::find($id);

        // $contacts = Contact_query::all();
         // $delete_contact = $contacts->where('id',$id)->delete();
       $delete_contact= DB::table('contact_queries')->where('id', $id)->delete();
        if($delete_contact){
             return redirect(route('contact-messages'))->with('success', trans('Success : Deleted Successfully.'));
             
           // echo "succe";
        }
          return ['success' => 0, 'msg' => trans('app.error_msg')];
        // dd($delete_contact);
        //  if($ads){
             
        //      if($ad->type == 'bizz'){
        //          return redirect(route('bizz'))->with('success', trans('Success : Deleted Successfully.'));
        //         }
        //         elseif($ad->type == 'whitepapers'){
        //             return redirect(route('whitepaper_list'))->with('success', trans('Success : Deleted Successfully.'));
        //         }
        //         elseif($ad->type == 'pro'){
        //             return redirect(route('pro'))->with('success', trans('Success : Deleted Successfully.'));
        //         }elseif($ad->type == 'opportunities'){
        //             return redirect(route('projects'))->with('success', trans('Success : Deleted Successfully.'));
        //         }else{
        //              return redirect(route('classifieds'))->with('success', trans('Success : Deleted Successfully.'));
        //         }
        //  }
        // return ['success' => 0, 'msg' => trans('app.error_msg')];
         
        // $slug = $request->slug;
        // $page = Post::whereSlug($slug)->first();
        // if ($page){
        //     $page->delete();
        //     return ['success' => 1, 'msg' => trans('app.operation_success')];
        // }
        // return ['success' => 0, 'msg' => trans('app.error_msg')];
    }

    public function deleteusermessage($id){
       // dd($id);
        
      $delete_contact= DB::table('contact_queries')->where('id', $id)->delete();
        if($delete_contact){
            //  return redirect(route('user_messages'))->with('success', trans('Success : Deleted Successfully.'));
             return redirect(route('user_messages'))->with('success', trans('Success : Deleted Successfully.'));
            
          // echo "succe";
        }
          return ['success' => 0, 'msg' => trans('app.error_msg')];
        
    }

    public function contactMessages(){
        $title = trans('app.contact_messages');
        $contact_messages = Contact_query::orderBy('id', 'desc')->where('name','<>','admin')->paginate(20);
        return view('admin.contact_messages', compact('title', 'contact_messages'));
    }
    
    //   public function download_pdf(){
        
    //     $query = DB::table('pdf_record')->get();
    //     // return view('admin.utilized',compact('query'));
    //       return view('admin.pdf_report',compact('query'));
    //     // return redirect(route('pdf_report',compact('query')));
    // }
    
     public function usercontactMessages(){
        $title = trans('app.contact_messages');
         $user = Auth::user();
         $user_id=$user->id;
       //  dd($user_id);
        $user_messages = Contact_query::orderBy('id', 'desc')->where('userid',$user_id)->paginate(20);
      //  dd($user_messages);
        return view('admin.user_contactmessages', compact('title', 'user_messages'));
    }


     public function aboutPage(){
        $title = trans('About Us');
        return view('theme.about-us', compact('title'));
    }

    // public function endorsementsPage(){
    //     $title = trans('Associate with us and Earn online');
    //     return view('theme.endorsements', compact('title'));
    // }

 public function endorsementsPage(){
        $title = trans('Associate with us and Earn online');
         $partners = DB::table('media')->where('ref', 'partners')->orderBy('created_at', 'DESC')->get();
         $clients = DB::table('media')->where('ref', 'clients')->orderBy('created_at', 'DESC')->get();
        // dd($query);
        return view('theme.endorsements', compact('title','partners','clients'));
    }
    /**
     * Switch Language
     */
    public function switchLang($lang){
        session(['lang'=>$lang]);
        //return redirect(route('home'));
        return back();
    }

    /**
     * Reset Database
     */
    public function resetDatabase(){
        $database_location = base_path("database-backup/classified.sql");
        // Temporary variable, used to store current query
        $templine = '';
        // Read in entire file
        $lines = file($database_location);
        // Loop through each line
        foreach ($lines as $line) {
            // Skip it if it's a comment
            if (substr($line, 0, 2) == '--' || $line == '')
                continue;
            // Add this line to the current segment
            $templine .= $line;
            // If it has a semicolon at the end, it's the end of the query
            if (substr(trim($line), -1, 1) == ';')
            {
                // Perform the query
                DB::statement($templine);
                // Reset temp variable to empty
                $templine = '';
            }
        }
        $now_time = date("Y-m-d H:m:s");
        DB::table('ads')->update(['created_at' => $now_time, 'updated_at' => $now_time]);
    }



    public function clearCache(){
        Artisan::call('debugbar:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
      
        if (function_exists('exec')){
            exec('rm ' . storage_path('logs/*'));
        }
        $this->rrmdir(storage_path('logs/'));

        return redirect(route('home'));
    }
    public function rrmdir($dir) {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (is_dir($dir."/".$object))
                        $this->rrmdir($dir."/".$object);
                    else
                        unlink($dir."/".$object);
                }
            }
            //rmdir($dir);
        }
    }




}
