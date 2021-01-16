<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Traits\GuzzleTrait;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CRUDController;

class PublicController extends Controller
{   
    use GuzzleTrait;
    /**
     * Initializes the Guzzle function from the Traits
     * 
     */
    public function __construct(){
        $this->initGuzzle();
    }

    /**
     * 
     * Landing Page for afrihow.com
     */
    public function index() {

        $title = 'AfriHow - Let learn it';
        
        $navbar_title = 'Home';

        $description = 'We are building the future of learning in Africa. ';

        // create an instance of the CRUDController class
        //$crud = new CRUDController();

        // fetchs all create articles
        //$articles = $crud->get_articles();

        // fetchs all created topics 
        //$topics = $crud->get_topics();

        // fetches all created subjects
        //$subjects = $crud->get_subjects();

        //var_dump($subjects);

        return view('pages.public.index')->with(['title'=> $title, 'navbar'=>$navbar_title]);

    }


    /**
     * 
     * Returns latest articles
     */

    public function latest(){

        $title = 'Latest on AfriHow - What are people learning';
        
        $navbar_title = 'Latest';

        return view('pages.public.latest')->with(['title'=> $title, 'navbar'=>$navbar_title]);
    }

    /**
     * 
     *  Returns all Subjects 
     */
    public function subject(){

        $title = 'Subjects on AfriHow - Let learn it';

        $navbar_title = 'Subjects';

        return view('pages.public.subject')->with(['title'=> $title, 'navbar'=>$navbar_title]);
    }

    /**
     * 
     *  Returns all topics
     */
    public function topics(){

        $title = 'Topics on AfriHow - Let learn it';

        $navbar_title = 'Topics';


        return view('pages.public.topic')->with(['title'=> $title, 'navbar'=>$navbar_title]);
    }

    /**
     * 
     *  article read page
     */
    public function article(){

        $title = 'Name of Article';

        $navbar_title = 'Article';

        $subj_name = "Name of Subject";

        $subj_title = 'Name of Article';

        $subj_desc = 'The subject description will be stated clear here, telling us the category and the how the subject tends to empower African Learners';

        return view('pages.public.article')->with(['title'=> $title, 'navbar'=>$navbar_title, 'subj_title'=>$subj_title, 'subj_desc'=>$subj_desc, 'subj_name'=>$subj_name ]);
    }

    public function article_afrihow(){

        $title = 'Getting Started With AfriHow';

        $navbar_title = 'Article';

        $subj_name = "AfriHow Guide";

        $subj_title = 'Getting Started with AfriHow';

        $subj_desc = 'AfriHow is a digital learning platform for Africa\'s growing population. We want to make learning easier and accessible to Africa\'s growing population';

        return view('pages.public.article_afrihow')->with(['title'=> $title, 'navbar'=>$navbar_title, 'subj_title'=>$subj_title, 'subj_name'=>$subj_name, 'subj_desc'=>$subj_desc]);
    }

    /**
     * 
     *  Loads the about page
     */
    public function about(){

        $title = 'About AfriHow - Demoncratizing Learning in Africa';

        $navbar_title = 'About';

        return view('pages.public.about')->with(['title'=> $title, 'navbar'=>$navbar_title]);
    }

    /**
     * 
     *  Loads the contact
     */
    public function contact(){

        $title = 'Contact AfriHow - We want to hear from you';

        $navbar_title = 'Contact';

        return view('pages.public.contact')->with(['title'=> $title, 'navbar'=>$navbar_title]);
    }

    /**
     * 
     *  Loads the Frequently asked question page
     */
    public function faqs(){

        $title = 'Frequently Asked Question AfriHow - We want to hear from you';

        $navbar_title = 'Frequently Asked Question';

        return view('pages.public.faqs')->with(['title'=> $title, 'navbar'=>$navbar_title]);
    }

    /**
     * 
     *  Loads the Terms & Privacy Policies
     */
    public function terms(){

        $title = 'Terms & Privacy Policies - AfriHow';

        $navbar_title = 'Terms & Privacy Policies';

        return view('pages.public.terms')->with(['title'=> $title, 'navbar'=>$navbar_title]);
    }

    /**
     * 
     *  Loads the Students Why
     */
    public function students(){

        $title = 'Students - Why AfriHow';

        $navbar_title = 'Terms & Privacy Policies';

        return view('pages.public.students')->with(['title'=> $title, 'navbar'=>$navbar_title]);
    }
    
    /**
     * 
     *  Loads the Professionals 
     */
    public function professionals(){

        $title = 'Professionals - Why Use AfriHow';

        $navbar_title = 'Terms & Privacy Policies';

        return view('pages.public.professionals')->with(['title'=> $title, 'navbar'=>$navbar_title]);
    }

    /**
     * 
     *  Loads the Non-governmental page
     */
    public function ngo(){

        $title = 'Non-governmental Organization - Why Use AfriHow';

        $navbar_title = 'Terms & Privacy Policies';

        return view('pages.public.professionals')->with(['title'=> $title, 'navbar'=>$navbar_title]);
    }

    /**
     * 
     *  Loads the government page
     */
    public function government(){

        $title = 'Government Agenicies - Why Use AfriHow';

        $navbar_title = 'Terms & Privacy Policies';

        return view('pages.public.government')->with(['title'=> $title, 'navbar'=>$navbar_title]);
    }

    /**
     * 
     *  Loads the Corporate page
     */
    public function corporate(){

        $title = 'Corporate Bodies - Why Use AfriHow';

        $navbar_title = 'Terms & Privacy Policies';

        return view('pages.public.corporate')->with(['title'=> $title, 'navbar'=>$navbar_title]);
    }

    /**
     * 
     *  Loads the Business page
     */
    public function business(){

        $title = 'SMEs and Multinational Companies - Why Use AfriHow';

        $navbar_title = 'SMEs and Multinational Companies';
        
        return view('pages.public.business')->with(['title'=> $title, 'navbar'=>$navbar_title]);
    }

    /**
     * 
     *  Loads the International page
     */
    public function international(){

        $title = 'International Organization - Why Use AfriHow';

        $navbar_title = 'International Organization';

        return view('pages.public.international')->with(['title'=> $title, 'navbar'=>$navbar_title]);
    }
    
    /**
     * 
     *  Loads the API Overview page
     */
    public function apioverview(){

        $title = 'AfriHow API Overview - Building a thriving developers\' community' ;

        $navbar_title = 'API Overview';

        return view('pages.public.api')->with(['title'=> $title, 'navbar'=>$navbar_title]);
    }

    /**
     * 
     *  Loads the API Documentation page
     */
    public function apidocs(){

        $title = 'AfriHow API Documentation - Building a thriving developers\' community' ;

        $navbar_title = 'API Documentation';

        return view('pages.public.apidocs')->with(['title'=> $title, 'navbar'=>$navbar_title]);
    }

    /**
     * Check the response status code.
     *
     * @param ResponseInterface $response
     * @param int $expectedStatusCode
     *
     * @throws \RuntimeException on unexpected status code
     */
    private function checkResponseStatusCode(ResponseInterface $response, $expectedStatusCode)
    {
        $statusCode = $response->getStatusCode();

        if ($statusCode !== $expectedStatusCode) {
            throw new \RuntimeException('Wunderlist API returned status code ' . $statusCode . ' expected ' . $expectedStatusCode);
        }
    }

}
