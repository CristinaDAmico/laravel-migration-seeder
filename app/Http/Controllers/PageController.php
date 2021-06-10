<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;

class PageController extends Controller
{
    // HOMEPAGE
    public function index() {
        $packages = Package::all();
        //dump($packages);

        return view('home', compact('packages'));
    }
}
