<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    //
    public function index()
    {
      return view ("staticpages.index");
    }

    public function privacy()
    {

    }

    public function faq()
    {

    }
}
