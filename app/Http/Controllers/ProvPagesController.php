<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;

class ProvPagesController extends Controller
{
    public function myServices()
    {
        return view('providers.subservices.myservices');
    }

    public function myProfile()
    {
        return view('providers.subservices.myprofile');
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
