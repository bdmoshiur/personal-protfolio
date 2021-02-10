<?php

namespace App\Http\Controllers\Frontend;

use App\Model\About;
use App\Model\Skill;
use App\Http\Controllers\Controller;
use App\Model\Backend;
use App\Model\Education;
use App\Model\Experience;
use App\Model\Frontend;
use App\Model\Other;
use App\Model\Service;
use App\Model\ServiceElement;

class FrontendController extends Controller
{


    public function login(){
        return view('auth.login');
    }




    public function index(){
        $data['abouts'] = About::first();
        $data['skills'] = Skill::first();
        $data['frontends'] = Frontend::all();
        $data['backends'] = Backend::all();
        $data['others'] = Other::all();
        $data['services'] = Service::first();
        $data['servicesElements'] = ServiceElement::all();
        $data['educations'] = Education::all();
        $data['experiences'] = Experience::all();

        return view('frontend.index',$data);
    }

    public function about(){
        return view('frontend.about');
    }

    public function service(){
        return view('frontend.services');
    }

    public function contact(){
        return view('frontend.contact');
    }
    public function blog(){
        return view('frontend.blog.blog');
    }

    public function blogDetails(){
        return view('frontend.blog.blog_details');
    }

    public function protfolio(){
        return view('frontend.pages.protfolio');
    }

    public function elements(){
        return view('frontend.pages.elements');
    }


}
