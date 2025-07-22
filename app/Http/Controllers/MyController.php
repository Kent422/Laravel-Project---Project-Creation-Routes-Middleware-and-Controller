<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
        return "This is the index method from MyController.";
    }

    public function restrictedPage()
    {
        return "Access granted to the restricted page.";
    }
}
