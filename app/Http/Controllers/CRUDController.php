<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
//use App\Http\Controllers\Controller;
use App\Traits\GuzzleTrait;
use App\Http\Controllers\UserController;
use App\Helpers\CookieHelper;

class CRUDController extends Controller
{
    //

    use GuzzleTrait;
    /**
     * Initializes the Guzzle function from the Traits
     * 
     */
    private $id;
    private $subj_id;

    public function __construct(){

        $this->middleware('custom.auth')->except(['get_subjects', 'get_topics', 'get_articles']);
        $this->initGuzzle();
        $this->init();
    }
    public function init(){

        if(isset($_COOKIE['id'])){
            $this->id = $_COOKIE['id'];
        }

    }
    
    /** 
     * Function to create a new subject
     *
     */
    public function create_subj(Request $request){

        $formData = $request->validate([
            'subject_title' => 'required', 
            'subject_description' => 'required', 
            'subject_img' => 'required',
            'subject_url' => 'required'
            //'subject_category' => 'required',
        ]);
        
        $formData['path'] = $request->file('subject_img')->path();
        $formData['image_mime'] = $request->file('subject_img')->getmimeType();
        $formData['image_name'] = $request->file('subject_img')->getClientOriginalName();
        
        $requestResult = $this->sendPostWithHeaderSubject('subjects', $formData);
            
        if (is_null($requestResult)) {
            return back()->with('failed', "Could not create SUBJECT");
        }
        
        $body = json_decode((string) $requestResult->getBody(), true);

        if($requestResult->getStatusCode() != 201){
            return back()->with('failed', 'Something went wrong:unable to create SUBJECT.');
        }
        $statusCode = $requestResult->getStatusCode();


        $body['message'] = "Your Subject was successfully created";

        $subject = $body['message'];


        return redirect('publisher/subject-created')->with(['subject' => $subject]);


    }

    /**
     * Function to get all created subjects
     */
    public function get_subjects(){

        $requestResult = $this->sendGet('subjects');

        // check if results is NULL and throws an error message
        if(is_null($requestResult)){
            return response()->json(['error'=>'Endpoint unable to get subjects', 'status'=> $this->getGetErr]);
        }
        
        // Casts & Assign a variable to a string called body 
        $subjects = json_decode((string) $requestResult->getBody()->getContents(), true);

       //var_dump($subjects);
        
        // Checks if the requestResult is not equal to 200
        if($requestResult->getStatusCode() != 200){
            return response()->json(['error'=>'Unable to get subjects', 'status' => $requestResult->getStatusCode()]);
        } else {
            return $subjects;
        }
    }
    
    /**
     * Function to get subjects by user id
     */
    public function get_subjects_id(){
        
        $userid = $_COOKIE['id'];

        $requestResult = $this->sendGetWithHeader('users/'.$userid);

        if(is_null($requestResult)){

            return response()->json(['error'=>'Endpoint unable to get subjects', 'status'=> $this->getGetErr]);

        }
        
        // Casts & Assign a variable to a string called body 
        $subjects = json_decode((string) $requestResult->getBody()->getContents(), true);

        $subjects_by_id = $subjects['data'];

        if($requestResult->getStatusCode() != 200){
            return response()->json(['error'=>'Unable to get subjects', 'status' => $requestResult->getStatusCode()]);
        } else {
            return $subjects_by_id;
        }    
    }

    /**
     * Function to update subject 
     */
    public function update_subject(Request $request) {

        $id = $request->id;
        $formData = $request->all();

        $requestResult = $this->sendPutWithHeaderSubject('subjects/'.$request->id, $formData);

        if (is_null($requestResult)) {
            //return response()->json(['error'=>'Endpoint unable to get users', 'status' => $this->getGetErr]);
            $error = "This is a big time error";
            return $error;
        }

        $body = json_decode((string) $requestResult->getBody(), true);

        $body['message'] = "Your Subject was successfully Updated, You can now use it to create a topic and write and article";
        
        $subject_update = $body['message'];
        return redirect('/publisher/my-subject')->with(['subject_update'=> $subject_update]);

    }
    
    /**
     * Function to create topic
     */
    public function create_topic(Request $request){

        $formData = $request->validate([
            'topic' => 'required', 
            'topic_description' => 'required', 
            //'topic_img' =>  'required',
            //'tags' => 'required', 
        ]);

        $requestResult = $this->sendPostWithHeaderTopic('topics', $formData);
        
        if (is_null($requestResult)) {
            //$msg = $this->getPostErr->message;
            return back()->with('failed', 'Something went wrong:unable to create TOPIC.');
        }
        
        $body = json_decode((string) $requestResult->getBody(), true);

        if($requestResult->getStatusCode() != 201){
            return back()->with('failed', 'Something went wrong:unable to create TOPIC.');
        }
        
        $body['message'] = "Topic was successfully created, you can now write an article";  

        $topic = $body['message'];

        return redirect('publisher/topic-created')->with(['topic' => $topic]);
    }
    /**
     * Function to get all topics
     */
    public function get_topics(){
        $requestResult = $this->sendGet('topics');

        // check if results is NULL and throws an error message
        if(is_null($requestResult)){
            return response()->json(['error'=>'Endpoint unable to get articles', 'status'=> $this->getGetErr]);
        }
        
        // Casts & Assign a variable to a string called body 
        $topics = json_decode((string) $requestResult->getBody()->getContents(), true);

        // Checks if the requestResult is not equal to 200
        if($requestResult->getStatusCode() != 200){
            return response()->json(['error'=>'Unable to get articles', 'status' => $requestResult->getStatusCode()]);
        } else {
            return $topics;
        }
    }
    /**
     * Function to get topic by user id 
     */
    public function get_topics_user_id(){

        $userid = $_COOKIE['id'];

        $requestResult = $this->sendGetWithHeader('users/'.$userid);

        if(is_null($requestResult)){

            return response()->json(['error'=>'Endpoint unable to get subjects', 'status'=> $this->getGetErr]);

        }
        
        // Casts & Assign a variable to a string called body 
        $topic = json_decode((string) $requestResult->getBody()->getContents(), true);

        
        $topics_by_id = $topic['data'];


        if($requestResult->getStatusCode() != 200){
            return response()->json(['error'=>'Unable to get subjects', 'status' => $requestResult->getStatusCode()]);
        } else {
            return $topics_by_id;
        }    
    }
    
    /**
     * Function to get Topic by it individual id
     */
    public function get_topics_id(Request $request){

        $userid = $_COOKIE['id'];

        $requestResult = $this->sendGetWithHeader('users/'.$userid);

        if(is_null($requestResult)){

            return response()->json(['error'=>'Endpoint unable to get subjects', 'status'=> $this->getGetErr]);

        }
        
        // Casts & Assign a variable to a string called body 
        $topic = json_decode((string) $requestResult->getBody()->getContents(), true);

        
        $topics_by_id = $topic['data']['subjects'];


        if($requestResult->getStatusCode() != 200){
            return response()->json(['error'=>'Unable to get subjects', 'status' => $requestResult->getStatusCode()]);
        } else {
            return $topics_by_id;
        }    
    }
    /**
     * Function to update topics
     */
    public function update_topic(Request $request){

        $id = $request->id;
        $formData = $request->all();

        $requestResult = $this->sendPutWithHeaderTopic('topics/'.$request->id, $formData);

        if (is_null($requestResult)) {
            //return response()->json(['error'=>'Endpoint unable to get users', 'status' => $this->getGetErr]);
            $error = "This is a big time error";
            return $error;
        }

        $body = json_decode((string) $requestResult->getBody(), true);

        $body['message'] = "Your Subject was successfully Updated, You can now use it to write and article";
        
        $topic_update = $body['message'];

        return redirect('/publisher/my-topics')->with(['topic_update'=> $topic_update]);

    }

    /**
     * Function to create article
     */
    public function create_article(Request $request){
        
       $formData = $request->all();
       

    }

    /**
     * Function to get all articles 
     */
    public function get_articles(){

        $requestResult = $this->sendGet('articles');

        // check if results is NULL and throws an error message
        if(is_null($requestResult)){
            return response()->json(['error'=>'Endpoint unable to get articles', 'status'=> $this->getGetErr]);
        }

        // Casts & Assign a variable to a string called body 
        $posts = json_decode((string) $requestResult->getBody(), true);

        // Checks if the requestResult is not equal to 200
        if($requestResult->getStatusCode() != 200){
            return response()->json(['error'=>'Unable to get articles', 'status' => $requestResult->getStatusCode()]);
        } else {
            return $posts;
        }

    }

    /** 
     * Function to get the articles by id 
     */
    public function get_articles_id(Request $request){

        $userid = $_COOKIE['id'];

        $requestResult = $this->sendGetWithHeader('users/'.$userid);

        if(is_null($requestResult)){

            return response()->json(['error'=>'Endpoint unable to get subjects', 'status'=> $this->getGetErr]);

        }
        
        // Casts & Assign a variable to a string called body 
        $articles = json_decode((string) $requestResult->getBody()->getContents(), true);
        
        $articles_by_id = $articles['data']['articles'];

        if($requestResult->getStatusCode() != 200){
            return response()->json(['error'=>'Unable to get subjects', 'status' => $requestResult->getStatusCode()]);
        } else {
            return $articles_by_id;
        }    

    }

    /**
     * Function to get the articles by user id
     */
    public function get_articles_user_id(){
        
        $userid = $_COOKIE['id'];

        $requestResult = $this->sendGetWithHeader('users/'.$userid);
        
        if(is_null($requestResult)){

            return response()->json(['error'=>'Endpoint unable to get subjects', 'status'=> $this->getGetErr]);

        }
        
        // Casts & Assign a variable to a string called body 
        $topic = json_decode((string) $requestResult->getBody()->getContents(), true);

        
        $topics_by_id = $topic['data']['subjects'];


        if($requestResult->getStatusCode() != 200){
            return response()->json(['error'=>'Unable to get subjects', 'status' => $requestResult->getStatusCode()]);
        } else {
            return $topics_by_id;
        }

    }

    public function send_feedback(Request $request){

        $formData = $request->validate([
            'reaction_status' => 'required', 
            'details' => 'required', 
        ]);
        
        $requestResult = $this->sendPost('subjects/categories');
        
        if(is_null($requestResult)){

            return response()->json(['error'=>'Endpoint unable to get subjects', 'status'=> $this->getGetErr]);

        }



    }

    /**
     * Function to get all categories 
     */
    public function get_all_categories(){

        $requestResult = $this->sendGet('subjects/categories');
        
        if(is_null($requestResult)){

            return response()->json(['error'=>'Endpoint unable to get subjects', 'status'=> $this->getGetErr]);

        }
        
        // Casts & Assign a variable to a string called body 
        $category = json_decode((string) $requestResult->getBody()->getContents(), true);

        
        $category_all = $category;

        // dd($category_all);

        if($requestResult->getStatusCode() != 200){
            return response()->json(['error'=>'Unable to get subjects', 'status' => $requestResult->getStatusCode()]);
        } else {
            return $category_all;
        }
        
    }

    public function get_all_reactions(){

        $requestResult = $this->sendGet('feedbacks/reactions');

        if(is_null($requestResult)){

            return response()->json(['error'=>'Endpoint unable to get subjects', 'status'=> $this->getGetErr]);

        }

        // Casts & Assign a variable to a string called body 
        $reactions = json_decode((string) $requestResult->getBody()->getContents(), true);

        //dd($reactions);

        if($requestResult->getStatusCode() != 200){
            return response()->json(['error'=>'Unable to get subjects', 'status' => $requestResult->getStatusCode()]);
        } else {
            return $reactions;
        }

    }



    /***************************************************************************
     *                     STATUS CODE FOR CRUD Controller 
     **************************************************************************/

    /**
     * Status Code for Subject
     */
    public function status_subject(){

        $title = 'Publisher\'s Subject - AfriHow';

        return view('pages.publisher.status.subject-status')->with(['title'=> $title]);
    }

    /**
     *  Status Code for Topic 
     */
    public function status_topic(){

        $title = 'Publisher\'s Subject - AfriHow';
        
        return view('pages.publisher.status.topic-status')->with(['title'=> $title]);
    }

    /**
     *  Status Code for Article
     */
    public function status_article(){

        $title = 'Publisher\'s Subject - AfriHow';
            
        return view('pages.publisher.status.topic-status')->with(['title'=> $title]);
    }

    /**
     * Get Subject Image
     */
    public function getSubjectImg(Request $request){
        
        $subjid = "5ccab57181f4000004a31ca7";

        $requestResult = $this->sendGetFile('articles/image/'.$subjid);
        
        $body = $requestResult->getBody()->getContents();

        // configure with favored image driver (gd by default)

    }


    /**
     * Get Topic Image
     */
    public function getTopicImg(Request $request){
        
        $subjid = $request->id;

        $requestResult = $this->sendGetFile('articles/image/'.$subjid);
        
        $body = $requestResult->getBody()->getContents();

        // configure with favored image driver (gd by default)

        $img = Image::make($body);

        $type = 'png';        

        $img->encode('png');

        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);

        return $base64;

    }


    /**
     * Get Article Image
     */
    public function getArticleImg(Request $request){
        
        $subjid = $request->id;

        $requestResult = $this->sendGetFile('articles/image/'.$subjid);
        
        $body = $requestResult->getBody()->getContents();

        // configure with favored image driver (gd by default)

        $img = Image::make($body);

        $type = 'png';        

        $img->encode('png');

        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);

        return $base64;

    }

}
