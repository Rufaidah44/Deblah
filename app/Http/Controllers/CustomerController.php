<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function personal() {
        $title = "Welcome to Your  Page";
        return view('customer.customerpage') ->with('title', $title );
    } 
}
