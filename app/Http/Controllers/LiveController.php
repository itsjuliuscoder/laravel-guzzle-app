<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\GuzzleTrait;
use App\Http\Controllers\PublisherController;
use App\Helpers\CookieHelper;

class LiveController extends Controller
{   
    use GuzzleTrait;
    /**
     * Initializes the Guzzle function from the Traits
     * 
     */
    // Initializes the construct 
    public function __construct(){

        $this->middleware('custom.auth');
        $this->initGuzzle();
    }

    /**
     * Returns the index page for the live mode 
     */
    public function index(){

        $title = 'Afrihow Live Mode- Let learn it';
        
        $navbar_title = 'Home';

        $description = 'We are building the future of learning in Africa.';

        return view('pages.live-views.index')->with(['title'=> $title, 'navbar'=>$navbar_title]);
    }

    /**
     * 
     * Returns latest articles for the live mode
     */

    public function latest(){

        $title = 'Latest on Afrihow Live Mode - What are people learning';
        
        $navbar_title = 'Latest';

        return view('pages.live-views.latest')->with(['title'=> $title, 'navbar'=>$navbar_title]);
    }

    /**
     * 
     *  Returns all Subjects for the live mode
     */
    public function subject(){

        $title = 'Subjects on Afrihow Live Mode - Let learn it';

        $navbar_title = 'Subjects';

        return view('pages.live-views.subjects')->with(['title'=> $title, 'navbar'=>$navbar_title]);
    }

    /**
     * 
     *  Returns all topics for the live mode
     */
    public function topics(){

        $title = 'Topics on Afrihow Live Mode - Let learn it';

        $navbar_title = 'Topics';

        return view('pages.live-views.topics')->with(['title'=> $title, 'navbar'=>$navbar_title]);
    }

    /**
     * 
     *  article read page for the live mode
     */
    public function article(){

        $title = 'Name of Article Live Mode';

        $navbar_title = 'Article';

        $subj_title = 'Name of Article';

        $subj_desc = 'The subject description will be stated clear here, telling us the category and the how the subject tends to empower African Learners';

        return view('pages.live-views.article')->with(['title'=> $title, 'navbar'=>$navbar_title, 'subj_title'=>$subj_title, 'subj_desc'=>$subj_desc]);
    }
}

