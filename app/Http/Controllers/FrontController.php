<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //onboarding zone
    public function home()
    {
        return view("home");
    }

    public function choice()
    {
        return view("onboarding");
    }

    public function help()
    {
        return view("onboarding2");
    }

    // creation de compte
    public function createshop()
    {
        return view("createshop");
    }

    public function createid()
    {
        return view("createid");
    }

    public function createpaymentmode()
    {
        return view("createpayment");
    }


    public function account()
    {
        return view("account");
    }

    public function show()
    {
        return view("showarticle");
    }
    public function videodisplay()
    {
        return view("videodisplay");
    }
}