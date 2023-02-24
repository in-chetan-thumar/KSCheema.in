<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }
    public function about()
    {
        return view('front.about');
    }
    public function ourCompany()
    {
        return view('front.our_company');
    }
    public function media()
    {
        return view('front.media');
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function mercedesBenzCentralStar()
    {
        return view('front.mercedes_benz_central_star');
    }
    public function ather()
    {
        return view('front.ather');
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
        dd($request->all());
    }
}
