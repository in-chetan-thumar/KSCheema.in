<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Page;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Mail\ContactMail;


class FrontController extends Controller
{
    public function index()
    {
        $this->setSEOMeta();
        // app('common-helper')->getSEOMeta();
        return view('front.index');
    }
    public function about()
    {
        $this->setSEOMeta();
        // app('common-helper')->getSEOMeta();
        return view('front.about');
    }
    public function ourCompany()
    {
        return view('front.our_company');
    }
    public function media()
    {
        $this->setSEOMeta();
        return view('front.media');
    }
    public function contact()
    {
        $this->setSEOMeta();
        return view('front.contact');
    }
    public function mercedesBenzCentralStar()
    {
        return view('front.mercedes_benz_central_star');
    }
    public function ather()
    {
        $ather_detail = config('constants.ATHER');
        // dd($ather_detail);
        return view('front.ather', compact('ather_detail'));
    }
    public function carWale()
    {
        return view('front.car_wale');
    }
    public function altigreen()
    {
        return view('front.altigreen');
    }
    public function contactSubmit(Request $request)
    {
        $data = $params = [];
        DB::beginTransaction();
        // dd($request);

        try {
            $params['fname'] = $request->fname;
            $params['lname'] = $request->lname;
            $params['email'] = $request->email;
            $params['phone'] = $request->phone;
            $params['message'] = $request->message;

            $page = Contact::create($params);

            if (!empty($page)) {

                Mail::send(new ContactMail($params));

                $data['error'] = false;
                toastr()->success('contact submitted successfully!');
                DB::commit();
            } else {
                toastr()->error('Oops! Something went wrong!');
            }
            return view('front.thank_you');
        } catch (\Exception $e) {
            DB::rollBack();
            $data['error'] = true;
            $data['message'] = $e->getMessage();
            return response()->json($data);
        }
        // dd($request->all());
    }
    public function setSEOMeta()
    {
        $content = Page::select('id', 'title', 'meta_keywords', 'meta_description')->whereRouteName(Route::currentRouteName())->first();
        SEOTools::setTitle(!empty($content->title) ? $content->title : 'KSCheema', false);
        SEOTools::setDescription(!empty($content->meta_description) ? $content->meta_description : 'KSCheema test description');
        SEOMeta::addKeyword(!empty($content->meta_keywords) ? $content->meta_keywords : 'KSCheema test keywords');
    }
}
