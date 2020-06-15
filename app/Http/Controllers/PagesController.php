<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = "Welcome to Home Page";
        return view('pages.index') ->with('title', $title );
    } 

    public function about() {
        $title = "About Page"; 
        return view('pages.about' , compact('title'));
    } 

    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Hall Reservation' , 'Reservation' ]
        );
     
        return view('pages.services')->with($data);
    } 

    public function login() {
        $title = "Login"; 
        return view('pages.tologin' , compact('title'));
    } 
    public function personal() {
        $title = "Welcome to Your  Page";
        return view('customer.customerpage') ->with('title', $title );
    } 
}
