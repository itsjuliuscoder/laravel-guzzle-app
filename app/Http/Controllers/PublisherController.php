<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Traits\GuzzleTrait;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CRUDController;
use App\Helpers\CookieHelper;


class PublisherController extends Controller   {

    use GuzzleTrait;
    /**
     * Initializes the Guzzle function from the Traits
     * 
     */


    public function __construct(){

        $this->middleware('custom.auth')->except(['register', 'create_user', 'reset', 'forget', 'create_comment']);
        $this->initGuzzle();

    }
    
    /**
     * Gets Posts through Guzzle Traits function [getPosts]
     * 
     */
    public function getPosts(Request $request)  {
        
        $requestResult = $this->sendGet('articles');

    }
    
    /**
     * Registers a user
     */
    public function register(){
        
        $title = 'Register - Join the learning experience';

        return view('pages.publisher.register')->with(['title'=> $title]);
    }

    /**
     * 
     * Creates a User and send it through our endpoints
     */
    public function create_user(Request $request)   {

        $formData = $request->validate([
            'fullname' => 'required', 
            'email' => 'required|email', 
            'password' => 'required|confirmed', 
        ]);
        
        //
        $formData['confirmPassword'] = $request->input('password_confirmation');
        
        $requestResult = $this->sendPost('auth/register', $formData);

        //var_dump($requestResult);

        if (is_null($requestResult)) {
            
            if(isset($this->getPostErr->err)){
                $error = $this->getPostErr->err;
            }
            elseif(isset($this->getPostErr->message)){
                $error = $this->getPostErr->message;
            }
            
            return redirect()->back()->with('failed', $error)->withInput($request->input());
        
        }
        
        $body = json_decode((string) $requestResult->getBody(), true);

        //var_dump($requestResult);
        if($requestResult->getStatusCode() != 200){
            return back()->with('failed', 'Something with wrong:unable to create user.')->withInput($request());
        }
        
        $confirm = $body['message'];
        
        return redirect('confirm-email')->with(['confirm' => $confirm]);
        
    }

    /**
     *  Resets a password 
     */
    public function forget(){

        $title = 'Reset Password AfriHow - Login to make learning fun';

        return view('pages/publisher/forget')->with(['title' => $title]);

    }

    /**
     *  Resets a password 
     */
    public function reset(Request $request) {

        $id = $request->id;  

        $title = 'Create Password AfriHow - Login to make learning fun';

        return view('pages/publisher/reset_password', compact('id'))->with(['title' => $title, 'id'=>$id]);

    }

    /**
     *  Publisher's Dashboard home page
     */
    public function home(){

        $title = 'Welcome ' . $_COOKIE['fullname'] . ' - Let Get Started';

        // Getting subjects from the CRUDController 
        $CRUD = new CRUDController();
        $subjectList = $CRUD->get_subjects();
        $subjectList = json_decode(json_encode($subjectList), true);
        $listSubj = $subjectList;
        
        // Get topics from the CRUDController
        $topicList = $CRUD->get_topics();
        $topicList = json_decode(json_encode($topicList), true);
        $listTopic = $topicList;   

        return view('pages.users.home', compact('listSubj', 'listTopic'))->with(['title'=> $title]);
    }

    /**
     *  Creates a Topic
    */
    public function topic(){
        

        $title = 'Create a Topic - AfriHow';

        
        return view('pages.users.create_topic')->with(['title'=> $title]);

    }

    /**
     *  Creates a Subject
     */
    public function subject(){

        $title = 'Create a Subject - This is the first process of learning';

        // Getting subjects from the CRUDController 
        $CRUD = new CRUDController();
        $categoryList = $CRUD->get_all_categories();
        $categoryList = json_decode(json_encode($categoryList), true);
        $listCategory = $categoryList;
        

        return view('pages.users.create_subj')->with(['title'=> $title, 'listCategory'=> $listCategory]);

    }

    /**
     *  Creates an Article
     */
    public function article(){

        $title = 'Create an Article - Here is where will know more about your topic';

        
        return view('pages.users.create_article')->with(['title'=> $title]);

    }

    /**
     * Displays the User Profile
     */
    public function profile(){

        $title = 'Let us you Better';

        return view('pages.users.profile')->with(['title'=> $title]);
    }

    /**
     * All User's Notification
     */
    public function notification(){

        $title = 'All your notifications are here';
        
        return view('pages.publisher.notification')->with(['title'=> $title]);
    }

    /**
     * Shows all Category 
     */
    public function category(){
        
        $title = 'Create an Category - Let us know where you subject belongs';
        
        return view('pages.publisher.category')->with(['title'=> $title]);
    }

    /**
     * Shows all Articles 
     */
    public function articles_all(){
        
        $title = 'List of Latest, Trending and Recent Articles';
        
        return view('pages.publisher.articles_all')->with(['title'=> $title]);
    }

    /**
     * View individual Article
     */
    // public function articles_view(){
        
    //     $title = 'Article Details'
        
    //     return view('pages.publisher.articles_view')->with(['title'=> $title]);
    // }

    /**
     * Shows all Topics 
     */
    public function topic_all(){
        
        $title = 'List of all Topics';

            
        return view('pages.publisher.list_topics')->with(['title'=> $title]);
    }

    /**
     * Updates an article
     */
    public function update_article(Request $request){
        
        $title = 'Update your Article';
        
        $style = 'Update';

        $requestResult = $this->sendGetWithHeader('users/'.$userid);

        
        return view('pages.publisher.update_article')->with(['title'=> $title, 'style' => $style]);
    }

     /**
     * Updates an Topic
     */
    public function update_topic(Request $request){
        
        $title = 'Update your Topic';

        $style = 'Update';

        $id = $request->id;

        $requestResult = $this->sendGetWithHeader('topics/'.$id);

        $body = json_decode((string) $requestResult->getBody(), true);

        $body = $body['data'];
        
        return view('pages.publisher.update_topic')->with(['title'=> $title, 'body' => $body]);
    }

     /**
     * Updates an Subject
     */
    public function update_subject(Request $request){
        
        $title = 'Update your Subject';

        $style = 'Update';

        $id = $request->id;

        $requestResult = $this->sendGetWithHeader('subjects/'.$id);

        $body = json_decode((string) $requestResult->getBody(), true);

        $body = $body['data'];
        
        return view('pages.publisher.update_subject')->with(['title'=> $title, 'style' => $style, 'body' =>$body ]);
    }

    /**
     * Updates an Profile
     */
    public function update_profile(){
        
        $title = 'Update Your Profile';
        
        return view('pages.publisher.update_profile')->with(['title'=> $title]);
    }

    /**
     * LoggedIn User Created Subject
     */
    public function my_subject(){
        
        $title = 'Subjects created by you';

        $CRUD = new CRUDController();
        $subjectList = $CRUD->get_subjects_id();
        $subjectList = json_decode(json_encode($subjectList), true);
        $subject_by_user = $subjectList;
        
        return view('pages.users.my-subject', compact('subject_by_user'))->with(['title'=> $title]);
    }
    
    /**
     * LoggedIn User Created Topics
     */
    public function my_topics(){
        
        $title = 'Topics created by you';

        // Get topics from the CRUDController
        $CRUD = new CRUDController();
        $topicList = $CRUD->get_topics_user_id();
        $topicList = json_decode(json_encode($topicList), true);
        $listTopic = $topicList;

        return view('pages.users.my-topics', compact('listTopic'))->with(['title'=> $title]);
    }

    /**
     * Logs out LoggedIn User
     */
    public function feedback(){

        $title = "We want to hear from you";

        // Get topics from the CRUDController
        $CRUD = new CRUDController();
        $reactionList = $CRUD->get_all_reactions();
        $reactionList = json_decode(json_encode($reactionList), true);
        $listReaction = $reactionList;

        return view('pages.publisher.feedback', compact('listReaction'))->with(['title'=> $title]);        
    }
}
