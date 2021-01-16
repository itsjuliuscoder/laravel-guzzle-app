<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Support\Facades\Cache;
use App\Traits\GuzzleTrait;
use App\Helpers\CookieHelper;


class AuthController extends Controller
{
      use GuzzleTrait;
      /**
      * Create a new controller instance.
      *
      * @return void
      */
     private $response;
     private $token;
     private $rememberPeriod;
     private $fullname;
     private $email;
     private $id;
     private $password;
     private $about;
     private $profile_img;
     
     public function __construct()
     {
         $this->middleware('custom.guest')->except('logout');
         $this->rememberPeriod = config('aiptconfig.duration.no_remember');
         $this->initGuzzle();
     }

     public function showForm() {

      $title = 'Login AfriHow - Login to make learning fun';

      return view('pages.publisher.login')->with(['title'=> $title]);

     }

     public function confirm() {

      $title = 'Confirm Your Email - AfriHow';

      return view('pages.publisher.confirm_email')->with(['title'=> $title]);

     }

     public function recovery_password() {

      $title = 'Recover Your Password - AfriHow';

      return view('pages.publisher.reset_password')->with(['title'=> $title]);

     }

     public function resend_email() {

      $title = 'Resend Email - AfriHow';

      return view('pages.publisher.resend_email')->with(['title'=> $title]);

     }

     /**
      * Confirms through through the email link
      * @param AuthenticationRequest $formData
      * @return \welcomePage\
      */
     public function confirmation(Request $request){

      $title = 'Email Confirmed - Login to Get Started';

      $formData['token'] = $request->token;

      $requestResult = $this->sendPost('auth/confirm', $formData);

      if (is_null($requestResult)) {

        return back()->with('Email Confirmation Failed');

      }
      
      $body = json_decode((string) $requestResult->getBody(), true);

      //var_dump($body);

      $confirmation = $body["message"];
      return view('pages.publisher.welcome_form', compact('confirmation'))->with(['title'=> $title]);

     }

     /**
      * Resend email through the API 
      * @param AuthenticationRequest $formData
      * @return \confirmationPage\
      */
     public function email_resend(Request $request){

      $formData = $request->validate([
        'email' => 'required|email', 
      ]);

      $formData['baseUrl'] = "localhost:8000/confirmation";

      //var_dump($formData);

      $requestResult = $this->sendPost('auth/resend', $formData);
      
      if (is_null($requestResult)) {
        $msg = $this->getPostErr->message;
        return back()->with('failed', $msg);
      }

      $body = json_decode((string) $requestResult->getBody(), true);

      if($requestResult->getStatusCode() != 200){
        return back()->with('failed', 'Something with wrong:unable to create user.');
      }

      $confirm = $body['message'];
        
        
      return redirect('confirm-email')->with(['confirm' => $confirm]);


     }

     /**
      * Resend email through the API 
      * @param AuthenticationRequest $formData
      * @return \confirmationPage\
      */
      public function password_recovery(Request $request){

          $formData = $request->validate([
            'email' => 'required|email', 
          ]);
    
          $formData['baseUrl'] = "localhost:8000/create_new_password";
    
          //var_dump($formData);
    
          $requestResult = $this->sendPost('auth/forgot_password', $formData);
          
          if (is_null($requestResult)) {
            $msg = $this->getPostErr->message;
            return back()->with('failed', $msg);
          }
          
          $body = json_decode((string) $requestResult->getBody(), true);
    
          if($requestResult->getStatusCode() != 200){
            return back()->with('failed', 'Something with wrong:unable to create user.');
          }
          
          //var_dump($body);

          $confirm = $body['message'];
            
          
          return redirect('password-link-sent')->with(['confirm' => $confirm]);
  
      }

      /***
      * Loads this view when a link is sent to an email
      */
      public function password_link() {

        $title = 'Password Link Sent - AfriHow';
  
        return view('pages.publisher.confirm-password')->with(['title'=> $title]);
        
      }
      
     /**
      *Create users' new password through the API 
      * @param AuthenticationRequest $formData
      * @return \LoginPage\
      */     
     public function create_new_password(Request $request){

      $formData = $request->validate([
        'password' => 'required|confirmed', 
      ]);
      
      $formData['confirmPassword'] = $request->input('password_confirmation');

      //var_dump($formData);

      $requestResult = $this->sendPut('auth/reset_password/'.$request->id, $formData);
      
      if (is_null($requestResult)) {
        //$msg = $this->getPutErr->message;
        return back()->with('failed', "something went wrong");
      }

      $body = json_decode((string) $requestResult->getBody(), true);

      if($requestResult->getStatusCode() != 200){
        return back()->with('failed', 'Something with wrong:unable to create new password.');
      }
      
      //var_dump($body);

      $confirm = $body['message'];
        
      return redirect('password-created')->with(['confirm' => $confirm]);
      
     }

     /***
      * Loads the view when a new password is created
      */
     public function password_created() {

      $title = 'New Password Successfully Created  - AfriHow';
      
      return view('pages.publisher.confirm-password-change')->with(['title'=> $title]);

     }


     public function logout_page(){
        
      $title = 'User Logout';
      
      return view('pages.publisher.logout')->with(['title'=> $title]);
     }

     /**
      * Authenticate against the  API
      * @param AuthenticationRequest $formData
      * @return \Illuminate\Http\RedirectResponse
      */
      public function authenticate(Request $request) {        

        $formData = $request->validate([
          'email' => 'required|email', 
          'password' => 'required',
          
        ]);
        
        
        $requestResult = $this->sendPost('auth/login', $formData);
        
        
        if(is_null($requestResult)){
          //remove authenticated, user and token from session
          CookieHelper::destroyAuthCookies();
          //return response()->json($this->getPostErr);
          return redirect()->back()->with('error','Email Address and Password Combination Failed, TRY AGAIN')->withInput($request->input());
        }

        $statusCode = $requestResult->getStatusCode();

        if($statusCode != 200){
          
          return redirect()->back()->with('error','Something went wrong, UNABLE TO LOGIN')->withInput($request());

        } else if ($statusCode = 200){

          $this->response = json_decode((string) $requestResult->getBody(), true);

          //var_dump($this->response);
          $this->token = $this->response['token'];
          $this->id = $this->response['data']['_id'];
          $this->fullname = $this->response['data']['fullname'];
          $this->email = $this->response['data']['email'];
          //$this->password = $this->response['data']['password'];
          $this->profile_img = $this->response['data']['profile_img'];
          $this->about = $this->response['data']['about'];
        // $user = $this->response['data'];

        
        if($request->get('remember') == true){
          $this->rememberPeriod = config('aiptconfig.duration.remember'); //7 days
        }
        
          //store authenticated, user and token in cookies to be checked by authentication middleware
          setcookie("authenticated",true,time()+$this->rememberPeriod);
          setcookie("fullname",$this->fullname,time()+$this->rememberPeriod);
          setcookie("email",$this->email,time()+$this->rememberPeriod);
          //setcookie("password",$this->password,time()+$this->rememberPeriod);
          setcookie("id",$this->id,time()+$this->rememberPeriod);
          setcookie("profile_img",$this->profile_img,time()+$this->rememberPeriod);
          setcookie("about",$this->about,time()+$this->rememberPeriod);
          setcookie("token",$this->token,time()+$this->rememberPeriod);
          
          var_dump($this->profile_img);
          return redirect('publisher/home');

        }
        
        else {
          return redirect()->back()->with('error','Something went wrong, TRY AGAIN');
        }
        
      }

      public function logout(Request $request)
      {
        //remove user, token and authenticated
        CookieHelper::destroyAuthCookies();
        //redirect to login
        return redirect('/logout_user');
      }

}
