<?php

namespace App\Http\Controllers;
use App\ServProviders;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;

class ProvPagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function myServices()
    {
        return view('providers.subservices.myservices');
    }

    public function myProfile()
    {
        $userinfo = ServProviders::where('p_ID','=', Auth::user()->uid)->first();

        return view('providers.subservices.myprofile')->with('userinfo',$userinfo);
    }

    public function myNotifications()
    {
        return view('providers.subservices.mynotifications');
    }

    public function myMessages()
    {
        return view('providers.subservices.mymessages');
    }

    public function myBookedServ()
    {
        return view('providers.subservices.mybookedserv');
    }

    public function store(Request $request)
    {
        

        

}
}
