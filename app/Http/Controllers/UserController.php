<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Traits\GuzzleTrait;
use Image;

class UserController extends Controller
{
    use GuzzleTrait;
    /**
     * Initializes the Guzzle function from the Traits
     * 
     */
    private $id;
    public function __construct(){

        //$this->middleware();
        $this->initGuzzle();

    }

    

    /**
     * Function to Get Details of Created Articles 
     * 
     */
    public function getUsersDetails(){
        

        $requestResult = $this->sendGetWithHeader('users/{id}');

        var_dump($requestResult);

        if (is_null($requestResult)) {
            return response()->json(['error'=>'Endpoint unable to get users', 'status' => $this->getGetErr]);
            $error = "This is a big time error";
            return $error;
        }
        
        $body = json_decode((string) $requestResult->getBody(), true);

        var_dump($body);
        if($requestResult->getStatusCode() != 200){
            return response()->json(['error'=>'Unable to get users', 'status' => $requestResult->getStatusCode()]);
        }
        
    }

    /**
     * Function to Update User Details
     * 
     */
    public function updateUserDetails(Request $request){

        $id = $this->id;

        $formData = $request->all();
        $formData['profile_img'] = $request->file('profile_img');

        // $jpg = Image::make($request->file('profile_img'));

        // echo $jpg;

        $filename = $request->file('profile_img');
        
        $formData['path'] = $filename->path();
        $formData['image_mime'] = $filename->getmimeType();
        $formData['image_name'] = $filename->getClientOriginalName();
        
        
        $requestResult = $this->sendPutWithHeaderUser('users/profile/'.$request->id, $formData);
        
        $body = json_decode((string) $requestResult->getBody(), true);
        
        $body['message'] = "User Profile Update Successfully";  

        $user_update = $body['message'];
        
        return redirect('publisher/profile')->with(['user_update' => $user_update]);

    }


    /**
     * Function to get User's profile image 
     */
    public function getUserProfileImg(){
        
        $userid = $_COOKIE['id'];

        $requestResult = $this->sendGetFile('users/image/'.$userid);
        
        $body = $requestResult->getBody()->getContents();

        // configure with favored image driver (gd by default)

        $img = Image::make($body);

        $type = 'png';        

        $img->encode('png');

        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);

        return $base64;

    }

    public function home(){

        $title = "Users Controller";

        return view('pages.users.home')->with(['title'=> $title]);

    }

    public function profile(){

        $title = "Users Controller";

        return view('pages.users.profile')->with(['title'=> $title]);

    }
    
    public function subject() {

        $title = "Users Controller";

        return view('pages.users.my-subject')->with(['title'=> $title]);

    }

    public function topics() {

        $title = "Users Controller";

        return view('pages.users.my-topics')->with(['title'=> $title]);

    }

    public function article() {

        $title = "Users Controller";

        return view('pages.users.my-topic')->with(['title'=> $title]);

    }

    public function create_subject(){

        $title = 'Create a Subject - This is the first process of learning';

        // Getting subjects from the CRUDController 
        $CRUD = new CRUDController();
        $categoryList = $CRUD->get_all_categories();
        $categoryList = json_decode(json_encode($categoryList), true);
        $listCategory = $categoryList;
        

        return view('pages.users.create_subj')->with(['title'=> $title, 'listCategory'=> $listCategory]);

    }

    public function create_topic(){

        $title = 'Create a Topic - This is the second process of learning';

        // Getting subjects from the CRUDController 
        $CRUD = new CRUDController();
        $categoryList = $CRUD->get_all_categories();
        $categoryList = json_decode(json_encode($categoryList), true);
        $listCategory = $categoryList;
        

        return view('pages.users.create_topic')->with(['title'=> $title, 'listCategory'=> $listCategory]);

    }

    public function create_article(){

        $title = 'Create an Article - You have finally concluded the learning process';

        // Getting subjects from the CRUDController 
        $CRUD = new CRUDController();
        $categoryList = $CRUD->get_all_categories();
        $categoryList = json_decode(json_encode($categoryList), true);
        $listCategory = $categoryList;
        

        return view('pages.users.create_article')->with(['title'=> $title, 'listCategory'=> $listCategory]);

    }
    
    public function get_started(){

        $title = 'Get Started - AfriHow User Guide';

        return view('pages.users.create_subj')->with(['title'=> $title, 'listCategory'=> $listCategory]);

    }




}
 