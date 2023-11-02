<?php

namespace App\Http\Controllers\FrontEndController;
use App\Models\NewsLetter;
use App\Models\Testimonial;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\FooterContactUs;
use App\Models\Projects;
use Exception;

class GalleryController extends Controller
{
    public function slideshow(){
        $sliders = GalleryImage::where('is_slider', '1')->get(['id', 'image_url', 'alt_tag','image_description']);
        $contactUs = FooterContactUs::where('is_active', '1')->get(['email','contact_number','secondary_contact_number','head_office','corporate_office']);
        return view('frontEnd.pages.index', compact('sliders','contactUs'));
    }
    public function aboutUs(){
        $testimonial = Testimonial::where('is_active','1')->orderBy('created_at','DESC')->get(['id','name','designation','image']);
        $contactUs = FooterContactUs::where('is_active','1')->get(['email','contact_number','secondary_contact_number','head_office','corporate_office']);
        return view('frontEnd.pages.about-us',compact('testimonial','contactUs'));
    }
    public function contactUs(){
        $testimonial = Testimonial::where('is_active','1')->orderBy('created_at','DESC')->get(['id','name','designation','image']);
        $contactUs = FooterContactUs::where('is_active','1')->get(['email','contact_number','secondary_contact_number','head_office','corporate_office']);
        return view('frontEnd.pages.contact-us',compact('testimonial','contactUs'));
    }
    public function services(){
        $testimonial = Testimonial::where('is_active','1')->orderBy('created_at','DESC')->get(['id','name','designation','image']);
        $contactUs = FooterContactUs::where('is_active','1')->get(['email','contact_number','secondary_contact_number','head_office','corporate_office']);
        return view('frontEnd.pages.services',compact('testimonial','contactUs'));
    }
    public function projects(){
        $testimonial = Testimonial::where('is_active','1')->orderBy('created_at','DESC')->get(['id','name','designation','image']);
        $contactUs = FooterContactUs::where('is_active','1')->get(['email','contact_number','secondary_contact_number','head_office','corporate_office']);
        // $projects = Projects::get(['id','company_logo','company_name','location','description','project_heading','year','is_running','created_by']);
        $executedprojects = Projects::where('is_running','Executed')->get(['id','company_logo','company_name','location','description','project_heading','year','is_running','created_by']);
        $runningprojects = Projects::where('is_running','Running')->get(['id','company_logo','company_name','location','description','project_heading','year','is_running','created_by']);
        return view('frontEnd.pages.projects',compact('testimonial','contactUs','executedprojects' , 'runningprojects'));
    }
}
